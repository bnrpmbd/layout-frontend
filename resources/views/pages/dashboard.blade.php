@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto">
    <x-alert type="success" message="Dashboard berhasil dimuat!" />
    
    <div class="text-center mb-8">
        <h2 class="text-3xl font-bold mb-2 dark:text-white">Dashboard Mahasiswa</h2>
        <p class="text-gray-600 dark:text-gray-400">Sistem Informasi Akademik</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-gradient-to-br from-blue-500 to-blue-600 text-white p-6 rounded-lg shadow-lg">
            <h3 class="text-lg font-semibold mb-2">Total Mahasiswa</h3>
            <p class="text-4xl font-bold">1,245</p>
            <p class="text-sm mt-2 opacity-90">Mahasiswa Aktif</p>
        </div>
        <div class="bg-gradient-to-br from-green-500 to-green-600 text-white p-6 rounded-lg shadow-lg">
            <h3 class="text-lg font-semibold mb-2">IPK Rata-rata</h3>
            <p class="text-4xl font-bold">3.45</p>
            <p class="text-sm mt-2 opacity-90">Semester Genap 2024/2025</p>
        </div>
        <div class="bg-gradient-to-br from-purple-500 to-purple-600 text-white p-6 rounded-lg shadow-lg">
            <h3 class="text-lg font-semibold mb-2">Dosen Aktif</h3>
            <p class="text-4xl font-bold">48</p>
            <p class="text-sm mt-2 opacity-90">Dosen Tetap & Tidak Tetap</p>
        </div>
    </div>

    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow dark:shadow-gray-700 mb-8">
        <h3 class="text-xl font-semibold mb-4 dark:text-white">Grafik Prestasi Mahasiswa</h3>
        <div class="h-64 flex items-end justify-around gap-4">
            <div class="flex flex-col items-center flex-1">
                <div class="bg-blue-500 w-full rounded-t" style="height: 180px;"></div>
                <p class="mt-2 text-sm font-medium dark:text-white">2021</p>
                <p class="text-xs text-gray-600 dark:text-gray-400">3.2</p>
            </div>
            <div class="flex flex-col items-center flex-1">
                <div class="bg-blue-500 w-full rounded-t" style="height: 200px;"></div>
                <p class="mt-2 text-sm font-medium dark:text-white">2022</p>
                <p class="text-xs text-gray-600 dark:text-gray-400">3.3</p>
            </div>
            <div class="flex flex-col items-center flex-1">
                <div class="bg-blue-500 w-full rounded-t" style="height: 220px;"></div>
                <p class="mt-2 text-sm font-medium dark:text-white">2023</p>
                <p class="text-xs text-gray-600 dark:text-gray-400">3.4</p>
            </div>
            <div class="flex flex-col items-center flex-1">
                <div class="bg-undip-blue w-full rounded-t" style="height: 240px;"></div>
                <p class="mt-2 text-sm font-medium dark:text-white">2024</p>
                <p class="text-xs text-gray-600 dark:text-gray-400">3.45</p>
            </div>
        </div>
        <p class="text-center text-sm text-gray-600 dark:text-gray-400 mt-4">IPK rata-rata per tahun akademik</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <x-card 
            title="Jadwal Kuliah Hari Ini" 
            body="Senin, 27 Oktober 2025: Pemrograman Web (08:00-10:00), Database (10:00-12:00), Framework Laravel (13:00-15:00)" 
        />
        <x-card 
            title="Pengumuman Terbaru" 
            body="Pendaftaran KKN gelombang 2 dibuka hingga 31 Oktober 2025. Info lengkap di portal akademik." 
        />
    </div>
</div>
@endsection
