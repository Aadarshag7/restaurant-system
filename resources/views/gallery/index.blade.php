@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Our Gallery</h1>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        @foreach($galleries as $gallery)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ asset($gallery->photo) }}" class="card-img-top" alt="" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                </div>
                <div class="card-footer bg-white">
                    <form action="" method="POST">
                        @csrf
                        <input type="hidden" name="gallery_id" value="{{ $gallery->id }}">
                        <div class="input-group">
                            <input type="number" name="quantity" value="1" min="1" class="form-control" style="width: 60px;">
                            <button type="submit" class="btn btn-primary"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection