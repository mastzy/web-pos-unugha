<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem POS UNUGHA - Pemrograman Web</title>
    <!-- Vite Asset Bundling untuk Tailwind CSS & JavaScript -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-800 antialiased min-h-screen flex flex-col justify-between">

    <!-- 1. NAVIGATION BAR -->
    <nav class="bg-white border-b border-slate-200 sticky top-0 z-50 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                
               <div class="flex items-center gap-3">
    <img src="{{ asset('images/logo.png') }}" alt="Logo UNUGHA" class="h-8 w-auto object-contain">
    <span class="font-bold text-slate-900 text-lg tracking-tight">
        Sistem Informasi <span class="text-unugha-green">UNUGHA</span>
    </span>
</div>

                <!-- Navigation Links -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#" class="text-unugha-green font-semibold border-b-2 border-unugha-green pb-1 transition">Home</a>
                    <a href="#" class="text-slate-600 hover:text-unugha-green transition font-medium">Katalog</a>
                    <a href="#" class="text-slate-600 hover:text-unugha-green transition font-medium">Kontak</a>
                </div>

                <!-- Action Button -->
                <div class="flex items-center">
                    <a href="#" class="bg-unugha-green text-white px-5 py-2 rounded-xl text-sm font-semibold shadow-md hover:opacity-90 transition">
                        Login
                    </a>
                </div>

            </div>
        </div>
    </nav>

    <!-- HEADER / HERO SECTION -->
    <header class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 pb-6 text-center">
        <span class="inline-block px-3 py-1 text-xs font-semibold tracking-wider text-green-800 bg-green-100 rounded-full uppercase mb-4">
            Praktikum SI UNUGHA
        </span>
        <h1 class="text-3xl md:text-5xl font-extrabold text-slate-900 tracking-tight">
            Sistem Point of Sale (POS) Modern
        </h1>
        <p class="mt-4 text-slate-600 max-w-2xl mx-auto text-sm md:text-base leading-relaxed">
            Platform manajemen transaksi, pengelolaan inventaris barang, dan pelaporan keuangan real-time berbasis Laravel 11 dan Tailwind CSS.
        </p>
    </header>

    <!-- 2. GRID FITUR UTAMA (3 CARDS) -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 mb-auto w-full">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <!-- Card Fitur 1 -->
            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition group">
                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center text-unugha-green mb-5 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 100 4 2 2 0 000-4z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Manajemen Transaksi Kasir</h3>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Pemrosesan transaksi cepat dengan kalkulasi otomatis, dukungan cetak struk, serta pencatatan riwayat transaksi secara terstruktur.
                </p>
            </div>

            <!-- Card Fitur 2 -->
            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition group">
                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center text-unugha-green mb-5 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Kontrol Stok & Produk</h3>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Manajemen data barang, kategorisasi produk, peringatan stok menipis, dan pembaruan inventaris barang secara akurat.
                </p>
            </div>

            <!-- Card Fitur 3 -->
            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition group">
                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center text-unugha-green mb-5 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Laporan Penjualan Real-time</h3>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Analisis ringkasan omset harian dan bulanan dengan visualisasi data yang informatif untuk mendukung pengambilan keputusan.
                </p>
            </div>

        </div>
    </main>

    <!-- FOOTER -->
    <footer class="bg-white border-t border-slate-200 py-6 mt-12 text-center text-xs text-slate-500">
        <p>&copy; 2026 Program Studi Sistem Informasi - FMIKOM UNUGHA Cilacap. All rights reserved.</p>
    </footer>

</body>
</html>