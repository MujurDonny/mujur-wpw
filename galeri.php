<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wisata-One</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #ececec;
}

.gallery-header {
    height: 280px;
    text-align: center;
    padding: 50px;
    background-color: #333;
    color: #fff;
}

.gallery-header h1 {
    font-size: 3rem;
    margin: 0;
}

.gallery-header p {
    font-size: 1.5rem;
    margin-top: 10px;
}
.gallery-header h1, p{
    margin-top: 60px;
}
@media (max-width: 768px) {
  .gallery-header h1, p {
    margin-top: 36px;
}
}
.gallery-wrapper {
  white-space: nowrap;
  overflow: hidden;
  width: 100%;
  position: relative;
}

.gallery-grid {
  transition: transform 0.5s linear;
  display: flex;
  width: max-content;
  will-change: transform;
  margin-top: 20px;
}

.gallery-item {
  margin-right: 20px;
  flex: 0 0 auto;
  width: 200px; 
  margin: 0 10px; 
  position: relative;
}

.gallery-item img {
  width: 100%;
  height: auto;
  display: block;
  border-radius: 10%;
}

.overlay{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  font-size: 10px;
  text-align: center;
}

.gallery-container {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
    height: 100vh; 
    background-color: #fff;
    overflow: hidden;
}

.gallery {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 15px;
    width: 100%;
    height: 100%;
    padding: 10px;
    box-sizing: border-box;
}

.gallery img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease, box-shadow 0.3s ease, filter 0.3s ease;
}

.gallery img:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
    filter: brightness(90%);
}

@media (max-width: 768px) {
    .gallery {
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    }

    .gallery img {
        height: 200px;
    }
}

@media (max-width: 480px) {
    .gallery {
        grid-template-columns: 1fr;
    }

    .gallery img {
        height: 150px;
    }
}



.gallery-container {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
    height: 100vh;
    background-color: #fff;
    overflow: hidden;
}

.gallery {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 15px;
    width: 100%;
    height: 100%;
    padding: 10px;
    box-sizing: border-box;
}

.gallery-latimojong {
    position: relative;
    overflow: hidden;
}

.gallery img {
    width: 100%;
    height: 250px; 
    object-fit: cover;
    display: block;
    transition: transform 0.3s ease;
}

.caption {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.6); 
    color: #fff; 
    padding: 10px;
    text-align: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.gallery-latimojong:hover .caption {
    opacity: 1;
}

@media (max-width: 768px) {
    .gallery {
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    }

    .gallery img {
        height: 200px;
    }
}

@media (max-width: 480px) {
    .gallery {
        grid-template-columns: 1fr;
    }

    .gallery img {
        height: 150px;
    }
}




    </style>
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
                        <a class="nav-text" href="#">PROFIL</a>
                    </li>
                    <li class="navigator">
                        <a class="nav-text" href="#">TIKET</a>
                    </li>
                    <li class="navigator">
                        <a class="nav-text" href="#">LOKASI</a>
                    </li>
                    <li class="navigator">
                        <a class="nav-text" href="#">OBJEK WISATA</a>
                    </li>
                    <li class="navigator">
                        <a class="nav-text" href="#">GALERI</a>
                    </li>
                    <li class="navigator">
                        <a class="nav-text" href="#">HUBUNGI KAMI</a>
                    </li>
                    <li class="weather-prediction" id="weather-prediction">
                        <span id="weather-info">24°C, Hujan</span>
                    </li>
                    <li class="dropdown-icon">
                        <button type="button" id="dropdownButton" class="relative flex items-center text-sm focus:outline-none">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div id="dropdownMenu" class="dropdown-menu">
                            <a href="#" class="dropdown-item"><i class="fas fa-bed"></i> PROFIL</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-landmark"></i> TIKET</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-camera"></i> LOKASI</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-sign-in-alt"></i> OBJEK WISATA</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-sign-in-alt"></i> GALERI</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-sign-in-alt"></i> HUBUNGI KAMI</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="gallery-header">
        <h1>Welcome to the Gallery</h1>
        <p>Explore our collection</p>
    </section>

    <section class="gallery-wrapper">
    <div class="gallery-grid">
        <!-- Gambar 1 -->
        <div class="gallery-item">
        <img src="images/img2.jpeg" alt="Image 1">
        <div class="overlay">
            <h2>LATIMOJONG</h2>
        </div>
        </div>
        <!-- Gambar 2 -->
        <div class="gallery-item">
        <img src="images/img3.jpeg" alt="Image 2">
        <div class="overlay">
            <h2>RONGKONG</h2>
        </div>
        </div>
        <!-- Gambar 3 -->
        <div class="gallery-item">
        <img src="images/img4.jpeg" alt="Image 3">
        <div class="overlay">
            <h2>SESEAN</h2>
        </div>
        </div>
        <!-- Gambar 4 -->
        <div class="gallery-item">
        <img src="images/img5.jpeg" alt="Image 4">
        <div class="overlay">
            <h2>LABOMBO</h2>
        </div>
        </div>
        <!-- Gambar 5 -->
        <div class="gallery-item">
        <img src="images/img3.jpeg" alt="Image 5">
        <div class="overlay">
            <h2>PONNORI</h2>
        </div>
        </div>
        <!-- Gambar 6 -->
        <div class="gallery-item">
        <img src="images/img4.jpeg" alt="Image 6">
        <div class="overlay">
            <h2>PALOPO</h2>
        </div>
        </div>
        <!-- Duplikasi untuk efek looping -->
        <!-- Gambar 7 (Duplikat Gambar 1) -->
        <div class="gallery-item">
        <img src="images/img2.jpeg" alt="Image 1">
        <div class="overlay">
            <h2>LATIMOJONG</h2>
        </div>
        </div>
        <!-- Gambar 8 (Duplikat Gambar 2) -->
        <div class="gallery-item">
        <img src="images/img3.jpeg" alt="Image 2">
        <div class="overlay">
            <h2>RONGKONG</h2>
        </div>
        </div>
        <!-- Gambar 9 (Duplikat Gambar 3) -->
        <div class="gallery-item">
        <img src="images/img4.jpeg" alt="Image 3">
        <div class="overlay">
            <h2>SESEAN</h2>
        </div>
        </div>
        <!-- Gambar 10 (Duplikat Gambar 4) -->
        <div class="gallery-item">
        <img src="images/img5.jpeg" alt="Image 4">
        <div class="overlay">
            <h2>LABOMBO</h2>
        </div>
        </div>
        <!-- Gambar 11 (Duplikat Gambar 5) -->
        <div class="gallery-item">
        <img src="images/img3.jpeg" alt="Image 5">
        <div class="overlay">
            <h2>PONNORI</h2>
        </div>
        </div>
        <!-- Gambar 12 (Duplikat Gambar 6) -->
        <div class="gallery-item">
        <img src="images/img4.jpeg" alt="Image 6">
        <div class="overlay">
            <h2>PALOPO</h2>
        </div>
        </div>
    </div>
    </section>

    <div class="container-slide">
        <div class="slide-text">
        <h1>LATIMOJONG</h1>
        </div>
        <div class="slide-text-bg">
            <h1>LATIMOJONG</h1>
        </div>
    </div>

    <div class="gallery-container">
            <div class="gallery">
                <a href="">
                    <div class="gallery-latimojong">
                        <img src="images/img1.jpg" alt="Image 1">
                        <div class="caption">Image 1 Description</div>
                    </div>
                </a>
                <a href="">
                    <div class="gallery-latimojong">
                        <img src="images/img2.jpg" alt="Image 2">
                        <div class="caption">Image 2 Description</div>
                    </div>
                </a>
                <a href="">
                    <div class="gallery-latimojong">
                        <img src="images/img3.jpg" alt="Image 2">
                        <div class="caption">Image 3 Description</div>
                    </div>
                </a>
                <a href="">
                    <div class="gallery-latimojong">
                        <img src="images/img4.jpg" alt="Image 2">
                        <div class="caption">Image 4 Description</div>
                    </div>
                </a>
                <a href="">
                    <div class="gallery-latimojong">
                        <img src="images/img5.jpg" alt="Image 2">
                        <div class="caption">Image 5 Description</div>
                    </div>
                </a>
                <a href="">
                    <div class="gallery-latimojong">
                        <img src="images/img6.jpg" alt="Image 2">
                        <div class="caption">Image 6 Description</div>
                    </div>
                </a>
                <a href="">
                    <div class="gallery-latimojong">
                        <img src="images/img6.jpeg" alt="Image 2">
                        <div class="caption">Image 7 Description</div>
                    </div>
                </a>
                    <a href="#"><div class="gallery-latimojong">
                        <img src="images/img5.jpeg" alt="Image 2">
                        <div class="caption">Image 8 Description</div>
                    </div>
                </a>
            </div>
    </div>

    <div class="container-slide">
        <div class="slide-text">
        <h1>RONGKONG</h1>
        </div>
        <div class="slide-text-bg">
            <h1>RONGKONG</h1>
        </div>
    </div>

    <div class="gallery-container">
            <div class="gallery">
                <a href="">
                    <div class="gallery-latimojong">
                        <img src="images/img1.jpg" alt="Image 1">
                        <div class="caption">Image 1 Description</div>
                    </div>
                </a>
                <a href="">
                    <div class="gallery-latimojong">
                        <img src="images/img2.jpg" alt="Image 2">
                        <div class="caption">Image 2 Description</div>
                    </div>
                </a>
                <a href="">
                    <div class="gallery-latimojong">
                        <img src="images/img3.jpg" alt="Image 2">
                        <div class="caption">Image 3 Description</div>
                    </div>
                </a>
                <a href="">
                    <div class="gallery-latimojong">
                        <img src="images/img4.jpg" alt="Image 2">
                        <div class="caption">Image 4 Description</div>
                    </div>
                </a>
                <a href="">
                    <div class="gallery-latimojong">
                        <img src="images/img5.jpg" alt="Image 2">
                        <div class="caption">Image 5 Description</div>
                    </div>
                </a>
                <a href="">
                    <div class="gallery-latimojong">
                        <img src="images/img6.jpg" alt="Image 2">
                        <div class="caption">Image 6 Description</div>
                    </div>
                </a>
                <a href="">
                    <div class="gallery-latimojong">
                        <img src="images/img6.jpeg" alt="Image 2">
                        <div class="caption">Image 7 Description</div>
                    </div>
                </a>
                    <a href="#"><div class="gallery-latimojong">
                        <img src="images/img5.jpeg" alt="Image 2">
                        <div class="caption">Image 8 Description</div>
                    </div>
                </a>
            </div>
    </div>

    <div class="container-slide">
        <div class="slide-text">
        <h1>SESEAN</h1>
        </div>
        <div class="slide-text-bg">
            <h1>SESEAN</h1>
        </div>
    </div>

    <div class="gallery-container">
            <div class="gallery">
                <a href="">
                    <div class="gallery-latimojong">
                        <img src="images/img1.jpg" alt="Image 1">
                        <div class="caption">Image 1 Description</div>
                    </div>
                </a>
                <a href="">
                    <div class="gallery-latimojong">
                        <img src="images/img2.jpg" alt="Image 2">
                        <div class="caption">Image 2 Description</div>
                    </div>
                </a>
                <a href="">
                    <div class="gallery-latimojong">
                        <img src="images/img3.jpg" alt="Image 2">
                        <div class="caption">Image 3 Description</div>
                    </div>
                </a>
                <a href="">
                    <div class="gallery-latimojong">
                        <img src="images/img4.jpg" alt="Image 2">
                        <div class="caption">Image 4 Description</div>
                    </div>
                </a>
                <a href="">
                    <div class="gallery-latimojong">
                        <img src="images/img5.jpg" alt="Image 2">
                        <div class="caption">Image 5 Description</div>
                    </div>
                </a>
                <a href="">
                    <div class="gallery-latimojong">
                        <img src="images/img6.jpg" alt="Image 2">
                        <div class="caption">Image 6 Description</div>
                    </div>
                </a>
                <a href="">
                    <div class="gallery-latimojong">
                        <img src="images/img6.jpeg" alt="Image 2">
                        <div class="caption">Image 7 Description</div>
                    </div>
                </a>
                    <a href="#"><div class="gallery-latimojong">
                        <img src="images/img5.jpeg" alt="Image 2">
                        <div class="caption">Image 8 Description</div>
                    </div>
                </a>
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
            <a href="#">PROFIL</a>
            <a href="#">TIKET</a>
            <a href="#">LOKASI</a>
            <a href="#">OBJEK WISATA</a>
            <a href="#">GALERI</a>
            <a href="#">HUBUNGI KAMI</a>
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

    <script>
const galleryGrid = document.querySelector('.gallery-grid');
const galleryItems = document.querySelectorAll('.gallery-item');
const itemWidth = galleryItems[0].offsetWidth + 20; // Termasuk margin
const totalWidth = itemWidth * galleryItems.length;
let scrollAmount = 0;
const scrollSpeed = 0.5;

galleryGrid.style.width = `${totalWidth}px`;

function scrollGallery() {
  scrollAmount += scrollSpeed;
  if (scrollAmount >= itemWidth * galleryItems.length) {
    scrollAmount = 0;
  }
  galleryGrid.style.transform = `translateX(-${scrollAmount}px)`;
  requestAnimationFrame(scrollGallery);
}

scrollGallery();



    </script>
  </body>
</html>