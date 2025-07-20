## 📥 INSTALLATION.md

# Panduan Instalasi

Sistem Informasi Perpustakaan Berbasis Web

Dokumen ini menjelaskan langkah-langkah untuk menginstal dan menjalankan aplikasi perpustakaan secara lokal menggunakan XAMPP.

---

## 🧾 Persyaratan Sistem

* Web Server: [XAMPP](https://www.apachefriends.org/) (disarankan versi PHP 7.4+)
* Browser modern: Chrome, Firefox, atau Edge
* Editor teks (opsional): VS Code, Sublime Text

---

## 📦 Struktur Folder Proyek

Pastikan folder aplikasi seperti ini setelah ekstrak atau clone:

```
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
```

---

## ⚙️ Langkah Instalasi

### 1. Pindahkan Folder ke `htdocs`

Salin folder `PERPUSTAKAAN/` ke dalam direktori:

```
C:\xampp\htdocs
```

### 2. Aktifkan Apache & MySQL

Buka **XAMPP Control Panel**, lalu:

* Klik **Start** pada **Apache**
* Klik **Start** pada **MySQL**

### 3. Buat Database

1. Akses `http://localhost/phpmyadmin`
2. Klik **Database > Buat database baru**

   * Nama: `data_perpus`
   * Kolasi: `utf8_general_ci`
3. Klik **Import**

   * Pilih file `data_perpus.sql`
   * Klik **Go**

### 4. Konfigurasi Koneksi

Buka file: `inc/koneksi.php`

Pastikan pengaturannya seperti ini:

```php
$host = "localhost";
$user = "root";
$pass = ""; // default kosong jika tidak diubah
$db   = "data_perpus";
```

---

## ✅ Akses Aplikasi

1. Buka browser dan akses: `http://localhost/PERPUSTAKAAN/`
2. Masukkan login:

   * **Username**: `salmaaa`
   * **Password**: `123`
3. Anda akan diarahkan ke Dashboard Administrator

---

## 📌 Catatan Tambahan

* Gunakan VS Code untuk pengelolaan file lebih rapi.
* Simpan database berkala sebagai backup.
* Pastikan koneksi ke internet aktif jika menggunakan CDN eksternal.

---