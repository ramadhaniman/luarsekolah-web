<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuarSekolah - Platform Edukasi</title>
    <link rel="stylesheet" href="{{asset('css/homepage.css')}}">
</head>
<body>
    <!-- Navigation Section -->
    <header class="navigation" role="banner">
        <nav class="nav-container" role="navigation" aria-label="Main navigation">
            <div class="nav-logo">
                <img src="{{ asset('assets/asset8.png') }}" alt="LuarSekolah Logo" class="logo">
            </div>
            
            <div class="nav-search">
                <div class="search-container">
                    <input 
                        type="search" 
                        class="search-input" 
                        placeholder="Cari Program Pelatihan"
                        aria-label="Search for training programs"
                    >
                    <button class="search-button" type="submit" aria-label="Search">
                        <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="m21 21-4.35-4.35"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="nav-buttons">
                <button class="btn btn-secondary" type="button">Masuk</button>
                <button class="btn btn-primary" type="button">Daftar</button>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <main class="hero-section" role="main">
        <div class="hero-container">
            <!-- Left Content -->
            <section class="hero-content" aria-labelledby="main-heading">
                <div class="content-wrapper">
                    <div class="headline-badge">
                        <h1 id="main-heading" class="main-headline">Upgrade skill kamu</h1>
                    </div>
                    
                    <div class="subheadline-group">
                        <h2 class="subheadline">Mulai dari nol sampai jago, semuanya bisa.</h2>
                        <p class="tagline">Yuk belajar bareng LuarSekolah</p>
                    </div>

                    <p class="description">
                        Luarsekolah adalah platform edukasi vokasi dan pengembangan diri berbasis teknologi digital dengan materi-materi terkurasi dari para pengajar berpengalaman untuk mendampingi generasi muda Indonesia belajar
                    </p>

                    <!-- Program Cards -->
                    <section class="programs-section" aria-labelledby="programs-heading">
                        <h3 id="programs-heading" class="programs-title">Program-program LuarSekolah</h3>
                        <div class="program-cards">
                            <div class="program-card highlighted">
                                <span class="program-name">Prakerja</span>
                                <div class="program-arrow">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12,5 19,12 12,19"></polyline>
                                    </svg>
                                </div>
                            </div>
                            <div class="program-card">
                                <span class="program-name">Belajar Bekerja</span>
                                <div class="program-arrow">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12,5 19,12 12,19"></polyline>
                                    </svg>
                                </div>
                            </div>
                            <div class="program-card">
                                <span class="program-name">Prakerja ISW</span>
                                <div class="program-arrow">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12,5 19,12 12,19"></polyline>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- CTA Buttons -->
                    <div class="cta-section">
                        <button class="btn btn-outline" type="button">
                            Tanya-tanya Seputar Kelas
                            <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <polyline points="9,18 15,12 9,6"></polyline>
                            </svg>
                        </button>

                        <div class="prakerja-section">
                            <p class="prakerja-question">Kamu pengguna Prakerja?</p>
                            <p class="prakerja-description">Segera redeem voucher Prakerjamu sekarang juga</p>
                            <button class="btn btn-primary btn-large" type="button">
                                Redeem Voucher Prakerjamu Sekarang
                                <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12,5 19,12 12,19"></polyline>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Right Content - Hero Image -->
            <section class="hero-image" aria-labelledby="hero-image-heading">
                <h2 id="hero-image-heading" class="sr-only">Student Success Story</h2>
                
                <div class="image-container">
                    <!-- Background decorative elements -->
                    <img src="yellow-star.png" alt="" class="decoration star-large" role="presentation">
                    <img src="yellow-star-small.png" alt="" class="decoration star-small-left" role="presentation">
                    <img src="teal-rings.png" alt="" class="decoration rings-right" role="presentation">

                    <!-- Green background shape -->
                    <div class="green-background" aria-hidden="true"></div>
                    
                    <!-- Large typography behind student -->
                    <div class="large-typography" aria-hidden="true">
                        <div class="large-text sampai">#sampai</div>
                        <div class="large-text jadi">Jadi</div>
                        <div class="large-text bisa">Bisa</div>
                    </div>

                    <!-- Student Photo -->
                    <div class="student-container">
                        <img 
                            src="student-photo.png" 
                            alt="Smiling female student wearing a green plaid shirt and carrying books, representing successful learning at LuarSekolah"
                            class="student-photo"
                        >
                    </div>
                </div>
            </section>
        </div>

        <!-- Bottom Statistics -->
        <section class="statistics" aria-labelledby="stats-heading">
            <h2 id="stats-heading" class="sr-only">Platform Statistics</h2>
            <div class="stats-container">
                <div class="stat-card">
                    <div class="stat-number">500</div>
                    <div class="stat-label">Talenta bergabung</div>
                    <div class="stat-tail" aria-hidden="true"></div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">500</div>
                    <div class="stat-label">Talenta bergabung</div>
                    <div class="stat-tail" aria-hidden="true"></div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">500</div>
                    <div class="stat-label">Talenta bergabung</div>
                    <div class="stat-tail" aria-hidden="true"></div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">500</div>
                    <div class="stat-label">Talenta bergabung</div>
                    <div class="stat-tail" aria-hidden="true"></div>
                </div>
            </div>
        </section>

        <!-- Background decorative elements -->
        <img src="yellow-star-small.png" alt="" class="decoration bg-star-bottom" role="presentation">
        <img src="yellow-star.png" alt="" class="decoration bg-star-right" role="presentation">
    </main>
</body>
</html>