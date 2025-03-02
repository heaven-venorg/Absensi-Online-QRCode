# Absensi Online QRCode

Absensi Online QRCode adalah aplikasi web yang memanfaatkan teknologi QR Code untuk sistem absensi online. Aplikasi ini dibangun dengan menggunakan Laravel 11 sebagai framework PHP dan mendukung basis data MySQL/MariaDB.

## Fitur Utama

- **Sistem Absensi dengan QR Code**: Memungkinkan pengguna untuk melakukan absensi dengan memindai QR Code, memastikan proses yang cepat dan akurat.
- **Autentikasi Pengguna**: Menyediakan sistem login untuk berbagai peran pengguna, termasuk admin, dosen, dan mahasiswa.
- **Manajemen Data**: Fitur untuk mengelola data pengguna, jadwal, dan riwayat absensi.
- **Notifikasi Jadwal**: Mengirim pengingat jadwal kuliah atau pertemuan kepada pengguna.

## Persyaratan Sistem

- **PHP**: Versi 8.0 atau lebih tinggi.
- **Laravel**: Versi 11.
- **Database**: MySQL atau MariaDB.

## Instalasi

1. **Kloning Repositori**:
   ```bash
   git clone https://github.com/heaven-venorg/Absensi-Online-QRCode.git
   ```


2. **Masuk ke Direktori Proyek**:
   ```bash
   cd Absensi-Online-QRCode
   ```


3. **Instalasi Dependensi**:
   ```bash
   composer install
   ```


4. **Salin File `.env`**:
   ```bash
   cp .env.example .env
   ```


5. **Konfigurasi Database**:
   Buka file `.env` dan sesuaikan pengaturan database sesuai dengan konfigurasi Anda.

6. **Buat Database**:
   Buat database baru di MySQL/MariaDB sesuai dengan nama yang ditentukan di `.env`.

7. **Jalankan Migrasi dan Seeder**:
   ```bash
   php artisan db:seed
   ```

```bash
php artisan db:seed --class=SeederRole
   ```

8. **Jalankan Aplikasi**:
   ```bash
   php artisan serve
   ```

   Akses aplikasi melalui `http://localhost:8000`.

## Lisensi

Proyek ini dilisensikan di bawah MIT License. 
