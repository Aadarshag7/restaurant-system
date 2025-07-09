@extends('layouts.app')

@section('content')
<div class="container">
    <!-- About Header Section -->
    <section class="py-5 text-center">
        <h1 class="display-4">About Our Restaurant</h1>
        <p class="lead">Discover our story and passion for culinary excellence</p>
    </section>

    <!-- Main About Content -->
    <section class="py-4">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="{{ asset('images/about-image.jpg') }}" alt="Our Restaurant" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6">
                <h2 class="mb-4">Our Story</h2>
                <p>Founded in 2010, our restaurant began as a small family-owned establishment with a passion for authentic flavors and warm hospitality. What started as a modest kitchen has grown into a celebrated dining destination.</p>
                <p>We take pride in using locally-sourced ingredients and traditional cooking methods to bring you dishes that tell a story of heritage and innovation.</p>
                
                <div class="mt-4">
                    <h3>Our Values</h3>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Commitment to quality ingredients</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Exceptional customer service</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Sustainable practices</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Culinary innovation</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-5">
        <h2 class="text-center mb-5">Meet Our Team</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ asset('images/chef1.jpg') }}" class="card-img-top" alt="Head Chef">
                    <div class="card-body text-center">
                        <h5 class="card-title">Michael Johnson</h5>
                        <p class="text-muted">Head Chef</p>
                        <p class="card-text">With 15 years of experience in gourmet cuisine...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ asset('images/chef2.jpg') }}" class="card-img-top" alt="Sous Chef">
                    <div class="card-body text-center">
                        <h5 class="card-title">Sarah Williams</h5>
                        <p class="text-muted">Sous Chef</p>
                        <p class="card-text">Specializing in pastry and dessert creations...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ asset('images/manager.jpg') }}" class="card-img-top" alt="Restaurant Manager">
                    <div class="card-body text-center">
                        <h5 class="card-title">David Chen</h5>
                        <p class="text-muted">Restaurant Manager</p>
                        <p class="card-text">Ensuring every guest has a memorable experience...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-5 bg-light rounded">
        <h2 class="text-center mb-5">What Our Guests Say</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>"The best dining experience I've had this year!"</p>
                            <footer class="blockquote-footer">Jessica T.</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>"Authentic flavors and impeccable service."</p>
                            <footer class="blockquote-footer">Robert K.</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>"A must-visit for food enthusiasts."</p>
                            <footer class="blockquote-footer">Maria S.</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('styles')
<style>
    .about-image {
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    .team-card {
        transition: transform 0.3s;
    }
    .team-card:hover {
        transform: translateY(-5px);
    }
</style>
@endpush

@push('scripts')
<!-- You can add any about page specific scripts here -->
@endpush