@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="text-center mb-10">
    <h2 class="text-4xl font-bold mb-3 text-gray-900 dark:text-white">Selamat Datang di Departemen Teknik Elektro</h2>
    <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">Platform portal mahasiswa berbasis Laravel Blade.</p>
    <div class="flex justify-center gap-4">
        <a href="/about" class="px-6 py-3 bg-undip-blue text-white rounded-lg hover:bg-blue-700 transition shadow-lg">
            Tentang Kami
        </a>
        <a href="/dashboard" class="px-6 py-3 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300 transition shadow-lg dark:bg-gray-700 dark:text-white">
            Lihat Dashboard
        </a>
    </div>
</div>

<!-- Info Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
    <x-card title="Akademik" body="Informasi jadwal kuliah, nilai mahasiswa, dan sistem informasi akademik terintegrasi." />
    <x-card title="Berita Kampus" body="Kegiatan, pengumuman terbaru, dan update informasi seputar kampus." />
    <x-card title="Organisasi" body="Daftar UKM, komunitas mahasiswa, dan kegiatan kemahasiswaan yang aktif di kampus." />
</div>

<!-- Statistics Section -->
<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8 mb-12">
    <h3 class="text-2xl font-bold text-center mb-8 dark:text-white">Statistik Departemen</h3>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="text-center">
            <div class="text-4xl font-bold text-undip-blue dark:text-blue-400 mb-2">1,245</div>
            <div class="text-gray-600 dark:text-gray-400">Mahasiswa Aktif</div>
        </div>
        <div class="text-center">
            <div class="text-4xl font-bold text-green-600 dark:text-green-400 mb-2">48</div>
            <div class="text-gray-600 dark:text-gray-400">Dosen Pengajar</div>
        </div>
        <div class="text-center">
            <div class="text-4xl font-bold text-purple-600 dark:text-purple-400 mb-2">15</div>
            <div class="text-gray-600 dark:text-gray-400">Laboratorium</div>
        </div>
        <div class="text-center">
            <div class="text-4xl font-bold text-orange-600 dark:text-orange-400 mb-2">3.45</div>
            <div class="text-gray-600 dark:text-gray-400">IPK Rata-rata</div>
        </div>
    </div>
</div>

<!-- Quick Links -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
    <div class="bg-gradient-to-br from-blue-500 to-blue-600 text-white rounded-lg shadow-lg p-6">
        <h3 class="text-2xl font-bold mb-3">Portal Akademik</h3>
        <p class="mb-4">Akses ke sistem informasi akademik, lihat jadwal kuliah, nilai, dan KRS online.</p>
        <a href="/dashboard" class="inline-block px-4 py-2 bg-white text-blue-600 rounded hover:bg-gray-100 transition">
            Akses Portal →
        </a>
    </div>
    <div class="bg-gradient-to-br from-green-500 to-green-600 text-white rounded-lg shadow-lg p-6">
        <h3 class="text-2xl font-bold mb-3">E-Learning</h3>
        <p class="mb-4">Platform pembelajaran online dengan materi kuliah, tugas, dan diskusi interaktif.</p>
        <a href="#" class="inline-block px-4 py-2 bg-white text-green-600 rounded hover:bg-gray-100 transition">
            Buka E-Learning →
        </a>
    </div>
</div>

<!-- News Section -->
<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
    <h3 class="text-2xl font-bold mb-6 dark:text-white">Berita & Pengumuman Terbaru</h3>
    <div class="space-y-4">
        <div class="border-l-4 border-undip-blue pl-4 py-2">
            <h4 class="font-semibold text-lg dark:text-white">Pendaftaran KKN Gelombang 2</h4>
            <p class="text-gray-600 dark:text-gray-400 text-sm mb-1">27 Oktober 2025</p>
            <p class="text-gray-700 dark:text-gray-300">Pendaftaran KKN gelombang 2 dibuka hingga 31 Oktober 2025. Segera daftarkan diri Anda!</p>
        </div>
        <div class="border-l-4 border-green-500 pl-4 py-2">
            <h4 class="font-semibold text-lg dark:text-white">Workshop Internet of Things</h4>
            <p class="text-gray-600 dark:text-gray-400 text-sm mb-1">25 Oktober 2025</p>
            <p class="text-gray-700 dark:text-gray-300">Departemen akan mengadakan workshop IoT pada tanggal 5 November 2025. Gratis untuk mahasiswa!</p>
        </div>
        <div class="border-l-4 border-purple-500 pl-4 py-2">
            <h4 class="font-semibold text-lg dark:text-white">Seminar Nasional Teknologi</h4>
            <p class="text-gray-600 dark:text-gray-400 text-sm mb-1">20 Oktober 2025</p>
            <p class="text-gray-700 dark:text-gray-300">Seminar nasional dengan tema "Teknologi untuk Indonesia Maju" akan diadakan bulan depan.</p>
        </div>
    </div>
</div>
@endsection
