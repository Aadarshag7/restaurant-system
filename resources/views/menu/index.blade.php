@extends('layouts.app')

<!-- @section('title','menu') -->
@section('content')
<div class="container">
    <h1 class="my-4">Our Menu</h1>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        @foreach($menus as $menu)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ asset($menu->photo) }}" class="card-img-top" alt="{{ $menu->name }}" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{ $menu->name }}</h5>
                    <p class="card-text">Rs. {{ $menu->price }}</p>
                </div>
                <div class="card-footer bg-white">
                    <form action="" method="POST">
                        @csrf
                        <input type="hidden" name="menu_id" value="{{ $menu->id }}">
                        <div class="input-group">
                            <input type="number" name="quantity" value="1" min="1" class="form-control" style="width: 60px;">
                            <button type="submit" class="btn btn-primary">Add to Cart</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection