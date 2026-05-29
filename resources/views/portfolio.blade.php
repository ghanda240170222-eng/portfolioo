<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ghanda Ramadhan | Portofolio Personal</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Phosphor Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind Config for Custom Colors & Dark Mode -->
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                        display: ['Syne', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#eff6ff',
                            500: '#3b82f6',
                            600: '#2563eb',
                            900: '#1e3a8a',
                        }
                    },
                    animation: {
                        'marquee': 'marquee 25s linear infinite',
                    },
                    keyframes: {
                        marquee: {
                            '0%': { transform: 'translateX(0%)' },
                            '100%': { transform: 'translateX(-100%)' },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        /* Custom Cursor */
        body { cursor: none; }
        .cursor-dot, .cursor-outline {
            position: fixed;
            top: 0; left: 0;
            transform: translate(-50%, -50%);
            border-radius: 50%;
            z-index: 9999;
            pointer-events: none;
        }
        .cursor-dot {
            width: 8px; height: 8px;
            background-color: #3b82f6;
        }
        .cursor-outline {
            width: 40px; height: 40px;
            border: 2px solid rgba(59, 130, 246, 0.5);
            transition: width 0.2s, height 0.2s, background-color 0.2s;
        }
        
        /* Preloader */
        #preloader {
            position: fixed;
            inset: 0;
            background: #0f172a;
            z-index: 10000;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: opacity 0.8s ease-out, visibility 0.8s ease-out;
        }
        .loader-text {
            font-family: 'Syne', sans-serif;
            font-size: 2rem;
            color: white;
            animation: pulse 1.5s infinite;
        }

        /* Scroll Reveal Classes */
        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s cubic-bezier(0.5, 0, 0, 1);
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Cinematic Gradient Text */
        .text-gradient {
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-image: linear-gradient(90deg, #3b82f6, #8b5cf6);
        }

        /* Hide Scrollbar for Marquee */
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

        @media (max-width: 768px) {
            body { cursor: auto; }
            .cursor-dot, .cursor-outline { display: none; }
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 dark:bg-slate-950 dark:text-gray-200 transition-colors duration-500 overflow-x-hidden selection:bg-brand-500 selection:text-white">

    <!-- Preloader -->
    <div id="preloader">
        <div class="loader-text font-bold">GRS.</div>
    </div>

    <!-- Custom Cursor -->
    <div class="cursor-dot hidden md:block"></div>
    <div class="cursor-outline hidden md:block"></div>

    <!-- Navbar -->
    <nav class="fixed w-full z-50 transition-all duration-300 backdrop-blur-md bg-white/70 dark:bg-slate-950/70 border-b border-gray-200 dark:border-slate-800" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <a href="#" class="font-display font-bold text-2xl tracking-tighter dark:text-white hover-trigger">
                    Ghanda<span class="text-brand-500">.</span>
                </a>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8 items-center font-medium text-sm">
                    <a href="#tentang" class="hover:text-brand-500 transition-colors hover-trigger">Tentang</a>
                    <a href="#pengalaman" class="hover:text-brand-500 transition-colors hover-trigger">Pengalaman</a>
                    <a href="#keahlian" class="hover:text-brand-500 transition-colors hover-trigger">Keahlian</a>
                    <a href="#kontak" class="hover:text-brand-500 transition-colors hover-trigger">Kontak</a>
                    
                    <!-- Dark Mode Toggle -->
                    <button id="theme-toggle" class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-slate-800 transition-colors hover-trigger">
                        <i class="ph ph-moon text-xl dark:hidden"></i>
                        <i class="ph ph-sun text-xl hidden dark:block text-yellow-400"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center pt-20 overflow-hidden">
        <!-- Background Decor -->
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-brand-500/20 rounded-full blur-3xl -z-10 animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-500/20 rounded-full blur-3xl -z-10 animate-pulse" style="animation-delay: 2s;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center z-10">
            <p class="text-brand-500 font-semibold tracking-widest uppercase text-sm mb-4 reveal">Portofolio Personal</p>
            <h1 class="font-display font-extrabold text-5xl md:text-7xl lg:text-8xl tracking-tight mb-6 reveal" style="transition-delay: 100ms;">
                Ghanda Ramadhan <br class="hidden md:block"/>
                <span class="text-gradient">Siregar</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto mb-10 reveal leading-relaxed" style="transition-delay: 200ms;">
                Halo! Saya seorang mahasiswa Teknik Informatika di Universitas Malikussaleh. Saya sangat antusias belajar hal-hal baru, terbiasa bekerja dalam tim, dan selalu berusaha memberikan dedikasi penuh pada setiap tanggung jawab yang saya pegang.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4 reveal" style="transition-delay: 300ms;">
                <a href="#kontak" class="px-8 py-4 bg-brand-600 hover:bg-brand-700 text-white rounded-full font-medium transition-all transform hover:scale-105 hover-trigger shadow-lg shadow-brand-500/30">
                    Mari Berdiskusi
                </a>
                <a href="#tentang" class="px-8 py-4 bg-white dark:bg-slate-900 border border-gray-200 dark:border-slate-700 hover:border-brand-500 dark:hover:border-brand-500 rounded-full font-medium transition-all hover-trigger">
                    Lebih Dekat
                </a>
            </div>
        </div>
    </section>

    <!-- Marquee Section -->
    <div class="py-6 bg-brand-600 text-white overflow-hidden transform -rotate-1 scale-110 shadow-xl z-20 relative">
        <div class="flex whitespace-nowrap animate-marquee">
            <!-- Repeated text for seamless scroll -->
            <div class="flex gap-8 items-center text-xl md:text-2xl font-display font-bold uppercase tracking-wider px-4">
                <span>Mahasiswa IT</span> <span><i class="ph-fill ph-star-four text-brand-200"></i></span>
                <span>Cepat Belajar</span> <span><i class="ph-fill ph-star-four text-brand-200"></i></span>
                <span>Hafiz Al-Qur'an Juz 1</span> <span><i class="ph-fill ph-star-four text-brand-200"></i></span>
                <span>Kerja Sama Tim</span> <span><i class="ph-fill ph-star-four text-brand-200"></i></span>
                <span>Disiplin & Jujur</span> <span><i class="ph-fill ph-star-four text-brand-200"></i></span>
                <span>Pelayanan Pelanggan</span> <span><i class="ph-fill ph-star-four text-brand-200"></i></span>
                <span>Mahasiswa IT</span> <span><i class="ph-fill ph-star-four text-brand-200"></i></span>
                <span>Cepat Belajar</span> <span><i class="ph-fill ph-star-four text-brand-200"></i></span>
                <span>Hafiz Al-Qur'an Juz 1</span> <span><i class="ph-fill ph-star-four text-brand-200"></i></span>
                <span>Kerja Sama Tim</span> <span><i class="ph-fill ph-star-four text-brand-200"></i></span>
            </div>
        </div>
    </div>

    <!-- Tentang Saya -->
    <section id="tentang" class="py-24 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                
                <div class="lg:col-span-4 relative reveal flex justify-center lg:justify-start">
                    <div class="w-64 h-80 sm:w-72 sm:h-[350px] rounded-3xl overflow-hidden relative group shadow-2xl">
                        <!-- CATATAN UNTUK LARAVEL: Ganti src dengan {{ asset('images/photo-profil.jpg') }} -->
                        <img src="{{ asset('images/photo-profil.jpg') }}" 
                             alt="Ghanda Ramadhan" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-6">
                            <p class="text-white font-display text-lg tracking-wide">Deli Serdang, Sumut</p>
                        </div>
                    </div>
                    <!-- Decorative Element -->
                    <div class="absolute -bottom-6 -right-2 lg:-right-6 w-32 h-32 bg-brand-500 rounded-full blur-2xl opacity-40 -z-10"></div>
                </div>
                
                <!-- Deskripsi Lebih Humanis -->
                <div class="lg:col-span-8 space-y-6 reveal" style="transition-delay: 200ms;">
                    <div>
                        <h2 class="font-display text-4xl md:text-5xl font-bold mb-4">Kenalan Sedikit, Yuk.</h2>
                        <div class="w-20 h-1 bg-brand-500 rounded-full"></div>
                    </div>
                    <div class="space-y-5 text-gray-600 dark:text-gray-400 text-lg leading-relaxed">
                        <p>
                            Perkenalkan, saya Ghanda. Saat ini saya sedang menikmati masa kuliah sebagai mahasiswa <strong class="text-gray-900 dark:text-white font-semibold">Teknik Informatika di Universitas Malikussaleh</strong>. Buat saya, dunia kampus bukan sekadar datang ke kelas untuk mengejar nilai akademik, tapi juga jadi tempat terbaik untuk melatih cara kita berkomunikasi, disiplin waktu, dan belajar berkolaborasi dengan banyak kepala yang berbeda.
                        </p>
                        <p>
                            Di luar jam kuliah, saya rutin meluangkan waktu untuk membantu usaha keluarga di <strong>Toko Rizghan</strong>. Pengalaman jaga toko ini kelihatannya sepele, tapi dari sinilah saya benar-benar belajar banyak hal praktis. Saya terbiasa menghadapi berbagai macam karakter pembeli, sabar melayani keluhan, mengontrol stok barang agar tidak berantakan, sampai memahami ritme penjualan harian. Terjun langsung berhadapan dengan pelanggan ternyata sangat membantu melatih mental dan kepekaan saya.
                        </p>
                        
                        <div class="bg-brand-50 dark:bg-slate-900 p-6 rounded-2xl border-l-4 border-brand-500 shadow-sm mt-6">
                            <p class="italic text-gray-700 dark:text-gray-300 font-medium">
                                "Secara personal, saya juga menjaga hafalan Al-Qur'an Juz 1. Hal ini mungkin terkesan personal, tapi rutinitas inilah yang selalu menjadi pengingat harian saya untuk terus berpegang pada prinsip kedisiplinan, kejujuran, dan tanggung jawab dalam setiap hal yang saya kerjakan."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pengalaman & Pendidikan -->
    <section id="pengalaman" class="py-24 bg-white dark:bg-slate-900 transition-colors duration-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <h2 class="font-display text-4xl md:text-5xl font-bold mb-4">Jejak Langkah & Pengalaman</h2>
                <p class="text-gray-600 dark:text-gray-400 text-lg">Proses belajar dari pendidikan dan praktik di lapangan.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">
                <!-- Kolom Pengalaman -->
                <div class="reveal">
                    <h3 class="text-2xl font-bold mb-8 flex items-center gap-3">
                        <i class="ph-fill ph-briefcase text-brand-500 text-3xl"></i> Pengalaman Nyata
                    </h3>
                    <div class="relative border-l-2 border-brand-200 dark:border-slate-700 ml-4 space-y-10">
                        
                        <!-- Pengalaman 1 -->
                        <div class="relative pl-8 hover-trigger group">
                            <span class="absolute -left-[11px] top-1 w-5 h-5 rounded-full bg-brand-500 ring-4 ring-white dark:ring-slate-900 group-hover:scale-125 transition-transform duration-300"></span>
                            <div class="bg-gray-50 dark:bg-slate-800 p-6 sm:p-8 rounded-2xl border border-gray-100 dark:border-slate-700 shadow-sm group-hover:shadow-xl group-hover:-translate-y-1 transition-all duration-300">
                                <h4 class="text-xl font-bold text-gray-900 dark:text-white">Membantu Usaha Keluarga</h4>
                                <p class="text-brand-600 dark:text-brand-400 font-medium text-sm mb-5">Toko Rizghan</p>
                                <ul class="text-gray-600 dark:text-gray-400 text-[15px] space-y-3 list-disc ml-5 leading-relaxed">
                                    <li>Berinteraksi langsung dan melayani pelanggan dengan pendekatan yang ramah dan sabar.</li>
                                    <li>Menangani dan memastikan setiap proses transaksi penjualan harian berjalan lancar.</li>
                                    <li>Merapikan, menata, dan melakukan pengecekan stok barang secara berkala agar ketersediaan selalu terjaga.</li>
                                    <li>Bertanggung jawab penuh atas kebersihan dan kenyamanan area toko bagi pelanggan.</li>
                                    <li>Belajar membaca situasi pasar kecil dan merespons apa yang sebenarnya dibutuhkan oleh pembeli di sekitar lingkungan.</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Pengalaman 2 -->
                        <div class="relative pl-8 hover-trigger group">
                            <span class="absolute -left-[11px] top-1 w-5 h-5 rounded-full bg-gray-300 dark:bg-slate-600 ring-4 ring-white dark:ring-slate-900 group-hover:bg-brand-500 transition-colors duration-300"></span>
                            <div class="bg-gray-50 dark:bg-slate-800 p-6 sm:p-8 rounded-2xl border border-gray-100 dark:border-slate-700 shadow-sm group-hover:shadow-xl group-hover:-translate-y-1 transition-all duration-300">
                                <h4 class="text-xl font-bold text-gray-900 dark:text-white">Aktivitas Kemahasiswaan</h4>
                                <p class="text-brand-600 dark:text-brand-400 font-medium text-sm mb-5">Universitas Malikussaleh</p>
                                <ul class="text-gray-600 dark:text-gray-400 text-[15px] space-y-3 list-disc ml-5 leading-relaxed">
                                    <li>Terlibat dalam berbagai kegiatan kampus, baik yang sifatnya akademik maupun non-akademik.</li>
                                    <li>Aktif berdiskusi di dalam kelas dan saling bertukar pikiran dengan sesama mahasiswa.</li>
                                    <li>Sering berkolaborasi dalam tugas kelompok, yang melatih saya untuk membagi tugas dan menyatukan berbagai ide yang berbeda.</li>
                                    <li>Selalu siap membantu sebagai panitia atau relawan apabila kampus sedang mengadakan acara tertentu.</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Kolom Pendidikan -->
                <div class="reveal" style="transition-delay: 200ms;">
                    <h3 class="text-2xl font-bold mb-8 flex items-center gap-3">
                        <i class="ph-fill ph-graduation-cap text-brand-500 text-3xl"></i> Riwayat Pendidikan
                    </h3>
                    <div class="relative border-l-2 border-gray-200 dark:border-slate-700 ml-4 space-y-10 mt-6">
                        
                        <!-- Univ -->
                        <div class="relative pl-8 group">
                            <span class="absolute -left-[11px] top-1 w-5 h-5 rounded-full bg-brand-500 ring-4 ring-white dark:ring-slate-900 group-hover:scale-125 transition-transform duration-300"></span>
                            <h4 class="text-xl font-bold text-gray-900 dark:text-white">Universitas Malikussaleh</h4>
                            <p class="text-gray-500 dark:text-gray-400 mt-1">Mahasiswa Aktif (Teknik Informatika)</p>
                        </div>
                        
                        <!-- SMA -->
                        <div class="relative pl-8 group">
                            <span class="absolute -left-[11px] top-1 w-5 h-5 rounded-full bg-gray-300 dark:bg-slate-600 ring-4 ring-white dark:ring-slate-900 group-hover:bg-brand-500 transition-colors duration-300"></span>
                            <h4 class="text-xl font-bold text-gray-900 dark:text-white">MAN 2 Deli Serdang</h4>
                            <p class="text-gray-500 dark:text-gray-400 mt-1">Lulus Tahun 2024</p>
                        </div>

                        <!-- SMP -->
                        <div class="relative pl-8 group">
                            <span class="absolute -left-[11px] top-1 w-5 h-5 rounded-full bg-gray-300 dark:bg-slate-600 ring-4 ring-white dark:ring-slate-900 group-hover:bg-brand-500 transition-colors duration-300"></span>
                            <h4 class="text-xl font-bold text-gray-900 dark:text-white">MTsS Yapni</h4>
                            <p class="text-gray-500 dark:text-gray-400 mt-1">Lulus Tahun 2021</p>
                        </div>

                        <!-- SD -->
                        <div class="relative pl-8 group">
                            <span class="absolute -left-[11px] top-1 w-5 h-5 rounded-full bg-gray-300 dark:bg-slate-600 ring-4 ring-white dark:ring-slate-900 group-hover:bg-brand-500 transition-colors duration-300"></span>
                            <h4 class="text-xl font-bold text-gray-900 dark:text-white">SD Negeri 107982</h4>
                            <p class="text-gray-500 dark:text-gray-400 mt-1">Lulus Tahun 2018</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Keahlian Lengkap -->
    <section id="keahlian" class="py-24 relative overflow-hidden bg-gray-50 dark:bg-slate-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 reveal">
                <h2 class="font-display text-4xl md:text-5xl font-bold mb-4">Keahlian & Soft Skills</h2>
                <p class="text-gray-600 dark:text-gray-400 text-lg">Kemampuan yang terus saya asah dari waktu ke waktu.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6 reveal">
                <!-- Skill 1 -->
                <div class="bg-white dark:bg-slate-800 p-6 rounded-2xl border border-gray-100 dark:border-slate-700 shadow-sm hover:shadow-lg hover:border-brand-500 dark:hover:border-brand-500 transition-all duration-300 group hover-trigger flex flex-col items-center justify-center text-center">
                    <i class="ph-fill ph-chats-circle text-4xl text-gray-400 group-hover:text-brand-500 transition-colors mb-3"></i>
                    <h4 class="font-bold text-gray-900 dark:text-white">Komunikasi<br>Interpersonal</h4>
                </div>
                <!-- Skill 2 -->
                <div class="bg-white dark:bg-slate-800 p-6 rounded-2xl border border-gray-100 dark:border-slate-700 shadow-sm hover:shadow-lg hover:border-brand-500 dark:hover:border-brand-500 transition-all duration-300 group hover-trigger flex flex-col items-center justify-center text-center">
                    <i class="ph-fill ph-users-three text-4xl text-gray-400 group-hover:text-brand-500 transition-colors mb-3"></i>
                    <h4 class="font-bold text-gray-900 dark:text-white">Kerja Sama<br>Tim</h4>
                </div>
                <!-- Skill 3 -->
                <div class="bg-white dark:bg-slate-800 p-6 rounded-2xl border border-gray-100 dark:border-slate-700 shadow-sm hover:shadow-lg hover:border-brand-500 dark:hover:border-brand-500 transition-all duration-300 group hover-trigger flex flex-col items-center justify-center text-center">
                    <i class="ph-fill ph-handshake text-4xl text-gray-400 group-hover:text-brand-500 transition-colors mb-3"></i>
                    <h4 class="font-bold text-gray-900 dark:text-white">Pelayanan<br>Pelanggan</h4>
                </div>
                <!-- Skill 4 -->
                <div class="bg-white dark:bg-slate-800 p-6 rounded-2xl border border-gray-100 dark:border-slate-700 shadow-sm hover:shadow-lg hover:border-brand-500 dark:hover:border-brand-500 transition-all duration-300 group hover-trigger flex flex-col items-center justify-center text-center">
                    <i class="ph-fill ph-brain text-4xl text-gray-400 group-hover:text-brand-500 transition-colors mb-3"></i>
                    <h4 class="font-bold text-gray-900 dark:text-white">Cepat Belajar<br>& Adaptif</h4>
                </div>
                <!-- Skill 5 -->
                <div class="bg-white dark:bg-slate-800 p-6 rounded-2xl border border-gray-100 dark:border-slate-700 shadow-sm hover:shadow-lg hover:border-brand-500 dark:hover:border-brand-500 transition-all duration-300 group hover-trigger flex flex-col items-center justify-center text-center">
                    <i class="ph-fill ph-shield-check text-4xl text-gray-400 group-hover:text-brand-500 transition-colors mb-3"></i>
                    <h4 class="font-bold text-gray-900 dark:text-white">Disiplin &<br>Tanggung Jawab</h4>
                </div>
                <!-- Skill 6 -->
                <div class="bg-white dark:bg-slate-800 p-6 rounded-2xl border border-gray-100 dark:border-slate-700 shadow-sm hover:shadow-lg hover:border-brand-500 dark:hover:border-brand-500 transition-all duration-300 group hover-trigger flex flex-col items-center justify-center text-center">
                    <i class="ph-fill ph-storefront text-4xl text-gray-400 group-hover:text-brand-500 transition-colors mb-3"></i>
                    <h4 class="font-bold text-gray-900 dark:text-white">Dasar Pengelolaan<br>Toko & Penjualan</h4>
                </div>
                <!-- Skill 7 -->
                <div class="bg-white dark:bg-slate-800 p-6 rounded-2xl border border-gray-100 dark:border-slate-700 shadow-sm hover:shadow-lg hover:border-brand-500 dark:hover:border-brand-500 transition-all duration-300 group hover-trigger flex flex-col items-center justify-center text-center">
                    <i class="ph-fill ph-file-word text-4xl text-gray-400 group-hover:text-brand-500 transition-colors mb-3"></i>
                    <h4 class="font-bold text-gray-900 dark:text-white">Microsoft<br>Word</h4>
                </div>
                <!-- Skill 8 -->
                <div class="bg-white dark:bg-slate-800 p-6 rounded-2xl border border-gray-100 dark:border-slate-700 shadow-sm hover:shadow-lg hover:border-brand-500 dark:hover:border-brand-500 transition-all duration-300 group hover-trigger flex flex-col items-center justify-center text-center">
                    <i class="ph-fill ph-projector-screen text-4xl text-gray-400 group-hover:text-brand-500 transition-colors mb-3"></i>
                    <h4 class="font-bold text-gray-900 dark:text-white">Microsoft<br>PowerPoint</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Motto / Cinematic Quote Section (Replacement for Testimonials) -->
    <section class="py-24 bg-brand-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
        <div class="absolute -top-24 -right-24 w-64 h-64 bg-brand-500 rounded-full blur-3xl opacity-50"></div>
        
        <div class="max-w-4xl mx-auto px-4 text-center relative z-10 reveal">
            <i class="ph-fill ph-quotes text-6xl text-brand-400/50 mb-6 inline-block"></i>
            <h2 class="font-display text-3xl md:text-5xl font-bold leading-tight mb-8">
                "Terus belajar, berusaha, dan selalu berusaha berkembang agar bisa menjadi pribadi yang bermanfaat buat orang di sekitar kita."
            </h2>
            <div class="w-16 h-1 bg-brand-500 mx-auto rounded-full mb-4"></div>
            <p class="text-brand-200 tracking-widest uppercase text-sm font-semibold">Prinsip & Motto Hidup</p>
        </div>
    </section>

    <!-- Hubungi Saya -->
    <section id="kontak" class="py-24 bg-white dark:bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <h2 class="font-display text-4xl md:text-5xl font-bold mb-4">Mari Terhubung</h2>
                <p class="text-gray-600 dark:text-gray-400 text-lg">Jangan ragu untuk menghubungi saya jika ada pertanyaan atau peluang kerja sama.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Info Kontak & Socials -->
                <div class="space-y-8 reveal">
                    <div class="bg-gray-50 dark:bg-slate-800 rounded-3xl p-8 border border-gray-100 dark:border-slate-700">
                        <h3 class="text-2xl font-bold mb-6 dark:text-white">Informasi Kontak</h3>
                        
                        <div class="space-y-6">
                            <a href="mailto:ghandaramadhan70@gmail.com" class="flex items-center gap-4 text-gray-600 dark:text-gray-400 hover:text-brand-500 transition-colors group hover-trigger">
                                <div class="w-12 h-12 rounded-full bg-white dark:bg-slate-900 flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform">
                                    <i class="ph-fill ph-envelope-simple text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-400 dark:text-gray-500">Kirim Email ke</p>
                                    <p class="font-medium text-[15px]">ghanda.240170222@mhs.unimal.ac.id</p>
                                </div>
                            </a>
                            
                            <a href="https://wa.me/6285891437031" target="_blank" class="flex items-center gap-4 text-gray-600 dark:text-gray-400 hover:text-green-500 transition-colors group hover-trigger">
                                <div class="w-12 h-12 rounded-full bg-white dark:bg-slate-900 flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform">
                                    <i class="ph-fill ph-whatsapp-logo text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-400 dark:text-gray-500">Chat WhatsApp</p>
                                    <p class="font-medium">+62 858-9143-7031</p>
                                </div>
                            </a>
                        </div>

                        <hr class="my-8 border-gray-200 dark:border-slate-700">

                        <h3 class="text-lg font-bold mb-4 dark:text-white">Mampir ke Media Sosial Saya</h3>
                        <div class="flex gap-4">
                            <!-- Facebook -->
                            <a href="#" class="w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center shadow-md hover:-translate-y-1 hover:shadow-lg transition-all hover-trigger" title="Ghanda Ramadhan">
                                <i class="ph-fill ph-facebook-logo text-2xl"></i>
                            </a>
                            <!-- Instagram -->
                            <a href="#" class="w-12 h-12 rounded-full bg-gradient-to-tr from-yellow-400 via-pink-500 to-purple-500 text-white flex items-center justify-center shadow-md hover:-translate-y-1 hover:shadow-lg transition-all hover-trigger" title="@ghandarmdhn.srg_">
                                <i class="ph-fill ph-instagram-logo text-2xl"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Form & Maps -->
                <div class="space-y-8 reveal" style="transition-delay: 200ms;">
                    <!-- Email Form -->
                    <form class="bg-gray-50 dark:bg-slate-800 rounded-3xl p-8 border border-gray-100 dark:border-slate-700 space-y-4">
                        <h3 class="text-2xl font-bold mb-4 dark:text-white">Kirim Pesan Langsung</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <input type="text" placeholder="Nama lengkap kamu..." class="w-full px-4 py-3 rounded-xl bg-white dark:bg-slate-900 border border-gray-200 dark:border-slate-700 focus:outline-none focus:ring-2 focus:ring-brand-500 dark:text-white transition-all hover-trigger">
                            <input type="email" placeholder="Alamat email kamu..." class="w-full px-4 py-3 rounded-xl bg-white dark:bg-slate-900 border border-gray-200 dark:border-slate-700 focus:outline-none focus:ring-2 focus:ring-brand-500 dark:text-white transition-all hover-trigger">
                        </div>
                        <textarea rows="4" placeholder="Tulis pesan yang ingin kamu sampaikan di sini..." class="w-full px-4 py-3 rounded-xl bg-white dark:bg-slate-900 border border-gray-200 dark:border-slate-700 focus:outline-none focus:ring-2 focus:ring-brand-500 dark:text-white transition-all resize-none hover-trigger"></textarea>
                        <button type="button" class="w-full py-3 bg-brand-600 hover:bg-brand-700 text-white rounded-xl font-medium transition-colors shadow-md hover:shadow-lg hover-trigger flex items-center justify-center gap-2">
                            Kirim Pesan <i class="ph ph-paper-plane-right"></i>
                        </button>
                    </form>

                    <!-- Google Maps Embed -->
                    <div class="rounded-3xl overflow-hidden border border-gray-100 dark:border-slate-700 shadow-sm h-64 hover-trigger relative group">
                        <div class="absolute inset-0 bg-black/40 hidden group-hover:flex items-center justify-center transition-all duration-300 z-10 pointer-events-none">
                            <span class="bg-white text-black px-4 py-2 rounded-full text-sm font-semibold shadow-lg">Lokasi Saya</span>
                        </div>
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15929.5085444585!2d98.8653!3d3.5574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031405e3f4b46b5%3A0xcab3f77b91d2c6!2sPaluh%20Kemiri%2C%20Lubuk%20Pakam%2C%20Deli%20Serdang%20Regency%2C%20North%20Sumatra!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            class="filter dark:invert-[90%] dark:hue-rotate-180 transition-all duration-500 relative z-0">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 bg-gray-50 dark:bg-slate-950 border-t border-gray-200 dark:border-slate-800 text-center">
        <p class="text-gray-500 dark:text-gray-400 text-sm">
            © 2024 Ghanda Ramadhan Siregar. All rights reserved. <br/>
            <span class="text-xs mt-1 inline-block">Portofolio Pribadi — Mahasiswa Teknik Informatika</span>
        </p>
    </footer>

    <!-- Scripts -->
    <script>
        // Preloader Logic
        window.addEventListener('load', () => {
            const preloader = document.getElementById('preloader');
            setTimeout(() => {
                preloader.style.opacity = '0';
                preloader.style.visibility = 'hidden';
            }, 800); // Cinematic delay
        });

        // Dark Mode Toggle Logic
        const themeToggleBtn = document.getElementById('theme-toggle');
        const html = document.documentElement;
        
        // Check local storage or system preference
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            html.classList.add('dark');
        } else {
            html.classList.remove('dark');
        }

        themeToggleBtn.addEventListener('click', () => {
            html.classList.toggle('dark');
            if (html.classList.contains('dark')) {
                localStorage.theme = 'dark';
            } else {
                localStorage.theme = 'light';
            }
        });

        // Scroll Reveal Animation (Intersection Observer)
        const revealElements = document.querySelectorAll('.reveal');
        
        const revealCallback = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        };

        const revealOptions = {
            threshold: 0.15, 
            rootMargin: "0px 0px -50px 0px"
        };

        const revealObserver = new IntersectionObserver(revealCallback, revealOptions);
        revealElements.forEach(el => revealObserver.observe(el));

        // Custom Cursor Logic (Only runs on desktop)
        if (window.innerWidth > 768) {
            const cursorDot = document.querySelector('.cursor-dot');
            const cursorOutline = document.querySelector('.cursor-outline');
            const hoverTriggers = document.querySelectorAll('.hover-trigger, a, button, input, textarea');

            window.addEventListener('mousemove', (e) => {
                const posX = e.clientX;
                const posY = e.clientY;

                cursorDot.style.left = `${posX}px`;
                cursorDot.style.top = `${posY}px`;

                cursorOutline.animate({
                    left: `${posX}px`,
                    top: `${posY}px`
                }, { duration: 500, fill: "forwards" });
            });

            // Hover effect for cursor
            hoverTriggers.forEach(trigger => {
                trigger.addEventListener('mouseenter', () => {
                    cursorOutline.style.width = '60px';
                    cursorOutline.style.height = '60px';
                    cursorOutline.style.backgroundColor = 'rgba(59, 130, 246, 0.1)';
                });
                trigger.addEventListener('mouseleave', () => {
                    cursorOutline.style.width = '40px';
                    cursorOutline.style.height = '40px';
                    cursorOutline.style.backgroundColor = 'transparent';
                });
            });
        }
    </script>
</body>
</html>