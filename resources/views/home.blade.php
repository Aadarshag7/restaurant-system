@extends('layouts.app')

@section('title', 'Home - Restaurantly')
@section('description', 'Welcome to our restaurant - Delivering great food for more than 18 years!')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <img src="{{ asset('admin/img/hero-bg.jpg') }}" alt="" data-aos="fade-in">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 d-flex flex-column align-items-center align-items-lg-start">
                    <h2 data-aos="fade-up" data-aos-delay="100">Welcome to <span>Restaurantly</span></h2>
                    <p data-aos="fade-up" data-aos-delay="200">Delivering great food for more than 18 years!</p>
                    <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
                        <a href="#menu" class="cta-btn">Our Menu</a>
                        <a href="#book-a-table" class="cta-btn">Book a Table</a>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center mt-5 mt-lg-0">
                    <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
                </div>
            </div>
        </div>
    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="{{ asset('admin/img/about.jpg') }}" class="img-fluid about-img" alt="">
                </div>
                <div class="col-lg-6 order-2 order-lg-1 content">
                    <h3>Voluptatem dignissimos provident</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                    <ul>
                        <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip</li>
                        <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- /About Section -->

    <!-- Menu Section (Shortened for brevity) -->
    <section id="menu" class="menu section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Menu</h2>
            <p>Check Our Tasty Menu</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 menu-item">
                    <img src="{{ asset('admin/img/menu/lobster-bisque.jpg') }}" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">Lobster Bisque</a><span>$5.95</span>
                    </div>
                </div>
                <!-- More menu items -->
            </div>
        </div>
    </section><!-- /Menu Section -->

    <!-- Book A Table Section -->
    <section id="book-a-table" class="book-a-table section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <form action="" method="POST" class="php-email-form">
                @csrf
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6">
                        <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                    </div>
                    <!-- More form fields -->
                </div>
                <div class="text-center mt-3">
                    <button type="submit">Book a Table</button>
                </div>
            </form>
        </div>
    </section><!-- /Book A Table Section -->
@endsection

@push('scripts')
    <script>
        // Initialize GLightbox
        const lightbox = GLightbox({
            selector: '.glightbox'
        });
        
        // Initialize AOS animations
        AOS.init();
    </script>
@endpush