<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Perpustakaan Daerah</title>
  <link rel="stylesheet" href="<?= base_url();?>assets_style/assets/css/landingpage.css">
  <link rel="stylesheet" href="<?= base_url();?>assets_style/assets/css/app.css">
</head>

<body>
  <div class="container">
    <nav class="navbar bg-color-three">
      <div class="brand">
        <h1 class="brand-title">PUSDA</h1>
      </div>
      <div class="nav-list">
        <ul class="nav-items">
          <li class="nav-item"><a href="<?= base_url()?>dashboard" class="nav-link">Dashboard</a></li>
					<!-- <li class="nav-item"><a href="#" class="nav-link">Library</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Service</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Member</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Contact</a></li> -->
        </ul>
      </div>
    </nav>
    <main>
      <section class="main-section bg-color-two" id="jumbotron">
        <div class="jumbo-image-box">
          <img class="jumbo-image" src="<?= base_url();?>assets_style/image/persentation.svg" alt="banner-image">
        </div>
        <div class="jumbo-text">
          <div>
            <h1 class="jumbo-text-title">SELAMAT DATANG DI <span class="title-span">PERPUSTAKAAN DAERAH</span></h1>
            <h2 class="jumbo-text-subtitle">Sistem Informasi perpustakaan daerah</h2>
			<h3>Jam operasional : 09:00 - 17:00</h3>
          </div>
          <button class="btn bg-color-four"><a href="login" class="btn-link">Get Started</a></button>
        </div>
      </section>

      <section class="main-section" id="top-book" style="margin:10px 30px;">
        <div class="section-container bg-color-one">
          <h1 class="section-title" style="margin-top:20px;">Most Popular Book</h1>
          <div class="card-collections">
            <div class="card">
              <div class="card-image-box">
                <img class="card-image" src="<?= base_url();?>assets_style/image/1.jpg" alt="buku 111 Kode HTML Untuk Belajar Kilat">
              </div>
              <div class="card-info">
                <p class="card-title">111 Kode HTML Untuk Belajar Kilat</p>
                <p class="card-description">Teknik Menguasai HTML Secepat Kilat Untuk Pemula Yang Ingin Menjadi Master HTML Untuk Menguasai Pemrograman Web</p>
              </div>
            </div>
            <div class="card">
              <div class="card-image-box">
                <img class="card-image" src="<?= base_url();?>assets_style/image/2.jpg" alt="buku Dasar - Dasar Teknik Informatika">
              </div>
              <div class="card-info">
                <p class="card-title">Dasar - Dasar Teknik Informatika</p>
                <p class="card-description">Berkenalan Dan Belajar Tentang Pengolahahan Data, Pemprosesan Data, Penyimpanan Data, Manipulasi Data Dan Masih Banyak Lagi</p>
              </div>
            </div>
            <div class="card">
              <div class="card-image-box">
                <img class="card-image" src="<?= base_url();?>assets_style/image/3.jpg" alt="buku Aplikasi Komputer">
              </div>
              <div class="card-info">
                <p class="card-title">Aplikasi Komputer</p>
                <p class="card-description">Untuk Pemula Yang Baru Belajar Tentang Komputer, Terutama Yang Berhubungan Dengan Aplikasi Komputer.</p>
              </div>
            </div>
            <div class="card">
              <div class="card-image-box">
                <img class="card-image" src="<?= base_url();?>assets_style/image/4.jpg" alt="buku Investing In Digital Start Up">
              </div>
              <div class="card-info">
                <p class="card-title">Investing In Digital Start Up</p>
                <p class="card-description">Buku Ini Menjawab Pertanyaan Bagaimana Cara Kerja Dunia 4.0 Sesungguhnya?</p>
              </div>
            </div>
            <div class="card">
              <div class="card-image-box">
                <img class="card-image" src="<?= base_url();?>assets_style/image/5.jpg" alt="buku Pengantar Teknologi Informasi">
              </div>
              <div class="card-info">
                <p class="card-title">Pengantar Teknologi Informasi</p>
                <p class="card-description">Belajar Tentang Perangkat Sederhana. Dimana Dari Alat Sederhana Inilah Akan Dikembangkan Menjadi Alat Elektronis Dan Alat Mekanis ...</p>
              </div>
            </div>
            <div class="card">
              <div class="card-image-box">
                <img class="card-image" src="<?= base_url();?>assets_style/image/6.jpg" alt="buku Teknik Pengolahan Audio & Video">
              </div>
              <div class="card-info">
                <p class="card-title">Teknik Pengolahan Audio & Video</p>
                <p class="card-description">Akan Mempelajari Tentang Proses Produksi Multimedia Dan Berbagai Format Video, Tata Cara Gambar Bergerak, Perekaman Video Dengan ...</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="main-section" id="banner-motivation">
        <div class="banner-motivation">
          <img class="motivation-image" src="<?= base_url();?>assets_style/image/banner-motivation.png" alt="quote by Joseph Addison">
        </div>
      </section>
    </main>
    <footer class="footer bg-color-two">
      <h4>Copyrigt &copy; 2023. All Rights Reserved</h4>
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
