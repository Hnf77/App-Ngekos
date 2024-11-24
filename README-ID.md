<p align="center">
    <a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" alt="Laravel Logo"></a>
    <a href="https://filamentphp.com/" target="_blank"><img src="https://github.com/user-attachments/assets/4b992c6c-ef59-4eca-9c58-d86a05aa2e4e" width="300" alt="Filament Logo"></a>
    <a href="https://midtrans.com/" target="_blank"><img src="https://github.com/user-attachments/assets/eb79a16c-d35b-4922-af5e-bb4478d0b256" width="300" alt="Midtrans Logo"></a>
</p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# KosBookingApp

KosBookingApp adalah aplikasi berbasis web yang dirancang untuk menyederhanakan proses pemesanan akomodasi seperti kos. Dibangun menggunakan **Laravel**, **FilamentPHP**, dan **Midtrans**, aplikasi ini menyediakan platform kaya fitur bagi penyewa dan pemilik properti untuk mengelola aktivitas mereka secara efektif.

## Terjemahan
- <a href="https://github.com/Hnf77/BWA-Ngekos/blob/main/README.md">Inggris</a>

## Fitur Utama

- **Listing Properti Dinamis**: Pemilik properti dapat menambahkan informasi detail tentang properti mereka, termasuk foto, harga, dan fasilitas.
- **Pencarian & Filter**: Pengguna dapat mencari dan memfilter listing berdasarkan lokasi, harga, dan fasilitas.
- **Manajemen Pemesanan**: Proses pemesanan properti yang mudah dengan pembaruan secara real-time.
- **Integrasi FilamentPHP**: Panel admin modern dan ramah pengguna untuk mengelola properti, pemesanan, dan pengguna.
- **Midtrans Payment Gateway**: Integrasi pembayaran yang aman untuk transaksi.
- **Akses Berbasis Peran**: Mendukung beberapa peran, termasuk Admin, Pemilik Properti, dan Penyewa untuk manajemen pengguna yang lebih mudah.
- **Notifikasi Real-Time**: Tetap terupdate dengan konfirmasi pemesanan dan status pembayaran.

---

## Screenshot
<img src="https://github.com/user-attachments/assets/0e010e65-48af-425c-9864-dd454cac56b2" alt="Home Page" />
<img src="https://github.com/user-attachments/assets/be74cef6-5ebb-4829-a323-3267ca07b790" alt="Admin Panel Page" />

---

## Panduan Instalasi

Ikuti langkah-langkah berikut untuk mengatur aplikasi di lingkungan lokal Anda:

### Prasyarat

Pastikan sistem Anda telah terinstal:
- PHP 8.2 atau lebih baru
- Composer
- Node.js dan NPM
- MySQL (atau database lain yang didukung)
- Laravel CLI
- Akun Midtrans untuk pemrosesan pembayaran

---

### Langkah Instalasi

1. **Clone Repository**
   
   ```bash
   git clone https://github.com/Hnf77/App-Ngekos.git
   cd App-Ngekos

2. **Install Dependensi**
   
   ```bash
   composer install
   npm install
   
3. **Konfigurasi Variabel Lingkungan**
    Salin file .env.example menjadi .env dan edit nilai berikut:
    ```bash
   MIDTRANS_SERVER_KEY=<Your Key>
   MIDTRANS_IS_PRODUCTION=false
   MIDTRANS_IS_SANITIZED=true
   MIDTRANS_IS_3DS=true
   
4. **Generate Application Key**

    ```bash
   php artisan key:generate

5. **Jalankan Migrations**
   
   ```bash
   php artisan migrate

6. **Mulai Server Development**
   
   ```bash
   php artisan serve

7. **Akses ke Aplikasi**

    - Frontend: http://localhost
    - Admin Panel (Filament): http://localhost/admin

## Lisensi

Proyek ini dilisensikan di bawah **MIT License**.
