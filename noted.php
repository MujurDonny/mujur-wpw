<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }

    .slider-container {
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
  z-index: 1;
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
      .slider-image-galery {
        width: 100%;
        height: auto;
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
  </style>

</head>
<body>
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

  <script>
  const prevButton = document.querySelector('.prev');
  const nextButton = document.querySelector('.next');
  const slider = document.querySelector('.listing-slider');
  let isMouseInside = false;
  let autoScrollInterval;

  // Fungsi untuk otomatis scroll
  function autoScroll() {
    autoScrollInterval = setInterval(() => {
      slider.scrollBy({
        left: 300,
        behavior: 'smooth'
      });

      // Mengulangi scroll kembali ke awal ketika sudah mencapai akhir
      if (slider.scrollLeft + slider.offsetWidth >= slider.scrollWidth) {
        setTimeout(() => {
          slider.scrollTo({
            left: 0,
            behavior: 'smooth'
          });
        }, 300);
      }
    }, 2000); 
  }

  function stopAutoScroll() {
    clearInterval(autoScrollInterval);
  }

  autoScroll();

  prevButton.addEventListener('click', () => {
    stopAutoScroll();
    slider.scrollBy({
      left: -300,
      behavior: 'smooth'
    });
    autoScroll(); 
  });

  nextButton.addEventListener('click', () => {
    stopAutoScroll(); 
    slider.scrollBy({
      left: 300,
      behavior: 'smooth'
    });
    autoScroll();
  });

  const sliderContainer = document.querySelector('.slider-container');

  sliderContainer.addEventListener('mouseenter', () => {
    isMouseInside = true;
    prevButton.style.display = 'block'; 
    nextButton.style.display = 'block';
  });

  sliderContainer.addEventListener('mouseleave', () => {
    isMouseInside = false;
    prevButton.style.display = 'none';
    nextButton.style.display = 'none';
  });

</script>

</body>
</html>
