# 🏫 Website SMP Mentari Ceria

Aplikasi website sekolah berbasis Laravel yang menampilkan informasi kegiatan sekolah dan fitur buku tamu digital untuk SMP Mentari Ceria.

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-12-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel 12">
  <img src="https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP 8.2">
  <img src="https://img.shields.io/badge/Tailwind_CSS-4.0-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="Tailwind CSS">
  <img src="https://img.shields.io/badge/SQLite-07405E?style=for-the-badge&logo=sqlite&logoColor=white" alt="SQLite">
</p>

## 📋 Daftar Isi

- [Tentang Aplikasi](#-tentang-aplikasi)
- [Fitur Utama](#-fitur-utama)
- [Tech Stack](#-tech-stack)
- [Persyaratan Sistem](#-persyaratan-sistem)
- [Instalasi](#-instalasi)
- [Penggunaan](#-penggunaan)
- [Struktur Database](#-struktur-database)
- [Struktur Project](#-struktur-project)
- [Pengembangan](#-pengembangan)
- [Testing](#-testing)
- [Lisensi](#-lisensi)

## 🎯 Tentang Aplikasi

Website SMP Mentari Ceria adalah aplikasi web sederhana yang dibangun dengan Laravel 12 untuk menampilkan informasi dan kegiatan sekolah. Aplikasi ini dilengkapi dengan fitur buku tamu digital yang memungkinkan pengunjung meninggalkan pesan dan kesan mereka.

### Fitur Halaman:

1. **Halaman Home** - Menampilkan kegiatan-kegiatan terbaru sekolah
2. **Buku Tamu** - Formulir interaktif untuk pengunjung meninggalkan pesan

## ✨ Fitur Utama

- ✅ **Tampilan Kegiatan Sekolah** - Showcase kegiatan terbaru dengan card design
- ✅ **Buku Tamu Digital** - Pengunjung dapat meninggalkan pesan
- ✅ **Form Validasi** - Validasi input untuk nama, email, dan pesan
- ✅ **Real-time Feedback** - Notifikasi sukses/error setelah submit
- ✅ **Responsive Design** - Tampilan optimal di semua device
- ✅ **Timestamp Relatif** - Menampilkan waktu pesan (e.g., "2 jam yang lalu")
- ✅ **Modern UI/UX** - Desain clean dengan Tailwind CSS

## 🛠️ Tech Stack

### Backend
- **Laravel** 12.x - PHP Framework
- **PHP** ^8.2 - Programming Language
- **SQLite** - Database (Development)
- **Eloquent ORM** - Database Management

### Frontend
- **Blade Templates** - Template Engine
- **Tailwind CSS** 4.0 - CSS Framework
- **Vite** 7.0 - Asset Bundler & HMR
- **Axios** - HTTP Client

### Development Tools
- **Laravel Sail** - Docker Development Environment
- **Pest PHP** - Testing Framework
- **Laravel Pint** - Code Style Fixer
- **Concurrently** - Multi-command Runner

## 📦 Persyaratan Sistem

Pastikan sistem Anda memiliki:

- **PHP** >= 8.2
- **Composer** >= 2.x
- **Node.js** >= 18.x
- **NPM** atau **Yarn**
- **SQLite** Extension (biasanya sudah terinstall)

## 🚀 Instalasi

### 1. Clone Repository

```bash
git clone https://github.com/adiwp/pbw.git
cd pbw/2025/smpmentari
```

### 2. Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install Node dependencies
npm install
```

### 3. Setup Environment

```bash
# Copy file .env
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 4. Setup Database

```bash
# Buat file database SQLite (jika belum ada)
touch database/database.sqlite

# Jalankan migrasi
php artisan migrate
```

### 5. Build Assets

```bash
# Development
npm run dev

# Production
npm run build
```

### 6. Jalankan Aplikasi

```bash
# Menggunakan built-in server
php artisan serve

# Atau menggunakan composer script (recommended)
composer dev
```

Aplikasi akan berjalan di: `http://localhost:8000`

## 💻 Penggunaan

### Menjalankan Development Server

Gunakan composer script untuk menjalankan semua service sekaligus:

```bash
composer dev
```

Script ini akan menjalankan:
- Laravel development server (port 8000)
- Queue worker
- Log viewer (Pail)
- Vite dev server (HMR)

### Akses Aplikasi

- **Homepage**: `http://localhost:8000`
- **Buku Tamu**: `http://localhost:8000/bukutamu`

### Menggunakan Buku Tamu

1. Kunjungi halaman Buku Tamu
2. Isi form dengan:
   - Nama (required)
   - Email (required, format email valid)
   - Pesan (required)
3. Klik tombol "Kirim Pesan"
4. Pesan akan muncul di bagian bawah halaman

## 🗄️ Struktur Database

### Tabel: `pesan_tamus`

| Column | Type | Constraint |
|--------|------|------------|
| id | BIGINT | PRIMARY KEY, AUTO_INCREMENT |
| nama | VARCHAR(255) | NOT NULL |
| email | VARCHAR(255) | NOT NULL |
| pesan | TEXT | NOT NULL |
| created_at | TIMESTAMP | NULL |
| updated_at | TIMESTAMP | NULL |

### Model Eloquent

```php
// app/Models/PesanTamu.php
class PesanTamu extends Model
{
    protected $fillable = ['nama', 'email', 'pesan'];
}
```

## 📁 Struktur Project

```
smpmentari/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── PageController.php       # Halaman statis
│   │       └── PesanTamuController.php  # CRUD buku tamu
│   └── Models/
│       └── PesanTamu.php                # Model pesan tamu
├── database/
│   ├── migrations/
│   │   └── 2025_10_08_015415_create_pesan_tamus_table.php
│   └── database.sqlite                  # SQLite database
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   ├── app.blade.php           # Main layout
│   │   │   └── partials/
│   │   │       ├── header.blade.php    # Header/Navigation
│   │   │       └── footer.blade.php    # Footer
│   │   ├── home.blade.php              # Homepage
│   │   └── bukutamu/
│   │       └── index.blade.php         # Buku tamu page
│   ├── css/
│   │   └── app.css                     # Tailwind CSS
│   └── js/
│       └── app.js                      # JavaScript entry
├── routes/
│   └── web.php                         # Web routes
├── composer.json                       # PHP dependencies
├── package.json                        # Node dependencies
├── vite.config.js                      # Vite configuration
└── README.md                           # Dokumentasi
```

## 🔧 Pengembangan

### Routes

```php
// routes/web.php
Route::get('/', [PageController::class, 'home']);
Route::get('/bukutamu', [PesanTamuController::class, 'index']);
Route::post('/bukutamu', [PesanTamuController::class, 'store']);
```

### Controllers

**PageController** - Menangani halaman statis:
```php
public function home()
{
    return view('home');
}
```

**PesanTamuController** - Menangani buku tamu:
```php
// Menampilkan form dan daftar pesan
public function index()
{
    $daftar_pesan = PesanTamu::latest()->get();
    return view('bukutamu.index', ['daftar_pesan' => $daftar_pesan]);
}

// Menyimpan pesan baru
public function store(Request $request)
{
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'pesan' => 'required|string',
    ]);
    
    PesanTamu::create($validated);
    return redirect('/bukutamu')->with('success', 'Pesan Anda telah terkirim!');
}
```

### Menambah Kegiatan Baru

Edit file `resources/views/home.blade.php` dan tambahkan card baru:

```blade
<div class="bg-white rounded-lg shadow-lg p-6">
    <h3 class="text-xl font-semibold mb-2">Judul Kegiatan</h3>
    <p class="text-gray-700">Deskripsi kegiatan...</p>
</div>
```

## 🧪 Testing

### Menjalankan Tests

```bash
# Menjalankan semua tests
php artisan test

# Atau menggunakan composer
composer test

# Menggunakan Pest langsung
./vendor/bin/pest
```

### Membuat Test Baru

```bash
# Membuat feature test
php artisan make:test PesanTamuTest

# Membuat unit test
php artisan make:test PesanTamuTest --unit
```

## 📝 Commands Yang Tersedia

### Composer Scripts

```bash
composer setup      # Setup lengkap aplikasi
composer dev        # Jalankan development environment
composer test       # Jalankan test suite
```

### Artisan Commands

```bash
php artisan serve           # Start development server
php artisan migrate         # Run migrations
php artisan migrate:fresh   # Drop all tables and re-run migrations
php artisan db:seed         # Run seeders
php artisan route:list      # List all routes
php artisan make:controller # Create controller
php artisan make:model      # Create model
php artisan make:migration  # Create migration
```

### NPM Scripts

```bash
npm run dev    # Start Vite dev server
npm run build  # Build for production
```

## 🎨 Kustomisasi

### Mengubah Warna Tema

Edit file `resources/css/app.css` dan sesuaikan konfigurasi Tailwind:

```css
@theme {
    /* Tambahkan custom colors */
}
```

### Mengubah Logo/Nama Sekolah

Edit file `resources/views/layouts/partials/header.blade.php`:

```blade
<a href="{{ url('/') }}" class="text-2xl font-bold text-blue-600">
    Nama Sekolah Anda
</a>
```

## 🔒 Security

- CSRF Protection aktif pada semua form
- Validasi input pada semua request
- SQL Injection protection dengan Eloquent ORM
- XSS Protection dengan Blade templating

## 🐛 Troubleshooting

### Error: Database tidak ditemukan

```bash
touch database/database.sqlite
php artisan migrate
```

### Error: Permission denied pada storage

```bash
chmod -R 775 storage bootstrap/cache
```

### Error: Vite dev server tidak jalan

```bash
rm -rf node_modules package-lock.json
npm install
npm run dev
```

## 📚 Referensi

- [Laravel Documentation](https://laravel.com/docs)
- [Tailwind CSS Documentation](https://tailwindcss.com/docs)
- [Pest PHP Documentation](https://pestphp.com/docs)
- [Vite Documentation](https://vite.dev)

## 👥 Kontributor

- **Developer**: Adi Wahyu ([@adiwp](https://github.com/adiwp))

## 📄 Lisensi

Aplikasi ini menggunakan framework Laravel yang berlisensi [MIT license](https://opensource.org/licenses/MIT).

---

<p align="center">
Made with ❤️ for SMP Mentari Ceria
</p>
