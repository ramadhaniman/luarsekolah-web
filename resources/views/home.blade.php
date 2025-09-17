<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luarsekolah</title>
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
</head>
<body>
    <!-- Navigasi Sec Start -->
    <header class="nav-sec">
        <div class="navbar">
            <div class= "menu">
                <a href=""><img src="{{ asset('assets/logo.png') }}" alt=""></a>
                
                <button>Program <img src="{{ asset('assets/arrow-down.png') }}" alt=""></button>             
            </div>

            <div class="search">
                <div class="search-icon">
                    <img src="{{asset('assets/search_icon.png')}}" alt="">
                </div>
                
                <input type="text">

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

    <!-- Banner Sec Start -->
     <section class="banner-sec">
        <div class="banner-nav">
            <div class="banner-arrow">
                <a href=""><img src="{{asset('assets/left-arrow.png')}}" alt=""></a>
            </div>
            <div class="banner-arrow">
                <a href=""><img src="{{asset('assets/right-arrow.png')}}" alt=""></a>
            </div>
        </div>
        
        <div class="banner-wrap">
            <ul>
                <li class="banner-card">
                    <a href=""><img src="{{asset('assets/banner1.png')}}" alt=""></a>
                </li>
                <li class="banner-card">
                    <a href=""><img src="{{asset('assets/banner2.png')}}" alt=""></a>
                </li>
                <li class="banner-card">
                    <a href=""><img src="{{asset('assets/banner3.png')}}" alt=""></a>
                </li>
                <li class="banner-card">
                    <a href=""><img src="{{asset('assets/banner1.png')}}" alt=""></a>
                </li>
                <li class="banner-card">
                    <a href=""><img src="{{asset('assets/banner2.png')}}" alt=""></a>
                </li>           
            </ul>
        </div>
     </section>
    <!-- Banner Sec End -->

    <!-- Voucher Sec Start -->
    <section class="voucher">
        <div class="voucher-container">
            <div class="voucher-content">
                <img src="{{asset('assets/hands-phone.png')}}" alt="">

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
                <div class="program-img"><img src="{{asset('assets/program1.png')}}" alt=""></div>

                <div>
                    <h2>Kartu Prakerja</h2>
                    <p>Pelajari berbagai kelas program Prakerja</p>
                </div>
            </div>
            <div class="program-card">
                <div class="program-img"><img src="{{asset('assets/program2.png')}}" alt=""></div>

                <div>
                    <h2>Kartu Prakerja</h2>
                    <p>Pelajari berbagai kelas program Prakerja</p>
                </div>
            </div>
            <div class="program-card">
                <div class="program-img"><img src="{{asset('assets/program2.png')}}" alt=""></div>

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