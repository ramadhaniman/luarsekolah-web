<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luarsekolah</title>
    <link rel="stylesheet" href="{{secure_asset('css/home2.css')}}">
</head>
<body>
    <!-- Navigasi Sec Start -->
    <header class="nav-sec">
        <div class="navbar">
            <div class= "menu">
                <a href=""><img src="{{ secure_aasset('assets/LS-logo.png') }}" alt=""></a>          
            </div>

            <div class="search">              
                <input type="text" placeholder="Cari program Pelatihan">
                <div class="search-icon">
                    <img src="{{secure_aasset('assets/search_icon.png')}}" alt="">
                </div>
                <div class="cross-icon hidden">
                    <img src="{{secure_aasset('assets/cross_icon.png')}}" alt="">
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
                    <img src="{{secure_aasset('assets/asset4.png')}}" alt="">
                </div>
                <div class="star-item2">
                    <img src="{{secure_aasset('assets/asset4.png')}}" alt="">
                </div>
                <div class="shape1">
                    <div class="shape1-content">
                        <h3>Program-program Luarsekolah</h3>

                        <div class="hero-card-list">
                            <div class="hero-card">
                                <div class="hero-card-content">                    
                                    <a href="">Prakerja</a>
                                </div>
                                <div class="circle"><img src="{{secure_aasset('assets/arrow.png')}}" alt=""></div>
                            </div>
                            <div class="hero-card">
                                <div class="hero-card-content">
                                    <a href="">Belajar<br>Bekerja</a>   
                                </div>
                                <div class="circle"><img src="{{secure_aasset('assets/arrow.png')}}" alt=""></div>
                            </div>
                            <div class="hero-card">
                                <div class="hero-card-content">
                                    <a href="">Prakerja<br>ISW</a>
                                </div>
                                <div class="circle"><img src="{{secure_aasset('assets/arrow.png')}}" alt=""></div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="decor2">
                <div class="shape2">
                </div>
                <div class="woman">
                    <img src="{{secure_aasset('assets/asset1.png')}}" alt="">
                </div>
            </div>          
        </div>
        

        <div class="hero-content">
            <div class="content-h1">
                <h1>Upgrade skill kamu</h1>
            </div>

            <div class="content">
                <h2>Mulai dari nol sampai jago, semuanya bisa,<br>Yuk belajar bareng Luarsekolah</h2>

                <p>luarsekolah adalah platform edukasi vokasi dan <br>pengembangan diri berbasis teknologi digital dengan materi-<br>materi terkurasi dari para pengajar berpengalaman untuk<br>mendampingi generasi muda Indonesia belajar</p>
            </div>
        </div>
     </section>
    <!-- Hero Sec End -->

    <!-- Banner Sec Start -->
     <section class="banner-sec">
        <div class="banner-nav">
            <div class="banner-arrow">
                <a href=""><img src="{{secure_aasset('assets/left-arrow.png')}}" alt=""></a>
            </div>
            <div class="banner-arrow">
                <a href=""><img src="{{secure_aasset('assets/right-arrow.png')}}" alt=""></a>
            </div>
        </div>
        
        <div class="banner-wrap">
            <ul>
                <li class="banner-card">
                    <a href=""><img src="{{secure_aasset('assets/banner1.png')}}" alt=""></a>
                </li>
                <li class="banner-card">
                    <a href=""><img src="{{secure_aasset('assets/banner2.png')}}" alt=""></a>
                </li>
                <li class="banner-card">
                    <a href=""><img src="{{secure_aasset('assets/banner3.png')}}" alt=""></a>
                </li>
                <li class="banner-card">
                    <a href=""><img src="{{secure_aasset('assets/banner1.png')}}" alt=""></a>
                </li>
                <li class="banner-card">
                    <a href=""><img src="{{secure_aasset('assets/banner2.png')}}" alt=""></a>
                </li>           
            </ul>
        </div>
     </section>
    <!-- Banner Sec End -->

    <!-- Voucher Sec Start -->
    <section class="voucher">
        <div class="voucher-container">
            <div class="voucher-content">
                <div class="voucher-img">
                    <img src="{{secure_aasset('assets/hands-phone.png')}}" alt="">
                </div>

                <div>
                    <h3>Redeem Voucher Prakerjamu</h3>
                    <p>Kamu pengguna Prakerja? Segera redeem vouchermu sekarang juga</p>
                </div>                
            </div>
            
            <button>Lihat Tata Cara Redeem</button>
        </div>
    </section>
    <!-- Voucher Sec End -->

    <!-- Program Sec Start -->
     <section class="program-sec">
        <h2>Program dari Luarseolah</h2>

        <div class="program-container">
            <div class="program-card">
                <div class="program-img"><img src="{{secure_aasset('assets/program1.png')}}" alt=""></div>

                <div>
                    <h2>Kartu Prakerja</h2>
                    <p>Pelajari berbagai kelas program Prakerja</p>
                </div>
            </div>
            <div class="program-card">
                <div class="program-img"><img src="{{secure_aasset('assets/program2.png')}}" alt=""></div>

                <div>
                    <h2>Kartu Prakerja</h2>
                    <p>Pelajari berbagai kelas program Prakerja</p>
                </div>
            </div>
            <div class="program-card">
                <div class="program-img"><img src="{{secure_aasset('assets/program2.png')}}" alt=""></div>

                <div>
                    <h2>Kartu Prakerja</h2>
                    <p>Pelajari berbagai kelas program Prakerja</p>
                </div>
            </div>
        </div>
     </section>
    <!-- Program Sec End -->
</body>
</html>