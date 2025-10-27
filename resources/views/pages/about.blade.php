@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto">
    <x-alert type="info" message="Selamat datang di halaman About!" />
    
    <div class="text-center mb-8">
        <h2 class="text-3xl font-bold mb-2 dark:text-white">Tentang Departemen Teknik Elektro</h2>
        <p class="text-gray-600 dark:text-gray-400">Universitas Diponegoro</p>
    </div>

    <div class="mb-8">
        <h3 class="text-2xl font-semibold mb-4 dark:text-white">Profil Dosen Pengampu</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <x-card 
                title="Dr. Ir. Ahmad Susanto, M.T." 
                body="Dosen mata kuliah Pemrograman Web. Spesialisasi: Web Development, Cloud Computing." 
            />
            <x-card 
                title="Dr. Eng. Siti Nurjanah, S.T., M.Kom." 
                body="Dosen mata kuliah Framework Laravel. Spesialisasi: Software Engineering, Database Systems." 
            />
            <x-card 
                title="Ir. Budi Hermawan, M.Sc." 
                body="Dosen mata kuliah UI/UX Design. Spesialisasi: Human-Computer Interaction, Design Thinking." 
            />
            <x-card 
                title="Prof. Dr. Retno Wulandari, S.T., M.T." 
                body="Dosen mata kuliah Sistem Informasi. Spesialisasi: Information Systems, Data Analytics." 
            />
        </div>
    </div>

    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow dark:shadow-gray-700">
        <h3 class="text-2xl font-semibold mb-3 dark:text-white">Visi</h3>
        <p class="text-gray-700 dark:text-gray-300 mb-4">
            Menjadi departemen teknik elektro yang unggul, inovatif, dan berdaya saing global dalam bidang pendidikan, penelitian, dan pengabdian masyarakat.
        </p>
        
        <h3 class="text-2xl font-semibold mb-3 dark:text-white">Misi</h3>
        <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 space-y-2">
            <li>Menyelenggarakan pendidikan berkualitas tinggi di bidang teknik elektro</li>
            <li>Melakukan penelitian yang inovatif dan bermanfaat bagi masyarakat</li>
            <li>Mengembangkan kerjasama dengan industri dan institusi pendidikan</li>
            <li>Menghasilkan lulusan yang kompeten dan beretika profesional</li>
        </ul>
    </div>
</div>
@endsection
