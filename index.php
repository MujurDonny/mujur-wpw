<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wisata-One</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>
  <body>

  <nav class="navbar transparent scrolled">
    <div class="container">
        <a class="navbarlogo" href="index.php">
            <img src="images/HMPS RPL (1).png" alt="Logo" />
        </a>
        <div class="navbar-container" id="navbarsExampleDefault">
            <ul class="navbar-nav">
                <li class="navigator">
                    <a class="nav-text" href="profil.php">PROFIL</a>
                </li>
                <li class="navigator">
                    <a class="nav-text" href="tiket.php">TIKET</a>
                </li>
                <li class="navigator">
                    <a class="nav-text" href="lokasi.php">LOKASI</a>
                </li>
                <li class="navigator">
                    <a class="nav-text" href="objekwisata.php">OBJEK WISATA</a>
                </li>
                <li class="navigator">
                    <a class="nav-text" href="galeri.php">GALERI</a>
                </li>
                <li class="navigator">
                    <a class="nav-text" href="tes.php">HUBUNGI KAMI</a>
                </li>
                <li class="weather-prediction" id="weather-prediction">
                    <span id="weather-info">24°C, Hujan</span>
                </li>
                <li class="dropdown-icon">
                    <button type="button" id="dropdownButton" class="relative flex items-center text-sm focus:outline-none">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div id="dropdownMenu" class="dropdown-menu">
                        <a href="index.php" class="dropdown-item"><i class="fas fa-bed"></i> HOME</a>
                        <a href="tiket.php" class="dropdown-item"><i class="fas fa-landmark"></i> TIKET</a>
                        <a href="lokasi.php" class="dropdown-item"><i class="fas fa-camera"></i> LOKASI</a>
                        <a href="objekwisata.php" class="dropdown-item"><i class="fas fa-sign-in-alt"></i> OBJEK WISATA</a>
                        <a href="galeri.php" class="dropdown-item"><i class="fas fa-sign-in-alt"></i> GALERI</a>
                        <a href="tes.php" class="dropdown-item"><i class="fas fa-sign-in-alt"></i> HUBUNGI KAMI</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
  </nav>

  <div class="container-header">
      <div class="container-container">
        <div class="container-video">
          <video
            id="video"
            class="header-video"
            autoplay
            muted
            disablePictureInPicture
            loop
          >
            <source src="images/video_1.mp4" />
          </video>
        </div>
        <div class="container-text">
          <h1>RONGKONG</h1>
          <p>Kehidupan adalah Kematian</p>
        </div>
      </div>
  </div>

  <div class="container-slide">
    <div class="slide-text">
      <h1>SELAMAT DATANG DI RONGKONG</h1>
        <p>
          Rongkong adalah sebuah Kecamatan dan sub suku Luwu di kabupaten Luwu
          Utara
        </p>
      </div>
      <div class="slide-text-bg">
        <h1>WELCOME</h1>
    </div>
  </div>

  <div class="journey-container">
      <div class="journey">
        <div class="journey-image">
          <video class="journey-video" id="journey-video4" muted disablePictureInPicture loop>
            <source src="images/header.mp4" />
          </video>
        </div>
        <div class="journey-text">
          <h1>Latimojong</h1>
          <a href="#">Selengkapnya&raquo;</i></a>
        </div>
      </div>
      <div class="journey">
        <div class="journey-image">
          <video class="journey-video" id="journey-video4" muted disablePictureInPicture loop>
            <source src="images/video_1.mp4" />
          </video>
        </div>
        <div class="journey-text">
          <h1>Latimojong</h1>
          <a href="#">Selengkapnya&raquo;</i></a>
        </div>
      </div>
      <div class="journey">
        <div class="journey-image">
          <video class="journey-video" id="journey-video4" muted disablePictureInPicture loop>
            <source src="images/video_2.mp4" />
          </video>
        </div>
        <div class="journey-text">
          <h1>Latimojong</h1>
          <a href="#">Selengkapnya&raquo;</i></a>
        </div>
      </div>
  </div>

    <div class="container-slide">
        <div class="slide-text"> 
          <h1>VISIT WITH FAMILY</h1>
          <p>Nikmati waktu liburan dengan keluarga tercinta</p>
        </div>
        <div class="slide-text-bg">
          <h1>FAMILY</h1>
        </div>
    </div>

  <div class="section1">
      <main>
        <ul class="slider">
          <li class="item image1">
            <div class="content">
              <h2 class="title">"Puncak Tabuan"</h2>
              <p class="description">
                Puncak Tabuan merupakan destinasi wisata di Kecamatan Rongkong
                yang paling terkenal, dengan spot-spot selfie yang memukau.
                Terletak di Desa Rinding Allo, wisatawan hanya butuh waktu ± 20
                menit berjalan kaki untuk sampai di tempat tujuan.
              </p>
              <a href="#"
                ><button class="split-button">
                  <span>Explore 360˚</span>
                </button></a
              >
            </div>
          </li>
          <li class="item image2">
            <div class="content">
              <h2 class="title">"Puncak Tabuan"</h2>
              <p class="description">
                Puncak Tabuan merupakan destinasi wisata di Kecamatan Rongkong
                yang paling terkenal, dengan spot-spot selfie yang memukau.
                Terletak di Desa Rinding Allo, wisatawan hanya butuh waktu ± 20
                menit berjalan kaki untuk sampai di tempat tujuan.
              </p>
              <a href="#"
                ><button class="split-button">
                  <span>Explore 360˚</span>
                </button></a
              >
            </div>
          </li>
          <li class="item image3">
            <div class="content">
              <h2 class="title">"Wisata air terjun tulang-tulang"</h2>
              <p class="description">
                Selain disuguhkan dengan pemandangan gunung yang indah, Rongkong
                juga memiliki air terjun tulang-tulang yang terletak di desa
                pengkendekan.
              </p>
              <a href="#"
                ><button class="split-button">
                  <span>Explore 360˚</span>
                </button></a
              >
            </div>
          </li>
          <li class="item image4">
            <div class="content">
              <h2 class="title">"Berkemah di Bukit Tombang"</h2>
              <p class="description">
                Luangkan waktu anda untuk membuang penat sejenak dengan berkemah
                di Bukit Tombang, Desa Desa Minanga.
              </p>
              <a href="#"
                ><button class="split-button">
                  <span>Explore 360˚</span>
                </button></a
              >
            </div>
          </li>
          <li class="item image5">
            <div class="content">
              <h2 class="title">"Buntu Parammean"</h2>
              <p class="description">
                Objek wisata yang satu ini sangat cocok untuk kegiatan
                perkemahan, cemping, dan kegiatan alam bebas lainya.
              </p>
              <a href="#"
                ><button class="split-button">
                  <span>Explore 360˚</span>
                </button></a
              >
            </div>
          </li>
          <li class="item image6">
            <div class="content">
              <h2 class="title">"Danau Rantena Limbong"</h2>
              <p class="description">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Tempore fuga voluptatum, iure corporis inventore praesentium
                nisi. Id laboriosam ipsam enim.
              </p>
              <a href="#"
                ><button class="split-button">
                  <span>Explore 360˚</span>
                </button></a
              >
            </div>
          </li>
            </ul>

        <nav class="nav">
          <ion-icon class="btn prev" name="arrow-back-outline"></ion-icon>
          <ion-icon class="btn next" name="arrow-forward-outline"></ion-icon>
        </nav>
      </main>
  </div>

  <div class="container-image">
      <div class="image-slide">
        <div class="image">
          <div class="image-front">
            <img src="images/umpalopo.png" alt="" />
          </div>
          <img class="image-back" src="images/duotone.jpg" alt="Image 1" />
        </div>
      </div>
      <div class="image-slide">
        <div class="image">
          <div class="image-front">
            <img src="images/HMPS RPL (1).png" alt="" />
          </div>
          <img class="image-back" src="images/duotone.jpg" alt="Image 1" />
        </div>
      </div>
      <div class="image-slide">
        <div class="image">
          <div class="image-front">
            <img src="images/HMPS RPL (1).png" alt="" />
          </div>
          <img class="image-back" src="images/duotone.jpg" alt="Image 1" />
        </div>
      </div>
      <div class="image-slide">
        <div class="image">
          <div class="image-front">
            <img src="images/HMPS RPL (1).png" alt="" />
          </div>
          <img class="image-back" src="images/duotone.jpg" alt="Image 1" />
        </div>
      </div>
  </div>

  

  <div class="footer">
      <div class="footer-container">
        <div class="footer-head">
          <div class="footer-head-logo">
          <img src="images/HMPS RPL (1).png" alt="">
          <img src="images/HMPS RPL (1).png" alt="">
          <img src="images/HMPS RPL (1).png" alt="">
        </div>
        <div class="footer-head-tittle">
          <h3>Universitas Muhammadiyah Palopo</h3>
        </div>
          <div class="footer-head-text">
            <a href=""><i class="fa-solid fa-location-dot"></i> Jalan. Jendral Sudirman, Wara Selatan, Kota Palopo</a>
            <a href=""><i class="fa-solid fa-envelope"></i> duotonednny@gmail.com</a>
            <a href=""><i class="fa-solid fa-phone"></i> 0812 4454 1473</a>
          </div>
          <div class="quick">
            <a href="profil.php">PROFIL</a>
            <a href="tiket.php">TIKET</a>
            <a href="lokasi.php">LOKASI</a>
            <a href="objekwisata.php">OBJEK WISATA</a>
            <a href="galeri.php">GALERI</a>
            <a href="tes.php">HUBUNGI KAMI</a>
          </div>
        </div>
        <div class="footer-midd">
          <div class="footer-midd-text">
            <h3>HOME</h3>
              <a href="https://info.flagcounter.com/4kHu"><img src="https://s11.flagcounter.com/countxl/4kHu/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_10/viewers_0/labels_0/pageviews_0/flags_0/percent_0/" alt="Flag Counter" border="0"/></a>
          </div>
        </div>
        <div class="footer-midd-map">
          <h3>LOCATION</h3>
          <div id="map"></div>
          <script>
            function initMap() {
              var location = { lat: -3.0923449, lng: 120.2527387 };
              var map = new google.maps.Map(document.getElementById("map"), {
                zoom: 8,
                center: location,
                zoomControl: true,
              });
              var marker = new google.maps.Marker({
                position: location,
                map: map,
                title: "Nama Lokasi",
              });
              var infowindow = new google.maps.InfoWindow({
                content: "Nama Lokasi",
              });
              marker.addListener("click", function () {
                infowindow.open(map, marker);
              });
            }
          </script>
        </div>
      </div>
  </div>

  <div class="copyright">
    <div class="copyright-text">
        <p>© Wisata-One. All rights reserved.</p>
      </div>
        <div class="copyright-head-brands">
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
    </div>
  </div>

  <div class="chatbot-toggle" id="chatbotToggle">
        <i class="fa-brands fa-bots"></i>
  </div>

  <div class="chat-container" id="chatContainer">
    <div class="logo-chat">
      <img class="logo-chat-1" src="images/umpalopo.png" alt="Logo Chatbot">
        <button id="closeChatbot" class="close-button">
          <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6 18L18 6M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
    </div>
      <div id="chatbox" class="chatbox">
      </div>
      <div class="questions">
        <button onclick="askQuestion('What is your name?')">What is your name?</button>
        <button onclick="askQuestion('How can I use this bot?')">How can I use this bot?</button>
        <button onclick="askQuestion('What is the purpose of this bot?')">What is the purpose of this bot?</button>
      </div>
  </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBww1LGLtXEg7SjK4LsLCRm6uDx9sr-gCQ&callback=initMap"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>