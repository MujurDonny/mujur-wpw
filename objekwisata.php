<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wisata-One</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 <style>

.listing-desc-headline {
    text-align: center;
    margin: 0 0 15px 0;
    z-index: 1;
    color: #3F72AF;
    text-shadow: 
        1px 1px 0px black,
        -1px -1px 0px black,
        1px -1px 0px black,
        -1px 1px 0px black;
    letter-spacing: 5px;
    font-family: Impact, Haettenschweiler, "Arial Narrow Bold", sans-serif;
    font-size: 3rem;
    white-space: nowrap;
    pointer-events: none;
}


    .slider-container {
        top: 50px;
      position: relative;
      width: 100%;
      height: 400px;
      overflow: hidden;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .slider-container .prev,
.slider-container .next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background-color: rgba(0, 0, 0, 0.7);
  color: white;
  border: none;
  padding: 12px;
  cursor: pointer;
  font-size: 30px;
  z-index: 10;
  border-radius: 100%;
  display: none;
}

.slider-container .prev {
  left: 100px;
}

.slider-container .next {
  right: 100px;
}

.slider-container:hover .prev,
.slider-container:hover .next {
  display: block;
}


    .listing-slider {
      display: flex;
      width: 100%;
      height: 100%;
      overflow-x: hidden;
      scroll-behavior: smooth;
      background-color: #fff;

    }

    .slider-image-galery {
      display: flex;
      flex-shrink: 0;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      position: relative;
      transition: transform 0.3s ease;
    }



.slider-image-galery-4,
.slider-image-galery-5,
.slider-image-galery-3,
.slider-image-galery-2,
.slider-image-galery-1 {
  margin: 0px;
  padding: 0px;
  display: flex;
  flex-wrap: wrap;
  width: 400px;
  height: auto;
  gap: 0; 
  justify-content: flex-start;
  align-items: flex-start;
}

.slider-image-galery-4 img,
.slider-image-galery-5 img,
.slider-image-galery-3 img,
.slider-image-galery-2 img,
.slider-image-galery-1 img     {
  width: 194.8px; 
  height: 194.8px; 
  object-fit: cover; 
  border: none;
}


    @media (max-width: 768px) {
      .slider-container{
        height: 130px;
      }
      .slider-image-galery {
        width: 30%;
        height: auto;
      }
      .slider-image-galery-4 img,
.slider-image-galery-5 img,
.slider-image-galery-3 img,
.slider-image-galery-2 img,
.slider-image-galery-1 img     {
  width: 64.8px; 
  height: 64.8px; 
  object-fit: cover; 
  border: none;
}
    }

    @media (max-width: 480px) {
      .slider-container {
        height: auto;
      }

      .slider-container .prev,
      .slider-container .next {
        font-size: 18px;
        padding: 5px;
      }
    }
    
    #listing-profile {
    width: 90%;
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    display: block;
}
.show-more .show-all {
    max-height: none; 
    
}

#listing-profile .post-img {
    width: 100%;
    max-height: 500px;
    object-fit: cover;
    border-radius: 8px;
}

.show-more {
	position: relative;
  max-height: 300px;
  overflow: hidden;
  transition: max-height 0.5s ease;
}
.show-more-btn-profile {
    display: block;
    margin: 20px auto;
    padding: 10px 20px;
    background-color:#112D4E;
    color: #D6EFD8;
    border-radius: 20px;
    border:none;
    cursor: pointer;
    text-align: center;
    font-size: 16px;
    z-index: 999;
}
.show-more-btn-profile:hover{
  background-color: #144272;
  color:#D6EFD8;
}

.show-more:after {
	content:"";
	position: absolute;
	bottom: 0;
	left: 0;
	width: 100%;
	height: 580px;
	display: block;
	background: linear-gradient(rgba(255,255,255,0), #fff 88%);
	z-index: 9;
	opacity: 1;
	visibility: visible;
	transition: 0.8s;
}

.show-more.visible { margin-bottom: 20px; }
.show-more.visible:after { opacity: 0; visibility: hidden; }

.show-more-button {
	position: relative;
	font-weight: 60px;
	font-size: 15px;
	left: 0;
	margin-left: 50%;
	transform: translateX(-50%);
	z-index: 10;
	text-align: center;
	display: inline-block;
	opacity: 1;
	visibility: visible;
	transition: all 0.3s;
	padding: 5px 20px;
	color: #666;
	background-color: #f2f2f2;
	border-radius: 50px;
	top: -100px;
	min-width: 140px;
}

.show-more-button:before { content: attr(data-more-title); }
.show-more-button.active:before { content: attr(data-less-title); }

.show-more-button i {
	margin-left: 6px;
	color: #66676b;
	font-weight: 500;
	transition: 0.2s;
}

.show-more-button.active i {
	transform: rotate(180deg);
}


.clearfix {
    clear: both;
}


.post-img {
	position: relative;
	height: 100%;
	width: 100%;
	display: block;
}

.post-img img {
	width: 100%;
	border-radius: 3px 3px 0 0;
}

.post-img:after {
	position: absolute;
	height: 100%;
	width: 100%;
	display: block;
	top: 0;
	left: 0;
	content: "";
	z-index: 9;
	opacity: 0.1;
	background: #333;
	transition: opacity 0.4s;
	border-radius: 3px 3px 0 0;
}

.post-img:hover:after {
	opacity: 0.5;
}


.post-img:before {
	opacity: 0;
	visibility: hidden;
	position: absolute;
	display: block;
	top: 50%;
	right: 0;
	left: 0;
	margin: 0 auto;
	text-align: center;
	content: "";
	z-index: 119;
	transition: 0.3s;
	transform: translateY(-80%);
	width: 50px;
	height: 50px;
	text-align: center;
	border-radius: 50%;
	background-color: #66676b;
	background-image: url(../images/plus-icon.svg);
	background-repeat: no-repeat;
	background-position: 50%
}

.post-img:hover:before {
	opacity: 1;
	visibility: visible;
	transform: translateY(-50%);
}


#listing-fasilitas {
    width: 90%;
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); 
    display: block;
}


.listing-features {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    padding-left: 0;
    list-style-type: none;
}

#listing-fasilitas .listing-features li {
    background-color: #DBE2EF;
    padding: 8px 15px;
    border-radius: 5px;
    font-size: 16px;
    font-weight: 500;
    color: #555;
    display: inline-flex;
    align-items: center;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease;
    flex: 1 1 30%;
}

#listing-fasilitas .listing-features li:hover {
    background-color: #ececec;
    cursor: pointer;
}

#listing-fasilitas .listing-features li::before {
    content: '\2713';
    margin-right: 8px;
    padding: 5px;
    color: #fff;
    background-color: #112D4E;
    border-radius: 5px;
    font-weight: bold;
}

@media (max-width: 1024px) {
    #listing-fasilitas .listing-features li {
        flex: 1 1 45%;
    }
}

@media (max-width: 768px) {
    #listing-fasilitas .listing-features li {
        flex: 1 1 45%;
    }
}




#titlebar {
	background-color: #f8f8f8;
	position: relative;
  top: 50px;
	padding: 10px 10px;
	padding-bottom: 15px;
}

#titlebar.gradient {
	background: linear-gradient(to bottom, #f7f7f7 0%, rgba(255,255,255,0.5));
	padding-bottom: 10px;
}

#titlebar span a,
#titlebar span {
	font-size: 20px;
	color: #888;
	margin-bottom: 3px;
	margin-top: 6px;
	display: inline-block;
}

#titlebar #breadcrumbs span {
	font-size: 13px
}

#titlebar h1,
#titlebar h2 {
	font-size: 32px;
	line-height: 40px;
	margin: 1px 0 3px 0;
  color: #333;
}
.listing-nav {
	width: 100%;
	padding: 10px;
	list-style: none;
	margin: 50px 0 0 0;
	border-bottom: 1px solid #e0e0e0;
	font-size: 17px;
	font-weight: 400;
	background-color: #f7f7f7;
}
@media (max-width: 768px) {
  .listing-titlebar {
      padding: 10px; 
  }

  .listing-titlebar-title {
      flex-direction: column;
      align-items: center;
      text-align: center; 
  }

  .listing-title h2 {
      font-size: 20px;
  }

  .listing-titlebar span {
      font-size: 14px; 
  }
}
.sticky {
    position: fixed;
    top: 44px;
    left: 0;
    margin: 20px 0 0 0;
    padding: 10px;
    width: 100%;
    background-color: #fff;
    z-index: 10000;
    @media(max-width:768px){
      font-size: 20px;
    }
}


#listing-ticket {
    width: 90%;
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    display: block;
    top: 120px;
}

.ticket-info {
    max-width: 800px;
    margin: 0 auto;
    background-color: #f9f9f9;
    border-radius: 8px;
}

.ticket-details {
    display: flex;
    flex-direction: column;
    gap: 15px;
}
.ticket-item{
  border-right: 1px solid #777;
  background-color: #DBE2EF;
  padding: 10px;
  border-radius: 5px 0 0 5px ;
}
.ticket-item:hover{
  background-color: #ececec;
  cursor: pointer;
}

.ticket-item h3 {
    margin: 0;
    font-size: 18px;
    color: #555;
}

.ticket-item p {
    margin: 5px 0 0;
    font-size: 16px;
    color: #777;
}

@media (min-width: 600px) {
    .ticket-details {
        flex-direction: row;
        flex-wrap: wrap;
    }

    .ticket-item {
        flex: 1 1 45%;
        margin: 10px;
    }
}
#listing-location {
    width: 90%;
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    display: block;
}


.map-container {
    width: 100%;
    height: 0;
    padding-bottom: 56.25%;
    position: relative;
    border-radius: 8px;
    overflow: hidden;
}

.map-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: none;
    border-radius: 8px;
}

@media (max-width: 768px) {
    #listing-location {
        padding: 10px;
    }

    #listing-location .listing-desc-headline {
        font-size: 20px;
    }
}

#listing-gallery {
    width: 90%;
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    display: block;
}
.gallery-container.show-all {
    max-height: none; 
}

.gallery-container {
  max-height: 500px;
  overflow: hidden;
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
  gap: 0; 
  transition: max-height 0.5s ease;
}

.gallery-item {
    overflow: hidden;
    border-radius: 4px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.3s ease;
}

.gallery-item img:hover {
    transform: scale(1.05);
}
.show-more-btn-gallery {
    display: block;
    margin: 20px auto;
    padding: 10px 20px;
    background-color: #112D4E;
    color:#D6EFD8;
    border-radius: 20px;
    border:none;
    cursor: pointer;
    text-align: center;
    font-size: 16px;
    z-index: 999;
}
.show-more-btn-gallery:hover{
  background-color: #144272;
  color:#D6EFD8;
}
@media (max-width: 768px) {
    .listing-desc-headline {
        font-size: 20px;
    }

    .gallery-container {
        grid-template-columns: repeat(auto-fill, minmax(190px, 1fr));
    }
}

#listing-contact-us {
    width: 90%;
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    display: block;
}


.contact-details {
    display: flex;
    justify-content: space-between;
    gap: 0px;
}

.contact-form {
    flex: 1;
    background-color: #fff;
    border-radius: 0 8px 8px 0;
    padding: 20px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}
.contact-info {
    flex: 1;
    background-color: #112D4E;
    border-radius: 8px 0 0 8px;
    padding: 20px;
}

.contact-info {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 0 auto;
}


.email-icon {
    width: 200px;
    height: auto;
    margin-bottom: 15px;
}

.contact-info p {
    width:90% ;
    margin: 5px 0;
    font-size: 1.3rem;
    justify-content: center;
    text-align: center;
    color: #FFF8E8;
}

.contact-form h4 {
    font-size: 20px;
    margin-bottom: 15px;
}

.contact-form label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.contact-form input,
.contact-form textarea {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
}

.contact-form button {
    width: 100%;
    padding: 10px;
    background-color: #112D4E;
    color: #fff;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.contact-form button:hover {
    background-color: #3F72AF;
}

@media (max-width: 768px) {
    .contact-details {
        flex-direction: column;
        gap: 0;
    }

    .contact-info, 
    .contact-form {
        width: 100%;
    }
    .contact-info{
      border-radius: 8px 8px 0 0;
    }
    .contact-form{
      border-radius: 0 0 8px 8px ;
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
                    <a class="nav-text" href="index.php">HOME</a>
                </li>
                <li class="navigator">
                    <a class="nav-text" href="#">TIKET</a>
                </li>
                <li class="navigator">
                    <a class="nav-text" href="tes.php">LOKASI</a>
                </li>
                <li class="navigator">
                    <a class="nav-text" href="objekwisata.php">OBJEK WISATA</a>
                </li>
                <li class="navigator">
                    <a class="nav-text" href="galeri.php">GALERI</a>
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

    <header id="header-container" class="fullwidth">
        <div id="header">
            <div class="container-1">
                <div class="left-side">
                    <nav id="navigation" class="style-1">
                        <ul id="responsive"> 
                            <li>
                                <a href="home" class="">LATIMOJONG</a>
                            </li>
                            <li>
                                <a href="#" class="">SESEAN</a>
                            <li>
                                <a href="#" class="">RONGKONG</a>
                            </li>
                            <li>
                                <a href="#" class="">LABOMBO</a>
                            </li>
                                                    </ul>
                    </nav>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </header>

    <div class="slider-container">
    <button class="prev">&laquo;</button>
    <div class="listing-slider mfp-gallery-container">
      <div class="slider-image-galery slider-image-galery-1">
        <a href="/images/img6.jpeg" class="item mfp-gallery" title="Sivin Camp di Siang Hari">
          <img src="images/img2.jpeg" alt="Sivin Camp di Siang Hari">
          <img src="images/img2.jpeg" alt="Sivin Camp di Siang Hari">
          <img src="images/img2.jpeg" alt="Sivin Camp di Siang Hari">
          <img src="images/img2.jpeg" alt="Sivin Camp di Siang Hari">
        </a>
      </div>
      <div class="slider-image-galery slider-image-galery-2">
        <a href="/images/img2.jpeg" class="item mfp-gallery" title="Kopi Arabika Khas Latimojong">
          <img src="images/img3.jpeg" alt="Kopi Arabika Khas Latimojong">
          <img src="images/img3.jpeg" alt="Kopi Arabika Khas Latimojong">
          <img src="images/img3.jpeg" alt="Kopi Arabika Khas Latimojong">
          <img src="images/img3.jpeg" alt="Kopi Arabika Khas Latimojong">
        </a>
      </div>
      <div class="slider-image-galery slider-image-galery-3">
        <a href="/images/img3.jpeg" class="item mfp-gallery" title="Budaya Mangdodo">
          <img src="images/img4.jpeg" alt="Budaya Mangdodo">
          <img src="images/img4.jpeg" alt="Budaya Mangdodo">
          <img src="images/img4.jpeg" alt="Budaya Mangdodo">
          <img src="images/img4.jpeg" alt="Budaya Mangdodo">
        </a>
      </div>
      <div class="slider-image-galery slider-image-galery-4">
        <a href="/images/img4.jpeg" class="item mfp-gallery" title="Bunga Rhododenron">
          <img src="images/img5.jpeg" alt="Bunga Rhododenron">
          <img src="images/img5.jpeg" alt="Bunga Rhododenron">
          <img src="images/img5.jpeg" alt="Bunga Rhododenron">
          <img src="images/img5.jpeg" alt="Bunga Rhododenron">
        </a>
      </div>
      <div class="slider-image-galery slider-image-galery-5">
        <a href="/images/img5.jpeg" class="item mfp-gallery" title="Panorama Alam">
          <img src="images/img6.jpeg" alt="Panorama Alam">
          <img src="images/img6.jpeg" alt="Panorama Alam">
          <img src="images/img6.jpeg" alt="Panorama Alam">
          <img src="images/img6.jpeg" alt="Panorama Alam">
        </a>
      </div>
    </div>
    <button class="next">&raquo;</button>
    </div>

    <div id="titlebar" class="listing-titlebar margin-top-20">
      <div class="listing-titlebar-title">
          <h2 class="listing-title">Desa Wisata Latimojong</h2>
            <span><i class="fa fa-map-marker"></i> Latimojong, Buntu Batu, Kabupaten Enrekang, Sulawesi Selatan</span>
      </div>
    </div>

    <div id="listing-nav" class="listing-nav-container margin-top-20">
                    <ul class="listing-nav">
                        <li><a href="#listing-profile" class="active">Profil</a></li>
                        <li><a href="#listing-fasilitas">Fasilitas</a></li>
                        <li><a href="#listing-ticket">Tiket</a></li>
                        <li><a href="#listing-location">Lokasi</a></li>
                        <li><a href="#listing-gallery">Galery</a></li>
                        <li><a href="#listing-contact-us">Hubungi Kami</a></li>
                    </ul>
    </div>
    
    <div id="listing-profile" class="listing-section">
        <video class="post-img" id="video" autoplay muted disablePictureInPicture loop src="images/header.mp4"></video>
        <div class="show-more margin-top-30" id="galleryProfile">
            <p><strong>Desa Latimojong</strong> merupakan salah satu desa yang ada di Kecamatan Buntu Batu, Kabupaten Enrekang, Sulawesi Selatan yang terletak pas di bawah kaki salah satu gunung tertinggi di Indonesia yaitu Gunung Latimojong dengan ketinggian 3.478 mdpl</p>
            <p><strong>Wisata Alam</strong></p>
            <ul>
              <li>Sivin Camp, berupa Camping Ground dan Water Tubbing</li>
              <li>Trakking Gunung Latimojong (wisata minat khusus)<i>Seven Summits Indonesia 3.478 mdpl</i></li>
              <li>Air Terjun Gora</li>
              <li>Air Terjun Sarungpa’ pak</li>
              <li>Kolam renang alam Likulepong</li>
            </ul>
            <p>&nbsp;</p>
            <p><strong>Wisata Budaya</strong></p>
            <ul>
              <li>Bermain Musik Bambu “Mang Bass”</li>
              <li>Mengenal Budaya Mangdodo</li>
              <li>Bermain Motor yang terbuat dari kayu</li>
              <li>Memanen Kopi Latimojong</li>
            </ul>
            <p>&nbsp;</p>
            <p><strong>Wisata Buatan</strong></p>
            <ul>
              <li>Melakukan reboisasi di wilayah Camping</li>
              <li>Mengolah kopi khas Latimojong secara Tradisional dan Modern</li>
              <li>Bersuafoto di area Sivin Camp</li>
              <li>Mengamati flora Indemik “Rhododenron”</li>
            </ul>
            <p>Menikmati alam yang masih asri nan sejuk, bercengkrama dengan masyarakat dengan kearifan lokal yang masih terjaga hingga sekarang serta kemah alam keluarga di Sivin Camp dan trakking Gunung Latimojong, <i>Seven Summits Indonesia</i>, gunung tertinggi di pulau Sulawesi</p>
        </div>
        <!-- <a href="#" class="show-more-button" data-more-title="Tampilkan Semua" data-less-title="Tutup Sebagian"><i class="fa-regular fa-arrow-down-long"></i></a> -->
        <button id="showMoreBtnProfile" class="show-more-btn-profile">Tampilkan Semua</button>
        <div class="clearfix"></div>                   
    </div>

    <div id="listing-fasilitas" class="listing-section">
      <h3 class="listing-desc-headline">FASILITAS</h3>
        <ul class="listing-features checkboxes margin-top-0">
          <li>Areal Parkir</li><li>Balai Pertemuan</li><li>Jungle Tracking</li><li>Kios Souvenir</li><li>Kuliner</li><li>Musholla</li><li>Outbound</li><li>Selfie Area</li><li>Spot Foto</li><li>Tempat makan</li><li>Wifi Area</li>
        </ul>
    </div>

    <div id="listing-ticket" class="listing-section">
    <div class="ticket-info">
        <h3 class="listing-desc-headline">INFORMASI TIKET</h3>
        <div class="ticket-details">
            <div class="ticket-item">
                <h3>Desa Wisata Latimojong</h3>
                <p>Objek Wisata XYZ</p>
            </div>
            <div class="ticket-item">
                <h3>Harga Tiket</h3>
                <p>Dewasa: Rp 50.000</p>
                <p>Anak-anak: Rp 25.000</p>
            </div>
            <div class="ticket-item">
                <h3>Jam Operasional</h3>
                <p>Senin - Jumat: 08.00 - 17.00</p>
                <p>Sabtu - Minggu: 09.00 - 18.00</p>
            </div>
            <div class="ticket-item">
                <h3>Deskripsi</h3>
                <p>Objek wisata yang indah dengan pemandangan alam dan fasilitas lengkap untuk keluarga.</p>
            </div>
        </div>
    </div>
    </div>

    <div id="listing-gallery" class="listing-section">
      <h3 class="listing-desc-headline">GALERI</h3>
      <div class="gallery-container" id="galleryContainer">
        <div class="gallery-item">
          <img src="images/img1.jpg" alt="Deskripsi Gambar 1">
          </div>
          <div class="gallery-item">
              <img src="images/img2.jpeg" alt="Deskripsi Gambar 2">
          </div>
          <div class="gallery-item">
              <img src="images/img3.jpeg" alt="Deskripsi Gambar 3">
          </div>
          <div class="gallery-item">
              <img src="images/img6.jpeg" alt="Deskripsi Gambar 4">
          </div>
          <div class="gallery-item">
              <img src="images/img1.jpg" alt="Deskripsi Gambar 1">
          </div>
          <div class="gallery-item">
              <img src="images/img2.jpeg" alt="Deskripsi Gambar 2">
          </div>
          <div class="gallery-item">
              <img src="images/img3.jpeg" alt="Deskripsi Gambar 3">
          </div>
          <div class="gallery-item">
              <img src="images/img4.jpeg" alt="Deskripsi Gambar 4">
          </div>
          <div class="gallery-item">
              <img src="images/img5.jpeg" alt="Deskripsi Gambar 4">
          </div>
      </div>
      <button id="showMoreBtnGallery" class="show-more-btn-gallery">Tampilkan Semua</button>
    </div>

    <!-- <div id="listing-location" class="listing-section">
      <h3 class="listing-desc-headline">LOKASI</h3>
      <div id="map-location" class="map-container"></div>
    </div> -->

    <div id="listing-contact-us" class="listing-section">
    <h3 class="listing-desc-headline">KONTAK KAMI</h3>
    <div class="contact-details">
        <div class="contact-info">
            <img src="images/email.png" alt="Email Icon" class="email-icon">
            <p>Jika anda mempunyai pertanyaan silahkan hubungi kami di kontak yang sudah tertera atau hubungi kami melalui email.</p>
        </div>
        <div class="contact-form">
            <h4>Kirim Pesan</h4>
            <form action="/send-message" method="post">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Pesan:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit">Kirim</button>
            </form>
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

    var mapLocation = new google.maps.Map(document.getElementById("map-location"), {
      zoom: 8,
      center: location,
      zoomControl: true,
    });
    var markerLocation = new google.maps.Marker({
      position: location,
      map: mapLocation,
      title: "Nama Lokasi",
    });
    var infowindowLocation = new google.maps.InfoWindow({
      content: "Nama Lokasi",
    });
    markerLocation.addListener("click", function () {
      infowindowLocation.open(mapLocation, markerLocation);
    });

    var mapFooter = new google.maps.Map(document.getElementById("map"), {
      zoom: 8,
      center: location,
      zoomControl: true,
    });
    var markerFooter = new google.maps.Marker({
      position: location,
      map: mapFooter,
      title: "Nama Lokasi",
    });
    var infowindowFooter = new google.maps.InfoWindow({
      content: "Nama Lokasi",
    });
    markerFooter.addListener("click", function () {
      infowindowFooter.open(mapFooter, markerFooter);
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
    // const showMoreButton = document.querySelector('.show-more-button');
    // const showMoreContent = document.querySelector('.show-more');

    // showMoreButton.addEventListener('click', function(e) {
    //     e.preventDefault();
        
    //     showMoreContent.classList.toggle('visible');
        
    //     this.classList.toggle('active');
    // });

    window.onscroll = function() {stickyTitle()};

    var titlebar = document.querySelector('.listing-nav');
function stickyTitle() {
    var yOffsetThreshold = window.innerWidth <= 768 ? 377 : 558;

    if (window.pageYOffset > yOffsetThreshold) {
        titlebar.classList.add("sticky");
    } else {
        titlebar.classList.remove("sticky");
    }
}
window.addEventListener('scroll', stickyTitle);
window.addEventListener('resize', stickyTitle);


document.getElementById('showMoreBtnGallery').addEventListener('click', function() {
    const galleryContainer = document.getElementById('galleryContainer');
    
    galleryContainer.classList.toggle('show-all');

    if (galleryContainer.classList.contains('show-all')) {
        this.textContent = 'Tampilkan Lebih Sedikit';
    } else {
        this.textContent = 'Tampilkan Semua';
    }
});

document.getElementById('showMoreBtnProfile').addEventListener('click', function() {
    const galleryProfile = document.getElementById('galleryProfile');
    
    galleryProfile.classList.toggle('show-all');

    if (galleryProfile.classList.contains('show-all')) {
        this.textContent = 'Tampilkan Lebih Sedikit';
    } else {
        this.textContent = 'Tampilkan Semua';
    }
});


</script>

</body>

</html>

