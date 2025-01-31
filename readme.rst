# 🚀 Sistem Manajemen Produk - CodeIgniter 3

Sistem ini adalah aplikasi berbasis web untuk **reservasi** dan **manajemen produk** yang dikembangkan menggunakan **CodeIgniter 3** dan **Bootstrap 5.3**. Sistem ini mendukung **CRUD produk** serta tampilan data interaktif dengan **DataTables**.

## ✨ Fitur Utama

- ✅ **CRUD Produk** (Tambah, Edit, Hapus, dan Lihat Produk)
- ✅ **Tampilan Data Dinamis** menggunakan DataTables
- ✅ **Modal Konfirmasi Hapus Produk**
- ✅ **Pencarian & Pagination Otomatis** dengan DataTables

## 🛠 Tech Stack

Proyek ini dibangun dengan teknologi berikut:

- **CodeIgniter 3** - Framework PHP ringan
- **Bootstrap 5.3** - Framework CSS untuk UI responsif
- **jQuery** - Library JavaScript untuk manipulasi DOM
- **DataTables** - Plugin jQuery untuk menampilkan tabel interaktif
- **MySQL** - Database untuk menyimpan data
- **PHP 7+** - Bahasa pemrograman

## 🛠 Instalasi

### 1️⃣ Clone Repository

```sh
git clone https://github.com/bersianturi/Test-Programer---Bernard-Andrean-Sianturi.git
cd Test-Programer---Bernard-Andrean-Sianturi
```

### 2️⃣ Konfigurasi Database

Edit file `application/config/database.php`:

```php
$active_group = 'default';
$query_builder = TRUE;
$db['default'] = array(
    'dsn'   => '',
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'junior_programmer_test',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
```

### 3️⃣ Import Database

1. Buka **phpMyAdmin** melalui browser di `http://localhost/phpmyadmin/`.
2. Klik **Database** dan buat database baru dengan nama `junior_programmer_test`.
3. Pilih database yang baru dibuat, lalu klik tab **Import**.
4. Klik **Choose File** dan pilih file `junior_programmer_test.sql` yang ada di folder `database/`.
5. Klik **Go** untuk memulai proses impor.

### 4️⃣ Jalankan Aplikasi

Jika menggunakan XAMPP, pastikan Apache & MySQL berjalan, lalu akses:

```
http://localhost/Test-Programer---Bernard-Andrean-Sianturi/
```

## 📜 Lisensi

Proyek ini menggunakan lisensi **MIT**. Anda bebas menggunakannya untuk keperluan pribadi atau komersial.

---

💡 **Jika ada pertanyaan atau saran, silakan buat issue atau pull request di repository ini!** 🚀
