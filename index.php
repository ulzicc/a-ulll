<?php
// Data berita untuk hero section
$heroNews = [
    'category' => 'TEKNOLOGI',
    'title' => 'Revolusi AI dalam Dunia Jurnalisme',
    'description' => 'Kecerdasan buatan (AI) telah mengubah cara jurnalis bekerja dan menyajikan berita. Dari otomasi penulisan hingga analisis data besar, AI membawa transformasi besar dalam industri media massa.',
    'image' => 'https://images.unsplash.com/photo-1677442136019-21780ecad995?w=1200&h=600&fit=crop',
    'source' => 'TECH NEWS',
    'date' => '7 November 2025'
];

// Kategori berita
$categories = ['SEMUA', 'TEKNOLOGI', 'POLITIK', 'OLAHRAGA', 'HIBURAN', 'BISNIS', 'KESEHATAN'];

// Data berita rekomendasi
$recommendedNews = [
    [
        'id' => 1,
        'title' => 'Pemilu 2025: Debat Capres Ketiga Berlangsung Sengit',
        'image' => 'https://images.unsplash.com/photo-1540910419892-4a36d2c3266c?w=400&h=300&fit=crop',
        'category' => 'POLITIK',
        'date' => '7 Nov 2025'
    ],
    [
        'id' => 2,
        'title' => 'Timnas Indonesia Lolos ke Piala Dunia 2026',
        'image' => 'https://images.unsplash.com/photo-1579952363873-27f3bade9f55?w=400&h=300&fit=crop',
        'category' => 'OLAHRAGA',
        'date' => '6 Nov 2025'
    ],
    [
        'id' => 3,
        'title' => 'Startup Indonesia Raih Pendanaan $50 Juta',
        'image' => 'https://images.unsplash.com/photo-1559526324-4b87b5e36e44?w=400&h=300&fit=crop',
        'category' => 'BISNIS',
        'date' => '6 Nov 2025'
    ]
];

// Berita trending
$trendingNews = [
    [
        'id' => 4,
        'title' => 'Gempa 7.2 SR Guncang Jawa Tengah',
        'excerpt' => 'Gempa berkekuatan 7.2 skala richter mengguncang wilayah Jawa Tengah pada pagi hari. BMKG mengeluarkan peringatan dini tsunami.',
        'image' => 'https://images.unsplash.com/photo-1547036967-23d11aacaee0?w=600&h=400&fit=crop',
        'category' => 'BREAKING NEWS',
        'date' => '7 Nov 2025',
        'views' => '125K'
    ]
];

// Berita terbaru
$latestNews = [
    [
        'title' => 'Harga Minyak Dunia Naik 15% dalam Sepekan',
        'category' => 'EKONOMI',
        'date' => '2 jam lalu',
        'image' => 'https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?w=300&h=200&fit=crop'
    ],
    [
        'title' => 'Festival Film Indonesia 2025 Digelar di Bali',
        'category' => 'HIBURAN',
        'date' => '4 jam lalu',
        'image' => 'https://images.unsplash.com/photo-1478720568477-152d9b164e26?w=300&h=200&fit=crop'
    ],
    [
        'title' => 'Vaksin Baru COVID-19 Varian Terbaru Diluncurkan',
        'category' => 'KESEHATAN',
        'date' => '5 jam lalu',
        'image' => 'https://images.unsplash.com/photo-1587854692152-cbe660dbde88?w=300&h=200&fit=crop'
    ],
    [
        'title' => 'Tesla Luncurkan Model Terbaru di Indonesia',
        'category' => 'OTOMOTIF',
        'date' => '6 jam lalu',
        'image' => 'https://images.unsplash.com/photo-1560958089-b8a1929cea89?w=300&h=200&fit=crop'
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeritaKini - Portal Berita Terkini Indonesia</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#home">
                <span class="brand-text">BERITA</span><span class="brand-highlight">KINI</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#home">SEMUA</a></li>
                    <li class="nav-item"><a class="nav-link" href="#teknologi">TEKNOLOGI</a></li>
                    <li class="nav-item"><a class="nav-link" href="#politik">POLITIK</a></li>
                    <li class="nav-item"><a class="nav-link" href="#olahraga">OLAHRAGA</a></li>
                    <li class="nav-item"><a class="nav-link" href="#hiburan">HIBURAN</a></li>
                    <li class="nav-item">
                        <button class="btn btn-login">LOG-IN</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-text">
                            <span class="hero-label">What's that</span>
                            <h1 class="hero-title"><?php echo $heroNews['title']; ?></h1>
                            <p class="hero-description"><?php echo $heroNews['description']; ?></p>
                            <div class="hero-buttons">
                                <button class="btn btn-source"><?php echo $heroNews['source']; ?></button>
                                <button class="btn btn-read-more">READ MORE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Category Filter -->
    <section class="category-section">
        <div class="container">
            <div class="category-tabs">
                <?php foreach ($categories as $index => $category): ?>
                    <button class="category-btn <?php echo $index === 0 ? 'active' : ''; ?>" 
                            data-category="<?php echo strtolower($category); ?>">
                        <?php echo $category; ?>
                    </button>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Recommended News Section -->
    <section class="recommended-section">
        <div class="container">
            <div class="section-header">
                <div class="d-flex align-items-center">
                    <span class="section-indicator"></span>
                    <h2 class="section-title">REKOMENDASI | BERITA PILIHAN</h2>
                </div>
                <button class="btn-select-all">SELECT ALL</button>
            </div>

            <div class="news-carousel">
                <button class="carousel-btn prev-btn" id="prevBtn">
                    <span>&lt;</span>
                </button>
                
                <div class="news-cards-wrapper">
                    <div class="news-cards" id="newsCarousel">
                        <?php foreach ($recommendedNews as $news): ?>
                            <div class="news-card">
                                <div class="news-card-image">
                                    <img src="<?php echo $news['image']; ?>" alt="<?php echo $news['title']; ?>">
                                    <span class="news-badge"><?php echo $news['category']; ?></span>
                                </div>
                                <div class="news-card-content">
                                    <h3 class="news-card-title"><?php echo $news['title']; ?></h3>
                                    <p class="news-card-date"><?php echo $news['date']; ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <button class="carousel-btn next-btn" id="nextBtn">
                    <span>&gt;</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Trending News Section -->
    <section class="trending-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <?php foreach ($trendingNews as $news): ?>
                        <div class="trending-card">
                            <div class="trending-badge"><?php echo $news['category']; ?></div>
                            <h2 class="trending-title"><?php echo $news['title']; ?></h2>
                            <p class="trending-meta">Tanggal Rilis: <?php echo $news['date']; ?> | Views: <?php echo $news['views']; ?></p>
                            <p class="trending-description"><?php echo $news['excerpt']; ?></p>
                            <button class="btn btn-read-more-dark">READ MORE</button>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar-section">
                        <h3 class="sidebar-title">TOP TRENDING</h3>
                        <div class="trending-video">
                            <img src="https://images.unsplash.com/photo-1588681664899-f142ff2dc9b1?w=400&h=300&fit=crop" 
                                 alt="Trending Video" class="trending-video-thumb">
                            <div class="video-controls">
                                <button class="video-btn">◀</button>
                                <button class="video-btn play-btn">▶</button>
                                <button class="video-btn">▶▶</button>
                            </div>
                            <button class="btn btn-watch-now">WATCH NOW</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest News Section -->
    <section class="latest-section">
        <div class="container">
            <h2 class="section-title-main">BERITA TERBARU</h2>
            <div class="row g-4">
                <?php foreach ($latestNews as $news): ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="latest-card">
                            <div class="latest-image">
                                <img src="<?php echo $news['image']; ?>" alt="<?php echo $news['title']; ?>">
                                <span class="latest-badge"><?php echo $news['category']; ?></span>
                            </div>
                            <div class="latest-content">
                                <h4 class="latest-title"><?php echo $news['title']; ?></h4>
                                <p class="latest-date"><?php echo $news['date']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-brand">
                        <h3><span class="brand-text">BERITA</span><span class="brand-highlight">KINI</span></h3>
                        <p class="footer-description">Portal berita terpercaya yang menghadirkan informasi terkini dan akurat untuk Indonesia.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <h5 class="footer-title">KATEGORI</h5>
                    <ul class="footer-links">
                        <li><a href="#teknologi">Teknologi</a></li>
                        <li><a href="#politik">Politik</a></li>
                        <li><a href="#olahraga">Olahraga</a></li>
                        <li><a href="#hiburan">Hiburan</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="footer-title">TENTANG KAMI</h5>
                    <ul class="footer-links">
                        <li><a href="#about">Tentang BeritaKini</a></li>
                        <li><a href="#contact">Hubungi Kami</a></li>
                        <li><a href="#privacy">Kebijakan Privasi</a></li>
                        <li><a href="#terms">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 BeritaKini. All Rights Reserved.</p>
                <div class="footer-credits">
                    <span>CREATED BY <strong>YOUR_NAME</strong></span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script src="script.js"></script>
</body>
</html>
