<?php
// Kode otomatis 9 digit untuk ID anggota
$carikode = mysqli_query($koneksi, "SELECT id_anggota FROM tb_anggota ORDER BY id_anggota DESC LIMIT 1");
$datakode = mysqli_fetch_array($carikode);

if ($datakode) {
    $kode = $datakode['id_anggota'];
    $urut = substr($kode, 1, 3);
    $tambah = (int)$urut + 1;
} else {
    $tambah = 1;
}

$format = "A" . str_pad($tambah, 3, "0", STR_PAD_LEFT);
?>

<section class="content-header">
    <h1>
        Master Data
        <small>Data Anggota</small>
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
            <!-- general form elements -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Tambah Anggota</h3>
                </div>

                <form action="" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
                            <label>ID Anggota</label>
                            <input type="text" name="id_anggota" id="id_anggota" class="form-control" value="<?php echo $format; ?>" readonly />
                        </div>

                        <div class="form-group">
                            <label>Nama Anggota</label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Anggota" required>
                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jekel" id="jekel" class="form-control" required>
                                <option value="">-- Pilih --</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Kelas</label>
                            <input type="text" name="kelas" id="kelas" class="form-control" placeholder="Kelas" required>
                        </div>

                        <div class="form-group">
                            <label>No HP</label>
                            <input type="number" name="no_hp" id="no_hp" class="form-control" placeholder="No HP" required>
                        </div>
                    </div>

                    <div class="box-footer">
                        <input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
                        <a href="?page=MyApp/data_agt" class="btn btn-warning">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
if (isset($_POST['Simpan'])) {
    $id_anggota = $_POST['id_anggota'];
    $nama = $_POST['nama'];
    $jekel = $_POST['jekel'];
    $kelas = $_POST['kelas'];
    $no_hp = $_POST['no_hp'];

    $sql_simpan = "INSERT INTO tb_anggota (id_anggota, nama, jekel, kelas, no_hp) VALUES (
        '$id_anggota',
        '$nama',
        '$jekel',
        '$kelas',
        '$no_hp')";

    $query_simpan = mysqli_query($koneksi, $sql_simpan);
    mysqli_close($koneksi);

    if ($query_simpan) {
        echo "<script>
        Swal.fire({
            title: 'Tambah Data Berhasil',
            icon: 'success',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=MyApp/data_agt';
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
                window.location = 'index.php?page=MyApp/add_agt';
            }
        });
        </script>";
    }
}
?>