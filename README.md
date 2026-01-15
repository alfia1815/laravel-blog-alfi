# Laravel Blog Alfi

Aplikasi blog sederhana berbasis Laravel yang menerapkan autentikasi pengguna dan manajemen hak akses (Admin & User).

## ✨ Fitur Aplikasi
- Autentikasi Login & Register
- Role User dan Admin
- Admin dapat:
  - Menambah artikel
  - Mengedit artikel
  - Menghapus artikel
- User dapat:
  - Melihat daftar artikel
  - Membaca detail artikel
- Tampilan dashboard berbeda antara Admin dan User

---

## ⚙️ Instalasi & Menjalankan Aplikasi

### 1. Clone Repository
```bash
git clone https://github.com/alfia1815/laravel-blog-alfi.git
2. Masuk ke Folder Project
bash
Copy code
cd laravel-blog-alfi
3. Install Dependency
bash
Copy code
composer install
npm install
npm run build
4. Konfigurasi Environment
bash
Copy code
cp .env.example .env
php artisan key:generate
5. Atur Database
Buka file .env lalu sesuaikan konfigurasi database:

ini
Copy code
DB_DATABASE=nama_database
DB_USERNAME=username
DB_PASSWORD=password
6. Migrasi Database
bash
Copy code
php artisan migrate
7. Jalankan Server
bash
Copy code
php artisan serve
Aplikasi dapat diakses melalui:

cpp
Copy code
http://127.0.0.1:8000
🧩 Versi Teknologi
Laravel Framework 12.x

PHP 8.2

MySQL

Tailwind CSS

Laravel Breeze (Authentication)

## ⚠️ Catatan Penting
- Folder `vendor` tidak disertakan
- File `.env` tidak disertakan
- Repository bersifat public sesuai ketentuan pengumpulan

## 👤 Author
Alfi Aulia  
Program Studi Pendidikan Teknologi Informasi
