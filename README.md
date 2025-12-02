<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# To-Do List Application

Aplikasi To-Do List sederhana yang dibangun menggunakan Laravel framework. Aplikasi ini memungkinkan pengguna untuk mengelola daftar tugas dengan fitur CRUD (Create, Read, Update, Delete) lengkap.

> **Note:** Ini adalah mini project untuk belajar Laravel. Dibuat sebagai bagian dari proses pembelajaran framework Laravel dan konsep dasar web development dengan MVC pattern.

## Fitur

- ✅ **Tambah Todo Baru** - Membuat todo baru dengan judul dan deskripsi
- 📝 **Lihat Daftar Todo** - Menampilkan semua todo dalam list
- ✏️ **Edit Todo** - Mengubah informasi todo yang sudah ada
- 🗑️ **Hapus Todo** - Menghapus todo dari daftar
- ☑️ **Toggle Status** - Menandai todo sebagai selesai atau belum selesai
- 💬 **Notifikasi** - Pesan sukses setelah setiap operasi

## Teknologi yang Digunakan

- **Laravel 11.x** - PHP Framework
- **MySQL/SQLite** - Database
- **Blade Template** - Templating Engine
- **CSS** - Styling (Inline)

## Struktur Database

Tabel `to_dos` memiliki kolom:
- `id` - Primary key
- `Tugas` - Judul todo (required)
- `deskripsi` - Deskripsi todo (nullable)
- `tanggal_selesai` - Tanggal deadline (nullable)
- `selesai` - Status penyelesaian (boolean, default: false)
- `created_at` & `updated_at` - Timestamps

## Instalasi

1. Clone repository
2. Jalankan `composer install`
3. Copy `.env.example` ke `.env`
4. Setup database di file `.env`
5. Jalankan `php artisan migrate`
6. Jalankan `php artisan serve`
7. Akses aplikasi di `http://127.0.0.1:8000`

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
