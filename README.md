<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
<h3>TheraPist Onlinemi</h3>
<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

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

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development/)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Therapist Booking Platform

A Laravel-based web platform for online therapist bookings. The system supports role-based access for Admins, Therapists, and Customers (Patients), allowing features like therapist profile management, schedule setting, appointment bookings, payment handling, and medical record keeping.

## 📦 Features

### 🔐 Role-Based Access
- **Admin**: Manages users and ensures system security.
- **Therapist**: Offers services, manages schedules, and adds personal profiles.
- **Customer (Patient)**: Books appointments, leaves reviews, and views therapist details.

### 🗃️ Database Structure

#### 1. `users`
Stores general user data.
- Fields: `id_pengguna`, `nama_pengguna`, `kata_sandi`, `email`, `peran`, `alamat`, etc.

#### 2. `therapist`
Additional profile info for users with the role "terapis".
- Fields: `id_terapis`, `id_pengguna`, `spesialisasi`, `nomor_lisensi`, `tarif_per_jam`, etc.

#### 3. `jadwal`
Schedules for therapist availability.
- Fields: `id_jadwal`, `id_terapis`, `hari`, `jam_mulai`, `jam_selesai`, `tersedia`.

#### 4. `janji_temu`
Appointment records between patients and therapists.
- Fields: `id_janji`, `id_pengguna`, `id_terapis`, `id_jadwal`, `tanggal_janji`, `status`, `keluhan`, `catatan_dokter`.

#### 5. `pembayaran`
Payment details for appointments.
- Fields: `id_pembayaran`, `id_janji`, `jumlah`, `metode`, `status`, `bukti_pembayaran`.

#### 6. `ulasan`
User reviews for therapists.
- Fields: `id_ulasan`, `id_janji`, `id_pengguna`, `id_terapis`, `rating`, `komentar`.

#### 7. `rekam_medis`
Medical records created by therapists.
- Fields: `id_rekam_medis`, `id_pengguna`, `id_terapis`, `diagnosa`, `resep_obat`, `catatan_tambahan`.

### 🔄 Relationship Overview
<table border="1" cellpadding="8" cellspacing="0">
  <thead>
    <tr>
      <th>From</th>
      <th>To</th>
      <th>Relation Type</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><code>users</code></td>
      <td><code>therapist</code></td>
      <td>One-to-One</td>
      <td>A user with therapist role has one therapist profile.</td>
    </tr>
    <tr>
      <td><code>therapist</code></td>
      <td><code>jadwal</code></td>
      <td>One-to-Many</td>
      <td>A therapist can have multiple schedules.</td>
    </tr>
    <tr>
      <td><code>users</code></td>
      <td><code>janji_temu</code></td>
      <td>One-to-Many</td>
      <td>A patient can book many appointments.</td>
    </tr>
    <tr>
      <td><code>janji_temu</code></td>
      <td><code>pembayaran</code>, <code>ulasan</code></td>
      <td>One-to-One</td>
      <td>Each appointment has one payment and one review.</td>
    </tr>
  </tbody>
</table>



## 🚀 Getting Started

### Requirements
- PHP >= 8.x
- Laravel >= 10.x
- MySQL / MariaDB
- Composer

### Installation

```bash
git clone https://github.com/your-username/therapist-booking.git
cd therapist-booking
composer install
cp .env.example .env
php artisan key:generate

