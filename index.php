<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sortout Innovation - Business Solutions</title>

  <!-- SEO Meta Description -->
  <meta name="description" content="Sortout Innovation provides top-tier solutions in Digital Marketing, IT, HR, Courier, Real Estate, Event Management, and more. Your success is our priority." />

  <!-- Open Graph Meta Tags (For Social Media and Google) -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Sortout Innovation - Business Solutions" />
  <meta property="og:description" content="Your success is our priority with top-tier business solutions across multiple industries." />
  <meta property="og:url" content="https://sortoutinnovation.com/" />
  <meta property="og:image" content="https://sortoutinnovation.com/logo.png" />
  <meta property="og:site_name" content="Sortout Innovation" />

  <!-- Twitter Card for Better Indexing -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Sortout Innovation - Business Solutions" />
  <meta name="twitter:description" content="Top-tier solutions in Digital Marketing, IT, HR, and more." />
  <meta name="twitter:image" content="https://sortoutinnovation.com/logo.png" />

  <!-- JSON-LD Structured Data for Google -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Sortout Innovation - Business Solutions",
      "url": "https://sortoutinnovation.com/",
      "logo": "https://sortoutinnovation.com/logo.png"
    }
  </script>

  <!-- Favicon & App Icons -->
  <link rel="icon" type="image/png" sizes="32x32" href="https://sortoutinnovation.com/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="192x192" href="https://sortoutinnovation.com/favicon-192x192.png" />
  <link rel="apple-touch-icon" href="https://sortoutinnovation.com/apple-touch-icon.png" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" />

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap" rel="stylesheet" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="/CSS/styles.css" />
  <link rel="stylesheet" href="/CSS/floating-social-media.css" />
</head>

  <body>
    <!-- Bootstrap Navbar with Enhanced Features -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container">
            <!-- Logo with hover effect -->
            <a class="navbar-brand position-relative" href="/">
                <div class="logo-container">
                    <img src="/images/sortoutInnovation-icon/sortout-innovation-only-s.gif" alt="Sortout Innovation" height="45" class="main-logo">
                    <div class="logo-glow"></div>
                </div>
            </a>

            <!-- Animated Mobile Toggle Button -->
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <div class="toggle-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>

            <!-- Enhanced Navigation Links -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item">
                        <a class="nav-link px-3 active" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="/pages/about-page/about.html">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Career
                        </a>
                        <ul class="dropdown-menu animate slideIn">
                            <li>
                                <a class="dropdown-item" href="/employee-job/index.php">Employee Jobs</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/admin/artist-v2/public/index.php">Artist Jobs</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="/modal_agency.php">Find Talent</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="/pages/our-services-page/service.html">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="/pages/contact-page/contact-page.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="/blog/index.php">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Spacer for fixed navbar -->
    <!-- <div style="height: 76px;"></div> -->

    <style>
    /* Modern Navbar Styles with Enhanced Features */
    .navbar {
        padding: 0.8rem 0;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        background: rgba(255, 255, 255, 0.98) !important;
        backdrop-filter: blur(10px);
    }

    /* Logo Container with Glow Effect */
    .logo-container {
        position: relative;
        display: inline-block;
    }

    .logo-glow {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        height: 100%;
        background: radial-gradient(circle, rgba(209, 0, 0, 0.1) 0%, rgba(255, 255, 255, 0) 70%);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .navbar-brand:hover .logo-glow {
        opacity: 1;
    }

    /* Navigation Links */
    .nav-link {
        font-weight: 500;
        color: #2c3e50 !important;
        position: relative;
        transition: all 0.3s ease;
        font-size: 15px;
        letter-spacing: 0.3px;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: 0;
        left: 50%;
        background: linear-gradient(90deg, #d10000, #ff4b4b);
        transition: all 0.3s ease;
        transform: translateX(-50%);
        border-radius: 2px;
    }

    .nav-link:hover::after {
        width: calc(100% - 1.5rem);
    }

    .nav-link:hover, .nav-link.active {
        color: #d10000 !important;
    }
    
    .nav-link.active::after {
        content: '';
        position: absolute;
        width: calc(100% - 1.5rem);
        height: 2px;
        bottom: 0;
        left: 50%;
        background: linear-gradient(90deg, #d10000, #ff4b4b);
        transform: translateX(-50%);
        border-radius: 2px;
    }

    /* Enhanced Dropdown Styles */
    .dropdown-menu {
        border: none;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        border-radius: 12px;
        padding: 0.8rem 0.5rem;
        margin-top: 0.5rem;
        background: rgba(255, 255, 255, 0.98);
        backdrop-filter: blur(10px);
    }

    .dropdown-item {
        padding: 0.8rem 1.2rem;
        border-radius: 8px;
        transition: all 0.3s ease;
        color: #2c3e50;
        font-size: 14px;
    }

    .dropdown-item:hover {
        background: linear-gradient(45deg, rgba(209, 0, 0, 0.05), rgba(255, 75, 75, 0.05));
        color: #d10000;
        transform: translateX(5px);
    }

    /* Animated Mobile Toggle Button */
    .toggle-icon {
        width: 24px;
        height: 20px;
        position: relative;
        cursor: pointer;
    }

    .toggle-icon span {
        display: block;
        position: absolute;
        height: 2px;
        width: 100%;
        background: #2c3e50;
        border-radius: 2px;
        transition: all 0.3s ease;
    }

    .toggle-icon span:first-child {
        top: 0;
    }

    .toggle-icon span:nth-child(2) {
        top: 9px;
    }

    .toggle-icon span:last-child {
        top: 18px;
    }

    .navbar-toggler[aria-expanded="true"] .toggle-icon span:first-child {
        transform: rotate(45deg);
        top: 9px;
    }

    .navbar-toggler[aria-expanded="true"] .toggle-icon span:nth-child(2) {
        opacity: 0;
    }

    .navbar-toggler[aria-expanded="true"] .toggle-icon span:last-child {
        transform: rotate(-45deg);
        top: 9px;
    }

    /* Mobile Styles */
    @media (max-width: 991px) {
        .navbar-collapse {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(10px);
            padding: 1rem;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin-top: 1rem;
        }

        .nav-link {
            padding: 0.8rem 1.2rem !important;
            border-radius: 8px;
        }

        .nav-link:hover {
            background: linear-gradient(45deg, rgba(209, 0, 0, 0.05), rgba(255, 75, 75, 0.05));
        }

        .nav-link::after {
            display: none;
        }

        .dropdown-menu {
            box-shadow: none;
            padding-left: 1rem;
            background: transparent;
        }

        .dropdown-item:hover {
            transform: none;
        }
    }
    </style>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.querySelector('.navbar');
        let lastScroll = 0;

        // Enhanced scroll behavior
        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;
            
            if (currentScroll > 50) {
                navbar.style.padding = "0.6rem 0";
                navbar.style.boxShadow = "0 5px 30px rgba(0,0,0,0.08)";
            } else {
                navbar.style.padding = "0.8rem 0";
                navbar.style.boxShadow = "none";
            }

            // Smooth hide/show on scroll
            if (currentScroll > lastScroll && currentScroll > 100) {
                navbar.style.transform = 'translateY(-100%)';
            } else {
                navbar.style.transform = 'translateY(0)';
            }

            lastScroll = currentScroll;
        });

        // Handle mobile menu toggle animation
        const navbarToggler = document.querySelector('.navbar-toggler');
        navbarToggler.addEventListener('click', function() {
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', !isExpanded);
        });
    });
    </script>

    <!-- Hero Section -->
    <section class="hero-section">
      <div class="container">
        <div class="row align-items-center">
          <!-- Left Side Content -->
          <div class="col-lg-6 hero-text">
            <h1 class="hero-title">
              One <span>Source,</span> Infinite Solutions
            </h1>
            <p class="hero-subtitle">
              At Sortout Innovation, we provide top-tier solutions in Digital
              Marketing, IT, HR, Courier, Real Estate, Event Management, and
              more. Your success is our priority.
            </p>
            <div class="hero-buttons">
              <a
                href="/pages/our-services-page/service.html"
                class="btn btn-primary"
                >Explore Our Services</a
              >
              <a href="#about" class="btn btn-secondary">Get Started</a>
            </div>
          </div>

          <!-- Right Side Image / Illustration -->
          <div class="col-lg-6 text-center hero-image">
            <img
              src="/images/5a.gif"
              class="img-fluid"
              alt="Business Solutions"
            />
          </div>
        </div>
      </div>

      <!-- Background Design Elements -->
      <div class="hero-overlay"></div>
      <div class="floating-shape floating-circle"></div>
      <div class="floating-shape floating-triangle"></div>
    </section>

    <!-- Banner Section Using Bootstrap -->
    <section class="banner-section">
      <div
        id="bannerCarousel"
        class="carousel slide"
        data-bs-ride="carousel"
        data-bs-interval="4000"
      >
        <!-- Indicators -->
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#bannerCarousel"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#bannerCarousel"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#bannerCarousel"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
          <button
            type="button"
            data-bs-target="#bannerCarousel"
            data-bs-slide-to="3"
            aria-label="Slide 4"
          ></button>
        </div>

        <!-- Carousel Items -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="/images/banners/one.jpg"
              class="d-block w-100"
              alt="Banner 1"
            />
          </div>
          <div class="carousel-item">
            <img
              src="/images/banners/two.jpg"
              class="d-block w-100"
              alt="Banner 2"
            />
          </div>
          <div class="carousel-item">
            <img
              src="/images/banners/three.jpg"
              class="d-block w-100"
              alt="Banner 3"
            />
          </div>
          <div class="carousel-item">
            <img
              src="/images/banners/four.jpg"
              class="d-block w-100"
              alt="Banner 4"
            />
          </div>
        </div>

        <!-- Navigation Buttons -->
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#bannerCarousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#bannerCarousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <script>
      const slider = document.querySelector(".banner-slider");
      const slides = document.querySelectorAll(".banner-slide");
      const prevBtn = document.querySelector(".prev-btn");
      const nextBtn = document.querySelector(".next-btn");

      let currentIndex = 0;
      const totalSlides = slides.length;
      const slideDuration = 4000; // 4 seconds

      // Function to Update Slide Position Smoothly
      function updateSlide() {
        slider.style.transition = "transform 1s ease-in-out";
        slider.style.transform = `translateX(-${currentIndex * 100}%)`;
      }

      // Move to Next Slide
      function nextSlide() {
        if (currentIndex >= totalSlides - 1) {
          currentIndex = 0; // Reset to first slide
        } else {
          currentIndex++;
        }
        updateSlide();
      }

      // Move to Previous Slide
      function prevSlide() {
        if (currentIndex <= 0) {
          currentIndex = totalSlides - 1; // Go to last slide
        } else {
          currentIndex--;
        }
        updateSlide();
      }

      // Auto-Slide Every 4 Seconds
      let autoSlide = setInterval(nextSlide, slideDuration);

      // Restart Auto-Slide When Clicking Buttons
      function resetAutoSlide() {
        clearInterval(autoSlide);
        autoSlide = setInterval(nextSlide, slideDuration);
      }

      // Next Button Click
      nextBtn.addEventListener("click", () => {
        nextSlide();
        resetAutoSlide();
      });

      // Previous Button Click
      prevBtn.addEventListener("click", () => {
        prevSlide();
        resetAutoSlide();
      });

      // Initial Setup
      updateSlide();
    </script>

    <!-- <section class="logo-carousel-section">
      <div class="container">
        <div class="carousel-text">
          <h2>Trusted by Leading Brands</h2>
          <p>
            Our services are relied upon by top businesses worldwide. Join our
            growing network of partners and take your brand to the next level.
          </p>
        </div>

        <div class="logo-carousel">
          <div class="logos">
            <img
              src="/images/company-images/improved-logos/chingari1.jpeg"
              alt="Logo 1"
            />
            <img
              src="/images/company-images/improved-logos/disco2.jpeg"
              alt="Logo 2"
            />
            <img
              src="/images/company-images/improved-logos/imo3.png"
              alt="Logo 3"
            />
            <img
              src="/images/company-images/improved-logos/me4.jpeg"
              alt="Logo 4"
            />
            <img
              src="/images/company-images/improved-logos/tend10.jpeg"
              alt="Logo 5"
            />
            <img
              src="/images/company-images/improved-logos/tinder6.jpeg"
              alt="Logo 6"
            />
            <img
              src="/images/company-images/improved-logos/tictok5.jpeg"
              alt="Logo 7"
            />
            <img
              src="/images/company-images/improved-logos/snapchat7.jpeg"
              alt="Logo 8"
            />
            <img
              src="/images/company-images/improved-logos/trendo8.png"
              alt="Logo 9"
            />
            <img
              src="/images/company-images/improved-logos/triangle9.png"
              alt="Logo 10"
            />
            <img
              src="/images/company-images/improved-logos/pix11.jpeg"
              alt="Logo 11"
            />
            <img
              src="/images/company-images/improved-logos/josh13.jpeg"
              alt="Logo 11"
            />
          </div>
        </div>
      </div>
    </section> -->

    <!-- Our Partners Brands Section -->
    <section class="our-partners-section py-5">
      <div class="container">
        <div class="section-title text-center mb-4">
          <h2>Our Trusted Partners</h2>
          <p>We collaborate with industry leaders across banking, retail, technology and e-commerce</p>
          <div class="title-underline"></div>
        </div>
        
        <div class="partner-logos-container">
          <div class="partner-logos">
            <div class="logos-track logos-track-1">
              <img src="/images/our-brands-logo/amazon.png" alt="Amazon" class="partner-logo">
              <img src="/images/our-brands-logo/sbi-bank.png" alt="SBI Bank" class="partner-logo">
              <img src="/images/our-brands-logo/flipkart.png" alt="Flipkart" class="partner-logo">
              <img src="/images/our-brands-logo/paytm.png" alt="Paytm" class="partner-logo">
              <img src="/images/our-brands-logo/hdfc.png" alt="HDFC Bank" class="partner-logo">
              <img src="/images/our-brands-logo/ICICI.png" alt="ICICI Bank" class="partner-logo">
              <img src="/images/our-brands-logo/bajaj.png" alt="Bajaj" class="partner-logo">
              <img src="/images/our-brands-logo/Reliance-Retail.png" alt="Reliance Retail" class="partner-logo">
              <img src="/images/our-brands-logo/nykaa.png" alt="Nykaa" class="partner-logo">
              <img src="/images/our-brands-logo/big-basket.png" alt="Big Basket" class="partner-logo">
              <img src="/images/our-brands-logo/google-pay.png" alt="Google Pay" class="partner-logo">
            </div>
            <div class="logos-track logos-track-1">
              <img src="/images/our-brands-logo/amazon.png" alt="Amazon" class="partner-logo">
              <img src="/images/our-brands-logo/sbi-bank.png" alt="SBI Bank" class="partner-logo">
              <img src="/images/our-brands-logo/flipkart.png" alt="Flipkart" class="partner-logo">
              <img src="/images/our-brands-logo/paytm.png" alt="Paytm" class="partner-logo">
              <img src="/images/our-brands-logo/hdfc.png" alt="HDFC Bank" class="partner-logo">
              <img src="/images/our-brands-logo/ICICI.png" alt="ICICI Bank" class="partner-logo">
              <img src="/images/our-brands-logo/bajaj.png" alt="Bajaj" class="partner-logo">
              <img src="/images/our-brands-logo/Reliance-Retail.png" alt="Reliance Retail" class="partner-logo">
              <img src="/images/our-brands-logo/nykaa.png" alt="Nykaa" class="partner-logo">
              <img src="/images/our-brands-logo/big-basket.png" alt="Big Basket" class="partner-logo">
              <img src="/images/our-brands-logo/google-pay.png" alt="Google Pay" class="partner-logo">
            </div>
          </div>
          
          <div class="partner-logos mt-4">
            <div class="logos-track logos-track-2">
              <img src="/images/our-brands-logo/phone-pay.png" alt="Phone Pay" class="partner-logo">
              <img src="/images/our-brands-logo/axis-bank.png" alt="Axis Bank" class="partner-logo">
              <img src="/images/our-brands-logo/congnizant.png" alt="Cognizant" class="partner-logo">
              <img src="/images/our-brands-logo/hcl.png" alt="HCL" class="partner-logo">
              <img src="/images/our-brands-logo/ibm.png" alt="IBM" class="partner-logo">
              <img src="/images/our-brands-logo/techMahindra.png" alt="Tech Mahindra" class="partner-logo">
              <img src="/images/our-brands-logo/capmine.png" alt="Capmine" class="partner-logo">
              <img src="/images/our-brands-logo/infoses.png" alt="Infosys" class="partner-logo">
              <img src="/images/our-brands-logo/tata.png" alt="Tata" class="partner-logo">
              <img src="/images/our-brands-logo/wiproLogo.png" alt="Wipro" class="partner-logo">
            </div>
            <div class="logos-track logos-track-2">
              <img src="/images/our-brands-logo/phone-pay.png" alt="Phone Pay" class="partner-logo">
              <img src="/images/our-brands-logo/axis-bank.png" alt="Axis Bank" class="partner-logo">
              <img src="/images/our-brands-logo/congnizant.png" alt="Cognizant" class="partner-logo">
              <img src="/images/our-brands-logo/hcl.png" alt="HCL" class="partner-logo">
              <img src="/images/our-brands-logo/ibm.png" alt="IBM" class="partner-logo">
              <img src="/images/our-brands-logo/techMahindra.png" alt="Tech Mahindra" class="partner-logo">
              <img src="/images/our-brands-logo/capmine.png" alt="Capmine" class="partner-logo">
              <img src="/images/our-brands-logo/infoses.png" alt="Infosys" class="partner-logo">
              <img src="/images/our-brands-logo/tata.png" alt="Tata" class="partner-logo">
              <img src="/images/our-brands-logo/wiproLogo.png" alt="Wipro" class="partner-logo">
            </div>
          </div>
        </div>
        
        <div class="partner-corner partner-corner-top-left"></div>
        <div class="partner-corner partner-corner-top-right"></div>
        <div class="partner-corner partner-corner-bottom-left"></div>
        <div class="partner-corner partner-corner-bottom-right"></div>
      </div>
    </section>

    <style>
    .our-partners-section {
      background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
      padding: 80px 0;
      overflow: hidden;
      position: relative;
      border-radius: 10px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.05);
      margin: 30px 0;
    }

    .our-partners-section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23d10000' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
      opacity: 0.5;
      z-index: 0;
    }

    .partner-icon {
      display: inline-block;
      font-size: 2rem;
      color: #d10000;
      margin-bottom: 15px;
    }

    .our-partners-section h2 {
      font-size: 2.8rem;
      font-weight: 700;
      color: #d10000;
      margin-bottom: 15px;
      position: relative;
      display: inline-block;
    }

    .title-underline {
      height: 3px;
      width: 0;
      background: linear-gradient(90deg, transparent, #d10000, transparent);
      margin: 15px auto 30px;
      transition: width 1s ease;
    }

    .section-title.animate .title-underline {
      width: 150px;
    }

    .our-partners-section p {
      color: #666;
      font-size: 1.1rem;
      margin-bottom: 40px;
      max-width: 700px;
      margin-left: auto;
      margin-right: auto;
    }

    .partner-logos-container {
      width: 100%;
      overflow: hidden;
      position: relative;
      padding: 30px 0;
      z-index: 1;
    }

    .partner-logos {
      display: flex;
      width: 100%;
      overflow: hidden;
      position: relative;
    }

    .logos-track {
      display: flex;
      white-space: nowrap;
      align-items: center;
    }

    .logos-track-1 {
      animation: scroll 35s linear infinite;
    }

    .logos-track-2 {
      animation: scroll-reverse 40s linear infinite;
    }

    .partner-logo {
      height: 70px;
      width: auto;
      margin: 0 25px;
      object-fit: contain;
      filter: grayscale(0%);
      transition: all 0.5s cubic-bezier(0.165, 0.84, 0.44, 1);
      transform: translateY(0);
      box-shadow: 0 5px 15px rgba(0,0,0,0);
      padding: 10px;
      border-radius: 8px;
    }

    .partner-logo:hover {
      filter: grayscale(100%);
      transform: scale(1.15) translateY(-5px) rotate(2deg);
      box-shadow: 0 15px 30px rgba(0,0,0,0.1);
      z-index: 10;
    }

    @keyframes scroll {
      0% {
        transform: translateX(0);
      }
      100% {
        transform: translateX(-100%);
      }
    }

    @keyframes scroll-reverse {
      0% {
        transform: translateX(-100%);
      }
      100% {
        transform: translateX(0);
      }
    }

    .partner-corner {
      position: absolute;
      width: 30px;
      height: 30px;
      border-color: #d10000;
      border-style: solid;
      border-width: 0;
      z-index: 2;
    }

    .partner-corner-top-left {
      top: 20px;
      left: 20px;
      border-top-width: 3px;
      border-left-width: 3px;
      border-top-left-radius: 8px;
    }

    .partner-corner-top-right {
      top: 20px;
      right: 20px;
      border-top-width: 3px;
      border-right-width: 3px;
      border-top-right-radius: 8px;
    }

    .partner-corner-bottom-left {
      bottom: 20px;
      left: 20px;
      border-bottom-width: 3px;
      border-left-width: 3px;
      border-bottom-left-radius: 8px;
    }

    .partner-corner-bottom-right {
      bottom: 20px;
      right: 20px;
      border-bottom-width: 3px;
      border-right-width: 3px;
      border-bottom-right-radius: 8px;
    }

    /* Add animation for logos */
    .partner-logos:hover .logos-track {
      animation-play-state: paused;
    }

    /* Create pulsing effect for random logos */
    @keyframes pulse {
      0% {
        transform: scale(1);
        box-shadow: 0 5px 15px rgba(0,0,0,0);
      }
      50% {
        transform: scale(1.08);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
      }
      100% {
        transform: scale(1);
        box-shadow: 0 5px 15px rgba(0,0,0,0);
      }
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      .our-partners-section {
        padding: 50px 0;
      }
      
      .our-partners-section h2 {
        font-size: 2.2rem;
      }
      
      .partner-logo {
        height: 50px;
        margin: 0 15px;
      }
      
      .partner-corner {
        width: 20px;
        height: 20px;
      }
    }
    </style>

    <script>
    // Animate title underline when scrolled into view
    document.addEventListener('DOMContentLoaded', function() {
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('animate');
          }
        });
      }, { threshold: 0.3 });

      const sectionTitle = document.querySelector('.our-partners-section .section-title');
      if (sectionTitle) {
        observer.observe(sectionTitle);
      }
      
      // Add pulsing animation to random logos
      const partnerLogos = document.querySelectorAll('.partner-logo');
      if (partnerLogos.length > 0) {
        setInterval(() => {
          // Get random logo
          const randomLogo = partnerLogos[Math.floor(Math.random() * partnerLogos.length)];
          // Apply animation
          randomLogo.style.animation = 'pulse 2s ease';
          
          // Remove animation after it's done
          setTimeout(() => {
            randomLogo.style.animation = '';
          }, 2000);
        }, 3000);
      }
    });
    </script>

    <section id="about" class="about-us-section">
      <div class="container">
        <div class="row align-items-center">
          <!-- Left Side: Image -->
          <div class="col-lg-6">
            <div class="about-image">
              <img
                src="/images/services-imgs/CA/about-us.jpg"
                alt="About Sortout Innovation"
              />
            </div>
          </div>

          <!-- Right Side: Content -->
          <div class="col-lg-6">
            <div class="about-content">
              <h2>Empowering Businesses with Innovation & Excellence</h2>
              <p>
                Sortout Innovation is your trusted partner in delivering
                tailored solutions across multiple industries. From IT to
                digital marketing, HR to logistics, we help businesses thrive in
                a competitive world.
              </p>

              <!-- Stats Section -->
              <div class="about-stats">
                <div class="stat">
                  <h3>10+</h3>
                  <p>Years of Experience</p>
                </div>
                <div class="stat">
                  <h3>500+</h3>
                  <p>Successful Projects</p>
                </div>
                <div class="stat">
                  <h3>300+</h3>
                  <p>Trusted Clients</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <section class="industries-section py-5">
      <div class="container text-center">
        <div class="section-title">
          <h2>Industries We Serve</h2>
          <p>
            Empowering businesses across multiple industries with tailored
            solutions.
          </p>
        </div>

        <div class="industries-grid">
          <!-- Industry 1 -->
          <div class="industry-box">
            <div class="icon"><i class="fas fa-building"></i></div>
            <h4>Corporate & Business</h4>
          </div>

          <!-- Industry 2 -->
          <div class="industry-box">
            <div class="icon"><i class="fas fa-shopping-cart"></i></div>
            <h4>Retail & E-Commerce</h4>
          </div>

          <!-- Industry 3 -->
          <div class="industry-box">
            <div class="icon"><i class="fas fa-stethoscope"></i></div>
            <h4>Healthcare & Pharmaceuticals</h4>
          </div>

          <!-- Industry 4 -->
          <div class="industry-box">
            <div class="icon"><i class="fas fa-truck"></i></div>
            <h4>Manufacturing & Logistics</h4>
          </div>

          <!-- Industry 5 -->
          <div class="industry-box">
            <div class="icon"><i class="fas fa-chart-line"></i></div>
            <h4>Finance & Banking</h4>
          </div>

          <!-- Industry 6 -->
          <div class="industry-box">
            <div class="icon"><i class="fas fa-hotel"></i></div>
            <h4>Hospitality & Tourism</h4>
          </div>
        </div>
      </div>
    </section>

    <section class="featured-services">
      <div class="container">
        <!-- Section Title -->
        <div class="section-heading text-center">
          <h2 class="services-title">Explore Our Expert Solutions</h2>
          <p class="services-subtitle">
            We provide a wide range of innovative services to help your business
            thrive.
          </p>
        </div>

        <!-- Services Grid -->
        <div class="row">
          <!-- Service 5 -->
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="service-card">
              <i class="fas fa-calendar-alt service-icon"></i>
              <h4 class="service-title">Event Management</h4>
              <p class="service-description">
                Plans and executes seamless, memorable, and impactful events.
              </p>
              <a
                href="/pages/services/event-managementServices.html"
                class="service-btn"
                >View Details</a
              >
            </div>
          </div>

          <!-- Service 6 -->
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="service-card">
              <i class="fas fa-paint-brush service-icon"></i>
              <h4 class="service-title">Design & Creative Services</h4>
              <p class="service-description">
                Custom branding and graphic solutions.
              </p>
              <a
                href="/pages/services/designAndCreative.html"
                class="service-btn"
                >View Details</a
              >
            </div>
          </div>

          <!-- Service 7 -->
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="service-card">
              <i class="fas fa-code service-icon"></i>
              <h4 class="service-title">Web & App Development</h4>
              <p class="service-description">
                Building modern, responsive websites & apps.
              </p>
              <a
                href="/pages/services/designAndCreative.html"
                class="service-btn"
                >View Details</a
              >
            </div>
          </div>

          <!-- Service 8 -->
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="service-card">
              <i class="fas fa-users service-icon"></i>
              <h4 class="service-title">Find Talent</h4>
              <p class="service-description">
                Helps businesses hire the right, skilled professionals for
                growth and success.
              </p>
              <a href="/pages/talent.page/talent.html" class="service-btn"
                >View Details</a
              >
            </div>
          </div>

          <!-- Service 1 -->
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="service-card">
              <i class="fas fa-shipping-fast service-icon"></i>
              <h4 class="service-title">Courier Services</h4>
              <p class="service-description">
                Fast, reliable, secure, and highly efficient delivery of
                important packages.
              </p>
              <a href="/pages/services/courierServices.html" class="service-btn"
                >View Details</a
              >
            </div>
          </div>

          <!-- Service 2 -->
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="service-card">
              <i class="fas fa-box-open service-icon"></i>
              <h4 class="service-title">Shipping & Fulfillment</h4>
              <p class="service-description">
                Seamless global logistics and inventory management.
              </p>
              <a href="/pages/services/shipping.html" class="service-btn"
                >View Details</a
              >
            </div>
          </div>

          <!-- Service 3 -->
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="service-card">
              <i class="fas fa-pencil-ruler service-icon"></i>
              <h4 class="service-title">Stationery Services</h4>
              <p class="service-description">
                Supplies essential office materials for smooth and efficient
                daily operations.
              </p>
              <a
                href="/pages/services/stationeryServices.html"
                class="service-btn"
                >View Details</a
              >
            </div>
          </div>

          <!-- Service 4 -->
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="service-card">
              <i class="fas fa-building service-icon"></i>
              <h4 class="service-title">Real Estate & Property</h4>
              <p class="service-description">
                Find and invest in commercial properties.
              </p>
              <a
                href="/pages/services/propertyServices.html"
                class="service-btn"
                >View Details</a
              >
            </div>
          </div>
        </div>

        <!-- View More Button -->
        <div class="text-center mt-4">
          <a
            href="/pages/our-services-page/service.html"
            class="view-more-services-btn"
            >View More Services</a
          >
        </div>
      </div>
    </section>

    <section class="brand-potential-section">
      <div class="container">
        <h2 class="brand-heading">
          Unleashing the Vital Potential of <span>Your Brand</span>
        </h2>
        <p class="brand-subheading">
          Empowering businesses with
          <strong>innovation, creativity, and technology</strong> to fuel
          unstoppable growth.
        </p>

        <!-- Updated Grid Layout -->
        <div class="brand-grid">
          <!-- Floating Service Cards -->
          <div class="floating-card">
            <i class="fas fa-lightbulb"></i>
            <h3>Strategic Branding</h3>
            <p>
              We craft compelling brand identities that leave lasting
              impressions.
            </p>
          </div>

          <div class="floating-card">
            <i class="fas fa-code"></i>
            <h3>Digital Innovation</h3>
            <p>
              Harnessing the latest technology to optimize digital experiences.
            </p>
          </div>

          <!-- Center Glowing Core -->
          <div class="glowing-core">
            <div class="pulse-effect"></div>
          </div>

          <div class="floating-card">
            <i class="fas fa-paint-brush"></i>
            <h3>Creative Excellence</h3>
            <p>Designing visually stunning and impactful creatives.</p>
          </div>

          <div class="floating-card">
            <i class="fas fa-chart-line"></i>
            <h3>Market Leadership</h3>
            <p>
              Helping businesses establish authority and dominate their
              industry.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="who-we-serve">
      <div class="container-fluid">
        <div class="row align-items-center">
          <!-- Left Side (White Background) -->
          <div class="col-lg-6 left-content">
            <h2>Who Do We Serve?</h2>
            <p class="subheading">
              Empowering businesses, organizations, and individuals with
              cutting-edge digital solutions.
            </p>
          </div>

          <!-- Right Side (Red Background) -->
          <div class="col-lg-6 right-content">
            <div class="service-category">
              <i class="fas fa-bullhorn"></i>
              <h4>Brand Branding</h4>
              <p>Elevate your brand identity with strategic positioning.</p>
            </div>
            <div class="service-category">
              <i class="fas fa-building"></i>
              <h4>Organizations & Digital Media</h4>
              <p>Advanced digital transformation solutions for enterprises.</p>
            </div>
            <div class="service-category">
              <i class="fas fa-user-edit"></i>
              <h4>Individuals & Digital Publishing</h4>
              <p>
                Empowering freelancers, content creators, and professionals.
              </p>
            </div>
            <div class="service-category">
              <i class="fas fa-globe"></i>
              <h4>Where Do We Serve?</h4>
              <p>Global reach, delivering excellence across industries.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="testimonials py-5">
      <div class="container">
        <div class="section-title text-center mb-4">
          <h2>What Our Clients Say</h2>
          <p>Trusted by businesses and professionals worldwide.</p>
        </div>

        <div
          id="testimonialCarousel"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="testimonial-box">
                <div class="testimonial-content">
                  <p>
                    "SortOut Innovation transformed our brand. Their expertise
                    and dedication are unmatched!"
                  </p>
                  <h4>Lisa T.</h4>
                  <span>CEO, Retail Ventures</span>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="testimonial-box">
                <div class="testimonial-content">
                  <p>
                    "Their digital solutions have significantly boosted our
                    engagement and conversions!"
                  </p>
                  <h4>John M.</h4>
                  <span>Marketing Head, E-Commerce Co.</span>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="testimonial-box">
                <div class="testimonial-content">
                  <p>
                    "From branding to website design, they exceeded our
                    expectations at every step."
                  </p>
                  <h4>Sarah L.</h4>
                  <span>Product Manager</span>
                </div>
              </div>
            </div>
          </div>

          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#testimonialCarousel"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#testimonialCarousel"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <div class="carousel-indicators mt-3">
          <button
            type="button"
            data-bs-target="#testimonialCarousel"
            data-bs-slide-to="0"
            class="active"
          ></button>
          <button
            type="button"
            data-bs-target="#testimonialCarousel"
            data-bs-slide-to="1"
          ></button>
          <button
            type="button"
            data-bs-target="#testimonialCarousel"
            data-bs-slide-to="2"
          ></button>
        </div>
      </div>
    </section> -->

    <section class="our-process">
      <div class="container">
        <div class="section-title text-center">
          <h2>Our Process</h2>
          <p>
            We follow a structured, results-driven approach to deliver
            excellence.
          </p>
        </div>

        <div class="process-flow">
          <!-- Step 1 -->
          <div class="process-row">
            <div class="process-icon"><i class="fas fa-comments"></i></div>
            <div class="process-content">
              <h4>Consultation</h4>
              <p>
                Understanding client goals & needs to create a tailored
                strategy.
              </p>
            </div>
          </div>

          <!-- Step 2 -->
          <div class="process-row right">
            <div class="process-icon"><i class="fas fa-lightbulb"></i></div>
            <div class="process-content">
              <h4>Strategy & Planning</h4>
              <p>
                Creating a roadmap that aligns with your business objectives.
              </p>
            </div>
          </div>

          <!-- Step 3 -->
          <div class="process-row">
            <div class="process-icon"><i class="fas fa-cogs"></i></div>
            <div class="process-content">
              <h4>Implementation</h4>
              <p>Bringing ideas to life with expert execution & precision.</p>
            </div>
          </div>

          <!-- Step 4 -->
          <div class="process-row right">
            <div class="process-icon"><i class="fas fa-check-circle"></i></div>
            <div class="process-content">
              <h4>Quality Assurance</h4>
              <p>Ensuring top-tier results through rigorous quality checks.</p>
            </div>
          </div>

          <!-- Step 5 -->
          <div class="process-row">
            <div class="process-icon"><i class="fas fa-handshake"></i></div>
            <div class="process-content">
              <h4>Delivery & Support</h4>
              <p>On-time completion with post-delivery support & assistance.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="cta" class="cta-section">
      <div class="container">
        <div class="cta-content">
          <h2>Take Your Business to the Next Level</h2>
          <p>
            Partner with Sortout Innovation for expert solutions tailored to
            your needs.
          </p>
          <div class="cta-buttons">
            <a
              href="/pages/our-services-page/service.html"
              class="btn-cta btn-primary-cta"
              >Explore Our Services</a
            >
            <a href="https://wa.me/919818559036" class="btn-cta btn-outline-cta"
              >Contact Us</a
            >
          </div>
        </div>
      </div>
    </section>

    <footer class="footer-section">
      <div class="container">
        <div class="row">
          <!-- Column 1: Company Info -->
          <div class="col-lg-3 col-md-6">
            <div class="footer-logo">
              <img
                src="/images/sortoutInnovation-icon/Sortout innovation.jpg"
                alt="Sortout Innovation"
              />
              <p class="text-center">
                Empowering businesses with top-notch solutions in digital, IT,
                and business services.
              </p>
            </div>
          </div>

          <!-- Column 2: Quick Links -->
          <div class="col-lg-2 col-md-6">
            <h4>Quick Links</h4>
            <ul class="footer-links">
              <li><a href="index.html">Home</a></li>
              <li><a href="/pages/about-page/about.html">About Us</a></li>
              <li>
                <a href="/pages/contact-page/contact-page.html">Contact</a>
              </li>
              <li>
                <a href="/pages/career.html">Careers</a>
              </li>
              <li>
                <a href="/pages/our-services-page/service.html">Services</a>
              </li>
              <li>
                <a href="/blog/index.php">Blogs</a>
              </li>
              <li>
                <a href="/auth/register.php">Register</a>
              </li>
              <li>
                <a href="/modal_agency.php">talent</a>
              </li>
            </ul>
          </div>

          <!-- Column 3: Our Services -->
          <div class="col-lg-2 col-md-6">
            <h4>Our Services</h4>
            <ul class="footer-links">
              <li>
                <a href="/pages/services/socialMediaInfluencers.html"
                  >Digital Marketing</a
                >
              </li>
              <li><a href="/pages/services/itServices.html">IT Support</a></li>
              <li><a href="/pages/services/caServices.html">CA Services</a></li>
              <li><a href="/pages/services/hrServices.html">HR Services</a></li>
              <li>
                <a href="/pages/services/courierServices.html"
                  >Courier Services</a
                >
              </li>
              <li>
                <a href="/pages/services/shipping.html"
                  >Shipping & Fulfillment</a
                >
              </li>
              <li>
                <a href="/pages/services/stationeryServices.html"
                  >Stationery Services</a
                >
              </li>
              <li>
                <a href="/pages/services/propertyServices.html"
                  >Real Estate & Property</a
                >
              </li>
              <li>
                <a href="/pages/services/event-managementServices.html"
                  >Event Management</a
                >
              </li>
              <li>
                <a href="/pages/services/designAndCreative.html"
                  >Design & Creative</a
                >
              </li>
              <li>
                <a href="/pages/services/designAndCreative.html"
                  >Web & App Development</a
                >
              </li>
              <li><a href="/pages/talent.page/talent.html">Find Talent</a></li>
            </ul>
          </div>

          <!-- Column 4: Contact Info -->
          <div class="col-lg-3 col-md-6">
            <h4>Contact Us</h4>
            <ul class="footer-links">
              <li>
                <i class="fas fa-phone"></i>
                <a href="tel:+919818559036">+91 9818559036</a>
              </li>
              <li>
                <i class="fas fa-envelope"></i>
                <a href="mailto:info@sortoutinnovation.com"
                  >info@sortoutinnovation.com</a
                >
              </li>
              <li>
                <i class="fas fa-map-marker-alt"></i> Spaze i-Tech Park,
                Gurugram, India
              </li>
            </ul>
          </div>

          <!-- Column 5: Social Media -->
          <div class="col-lg-2 col-md-6">
            <h4>Follow Us</h4>
            <div class="social-icons">
              <a href="https://www.facebook.com/profile.php?id=61556452066209" target="_blank"
                ><i class="fab fa-facebook"></i
              ></a>
              <a href="https://youtu.be/tw-xk-Pb-zA?si=QMTwuvhEuTegpqDr" target="_blank"
                ><i class="fab fa-youtube"></i
              ></a>
              <a href="https://www.linkedin.com/company/sortout-innovation/" target="_blank"
                ><i class="fab fa-linkedin"></i
              ></a>
              <a href="https://www.instagram.com/sortout_innovation" target="_blank"
                ><i class="fab fa-instagram"></i
              ></a>
            </div>
          </div>
        </div>

        <!-- Copyright & Legal Links -->
        <div class="footer-bottom">
          <p>&copy; 2025 Sortout Innovation. All Rights Reserved.</p>
          <ul>
            <li><a href="/privacy-policy">Privacy Policy</a></li>
            <li><a href="/terms">Terms & Conditions</a></li>
          </ul>
        </div>
      </div>
    </footer>

    <script>
      var myCarousel = document.querySelector("#testimonialCarousel");
      var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 5000, // Change slide every 5 seconds
        wrap: true,
      });
    </script>

    <script>
      // Optional: Adds a glowing effect to the center element dynamically
      document.addEventListener("DOMContentLoaded", function () {
        const glowingCore = document.querySelector(".glowing-core");

        setInterval(() => {
          glowingCore.style.boxShadow = `0 0 ${
            Math.random() * 50 + 30
          }px rgba(255, 75, 75, 0.8)`;
        }, 1000);
      });
    </script>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        let logoContainer = document.querySelector(".logos");
        let clonedLogos = logoContainer.innerHTML; // Clone inner content

        // Append cloned logos only once to avoid duplicates
        logoContainer.innerHTML += clonedLogos;
      });
    </script>

    <script>
      function toggleServices(id) {
        let serviceList = document.getElementById(id);
        if (serviceList.style.display === "block") {
          serviceList.style.display = "none";
        } else {
          serviceList.style.display = "block";
        }
      }
    </script>

    <!-- Floating Social Media Bar -->
    <div class="floating-social-bar">
      <a
        href="https://www.facebook.com/profile.php?id=61556452066209"
        target="_blank"
        rel="noopener"
        class="social-icon facebook"
      >
        <i class="fab fa-facebook-f"></i>
      </a>
      <a
        href="https://www.instagram.com/sortout_innovation"
        target="_blank"
        rel="noopener"
        class="social-icon instagram"
      >
        <i class="fab fa-instagram"></i>
      </a>
      <a
        href="https://www.linkedin.com/company/sortout-innovation/"
        target="_blank"
        rel="noopener"
        class="social-icon linkedin"
      >
        <i class="fab fa-linkedin-in"></i>
      </a>
      <a
        href="https://youtu.be/tw-xk-Pb-zA?si=QMTwuvhEuTegpqDr"
        target="_blank"
        rel="noopener"
        class="social-icon youtube"
      >
        <i class="fab fa-youtube"></i>
      </a>
    </div>

    <!-- Floating WhatsApp Button -->
    <div class="floating-whatsapp">
      <div class="whatsapp-button">
        <a
          class="what-a"
          href="https://wa.me/919818559036"
          target="_blank"
          rel="noopener"
        >
          <i class="fab fa-whatsapp"></i>
          <span class="whatsapp-text"> Contact Us</span></a
        >
      </div>
    </div>
    <!-- Bootstrap Accordion Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
