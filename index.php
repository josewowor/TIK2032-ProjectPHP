<?php
  require 'functions.php';
  $blog = query("SELECT * FROM blog");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/styles.css" />
    <title>Joseph - Portfolio</title>
  </head>
  <body>
    <!-- HEADER -->
    <header class="l-header">
      <nav class="nav bd-grid">
        <div class="nav__toggle" id="nav-toggle">
          <ul>
            <li><img src="assets/img/menu.png" /></li>
          </ul>
        </div>
        <div class="nav__menu" id="nav-menu">
          <div class="nav__close" id="nav-close">
            <ul>
              <li><img src="assets/img/close.png" /></li>
            </ul>
          </div>

          <div class="nav__list">
            <ul>
              <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
              <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
              <li class="nav__item"><a href="#gallery" class="nav__link">Gallery</a></li>
              <li class="nav__item"><a href="#myblog" class="nav__link">My Blog</a></li>
              <li class="nav__item"><a href="#contact" class="nav__link">Contact Me</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main class="l-main">
      <section class="home" id="home">
        <div class="home__container bd-grid">
          <div class="home__data">
            <div class="home__img">
              <img src="assets/img/Jose.png" />
            </div>

            <h1 class="home__title">Joseph Alexander Wowor</h1>
            <span class="home__profession">Informatics Student At University of Sam Ratulangi Manado</span>

            <div class="home__social">
              <a href="https://github.com/josewowor" target="_blank" class="home__social-link">
                <img src="assets/img/github.png" />
              </a>
              <a href="https://www.instagram.com/josewowor?igsh=YmE5ZW01Y2tyamh6" target="_blank" class="home__social-link">
                <img src="assets/img/instagram.png" />
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- ABOUT -->
      <section class="about section" id="about">
        <h2 class="section-title">About Me</h2>

        <div class="about__container bd-grid">
          <div class="about__data">
            <p class="about__description">
              Greetings! I am Jose, an active student at Sam Ratulangi University. With an interest in Programming, I am active in student organizations and am always looking for opportunities to learn and grow. I hope to make a meaningful
              contribution to the university and society.
            </p>
            <img src="assets/img/Jose2.jpg" class="about__img" />
          </div>
          <div>
            <div class="about__information">
              <h3 class="about__information-title">Information</h3>
              <div class="about__information-data">
                <img src="assets/img/user.png" />
                <span>Joseph Alexander Wowor</span>
              </div>
              <div class="about__information-data">
                <img src="assets/img/phone.png" />
                <span>+62 895-3919-46537</span>
              </div>
              <div class="about__information-data">
                <img src="assets/img/email.png" />
                <span>josewowor2004@gmail.com</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- GALLERY -->
      <section class="gallery section" id="gallery">
        <h2 class="section-title">My Gallery</h2>

        <div class="gallery__container bd-grid">
          <div class="gallery__content">
            <img src="assets/img/WhatsApp Image 2024-04-23 at 9.12.01 PM.jpeg" class="gallery__img" />
          </div>

          <div class="gallery__content">
            <img src="assets/img/WhatsApp Image 2024-04-23 at 9.21.36 PM.jpeg" class="gallery__img" />
          </div>

          <div class="gallery__content">
            <img src="assets/img/WhatsApp Image 2024-04-23 at 9.16.33 PM.jpeg" class="gallery__img" />
          </div>

          <div class="gallery__content">
            <img src="assets/img/WhatsApp Image 2024-04-23 at 9.11.41 PM.jpeg" class="gallery__img" />
          </div>

          <div class="gallery__content">
            <img src="assets/img/WhatsApp Image 2024-04-23 at 9.14.48 PM.jpeg" class="gallery__img" />
          </div>

          <div class="gallery__content">
            <img src="assets/img/WhatsApp Image 2024-04-23 at 9.16.21 PM.jpeg" class="gallery__img" />
          </div>

          <div class="gallery__content">
            <img src="assets/img/WhatsApp Image 2024-04-23 at 9.14.59 PM.jpeg" class="gallery__img" />
          </div>

          <div class="gallery__content">
            <img src="assets/img/WhatsApp Image 2024-04-23 at 9.11.25 PM.jpeg" class="gallery__img" />
          </div>
        </div>
      </section>

      <!-- My Blog -->
    <section class="blog section" id="myblog">
        <h2 class="section-title">My Blog</h2>

        <div class="blog__container bd-grid">
            <?php foreach ($blog as $artikel): ?>
                <div class="blog__content">
                    <h2 class="blog__title"><?php echo htmlspecialchars($artikel['judul']); ?></h2>
                    <p><?php echo nl2br(htmlspecialchars($artikel['deskripsi'])); ?></p>
                    <br>
                    <p>Sumber: <a href="<?php echo htmlspecialchars($artikel['sumber']); ?>" target="_blank"><?php echo htmlspecialchars($artikel['sumber']); ?></a></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

      <!-- CONTACT -->
      <section class="contact section" id="contact">
        <span class="section-subtitle">Contact Me</span>
        <h2 class="section-title">Get In Touch</h2>

        <div class="contact__container bd-grid">
          <div>
            <div class="contact__info">
              <h3 class="contact__subtitle">Call Me</h3>
              <span class="contact__text">+62895391946537</span>
            </div>

            <div class="contact__info">
              <h3 class="contact__subtitle">E-mail</h3>
              <span class="contact__text">josewowor2004@gmail.com</span>
              <span class="contact__text">josephwowor026@student.unsrat.ac.id</span>
            </div>

            <div class="contact__info">
              <h3 class="contact__subtitle">Location</h3>
              <span class="contact__text">Manado</span>
            </div>
          </div>
        </div>
      </section>
    </main>
    <script src="assets/js/script.js"></script>
  </body>
</html>
