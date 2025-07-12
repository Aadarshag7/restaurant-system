@extends('layouts.app')

@section('content')
<!-- Specials Section -->
<section id="specials" class="specials">
  <div class="container">

    <!-- Section Title - Keep it simple first -->
    <div class="section-title">
      <h2>Specials</h2>
      <p>Check Our Specials</p>
    </div>

    <div class="row">
      <div class="col-lg-3">
        <ul class="nav nav-tabs flex-column">
          <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#tab-1">Modi sit est</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Unde praesentium sed</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-9 mt-4 mt-lg-0">
        <div class="tab-content">
          <div class="tab-pane fade show active" id="tab-1">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Architecto ut aperiam autem id</h3>
                <p class="fst-italic">Qui laudantium consequatur laborum sit...</p>
                <p>Et nobis maiores eius. Voluptatibus ut enim...</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="{{ asset('admin/img/specials-1.png') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="tab-2">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Et blanditiis nemo veritatis excepturi</h3>
                <p class="fst-italic">Qui laudantium consequatur laborum sit...</p>
                <p>Ea ipsum voluptatem consequatur quis est...</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="{{ asset('admin/img/specials-2.png') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection