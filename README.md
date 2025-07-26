
```markdown
# 📚 Sistem Informasi Perpustakaan - Aplikasi Web Manajemen Perpustakaan

Sistem Informasi Perpustakaan adalah aplikasi web berbasis PHP native dan MySQL yang dirancang untuk membantu pengelolaan kegiatan perpustakaan secara digital. Proyek ini mendukung manajemen data buku, anggota, peminjaman, pengembalian, serta laporan sirkulasi. Sistem dilengkapi dengan antarmuka sederhana dan responsif menggunakan Bootstrap serta notifikasi interaktif dari SweetAlert.

---

## 🧪 Demo 
 
> [🔗 Tonton Demo di Youtube]()
> [🔗 Kunjungi Website Demo]()

---

## 📌 Fitur Utama

|------------------|-----------------------------------------------------------------------|
| Role             | Fitur                                                                 |
|------------------|-----------------------------------------------------------------------|
| *Administrator*  | - Manajemen Buku, Anggota, Sirkulasi, Log Data, Pengguna, dan Laporan |
|                  | - Melihat aktivitas peminjaman & pengembalian buku                    |
|------------------|--------------------------------------------------------------------=--|
| *Petugas*        | - Mengelola data buku dan anggota                                     |
|                  | - Melakukan transaksi sirkulasi                                       |
|------------------|-----------------------------------------------------------------------|

---

## 📂 Struktur Folder

PERPUSTAKAAN/
│
├── README.md                # Dokumentasi utama proyek
│
├── docs/                    # Dokumentasi tambahan
│   ├── ERD_perpustakaan.png
│   ├── ERD.md
│   ├── INSTALLATION.md
│   └── USAGE.md
│
├── sql/                     # Struktur & data awal database
│   └── data_perpus.sql
│
└── src/
    ├── admin/               # Halaman dashboard dan konten admin
    │   ├── agt/
    │   │   ├── add_agt.php
    │   │   ├── data_agt.php
    │   │   ├── del_agt.php
    │   │   ├── edit_agt.php
    │   │   ├── print_agt.php
    │   │   └── print_allagt.php
    │   │
    │   ├── buku/
    │   │   ├── add_buku.php
    │   │   ├── data_buku.php
    │   │   ├── del_buku.php
    │   │   └── edit_buku.php
    │   │
    │   ├── laporan/
    │   │   ├── laporan_sirkulasi.php
    │   │   └── print_laporan.php
    │   │
    │   ├── log/
    │   │   ├── log_kembali.php
    │   │   └── log_pinjam.php
    │   │
    │   ├── pengguna/
    │   │   ├── add_pengguna.php
    │   │   ├── data_pengguna.php
    │   │   ├── del_pengguna.php
    │   │   └── edit_pengguna.php
    │   │
    │   └── sirkul/
    │       ├── add_sirkul.php
    │       ├── data_sirkul.php
    │       ├── kembali.php
    │       └── panjang.php
    │
    ├── assets/              # File statis: CSS, JS, ikon, font
    │   ├── css/
    │   │   └── custom.css
    │   │
    │   ├── font-awesome/
    │   │   ├── fontawesome-webfont.eot
    │   │   ├── fontawesome-webfont.svg
    │   │   ├── fontawesome-webfont.ttf
    │   │   ├── fontawesome-webfont.woff
    │   │   └── fontAwesome.otf
    │   │
    │   ├── font/
    │   │   ├── glyphicons-halflings-regular.eot
    │   │   ├── glyphicons-halflings-regular.svg
    │   │   ├── glyphicons-halflings-regular.ttf
    │   │   └── glyphicons-halflings-regular.woff
    │
    ├── build/               # File LESS dan skin tema
    │   └── less/
    │       └── skins/
    │
    ├── dist/                # Output produksi / hasil build
    │   ├── css/
    │   │   ├── alt/
    │   │   ├── skins/
    │   │   ├── AdminLTE.css
    │   │   └── AdminLTE.min.css
    │   │
    │   ├── img/
    │   │   ├── avatar.png
    │   │   └── logo.png
    │   │
    │   └── js/
    │       ├── pages/
    │       ├── app.js
    │       ├── app.min.js
    │       └── demo.js
    │
    ├── home/                # Halaman publik / landing page
    │   ├── admin.php
    │   └── petugas.php
    │
    ├── inc/                 # Koneksi & konfigurasi
    │   └── koneksi.php
    │
    ├── plugins/             # Plugin pihak ketiga
    │   ├── datatables/
    │   ├── jQuery/
    │   ├── select2/
    │   └── proses-ajax.php
    │
    ├── index.php            # Redirect ke halaman utama
    ├── login.php            # Login
    └── logout.php           # Logout

---

## 🛠 Teknologi Digunakan

|-------------|--------------------------------------|
| Layer       | Teknologi                            |
|-------------|--------------------------------------|
| *Backend*   | PHP                                  |
| *Database*  | MySQL                                |
| *Frontend*  | HTML, CSS, Bootstrap                 |
| *Lainnya*   | SweetAlert, FontAwesome              |
|-------------|--------------------------------------|

---

## 🧠 Alur Penggunaan Aplikasi

1. 🔐 *Login Administrator*  
   - Akses ke `http://localhost/PERPUSTAKAAN/`
   - Login menggunakan username dan password default:
     - **Username:** `salmaaa`
     - **Password:** `123`

2. 📚 *Kelola Data Buku & Anggota*  
   - Tambah, edit, dan hapus data buku dan anggota
   - Data tersimpan di database `data_perpus`

3. 🔁 *Transaksi Sirkulasi*  
   - Modul peminjaman, perpanjangan, dan pengembalian buku
   - Otomatis mencatat tanggal pinjam dan jatuh tempo

4. 📈 *Laporan & Log*  
   - Laporan transaksi sirkulasi
   - Log aktivitas peminjaman & pengembalian

5. 🧑‍💼 *Manajemen Pengguna*  
   - Tambah pengguna baru dan atur hak akses

---

## 🔐 Hak Akses User

|------------------|-------------------------|------------------------------------------------|
| Role             | Halaman Login           | Akses Modul                                    |
|------------------|-------------------------|----------------------------------------------  |
| *Administrator*  | `login.php`             | Semua modul: Buku, Anggota, Sirkulasi, Laporan |
| *Petugas*        | `login.php`             | Buku, Anggota, dan Sirkulasi saja              |
|------------------|-------------------------|------------------------------------------------|

---

## 🧾 Struktur Database

📂 File SQL: `data_perpus.sql`  
📎 ERD dapat digenerate dari struktur tabel berikut:

### Tabel-Tabel Utama:

|----------------|--------------------------------------------|
| Tabel          | Keterangan                                 |
|----------------|--------------------------------------------|
| tb_buku        | Data koleksi buku perpustakaan             |
| tb_anggota     | Informasi anggota (nama, kelas, kontak)    |
| tb_sirkulasi   | Transaksi peminjaman dan pengembalian buku |
| tb_pengguna    | Data login & level pengguna                |
| tb_log         | Catatan histori aktivitas pengguna         |
|----------------|--------------------------------------------|

---

## 💻 Cara Instalasi Lokal

1. **Salin Folder**
   - Copy folder `PERPUSTAKAAN/` ke `C:\xampp\htdocs\`

2. **Aktifkan XAMPP**
   - Jalankan Apache dan MySQL dari XAMPP Control Panel

3. **Import Database**
   - Akses `http://localhost/phpmyadmin`
   - Buat database baru: `data_perpus`
   - Import file `data_perpus.sql`

4. **Cek Koneksi**
   - Edit file `inc/koneksi.php` jika diperlukan:
     ```php
     $host = "localhost";
     $user = "root";
     $pass = "1234";
     $db   = "data_perpus";
     ```

5. **Akses Aplikasi**
   - Buka `http://localhost/PERPUSTAKAAN/`

---

## 🖼 Preview Tampilan

- 🎨 Warna dominan: Merah, kuning, hijau, biru dan putih
- 📱 Desain responsif, cocok untuk desktop dan tablet
- ✅ Notifikasi interaktif dengan SweetAlert

---

## 👩‍💻 Tentang Pengembang

|------------------|---------------------------|
| Nama Lengkap     | Salma Diani Putri         |
|------------------|---------------------------|
| NIM              | 202312025                 |
| Jurusan          | Teknik Informatika        |
| Kampus/Instansi  | STITEK Bontang            |
|------------------|---------------------------|

---