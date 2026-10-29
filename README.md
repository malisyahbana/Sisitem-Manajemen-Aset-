# Sistem Manajemen Aset - Dinas Pendidikan Kab. Hulu Sungai Selatan (HSS)

Aplikasi berbasis web untuk pengelolaan, pencatatan, mutasi, dan pelaporan aset inventaris (kendaraan dinas, peralatan elektronik, perlengkapan sekolah, tanah, dan pemusnahan aset) pada lingkungan Dinas Pendidikan dan Kebudayaan Kabupaten Hulu Sungai Selatan.

---

## 📌 Fitur Utama

- **Dashboard Statistik & Ringkasan**: Menampilkan ringkasan total pegawai, sekolah, dan jumlah inventaris barang secara visual.
- **Autentikasi & Manajemen Pengguna**:
  - Login multi-role (Administrator & Staff).
  - Manajemen akun pengguna (*User*) dan data pegawai (*Pegawai*).
- **Master Data**:
  - Data Sekolah di wilayah Kabupaten HSS.
  - Data Pegawai & Penanggung Jawab Aset.
- **Manajemen Inventaris Aset**:
  - **Aset Kendaraan**: Sepeda Motor, Mobil Dinas, dan Bus Operasional.
  - **Aset Elektronik**: Komputer PC, Laptop, Printer, dan Elektronik Lainnya.
  - **Aset Perlengkapan Sekolah**: Kelengkapan sarana dan prasarana sekolah.
  - **Aset Tanah & Pemusnahan Aset**: Pencatatan aset tanah dan riwayat penghapusan/pemusnahan barang rusak.
- **Sirkulasi & Mutasi Aset**:
  - Pendataan mutasi aset antar unit/bagian.
  - Riwayat pemegang dan penanggung jawab kendaraan dinas.
- **Cetak Laporan**:
  - Ekspor/cetak laporan inventaris per kategori dalam format siap cetak/PDF.
  - Laporan data pegawai, sekolah, mutasi, dan pemusnahan aset.

---

## 🛠️ Teknologi yang Digunakan

- **Backend**: PHP Native (mysqli)
- **Database**: MySQL / MariaDB
- **Frontend & UI**:
  - Bootstrap 3 (Arise Admin Theme)
  - jQuery & DataTables (Filter, Search, & Pagination tabel)
  - Alertify.js & Icomoon Icons
- **Containerization**: Docker & Docker Compose

---

## 📁 Struktur Direktori

```text
├── admin/               # Halaman modul administrasi sistem
│   ├── Amut/            # Modul Mutasi Aset
│   ├── BSekolah/        # Modul Aset Bangunan & Kelengkapan Sekolah
│   ├── Elektronik/      # Modul Aset Elektronik (Komputer, Laptop, Printer, dll)
│   ├── Kendaraan/       # Modul Aset Kendaraan (Motor, Mobil, Bus)
│   ├── laporan/         # Modul Cetak Laporan Aset & Master Data
│   ├── Musnah/          # Modul Pemusnahan / Penghapusan Aset
│   ├── Pegawai/         # Modul Data Pegawai
│   ├── Pkend/           # Modul Pemegang Kendaraan Dinas
│   ├── Sekolah/         # Modul Data Sekolah
│   ├── Tanah/           # Modul Data Aset Tanah
│   ├── User/            # Modul Manajemen Akun Pengguna
│   └── index.php        # Dashboard Utama Admin
├── assets/              # Aset statis (CSS, JS, Fonts, Plugin)
├── config/              # Konfigurasi aplikasi & database
│   ├── asetdisdik.sql   # Dump skema database dan data awal
│   ├── config.php       # Konfigurasi sesi & base URL dinamis
│   ├── database.php     # Konfigurasi koneksi database
│   └── ceklogin.php     # Proses autentikasi login
├── file/                # Folder penyimpanan berkas/surat PDF
├── img/                 # Folder upload gambar dan foto aset
├── header.php           # Template header navigasi
├── footer.php           # Template footer
├── index.php            # Entrypoint root (redirect ke login)
├── login.php            # Halaman login sistem
├── logout.php           # Halaman logout & destroy session
├── Dockerfile           # Konfigurasi Docker image aplikasi PHP-Apache
├── docker-compose.yml   # Multi-container setup (Aplikasi + MariaDB + phpMyAdmin)
└── README.md            # Dokumentasi proyek
```

---

## 🚀 Panduan Menjalankan Aplikasi

Anda dapat menjalankan aplikasi ini menggunakan **Docker** (paling mudah) atau web server lokal seperti **XAMPP / LAMP / WAMP**.

---

### Cara 1: Menggunakan Docker & Docker Compose (Direkomendasikan)

Metode ini tidak memerlukan instalasi PHP atau MySQL secara manual di komputer Anda. Database akan otomatis diinisialisasi beserta skema dan data awal.

#### 1. Prasyarat
- [Docker Desktop](https://www.docker.com/products/docker-desktop/) sudah terpasang dan berjalan.

#### 2. Jalankan Container
Buka terminal/PowerShell di direktori proyek, lalu jalankan:

```bash
docker compose up -d --build
```
*(Atau `docker-compose up -d --build` jika menggunakan Docker Compose v1)*

Perintah ini akan menjalankan 3 container:
- **Web App (PHP 7.4 + Apache)** di port `8080`
- **Database (MariaDB 10.5)** di port `3307`
- **phpMyAdmin** di port `8081`

#### 3. Buka di Browser
- **Aplikasi Web**: [http://localhost:8080](http://localhost:8080)
- **phpMyAdmin**: [http://localhost:8081](http://localhost:8081) (Server: `db`, User: `root`, Password: `root`)

#### 4. Menghentikan Container
```bash
docker compose down
```
*(Tambahkan flag `-v` jika ingin menghapus volume database: `docker compose down -v`)*

---

### Cara 2: Menggunakan Web Server Lokal (XAMPP / WAMP / LAMP)

#### 1. Pindahkan Proyek
Pindahkan atau clone repositori ini ke folder root web server Anda, misalnya:
- Windows (XAMPP): `C:\xampp\htdocs\asetdisdik`
- Linux (Apache): `/var/www/html/asetdisdik`

#### 2. Import Database
1. Buka browser dan akses **phpMyAdmin** (`http://localhost/phpmyadmin`).
2. Buat database baru bernama `asetdisdik`.
3. Pilih database `asetdisdik`, lalu klik tab **Import**.
4. Pilih file SQL dari proyek: `config/asetdisdik.sql` dan klik **Go / Kirim**.

#### 3. Pengaturan Koneksi (Opsional)
Secara default, konfigurasi koneksi di file [config/database.php](config/database.php) adalah:
- **Host**: `localhost`
- **User**: `root`
- **Password**: *(kosong)*
- **Database**: `asetdisdik`

Jika konfigurasi database lokal Anda berbeda, sesuaikan nilai pada file [config/database.php](config/database.php) atau atur Environment Variables.

#### 4. Akses Aplikasi
Buka browser dan buka:
[http://localhost/asetdisdik](http://localhost/asetdisdik)

---

## 🔑 Kredensial Default Login

Gunakan akun administrator berikut untuk masuk pertama kali ke sistem:

| Role | Username | Password |
|---|---|---|
| **Administrator** | `admin` | `admin` |

> ⚠️ **Catatan Keamanan**: Sangat disarankan untuk segera mengganti password default melalui menu **Master Data > Data User** setelah masuk ke sistem.

---

## ⚙️ Variabel Lingkungan (Environment Variables)

Aplikasi mendukung konfigurasi fleksibel melalui Environment Variable:

| Variabel | Default (XAMPP) | Default (Docker) | Keterangan |
|---|---|---|---|
| `DB_HOST` | `localhost` | `db` | Host database server |
| `DB_USER` | `root` | `root` | Username database |
| `DB_PASS` | `""` *(kosong)* | `root` | Password database |
| `DB_NAME` | `asetdisdik` | `asetdisdik` | Nama database |
| `BASE_URL`| `http://localhost/asetdisdik` | `http://localhost:8080` | URL dasar aplikasi untuk aset CSS/JS |

---

## 📄 Lisensi

Proyek ini dibuat untuk keperluan manajemen aset Dinas Pendidikan Kab. Hulu Sungai Selatan.
Bebas digunakan dan dikembangkan untuk kepentingan edukasi dan instansi terkait.

