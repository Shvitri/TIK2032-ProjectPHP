<?php
  require 'functions.php';
  $blog = query("SELECT * FROM blog");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio - Ni Made Shavitri</title>
    <!-- Link To CSS -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- Navbar -->
    <header>
      <a href="#" class="logo">MADE</a>
      <ul class="navbar">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#gallery">My Gallery</a></li>
        <li><a href="#blog">My Blog</a></li>
        <li><a href="#contact">Contact</a></li>
        <div id="redmode">🌙</div>
      </ul>
    </header>

    <!-- Home -->
    <section class="home" id="home">
      <div class="social"></div>
      <div class="home-img">
        <img src="img/Photo2.jpg" />
      </div>
      <div class="home-text">
        <span class="hello">Hello</span>
        <h1>Saya, <span class="efek-ngetik"></span></h1>
        <p>
          >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> <br />
          Saya Mahasiswa Dari <br />
          Universitas Sam Ratulangi Manado <br />
          >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
        </p>
      </div>
    </section>

    <!-- About -->
    <section class="about" id="about">
      <div class="heading">
        <h2>About Me</h2>
        <span>Introduction</span>
      </div>

      <!-- About Content -->
      <div class="about-container">
        <div class="about-img">
          <img src="img/Photo.jpg" />
        </div>
        <div class="about-text">
          <p>
            Halo semua, Nama saya Ni Made Shavitri Mustikayani, biasanya dipanggil Made. Saya adalah mahasiswa dari Universitas Sam Ratulangi di Manado. Meskipun saya masih baru dalam membuat website, saya sangat antusias untuk belajar dan
            mengeksplorasi lebih lanjut tentang pemrograman web.
          </p>

          <div class="social-media">
            <button class="github">
              <a href="https://github.com/Shvitri" target="_blank">
                <img src="img/github.png" />
              </a>
            </button>
            <button class="facebook">
              <a href="https://www.facebook.com/share/95YgZem2KjeSujcV/?mibextid=qi2Omg" target="_blank">
                <img src="img/facebook.png" />
              </a>
            </button>
            <button class="instagram">
              <a href="https://www.instagram.com/shvitri_?igsh=OHBza2FyZG51ZDNp&utm_source=qr" target="_blank">
                <img src="img/instagram.png" />
              </a>
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- Gallery -->
    <section class="gallery" id="gallery">
      <div class="heading">
        <h2>My Gallery</h2>
        <span>Our My Gallery</span>
      </div>
      <div class="gallery-container">
        <div class="box">
          <div class="box-img">
            <img src="./img/Gallery.jpg" />
          </div>
        </div>
        <div class="box">
          <div class="box-img">
            <img src="./img/Gallery2.jpg" />
          </div>
        </div>
        <div class="box">
          <div class="box-img">
            <img src="./img/Gallery3.jpg" />
          </div>
        </div>
        <div class="box">
          <div class="box-img">
            <img src="./img/Gallery4.jpg" />
          </div>
        </div>
        <div class="box">
          <div class="box-img">
            <img src="./img/Gallery5.jpg" />
          </div>
        </div>
        <div class="box">
          <div class="box-img">
            <img src="./img/Gallery6.jpg" />
          </div>
        </div>
      </div>
    </section>

    <!-- Blog -->
    <section class="blog" id="blog">
        <div class="heading">
            <h2>My Blog</h2>
            <span>Our My Blog</span>
        </div>
        <?php foreach ($blog as $artikel): ?>
        <div class="blog-content">
            <div class="blog-box">
                <article>
                    <h1><?php echo htmlspecialchars($artikel['judulArtikel']); ?></h1>
                    <p><?php echo nl2br(htmlspecialchars($artikel['deskripsiArtikel'])); ?></p>
                    <br>
                    <p>SUMBER:<a href="<?php echo htmlspecialchars($artikel['sumberArtikel']); ?>" target="_blank"><?php echo htmlspecialchars($artikel['sumberArtikel']); ?></a></p>
                </article>
            </div>
        </div>
        <?php endforeach; ?>
    </section>

    <!-- Contact -->
    <div class="contact" id="contact">
      <div class="heading">
        <h2>Contact</h2>
        <span>Connect With Me</span>
      </div>
      <div>
        <div class="contact__info">
          <h3 class="contact__subtitle">Call Me</h3>
          <span class="contact__text">+62887436691123</span>
        </div>

        <div class="contact__info">
          <h3 class="contact__subtitle">E-mail</h3>
          <span class="contact__text">shavitrimustikayani@gmail.com</span>
        </div>

        <div class="contact__info">
          <h3 class="contact__subtitle">Location</h3>
          <span class="contact__text">Manado</span>
        </div>
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>
