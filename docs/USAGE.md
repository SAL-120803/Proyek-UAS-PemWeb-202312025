# 📖 Panduan Penggunaan Aplikasi Sistem Informasi Perpustakaan

Dokumen ini menjelaskan alur penggunaan aplikasi **PERPUSTAKAAN**, mulai dari login sebagai Admin atau Petugas, hingga mengelola data buku, anggota, sirkulasi, dan laporan.

---

## 👥 Peran Pengguna (User Roles)

| Role            | Deskripsi                                                                           |
| --------------- | ----------------------------------------------------------------------------------- |
| *Administrator* | Mengelola seluruh modul: buku, anggota, pengguna, transaksi sirkulasi, dan laporan. |
| *Petugas*       | Mengelola data buku, anggota, dan melakukan transaksi peminjaman/pengembalian.      |

---

## 🔐 Login

* Halaman Login: `login.php`
* Masukkan username dan password sesuai data di `tb_pengguna`
* Arahkan pengguna berdasarkan peran:

  * **Admin** → `home/admin.php`
  * **Petugas** → `home/petugas.php`

---

## 📚 Alur Penggunaan: Admin & Petugas

### 1. Kelola Data Buku

* Navigasi: `admin/buku/data_buku.php`
* Aksi yang tersedia:

  * Tambah buku → `add_buku.php`
  * Edit buku → `edit_buku.php`
  * Hapus buku → `del_buku.php`

### 2. Kelola Data Anggota

* Navigasi: `admin/agt/data_agt.php`
* Aksi yang tersedia:

  * Tambah anggota → `add_agt.php`
  * Edit anggota → `edit_agt.php`
  * Hapus anggota → `del_agt.php`
  * Cetak kartu/daftar anggota → `print_agt.php`, `print_allagt.php`

### 3. Transaksi Sirkulasi

* Navigasi: `admin/sirkul/data_sirkul.php`
* Aksi:

  * Peminjaman buku → `add_sirkul.php`
  * Perpanjangan masa pinjam → `panjang.php`
  * Pengembalian buku → `kembali.php`

### 4. Log Aktivitas

* Navigasi:

  * Log peminjaman → `log_pinjam.php`
  * Log pengembalian → `log_kembali.php`

### 5. Laporan

* Navigasi: `laporan/laporan_sirkulasi.php`
* Cetak laporan → `print_laporan.php`

### 6. Manajemen Pengguna *(Admin Saja)*

* Navigasi: `admin/pengguna/data_pengguna.php`
* Aksi:

  * Tambah pengguna → `add_pengguna.php`
  * Edit pengguna → `edit_pengguna.php`
  * Hapus pengguna → `del_pengguna.php`

---

## 🧾 Struktur Data Utama

| Tabel          | Keterangan                                        |
| -------------- | ------------------------------------------------- |
| `tb_buku`      | Menyimpan data buku: kode, judul, pengarang, dll. |
| `tb_anggota`   | Menyimpan data anggota perpustakaan.              |
| `tb_sirkulasi` | Data transaksi peminjaman dan pengembalian buku.  |
| `tb_pengguna`  | Menyimpan akun login dan hak akses.               |
| `tb_log`       | Riwayat peminjaman & pengembalian.                |

---

## 🖼 Catatan Tambahan

* File gambar (jika digunakan) diletakkan di folder `assets/img/`
* File PDF hasil cetak disusun menggunakan library seperti mPDF / FPDF
* Session digunakan untuk login: pastikan sesi aktif untuk mengakses halaman admin

---

📌 Untuk proses instalasi lokal, lihat [docs/INSTALLATION.md](INSTALLATION.md)
📌 Untuk ringkasan fitur & struktur folder, buka [README.md](../README.md)