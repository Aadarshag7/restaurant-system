@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Events Section</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  
  <!-- AOS CSS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  
  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
  <style>
    .events {
      position: relative;
      padding: 60px 0;
    }
    
    .events .slider-bg {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
      opacity: 0.1;
    }
    
    .swiper {
      width: 100%;
      height: auto;
    }
    
    .event-item {
      background: rgba(255, 255, 255, 0.9);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
    
    .event-item img {
      border-radius: 8px;
      height: 100%;
      object-fit: cover;
    }
    
    .event-item .content {
      padding: 0 20px;
    }
    
    .event-item .price span {
      font-size: 24px;
      font-weight: 700;
      color: #ffb03b;
    }
    
    .event-item ul {
      list-style: none;
      padding: 0;
    }
    
    .event-item ul li {
      padding: 5px 0;
    }
    
    .event-item ul i {
      color: #ffb03b;
      margin-right: 8px;
    }
  </style>
</head>
<body>

<section id="events" class="events section">
  <img class="slider-bg" src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="" data-aos="fade-in">

  <div class="container">
    <div class="swiper events-swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="row gy-4 event-item">
            <div class="col-lg-6">
              <img src="https://images.unsplash.com/photo-1519671482749-fd09be7ccebf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Birthday Parties</h3>
              <div class="price">
                <p><span>$189</span></p>
              </div>
              <p class="fst-italic">
                Celebrate your special day with our exclusive birthday packages.
              </p>
              <ul>
                <li><i class="bi bi-check2-circle"></i> <span>Custom cake and decorations</span></li>
                <li><i class="bi bi-check2-circle"></i> <span>Dedicated event coordinator</span></li>
                <li><i class="bi bi-check2-circle"></i> <span>Gourmet food options</span></li>
              </ul>
              <p>
                Our birthday packages include everything you need to make your celebration memorable, from setup to cleanup.
              </p>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="row gy-4 event-item">
            <div class="col-lg-6">
              <img src="https://images.unsplash.com/photo-1530103862676-de8c9debad1d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Private Parties</h3>
              <div class="price">
                <p><span>$290</span></p>
              </div>
              <p class="fst-italic">
                Exclusive events for your closest friends and family.
              </p>
              <ul>
                <li><i class="bi bi-check2-circle"></i> <span>Private dining area</span></li>
                <li><i class="bi bi-check2-circle"></i> <span>Custom menu options</span></li>
                <li><i class="bi bi-check2-circle"></i> <span>Premium beverage service</span></li>
              </ul>
              <p>
                Enjoy an intimate gathering with our private party package, tailored to your specific needs and preferences.
              </p>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="row gy-4 event-item">
            <div class="col-lg-6">
              <img src="https://images.unsplash.com/photo-1555244162-803834f70033?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Custom Parties</h3>
              <div class="price">
                <p><span>$99</span></p>
              </div>
              <p class="fst-italic">
                Create your perfect event with our customizable options.
              </p>
              <ul>
                <li><i class="bi bi-check2-circle"></i> <span>Build-your-own package</span></li>
                <li><i class="bi bi-check2-circle"></i> <span>Flexible pricing options</span></li>
                <li><i class="bi bi-check2-circle"></i> <span>Theme customization</span></li>
              </ul>
              <p>
                Our custom party package lets you choose exactly what you want, ensuring your event is as unique as you are.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  // Initialize AOS
  AOS.init({
    duration: 800,
    easing: 'ease-in-out'
  });

  // Initialize Swiper
  document.addEventListener('DOMContentLoaded', function() {
    const swiper = new Swiper('.events-swiper', {
      loop: true,
      speed: 600,
      autoplay: {
        delay: 5000,
      },
      slidesPerView: 1,
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        992: {
          slidesPerView: 1,
        }
      }
    });
  });
</script>

</body>
</html>