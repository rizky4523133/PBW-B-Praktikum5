@extends('layouts.app')

@section('title', 'Selamat Datang di SMP Mentari')

@section('content')
    <div class="text-center mb-8">
        <h1 class="text-4xl font-bold text-gray-800">Kegiatan Terbaru di SMP Mentari</h1>
        <p class="text-lg text-gray-600 mt-2">Selamat datang di website resmi kami. Berikut adalah beberapa kegiatan yang telah kami laksanakan.</p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h3 class="text-xl font-semibold mb-2">Lomba 17 Agustus</h3>
            <p class="text-gray-700">Siswa-siswi mengikuti lomba balap karung dan makan kerupuk dengan penuh semangat.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h3 class="text-xl font-semibold mb-2">Pekan Olahraga Sekolah</h3>
            <p class="text-gray-700">Pertandingan futsal dan bulu tangkis antar kelas untuk meningkatkan sportivitas.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h3 class="text-xl font-semibold mb-2">Kunjungan ke Museum</h3>
            <p class="text-gray-700">Para siswa belajar sejarah secara langsung dengan mengunjungi museum nasional.</p>
        </div>
    </div>
@endsection