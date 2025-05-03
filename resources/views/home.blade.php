@extends('layouts.app')

@section('title', 'Event Management')

@section('content')
    {{-- Hero Section --}}
    <section class="flex flex-col w-full items-center justify-center min-h-screen px-4 py-16 bg-gradient-to-r from-gray-900 to-purple-900">
        <div class="flex flex-col max-w-3xl text-white">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4 text-center leading-tight">
                Temukan Event Terbaik <span class="block">di Indonesia</span>
            </h1>
            <p class="text-base md:text-lg lg:text-md text-center mb-8 text-gray-300 leading-relaxed">
                Platform event management terdepan yang menghubungkan penyelenggara<br>
                dengan peserta acara secara efisien dan menyenangkan.
            </p>
            <a href="#popular-event"
                class="flex justify-center mx-auto px-6 md:px-8 py-3 md:py-4 bg-gradient-to-r from-purple-600 to-blue-600 rounded-full font-semibold hover:from-purple-700 hover:to-blue-700 transition-all transform hover:scale-105 shadow-lg hover:shadow-xl">
                Lihat Event Populer
            </a>
        </div>
    </section>

    {{-- About Us Section --}}
    <section class="py-20 bg-gradient-to-b from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <span class="text-sm font-semibold text-purple-600 uppercase">Mengapa Memilih Kami</span>
                <h2 class="mt-2 text-3xl font-bold text-gray-900 sm:text-4xl lg:text-5xl">
                    Solusi Terbaik untuk
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600">Event Anda</span>
                </h2>
                <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-600">
                    Kami menyediakan segala yang Anda butuhkan untuk membuat event yang sukses dan berkesan.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl shadow-xl p-8 transform transition-all hover:shadow-2xl border border-gray-100">
                    <div class="bg-white shadow-xl rounded-full p-4 mb-4 flex items-center w-16 h-16    ">
                        <img src="https://cdn-icons-png.flaticon.com/512/1968/1968790.png" class="w-8 h-8 mb-4" alt="Icon 1">
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">Manajemen Mudah</h3>
                    <p class="text-gray-600">
                        Sistem kami dirancang untuk memudahkan Anda mengelola event dari awal hingga akhir dengan antarmuka
                        yang intuitif.
                    </p>
                </div>
                <div class="bg-white rounded-2xl shadow-xl p-8 transform transition-all hover:shadow-2xl border border-gray-100">                    
                    <div class="bg-white shadow-xl rounded-full p-4 mb-4 flex items-center w-16 h-16    ">
                        <img src="https://cdn-icons-png.flaticon.com/512/694/694642.png" class="w-8 h-8 mb-4" alt="Icon 1">
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">Jangkauan Luas</h3>
                    <p class="text-gray-600">
                        Promosikan event Anda ke ribuan pengguna aktif yang relevan dengan target pasar Anda.
                    </p>
                </div>

                <div class="bg-white rounded-2xl shadow-xl p-8 transform transition-all hover:shadow-2xl border border-gray-100">                    
                    <div class="bg-white shadow-xl rounded-full p-4 mb-4 flex items-center w-16 h-16    ">
                        <img src="https://cdn-icons-png.flaticon.com/512/777/777502.png" class="w-8 h-8 mb-4" alt="Icon 1">
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">Analitik Real-time</h3>
                    <p class="text-gray-600">
                        Dapatkan insight mendalam tentang performa event Anda dengan dashboard analitik yang komprehensif.
                    </p>
                </div>
            </div>
        </div>
    </section>    

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-purple-900 to-blue-900">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Siap Membuat Event Anda?</h2>
            <p class="text-xl text-purple-100 max-w-3xl mx-auto mb-8">
                Bergabunglah dengan ribuan penyelenggara yang telah mempercayai platform kami untuk membuat event mereka
                sukses.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('login') }}"
                    class="px-8 py-4 bg-white text-purple-900 rounded-full font-bold hover:bg-gray-100 transition transform hover:scale-105 shadow-lg">
                    Gabung Sekarang
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <span class="text-sm font-semibold tracking-wider text-purple-600 uppercase">Testimonial</span>
                <h2 class="mt-2 text-3xl font-bold text-gray-900 sm:text-4xl lg:text-5xl">Apa Kata 
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600">Mereka</span>
                </h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 hover:shadow-2xl ">
                    <div class="flex items-center gap-2 mb-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" class="w-4 h-4" alt="Star Icons">
                        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" class="w-4 h-4" alt="Star Icons">
                        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" class="w-4 h-4" alt="Star Icons">
                        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" class="w-4 h-4" alt="Star Icons">
                        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" class="w-4 h-4" alt="Star Icons">
                    </div>
                    <p class="text-gray-700 mb-6 italic">
                        "Bagus banget bro platformnya, saya sangat terbantu untuk memanage event saya yang besar banget ini. Semoga amal ibadah kamu diterima ya hehe. Thanks banget ya!"
                    </p>
                    <div class="flex items-center">
                        <img class="w-12 h-12 rounded-full object-cover mr-4"
                            src="https://randomuser.me/api/portraits/men/50.jpg" alt="Sarah Wijaya">
                        <div>
                            <h4 class="font-bold text-gray-900">Windah Basudara</h4>
                            <p class="text-gray-600 text-sm">Youtuber GG</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 hover:shadow-2xl ">
                    <div class="flex items-center gap-2 mb-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" class="w-4 h-4" alt="Star Icons">
                        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" class="w-4 h-4" alt="Star Icons">
                        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" class="w-4 h-4" alt="Star Icons">
                        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" class="w-4 h-4" alt="Star Icons">
                        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" class="w-4 h-4" alt="Star Icons">
                    </div>
                    <p class="text-gray-700 mb-6 italic">
                        "Platform ini sangat gampang banget buat kami mengelola event tahunan perusahaan. Dari pendaftaran
                        peserta hingga pembayaran, semuanya terintegrasi dengan baik."
                    </p>
                    <div class="flex items-center">
                        <img class="w-12 h-12 rounded-full object-cover mr-4"
                            src="https://randomuser.me/api/portraits/women/92.jpg" alt="Sarah Wijaya">
                        <div>
                            <h4 class="font-bold text-gray-900">Sarah Sehan</h4>
                            <p class="text-gray-600 text-sm">Event Manager</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 hover:shadow-2xl ">
                    <div class="flex items-center gap-2 mb-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" class="w-4 h-4" alt="Star Icons">
                        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" class="w-4 h-4" alt="Star Icons">
                        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" class="w-4 h-4" alt="Star Icons">
                        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" class="w-4 h-4" alt="Star Icons">
                        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" class="w-4 h-4" alt="Star Icons">
                    </div>
                    <p class="text-gray-700 mb-6 italic">
                        "Keren banget untuk event management. Saya jujur sudah 1 tahun menggunakan ini dan saya sangat puas terhadap apa yang sistem berikan. Semoga kamu masuk surga"
                    </p>
                    <div class="flex items-center">
                        <img class="w-12 h-12 rounded-full object-cover mr-4"
                            src="https://randomuser.me/api/portraits/men/12.jpg" alt="Sarah Wijaya">
                        <div>
                            <h4 class="font-bold text-gray-900">Joseph Wijaya</h4>
                            <p class="text-gray-600 text-sm">Model</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
