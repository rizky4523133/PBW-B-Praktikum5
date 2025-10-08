# Changelog - Aplikasi SMP Mentari

Semua perubahan penting pada proyek ini akan didokumentasikan dalam file ini.

Format dokumen ini berdasarkan [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
dan proyek ini mengikuti [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased] - 2025-10-08

### Added - Fitur Autentikasi dan Dashboard (Belum di-commit)
- ✨ Sistem autentikasi lengkap dengan Laravel Breeze
- 📊 Dashboard admin dengan statistik
- 🔐 Middleware auth dan verified
- 👤 Profile management untuk user
- 📝 CRUD Kegiatan dengan upload gambar
- 📚 Admin panel untuk Buku Tamu (lihat & hapus)
- ⚙️ Sistem Settings dengan caching
- 🎨 Pagination dinamis pada homepage
- 📱 Responsive design dengan Tailwind CSS

### Changed - Homepage dan Layout (Belum di-commit)
- 🔄 Homepage sekarang mengambil data kegiatan dari database
- 📄 Pagination pada daftar kegiatan (configurable via Settings)
- 🎨 Layout baru untuk admin panel dengan sidebar
- 🔗 Route struktur yang lebih baik dengan grup auth

## [v1.1.0] - 2025-10-08

Commit: `d8f937d` - "Test dengan PEST"

### Added - Testing Framework
- ✅ **Feature Tests untuk PesanTamu** (`tests/Feature/PesanTamuTest.php`)
  - 14 test cases untuk testing integrasi
  - Test CRUD operations
  - Test validasi form
  - Test edge cases dan error handling
  
- ✅ **Unit Tests untuk PesanTamu Model** (`tests/Unit/PesanTamuTest.php`)
  - 19 test cases untuk testing model
  - Test model properties dan relationships
  - Test fillable attributes
  - Test type casting dan serialization

- 📚 **Dokumentasi Testing** 
  - `tests/TEST_SUMMARY.md` - Ringkasan semua test cases (265 baris)
  - `tests/TEST_EXAMPLES.md` - Pattern dan contoh testing (539 baris)

### Changed
- 📖 **README.md diperluas** (+122 baris)
  - Tambah section Testing
  - Tambah instruksi setup yang lebih detail
  - Tambah dokumentasi struktur file
  - Tambah badge dan status proyek

### Test Results
```
Tests:    35 passed (84 assertions)
Duration: 1.37s
Status:   ✅ ALL TESTS PASSING
```

### Test Coverage
- **Feature Tests**: 14 tests
  - Public access tests
  - Form submission tests
  - Validation tests
  - Edge cases tests
  
- **Unit Tests**: 19 tests
  - Model structure tests
  - Attribute tests
  - Relationship tests
  - Serialization tests

## [v1.0.0] - 2025-10-08

Commit: `513de03` - "Aplikasi SMP Mentari"

### Added - Initial Release
- 🎉 Setup awal aplikasi Laravel
- 📝 Model PesanTamu untuk buku tamu
- 🗄️ Database migration untuk pesan_tamus
- 🌐 Halaman home dengan daftar kegiatan (hardcoded)
- 📬 Form buku tamu untuk pengunjung
- 🎨 Styling dengan Tailwind CSS
- 📱 Responsive layout

### Tech Stack
- Laravel 12.33.0
- PHP 8.3.26
- Tailwind CSS 4.0
- Vite 7.0
- SQLite Database
- Pest PHP 4.1 (Testing Framework)

---

## Legend
- ✨ = New Feature
- 🐛 = Bug Fix
- 📚 = Documentation
- ⚙️ = Configuration
- 🎨 = Styling
- 🔒 = Security
- ⚡ = Performance
- 🔥 = Removed
- 📝 = Content
- 🔄 = Changed
- ✅ = Test
