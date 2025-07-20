<?php
// Membuat ID Sirkulasi otomatis
$carikode = mysqli_query($koneksi, "SELECT id_sk FROM tb_sirkulasi ORDER BY id_sk DESC LIMIT 1");
$datakode = mysqli_fetch_array($carikode);

if ($datakode) {
    $kode = $datakode['id_sk'];
    $urut = substr($kode, 1, 3);
    $tambah = (int)$urut + 1;
} else {
    $tambah = 1;
}

$format = "S" . str_pad($tambah, 3, "0", STR_PAD_LEFT);
?>

<section class="content-header">
    <h1>
        Sirkulasi
        <small>Buku</small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="index.php">
                <i class="fa fa-home"></i>
                <b>Si Perpustakaan</b>
            </a>
        </li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Tambah Peminjaman</h3>
                </div>

                <form action="" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
                            <label>ID Sirkulasi</label>
                            <input type="text" name="id_sk" id="id_sk" class="form-control" value="<?php echo $format; ?>" readonly />
                        </div>

                        <div class="form-group">
                            <label>Nama Peminjam</label>
                            <select name="id_anggota" id="id_anggota" class="form-control select2" style="width: 100%;" required>
                                <option value="">-- Pilih --</option>
                                <?php
                                $query = "SELECT * FROM tb_anggota";
                                $hasil = mysqli_query($koneksi, $query);
                                while ($row = mysqli_fetch_array($hasil)) {
                                ?>
                                    <option value="<?php echo $row['id_anggota']; ?>">
                                        <?php echo $row['id_anggota'] . " - " . $row['nama']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Buku</label>
                            <select name="id_buku" id="id_buku" class="form-control select2" style="width: 100%;" required>
                                <option value="">-- Pilih --</option>
                                <?php
                                $query = "SELECT * FROM tb_buku";
                                $hasil = mysqli_query($koneksi, $query);
                                while ($row = mysqli_fetch_array($hasil)) {
                                ?>
                                    <option value="<?php echo $row['id_buku']; ?>">
                                        <?php echo $row['id_buku'] . " - " . $row['judul_buku']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Tanggal Pinjam</label>
                            <input type="date" name="tgl_pinjam" id="tgl_pinjam" class="form-control" required />
                        </div>
                    </div>

                    <div class="box-footer">
                        <input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
                        <a href="?page=data_sirkul" class="btn btn-warning">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
if (isset($_POST['Simpan'])) {
    $id_sk = $_POST['id_sk'];
    $id_buku = $_POST['id_buku'];
    $id_anggota = $_POST['id_anggota'];
    $tgl_pinjam = $_POST['tgl_pinjam'];

    $tgl_kembali = date('Y-m-d', strtotime('+7 days', strtotime($tgl_pinjam)));
    $tgl_dikembalikan = date('Y-m-d');

    $sql_simpan = "
        INSERT INTO tb_sirkulasi (id_sk, id_buku, id_anggota, tgl_pinjam, status, tgl_kembali, tgl_dikembalikan)
        VALUES ('$id_sk', '$id_buku', '$id_anggota', '$tgl_pinjam', 'PIN', '$tgl_kembali', '$tgl_dikembalikan');
        
        INSERT INTO log_pinjam (id_buku, id_anggota, tgl_pinjam)
        VALUES ('$id_buku', '$id_anggota', '$tgl_pinjam');
    ";

    $query_simpan = mysqli_multi_query($koneksi, $sql_simpan);
    mysqli_close($koneksi);

    if ($query_simpan) {
        echo "<script>
            Swal.fire({
                title: 'Tambah Data Berhasil',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.value) {
                    window.location = 'index.php?page=data_sirkul';
                }
            });
        </script>";
    } else {
        echo "<script>
            Swal.fire({
                title: 'Tambah Data Gagal',
                icon: 'error',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.value) {
                    window.location = 'index.php?page=add_sirkul';
                }
            });
        </script>";
    }
}
?>