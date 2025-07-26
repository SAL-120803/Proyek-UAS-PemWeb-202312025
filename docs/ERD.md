# 🧩 Entity Relationship Diagram (ERD) - Sistem Informasi Perpustakaan

Diagram ini merepresentasikan struktur database yang digunakan dalam aplikasi *Sistem Informasi Perpustakaan*. Terdapat 5 tabel utama yang saling berelasi untuk menangani data buku, anggota, sirkulasi, log aktivitas, dan manajemen pengguna.

---

## 📋 Tabel & Penjelasan

### 1. `tb_buku`

Menyimpan data buku yang tersedia di perpustakaan.

* `id_buku` : Primary Key
* `judul_buku` : Judul buku
* `pengarang` : Nama pengarang
* `penerbit` : Nama penerbit
* `th_terbit` : Tahun terbit

### 2. `tb_anggota`

Menyimpan data anggota perpustakaan.

* `id_anggota` : Primary Key
* `nama` : Nama anggota
* `jekel` : Jenis kelamin (enum: Laki-laki, Perempuan)
* `kelas` : Kelas anggota (misalnya XI RPL 1)
* `no_hp` : Nomor HP

### 3. `tb_sirkulasi`

Mencatat aktivitas peminjaman dan pengembalian buku.

* `id_sk` : Primary Key
* `id_buku` : Foreign Key ke `tb_buku`
* `id_anggota` : Foreign Key ke `tb_anggota`
* `tgl_pinjam` : Tanggal peminjaman
* `tgl_kembali` : Tanggal pengembalian
* `status` : enum(PIN, KEM) – Peminjaman atau Pengembalian

### 4. `log_pinjam`

Menyimpan riwayat peminjaman buku sebagai arsip log.

* `id_log` : Primary Key
* `id_buku` : Foreign Key ke `tb_buku`
* `id_anggota` : Foreign Key ke `tb_anggota`
* `tgl_pinjam` : Tanggal peminjaman

### 5. `tb_pengguna`

Digunakan untuk autentikasi pengguna aplikasi (admin/petugas).

* `id_pengguna` : Primary Key
* `nama_pengguna` : Nama lengkap
* `username` : Nama pengguna untuk login
* `password` : Kata sandi
* `level` : enum(Administrator, Petugas)

---

## 🔗 Relasi Antar Tabel

* `tb_sirkulasi` ➝ `tb_buku`, `tb_anggota`
* `log_pinjam` ➝ `tb_buku`, `tb_anggota`
* `tb_pengguna` berdiri sendiri, digunakan untuk login dan hak akses

---

## 🗂 ERD Visual

Berikut adalah diagram relasi antar tabel:
![ERD Perpustakaan](docs/ERD_Perpustakaan.png)

> *Catatan: Gambar di atas dibuat menggunakan [dbdiagram.io](https://dbdiagram.io)*

---

## 🧩 Catatan

* Primary Key ditandai dengan kunci
* Tipe data `enum` digunakan untuk validasi nilai tetap (jenis kelamin, status transaksi, dan level akses)
* Tidak ada relasi many-to-many; semua relasi bersifat satu-ke-banyak
* `tb_sirkulasi` dan `log_pinjam` dapat digunakan untuk laporan dan audit trail

---