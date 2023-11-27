<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Perpustakaan Daerah</title>
  <link rel="stylesheet" href="<?= base_url();?>assets_style/assets/css/landingpage.css">
  <link rel="stylesheet" href="<?= base_url();?>assets_style/assets/css/app.css">
  <link href="<?= base_url();?>assets_style/assets/fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="<?= base_url();?>assets_style/assets/fontawesome/css/brands.css" rel="stylesheet">
  <link href="<?= base_url();?>assets_style/assets/fontawesome/css/solid.css" rel="stylesheet">
  <script defer src="<?= base_url();?>assets_style/assets/scripts/landingpage.js"></script>
</head>

<body>
  <div class="app">
    <header class="header">
        <nav class="nav">
          <div class="brand">
            <div class="brand-logo">
              <img src="<?= base_url();?>assets_style/image/brand-logo.png" alt="stack of books">
            </div>
            <a href="<?= base_url(''); ?>" class="brand-title">PUSDA</a>
          </div>
          <ul class="nav-list">
            <li><a class="nav-link" data-target="jumbo">Home</a></li>
            <li><a class="nav-link" data-target="popular-books">Most Popular Books</a></li>
            <li><a class="nav-link" data-target="footer">Contact</a></li>
            <li><a href="login" class="btn btn-link">Login</a></li>
          </ul>
        </nav>
        <div class="jumbo" id="jumbo">
          <div class="floating-image floating-image-top">
            <img src="<?= base_url();?>assets_style/image/fig-top.png" alt="floating image">
          </div>
          <div class="jumbo-body">
            <div class="jumbo-content jumbo-item">
              <h1 class="jumbo-content-title">SELAMAT DATANG DI <span class="jumbo-content-title-brand">PERPUSTAKAAN DAERAH</span></h1>
              <h2 class="jumbo-content-subtitle">Sistem Informasi Perpustakaan Daerah</h2>
              <div class="jumbo-content-info">
                <div class="jumbo-content-info-image">
                  <i class="fa-regular fa-clock"></i>
                </div>
                <div class="jumbo-content-info-desc">
                  <p>Jam Operasional</p>
                  <p class="info-desc-strong">09.00 - 17.00 WIB</p>
                </div>
              </div>
              <a href="<?= base_url()?>register" class="btn btn-jumbo">Get Started</a>
            </div>
            <div class="jumbo-image jumbo-item">
              <img src="<?= base_url();?>assets_style/image/jumbotron.png" alt="library room">
            </div>
          </div>
        </div>
    </header>
    <main class="main">
      <div class="main-section" id="popular-books">
        <div class="floating-image floating-image-top">
          <img src="<?= base_url();?>assets_style/image/fig-top.png" alt="floating image">
        </div>
        <div class="floating-image floating-image-bottom">
          <img src="<?= base_url();?>assets_style/image/fig-bottom.png" alt="floating image">
        </div>
        <h1 class="section-title">Most Popular Books</h1>
        <div class="bookshelf">
          <div class="book">
            <div class="book-cover">
              <img src="<?= base_url();?>assets_style/image/1.jpg" alt="book-cover">
            </div>
            <div class="book-info">
              <p class="book-title">111 Kode HTML Untuk Belajar Kilat</p>
              <p class="book-description">Teknik Menguasai HTML Secepat Kilat Untuk Pemula Yang Ingin Menjadi Master HTML Untuk Menguasai Pemrograman Web</p>
            </div>
          </div>
          <div class="book">
            <div class="book-cover">
              <img src="<?= base_url();?>assets_style/image/2.jpg" alt="book-cover">
            </div>
            <div class="book-info">
              <p class="book-title">Dasar - Dasar Teknik Informatika</p>
              <p class="book-description">Berkenalan Dan Belajar Tentang Pengolahahan Data, Pemprosesan Data, Penyimpanan Data, Manipulasi Data Dan Masih Banyak Lagi</p>
            </div>
          </div>
          <div class="book">
            <div class="book-cover">
              <img src="<?= base_url();?>assets_style/image/3.jpg" alt="book-cover">
            </div>
            <div class="book-info">
              <p class="book-title">Aplikasi Komputer</p>
              <p class="book-description">Untuk Pemula Yang Baru Belajar Tentang Komputer, Terutama Yang Berhubungan Dengan Aplikasi Komputer.</p>
            </div>
          </div>
          <div class="book">
            <div class="book-cover">
              <img src="<?= base_url();?>assets_style/image/4.jpg" alt="book-cover">
            </div>
            <div class="book-info">
              <p class="book-title">Investing In Digital Start Up</p>
              <p class="book-description">Buku Ini Menjawab Pertanyaan Bagaimana Cara Kerja Dunia 4.0 Sesungguhnya?</p>
            </div>
          </div>
        </div>
      </div>
      <div class="main-section" id="motivation-banner">
        <div class="banner-image">
          <img src="<?= base_url();?>assets_style/image/banner-motivation.png" alt="banner-motivation">
        </div>
      </div>
    </main>
    <footer class="footer" id="footer">
      <div class="footer-section" id="social-media">
        <a href="https://id-id.facebook.com/" class="social-media-link social-media-item">
          <i class="fa-brands fa-facebook-f"></i>
        </a>
        <a href="https://twitter.com/" class="social-media-link social-media-item">
          <i class="fa-brands fa-x-twitter"></i>
        </a>
        <a href="https://www.instagram.com/" class="social-media-link social-media-item">
          <i class="fa-brands fa-instagram"></i>
        </a>
      </div>
      <div class="footer-section" id="address">
        <p>2PFG+J49, Lorok Pakjo, Kec.Ilir Barat. I, Kota Palembang, Sumatera Selatan, Indonesia</p>
      </div>
      <div class="footer-section" id="contact">
        <div class="contact-item">
          <i class="fa-solid fa-phone"></i>
          <p>+62 895 1122 33344</p>
        </div>
        <div class="contact-item">
          <i class="fa-regular fa-envelope"></i>
          <p>infopusda@gmail.com</p>
        </div>
      </div>
      <div class="footer-section" id="copyright">
        <h4>Copyrigt &copy; 2023. All Rights Reserved</h4>
      </div>
    </footer>
  </div>
</body>
</html>

<!-- 

Judul : Perpustakaan Daerah
Navbar : 
1. Home (tambahin jam operasional: open : 09.00 close: 17.00), 

2. Library (intinyo buku2 dari fiksi, non fiksi, ilmiah dll)
3. Service (Peminjaman buku, Pengembalian buku, Denda Telat pengembalian buku 50k/buku), 
4. Register (Transaksi 50k/member)
5. Contact

 -->
