<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luarsekolah</title>
    <link rel="stylesheet" href="{{asset('css/homepage.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>
<body>
    <!-- Navigasi Sec Start -->
    <header class="nav-sec">
        <div class="navbar">
            <div class= "menu">
                <a href=""><img src="{{ asset('assets/LS-logo.png') }}" alt=""></a>          
            </div>

            <div class="search">              
                <input type="text" placeholder="Cari program Pelatihan">
                <div class="search-icon">
                    <img src="{{asset('assets/search_icon.png')}}" alt="">
                </div>
                <div class="cross-icon hidden">
                    <img src="{{asset('assets/cross_icon.png')}}" alt="">
                </div>
            </div>

            <div class="auth-btn">
                <button>Masuk</button>
                <button>Daftar</button>
            </div>
        </div>
    </header>
    <!-- Navigasi Sec End -->

    <!-- Hero Sec Start -->
     <section class="hero-sec">
        <div class="hero-decor">
            <div class="decor1">
                <div class="star-item1">
                    <img src="{{asset('assets/asset4.png')}}" alt="">
                </div>
                <div class="star-item2">
                    <img src="{{asset('assets/asset4.png')}}" alt="">
                </div>
                <div class="shape1">
                    <div class="shape1-content">
                        <h3>Program-program Luarsekolah</h3>

                        <div class="hero-card-list">
                            <div class="hero-card">
                                <div class="hero-card-content">                    
                                    <a href="">Prakerja</a>
                                </div>
                                <div class="circle"><img src="{{asset('assets/arrow.png')}}" alt=""></div>
                            </div>
                            <div class="hero-card">
                                <div class="hero-card-content">
                                    <a href="">Belajar<br>Bekerja</a>   
                                </div>
                                <div class="circle"><img src="{{asset('assets/arrow.png')}}" alt=""></div>
                            </div>
                            <div class="hero-card">
                                <div class="hero-card-content">
                                    <a href="">Prakerja<br>ISW</a>
                                </div>
                                <div class="circle"><img src="{{asset('assets/arrow.png')}}" alt=""></div>
                            </div>
                        </div>

                        <div class="question">
                            <a href="">Tanya-tanya Seputar Kelas</a>
                            <img src="{{asset('assets/right-arrow.png')}}" alt="">
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="decor2">
                <div class="shape2">
                </div>

                <div class="teks-decor">
                    <p>#</p>
                    <p>Sampai</p>
                    <p>Jadi</p>
                    <p>Bisa</p>
                </div>

                <div class="woman">
                    <img src="{{asset('assets/asset1.png')}}" alt="">
                </div>
            </div>          
        </div>
        

        <div class="hero-content">
            <div class="content-h3">
                <h3>Upgrade skill kamu</h3>
            </div>

            <div class="content">
                <h2>Mulai dari nol sampai jago,<br>semuanya bisa. Yuk belajar<br>bareng Luarsekolah</h2>

                <p>Luarsekolah adalah platform edukasi vokasi dan<br>pengembangan diri berbasis teknologi digital dengan<br>materi-materi terkurasi dari para pengajar berpengalaman<br>untuk mendampingi generasi muda Indonesia belajar</p>
            </div>
        </div>

        <div class="redeem-vcr">
            <h3>Kamu pengguna Prakerja?</h3>
            <p>Segera redeem voucher Prakerja mu sekarang juga</p>
            
            <div class="redeem-act">
                <a href="">Redeem Voucher Prakerjamu Sekarang</a>
                <img src="{{asset('assets/right-arrow.png')}}" alt="">
            </div>
        </div>

        <div class="hero-achive">
            <div class="achive-item">
                <p>700+</p>
                <p>Talenta Bergabung</p>
            </div>
            <div class="achive-item">
                <p>100+</p>
                <p>Portfolio</p>
            </div>
            <div class="achive-item">
                <p>88%</p>
                <p>Kepuasan Talenta</p>
            </div>
            <div class="achive-item">
                <p>20+</p>
                <p>Partner telah </p>
            </div>
        </div>
     </section>
    <!-- Hero Sec End -->

    <!-- Banner Sec Start -->
     <section class="banner-sec">
        <div>
            <div class="banner-nav">
                <div class="banner-arrow-left">
                    <a href=""><img src="{{asset('assets/left-arrow.png')}}" alt=""></a>
                </div>
                <div class="banner-arrow-right">
                    <a href=""><img src="{{asset('assets/right-arrow.png')}}" alt=""></a>
                </div>
            </div>
            
            <div class="banner-wrap swiper">
                <div class="banner-list swiper-wrapper">
                    <div class="banner-item ">
                        <a href=""><img src="{{asset('assets/banner3.png')}}" alt=""></a>
                    </div>
                    <div class="banner-item active">
                        <a href=""><img src="{{asset('assets/banner1.png')}}" alt=""></a>
                    </div>
                    <div class="banner-item ">
                        <a href=""><img src="{{asset('assets/banner2.png')}}" alt=""></a>
                    </div>

                    
                </div>               
            </div>

            <div class="navigation">
                <div class="btn"></div>
                <div class="btn active"></div>
                <div class="btn"></div>
            </div>
        </div>
        
     </section>
    <!-- Banner Sec End -->

    <!-- Class Sec Start -->
     <section class="class-sec">
        <div class="class-container">
            <div class="class-top">
                <div class="top-item">
                    <h1>Kelas-kelas Prakerja Kami</h1>
                </div>
                <div class="top-item">
                    <p>Program Kartu Prakerja adalah program pengembangan kompetensi kerja yang ditujukan untuk pencari kerja, pekerja terkena PHK, dan/atau pekerja yang membutuhkan peningkatan kompetensi. <span>Lihat Syarat Pendaftaran</span></p>
                </div>
            </div>

            <div class="class-filter">
                <div class="filter">
                    <a href="">Urutkan Berdasarkan</a>

                    <div class="filter-arrow">
                        <img src="{{asset('assets/arrow-down-green.png')}}" alt="">
                    </div>
                </div>
                <div class="filter">
                    <a href="">Pilih Kategori</a>

                    <div class="filter-arrow">
                        <img src="{{asset('assets/arrow-down-green.png')}}" alt="">
                    </div>
                </div>
            </div>

            <div class="class-content">

                <div class="class-item">
                    <div class="class-card">
                        <img src="{{asset('assets/prakerja1.png')}}" alt="">
                        <div class="card-title">
                            <a href="">Webinar</a>
                        </div>
                        <div class="card-content">
                            <p>Menganalisa Perilaku Konsumen untuk...</p>
                            <p>Bambang Taupiqurrohman</p>
                            <div class="card-rating">
                                <p>4.9</p>
                                <div class="star">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                </div>                                
                            </div>
                            <p>Rp 1.000.000</p>
                        </div>
                    </div>
                    <div class="class-card">
                        <img src="{{asset('assets/prakerja2.png')}}" alt="">
                        <div class="card-title">
                            <a href="">Webinar</a>
                        </div>
                        <div class="card-content">
                            <p>Menentukan Upah Pekerja untuk UMKM</p>
                            <p>Bambang Taupiqurrohman</p>
                            <div class="card-rating">
                                <p>4.9</p>
                                <div class="star">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                </div>                                
                            </div>
                            <p>Rp 1.000.000</p>
                        </div>
                    </div>
                    <div class="class-card">
                        <img src="{{asset('assets/prakerja3.png')}}" alt="">
                        <div class="card-title">
                            <a href="">Webinar</a>
                        </div>
                        <div class="card-content">
                            <p>Secure Programming untuk Full Stack...</p>
                            <p>Bambang Taupiqurrohman</p>
                            <div class="card-rating">
                                <p>4.9</p>
                                <div class="star">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                </div>                                
                            </div>
                            <p>Rp 1.000.000</p>
                        </div>
                    </div>
                    <div class="class-card">
                        <img src="{{asset('assets/prakerja4.png')}}" alt="">
                        <div class="card-title">
                            <a href="">Webinar</a>
                        </div>
                        <div class="card-content">
                            <p>Membuat Desain Logo untuk Desainer Grafis</p>
                            <p>Bambang Taupiqurrohman</p>
                            <div class="card-rating">
                                <p>4.9</p>
                                <div class="star">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                </div>                                
                            </div>
                            <p>Rp 1.000.000</p>
                        </div>
                    </div>
                    <div class="class-card">
                        <img src="{{asset('assets/prakerja5.png')}}" alt="">
                        <div class="card-title">
                            <a href="">Webinar</a>
                        </div>
                        <div class="card-content">
                            <p>Pembuatan Pestisida Ramah Lingkungan</p>
                            <p>Bambang Taupiqurrohman</p>
                            <div class="card-rating">
                                <p>4.9</p>
                                <div class="star">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                </div>                                
                            </div>
                            <p>Rp 1.000.000</p>
                        </div>
                    </div>
                    <div class="class-card">
                        <img src="{{asset('assets/prakerja6.png')}}" alt="">
                        <div class="card-title">
                            <a href="">Webinar</a>
                        </div>
                        <div class="card-content">
                            <p>Teknik Pemilahan dan Pengolahan Sampah</p>
                            <p>Bambang Taupiqurrohman</p>
                            <div class="card-rating">
                                <p>4.9</p>
                                <div class="star">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                </div>                                
                            </div>
                            <p>Rp 1.000.000</p>
                        </div>
                    </div>
                    <div class="class-card">
                        <img src="{{asset('assets/prakerja6.png')}}" alt="">
                        <div class="card-title">
                            <a href="">Webinar</a>
                        </div>
                        <div class="card-content">
                            <p>Teknik Pemilahan dan Pengolahan Sampah</p>
                            <p>Bambang Taupiqurrohman</p>
                            <div class="card-rating">
                                <p>4.9</p>
                                <div class="star">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                </div>                                
                            </div>
                            <p>Rp 1.000.000</p>
                        </div>
                    </div>
                    <div class="class-card">
                        <img src="{{asset('assets/prakerja6.png')}}" alt="">
                        <div class="card-title">
                            <a href="">Webinar</a>
                        </div>
                        <div class="card-content">
                            <p>Teknik Pemilahan dan Pengolahan Sampah</p>
                            <p>Bambang Taupiqurrohman</p>
                            <div class="card-rating">
                                <p>4.9</p>
                                <div class="star">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                    <img src="{{asset('assets/star.png')}}" alt="">
                                </div>                                
                            </div>
                            <p>Rp 1.000.000</p>
                        </div>
                    </div>
                </div>

                <div class="other-btn">
                    <a href="">Lihat Kelas Lainnya</a>

                    <img src="{{asset('assets/right-arrow-green.png')}}" alt="">
                </div>
                
            </div>
        </div>
     </section>
    <!-- Class Sec End -->

    <!-- Program Sec Start -->
     <section class="program-sec">
        <div class="program-container">
            <div class="program-top">
                <div class="top-item">
                    <h1>Program-program Belajar Bekerja</h1>
                </div>
                <div class="top-item">
                    <p>Belajar Bekerja merupakan program untuk mempersiapkan individu menjadi lebih siap secara profesional. Dimana peserta dapat mengerjakan kasus nyata yang terjadi di dunia industri dengan memanfaatkan pemahaman digital transformasi serta teknologi Kecerdasan Buatan (AI) yang langsung didampingi oleh praktisi berpengalaman. Pada program ini semua orang memiliki kesempatan untuk berpengalaman di industri!</p>
                </div>
            </div>
            <div class="program-bottom">
                <div class="bottom-item">
                    <div class="bottom-card">
                        <div><img src="{{asset('assets/pro1.png')}}" alt=""></div>
                        <div class="bottom-card-content">
                            <h3>Program Project-Based Internship</h3>
                            <p>Dapatkan pengalaman “magang” dengan mengerjakan project dari top company.</p>
                            <div class="other-btn">
                                <a href="">Cek Program Tersedia</a>

                                <img src="{{asset('assets/right-arrow-green.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="bottom-card">
                        <div><img src="{{asset('assets/pro2.png')}}" alt=""></div>
                        <div class="bottom-card-content">
                            <h3>Belajar Bekerja Bootcamp</h3>
                            <p>Langsung disalurkan kerja setelah menyelesaikan program hanya dalam waktu 6 bulan*.</p>
                            <div class="other-btn">
                                <a href="">Cek Program Tersedia</a>

                                <img src="{{asset('assets/right-arrow-green.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!-- Program Sec End -->

    <!-- Testimony Sec Start -->
     <section class="testimony-sec">
        <h1>Apa kata Alumni?</h1>
        <div class="testimony-container">
            <div class="testimony-list">
                <div class="testimony-card" style="--position: 1">
                    <img src="{{asset('assets/quote.png')}}" class="quote" alt="">
                    <p class="testimony">Terima kasih luar sekolah atas pembelajaran selama 5 hari yang mampu menambah pengetahuan dan ilmu baru buat saya... Sukses selalu dan pastinya Sampai Jadi Bisa.</p>

                    <div class="testimony-content">
                        <div class="left-content">
                            <p>Soft Skills</p>
                            <p>Program Prakerja</p>                    
                            <p>Aji Saputra</p>
                        </div>
                        <div class="right-content">
                            <img src="{{asset('assets/user1.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="testimony-card" style="--position: 2">
                    <img src="{{asset('assets/quote.png')}}" class="quote" alt="">
                    <p class="testimony">Terima kasih luar sekolah atas pembelajaran selama 5 hari yang mampu menambah pengetahuan dan ilmu baru buat saya... Sukses selalu dan pastinya Sampai Jadi Bisa.</p>

                    <div class="testimony-content">
                        <div class="left-content">
                            <p>Soft Skills</p>
                            <p>Program Prakerja</p>                    
                            <p>Aji Saputra</p>
                        </div>
                        <div class="right-content">
                            <img src="{{asset('assets/user2.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="testimony-card" style="--position: 3">
                    <img src="{{asset('assets/quote.png')}}" class="quote" alt="">
                    <p class="testimony">Terima kasih luar sekolah atas pembelajaran selama 5 hari yang mampu menambah pengetahuan dan ilmu baru buat saya... Sukses selalu dan pastinya Sampai Jadi Bisa.</p>

                    <div class="testimony-content">
                        <div class="left-content">
                            <p>Soft Skills</p>
                            <p>Program Prakerja</p>                    
                            <p>Aji Saputra</p>
                        </div>
                        <div class="right-content">
                            <img src="{{asset('assets/user3.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="testimony-card" style="--position: 4">
                    <img src="{{asset('assets/quote.png')}}" class="quote" alt="">
                    <p class="testimony">Terima kasih luar sekolah atas pembelajaran selama 5 hari yang mampu menambah pengetahuan dan ilmu baru buat saya... Sukses selalu dan pastinya Sampai Jadi Bisa.</p>

                    <div class="testimony-content">
                        <div class="left-content">
                            <p>Soft Skills</p>
                            <p>Program Prakerja</p>                    
                            <p>Aji Saputra</p>
                        </div>
                        <div class="right-content">
                            <img src="{{asset('assets/user4.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="testimony-card" style="--position: 5">
                    <img src="{{asset('assets/quote.png')}}" class="quote" alt="">
                    <p class="testimony">Terima kasih luar sekolah atas pembelajaran selama 5 hari yang mampu menambah pengetahuan dan ilmu baru buat saya... Sukses selalu dan pastinya Sampai Jadi Bisa.</p>

                    <div class="testimony-content">
                        <div class="left-content">
                            <p>Soft Skills</p>
                            <p>Program Prakerja</p>                    
                            <p>Aji Saputra</p>
                        </div>
                        <div class="right-content">
                            <img src="{{asset('assets/user1.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="testimony-card" style="--position: 6">
                    <img src="{{asset('assets/quote.png')}}" class="quote" alt="">
                    <p class="testimony">Terima kasih luar sekolah atas pembelajaran selama 5 hari yang mampu menambah pengetahuan dan ilmu baru buat saya... Sukses selalu dan pastinya Sampai Jadi Bisa.</p>

                    <div class="testimony-content">
                        <div class="left-content">
                            <p>Soft Skills</p>
                            <p>Program Prakerja</p>                    
                            <p>Aji Saputra</p>
                        </div>
                        <div class="right-content">
                            <img src="{{asset('assets/user2.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="testimony-card" style="--position: 7">
                    <img src="{{asset('assets/quote.png')}}" class="quote" alt="">
                    <p class="testimony">Terima kasih luar sekolah atas pembelajaran selama 5 hari yang mampu menambah pengetahuan dan ilmu baru buat saya... Sukses selalu dan pastinya Sampai Jadi Bisa.</p>

                    <div class="testimony-content">
                        <div class="left-content">
                            <p>Soft Skills</p>
                            <p>Program Prakerja</p>                    
                            <p>Aji Saputra</p>
                        </div>
                        <div class="right-content">
                            <img src="{{asset('assets/user3.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="testimony-card" style="--position: 8">
                    <img src="{{asset('assets/quote.png')}}" class="quote" alt="">
                    <p class="testimony">Terima kasih luar sekolah atas pembelajaran selama 5 hari yang mampu menambah pengetahuan dan ilmu baru buat saya... Sukses selalu dan pastinya Sampai Jadi Bisa.</p>

                    <div class="testimony-content">
                        <div class="left-content">
                            <p>Soft Skills</p>
                            <p>Program Prakerja</p>                    
                            <p>Aji Saputra</p>
                        </div>
                        <div class="right-content">
                            <img src="{{asset('assets/user4.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="testimony-card" style="--position: 9">
                    <img src="{{asset('assets/quote.png')}}" class="quote" alt="">
                    <p class="testimony">Terima kasih luar sekolah atas pembelajaran selama 5 hari yang mampu menambah pengetahuan dan ilmu baru buat saya... Sukses selalu dan pastinya Sampai Jadi Bisa.</p>

                    <div class="testimony-content">
                        <div class="left-content">
                            <p>Soft Skills</p>
                            <p>Program Prakerja</p>                    
                            <p>Aji Saputra</p>
                        </div>
                        <div class="right-content">
                            <img src="{{asset('assets/user1.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="testimony-card" style="--position: 10">
                    <img src="{{asset('assets/quote.png')}}" class="quote" alt="">
                    <p class="testimony">Terima kasih luar sekolah atas pembelajaran selama 5 hari yang mampu menambah pengetahuan dan ilmu baru buat saya... Sukses selalu dan pastinya Sampai Jadi Bisa.</p>

                    <div class="testimony-content">
                        <div class="left-content">
                            <p>Soft Skills</p>
                            <p>Program Prakerja</p>                    
                            <p>Aji Saputra</p>
                        </div>
                        <div class="right-content">
                            <img src="{{asset('assets/user2.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimony-list">
                <div class="testimony-card" style="--position: 1">
                    <img src="{{asset('assets/quote.png')}}" class="quote" alt="">
                    <p class="testimony">Terima kasih luar sekolah atas pembelajaran selama 5 hari yang mampu menambah pengetahuan dan ilmu baru buat saya... Sukses selalu dan pastinya Sampai Jadi Bisa.</p>

                    <div class="testimony-content">
                        <div class="left-content">
                            <p>Soft Skills</p>
                            <p>Program Prakerja</p>                    
                            <p>Aji Saputra</p>
                        </div>
                        <div class="right-content">
                            <img src="{{asset('assets/user1.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="testimony-card" style="--position: 2">
                    <img src="{{asset('assets/quote.png')}}" class="quote" alt="">
                    <p class="testimony">Terima kasih luar sekolah atas pembelajaran selama 5 hari yang mampu menambah pengetahuan dan ilmu baru buat saya... Sukses selalu dan pastinya Sampai Jadi Bisa.</p>

                    <div class="testimony-content">
                        <div class="left-content">
                            <p>Soft Skills</p>
                            <p>Program Prakerja</p>                    
                            <p>Aji Saputra</p>
                        </div>
                        <div class="right-content">
                            <img src="{{asset('assets/user2.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="testimony-card" style="--position: 3">
                    <img src="{{asset('assets/quote.png')}}" class="quote" alt="">
                    <p class="testimony">Terima kasih luar sekolah atas pembelajaran selama 5 hari yang mampu menambah pengetahuan dan ilmu baru buat saya... Sukses selalu dan pastinya Sampai Jadi Bisa.</p>

                    <div class="testimony-content">
                        <div class="left-content">
                            <p>Soft Skills</p>
                            <p>Program Prakerja</p>                    
                            <p>Aji Saputra</p>
                        </div>
                        <div class="right-content">
                            <img src="{{asset('assets/user3.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="testimony-card" style="--position: 4">
                    <img src="{{asset('assets/quote.png')}}" class="quote" alt="">
                    <p class="testimony">Terima kasih luar sekolah atas pembelajaran selama 5 hari yang mampu menambah pengetahuan dan ilmu baru buat saya... Sukses selalu dan pastinya Sampai Jadi Bisa.</p>

                    <div class="testimony-content">
                        <div class="left-content">
                            <p>Soft Skills</p>
                            <p>Program Prakerja</p>                    
                            <p>Aji Saputra</p>
                        </div>
                        <div class="right-content">
                            <img src="{{asset('assets/user4.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="testimony-card" style="--position: 5">
                    <img src="{{asset('assets/quote.png')}}" class="quote" alt="">
                    <p class="testimony">Terima kasih luar sekolah atas pembelajaran selama 5 hari yang mampu menambah pengetahuan dan ilmu baru buat saya... Sukses selalu dan pastinya Sampai Jadi Bisa.</p>

                    <div class="testimony-content">
                        <div class="left-content">
                            <p>Soft Skills</p>
                            <p>Program Prakerja</p>                    
                            <p>Aji Saputra</p>
                        </div>
                        <div class="right-content">
                            <img src="{{asset('assets/user1.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="testimony-card" style="--position: 6">
                    <img src="{{asset('assets/quote.png')}}" class="quote" alt="">
                    <p class="testimony">Terima kasih luar sekolah atas pembelajaran selama 5 hari yang mampu menambah pengetahuan dan ilmu baru buat saya... Sukses selalu dan pastinya Sampai Jadi Bisa.</p>

                    <div class="testimony-content">
                        <div class="left-content">
                            <p>Soft Skills</p>
                            <p>Program Prakerja</p>                    
                            <p>Aji Saputra</p>
                        </div>
                        <div class="right-content">
                            <img src="{{asset('assets/user2.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="testimony-card" style="--position: 7">
                    <img src="{{asset('assets/quote.png')}}" class="quote" alt="">
                    <p class="testimony">Terima kasih luar sekolah atas pembelajaran selama 5 hari yang mampu menambah pengetahuan dan ilmu baru buat saya... Sukses selalu dan pastinya Sampai Jadi Bisa.</p>

                    <div class="testimony-content">
                        <div class="left-content">
                            <p>Soft Skills</p>
                            <p>Program Prakerja</p>                    
                            <p>Aji Saputra</p>
                        </div>
                        <div class="right-content">
                            <img src="{{asset('assets/user3.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="testimony-card" style="--position: 8">
                    <img src="{{asset('assets/quote.png')}}" class="quote" alt="">
                    <p class="testimony">Terima kasih luar sekolah atas pembelajaran selama 5 hari yang mampu menambah pengetahuan dan ilmu baru buat saya... Sukses selalu dan pastinya Sampai Jadi Bisa.</p>

                    <div class="testimony-content">
                        <div class="left-content">
                            <p>Soft Skills</p>
                            <p>Program Prakerja</p>                    
                            <p>Aji Saputra</p>
                        </div>
                        <div class="right-content">
                            <img src="{{asset('assets/user4.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="testimony-card" style="--position: 9">
                    <img src="{{asset('assets/quote.png')}}" class="quote" alt="">
                    <p class="testimony">Terima kasih luar sekolah atas pembelajaran selama 5 hari yang mampu menambah pengetahuan dan ilmu baru buat saya... Sukses selalu dan pastinya Sampai Jadi Bisa.</p>

                    <div class="testimony-content">
                        <div class="left-content">
                            <p>Soft Skills</p>
                            <p>Program Prakerja</p>                    
                            <p>Aji Saputra</p>
                        </div>
                        <div class="right-content">
                            <img src="{{asset('assets/user1.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="testimony-card" style="--position: 10">
                    <img src="{{asset('assets/quote.png')}}" class="quote" alt="">
                    <p class="testimony">Terima kasih luar sekolah atas pembelajaran selama 5 hari yang mampu menambah pengetahuan dan ilmu baru buat saya... Sukses selalu dan pastinya Sampai Jadi Bisa.</p>

                    <div class="testimony-content">
                        <div class="left-content">
                            <p>Soft Skills</p>
                            <p>Program Prakerja</p>                    
                            <p>Aji Saputra</p>
                        </div>
                        <div class="right-content">
                            <img src="{{asset('assets/user2.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
                       
        </div>
     </section>
    <!-- Testimony Sec End -->

    <section class="contact-sec">
        <div class="contact-container">
            <p>Butuh bantuan atau ingin tau lebih lanjut soal LuarSekolah?</p>
            <div class="other-btn">
                <a href="">Hubungi kami via whatsapp</a>

                <img src="{{asset('assets/right-arrow-green.png')}}" alt="">
            </div>
        </div>
        
    </section>

    <footer class="footer-sec">
        <div class="footer-top">
            <div class="footer-top-item" style="--grow:3">
        
                <div class="top-logo"><img src="{{asset('assets/LS-logo-black.png')}}" alt=""></div>
                
                <p>Office BandungJl. Batik Kumeli No.23, Sukaluyu, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40123</p>
                <p>Jl. Cigadung Raya Tengah No.86, Cigadung, Kec. Cibeunying Kaler, Kota Bandung, Jawa Barat 40191</p>
                <div class="contact-item">
                    <div class="footer-contact">
                        <div><img src="{{asset('assets/whatsapp-icon.png')}}" alt=""></div>
                        <div>
                            <p>Whatsapp</p>
                            <p>+62 811-2021-444</p>
                        </div>
                    </div>
                    <div class="footer-contact">
                        <div><img src="{{asset('assets/email-icon.png')}}" alt=""></div>
                        <div>
                            <p>Email</p>
                            <p>magangplus@luarsekolah.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-top-item" style="--grow:1">
                <p>Produk</p>
                <a href="">Luarsekolah</a>
                <a href="">Prorct Pase Internship PBI</a>
                <a href="">Belajar Bekerja Bootcamp</a>
                <a href="">Aplikasi</a>
                <img src="{{asset('assets/gplay.png')}}" alt="">
                <img src="{{asset('assets/apple.png')}}" alt="">
            </div>
            <div class="footer-top-item" style="--grow:1">
                <p>Perusahaan</p>
                <a href="">Tentang kami</a>
                <a href="">FAQ</a>
                <a href="">Gabung Komunitas</a>
                <a href="">Blog</a>
            </div>
            <div class="footer-top-item" style="--grow:2">
                <p>Media sosial</p>
                <div>
                    <img src="{{asset('assets/linkedin.png')}}" alt="">
                    <img src="{{asset('assets/tiktok.png')}}" alt="">
                    <img src="{{asset('assets/ig.png')}}" alt="">
                    <img src="{{asset('assets/x.png')}}" alt="">
                    <img src="{{asset('assets/youtube.png')}}" alt="">
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>PT Teknologi Edukasi Indonesia</p>
            <p>2025 Luarsekolah. All right reserved</p>
        </div>        
    </footer>

    <script src="{{asset('js/index.js')}}"></script>
</body>
</html>