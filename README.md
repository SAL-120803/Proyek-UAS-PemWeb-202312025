# 📥 Panduan Instalasi
Sistem Informasi Perpustakaan Berbasis Web

Dokumen ini menjelaskan langkah-langkah untuk menginstal dan menjalankan aplikasi perpustakaan secara lokal menggunakan XAMPP.

---

## 🧾 Persyaratan Sistem

- Web Server: [XAMPP](https://www.apachefriends.org/) (disarankan versi PHP 7.4+)
- Browser modern: Chrome, Firefox, atau Edge
- Editor teks (opsional): VS Code, Sublime Text

---

## 📦 Struktur Folder Proyek

Pastikan folder aplikasi seperti ini setelah ekstrak atau clone:
PERPUSTAKAAN/
│
├── admin/
├── assets/
├── build/
├── dist/
├── home/
├── inc/
├── plugins/
├── data_perpus.sql
├── index.php
├── login.php
├── logout.php
└── README.md
---

## ⚙️ Langkah Instalasi

### 1. **Pindahkan Folder ke `htdocs`**
Salin folder `PERPUSTAKAAN/` ke dalam direktori:


### 2. **Aktifkan Apache & MySQL**
Buka **XAMPP Control Panel**, lalu:
- Klik Start pada **Apache**
- Klik Start pada **MySQL**

### 3. **Buat Database**
1. Akses `http://localhost/phpmyadmin`
2. Klik **Database > Buat database baru**
   - Nama: `data_perpus`
   - Kolasi: `utf8_general_ci`
3. Klik **Import**
   - Pilih file `data_perpus.sql`
   - Klik **Go**

### 4. **Konfigurasi Koneksi**
Buka file: `inc/koneksi.php`

Pastikan pengaturannya sesuai:
```php
$host = "localhost";
$user = "root";
$pass = "1234";
$db   = "data_perpus";

## 🧑‍💼 Akses Login

1. Buka `http://localhost/PERPUSTAKAAN/`
2. Masukkan username dan password
   Login dengan
   username : salmaaa
   password : 123
3. Setelah berhasil login, pengguna akan diarahkan ke 
   **Dashboard Administrator**.

---

## 🧭 Navigasi Utama

- 📊 **Dashboard**
  - Menampilkan ringkasan data: jumlah buku, anggota, sirkulasi yang sedang berjalan dan laporan sirkulasi.

- 📁 **Kelola Data**
  - **Data Buku**
    - Menambah, mengedit, dan menghapus data buku.
    - Menyimpan informasi seperti no, id buku, judul buku, pengarang, penerbit, tahun kelola.
  
  - **Data Anggota**
    -  Menambah, mengedit, dan menghapus data anggota.
    - Kelola informasi anggota perpustakaan seperti no, id anggota, nama, jenis kelamin, kelas, no HP dan kelola

- 🔁 **Sirkulasi**
  - Modul peminjaman, perpanjang dan pengembalian buku.
  - Mencatat transaksi siapa meminjam buku apa, kapan dipinjam dan dikembalikan dan apakah ingin diperpanjang.
  - Menyimpan informasi seperti no, id sirkulasi, buku, peminjam, tanggal pinjam, jatuh tempo, denda dan kelola

- 📜 **Log Data**
  - Menampilkan histori aktivitas pengguna, seperti peminjam dan pengembalian.
  - Mencatat riwayat peminjam buku dimana terdapat no, buku, peminjam, tanggal peminjam
  - mencatat riwaayat pengembalian buku dimana terdapat no, buku, peminjam, tanggal kembalikan.

- 📈 **Laporan**
  - Menyediakan laporan sirkulasi no, id sirkulasi, buku, peminjam, tanggal pinjam, jatuh tempo, tanggal dikembalikan, denda serta total denda.
  - Bisa diekspor (misalnya ke PDF) untuk arsip atau pelaporan manual.

- ⚙️ **Pengguna Sistem**
  - Modul manajemen akun pengguna administrator dan petugas.
  - Mengatur nama pengguna, username, password, dan level akses. 
  - kemudian terdapat hapus data dan edit data.

- 🚪 **Logout**
  - Untuk keluar dari sesi login saat ini secara aman.

---

## 🖥️ Fitur Tambahan

- ✅ Notifikasi menggunakan SweetAlert untuk login sukses/gagal.
- 📱 Tampilan responsif dengan Bootstrap.
- 📊 Ikon dan visualisasi dengan FontAwesome
- 🔒 Validasi input pada form login dan form pengisian data.

---

## 💡 Tips Penggunaan

- Gunakan menu **Pengguna Sistem** untuk mengganti password akun admin.
- Rutin cek **Laporan** dan **Log Data** untuk memantau penggunaan sistem.
- Backup database secara berkala agar data tetap aman.