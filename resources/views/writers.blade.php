@extends('layouts.master')

@section('title', 'Our Writers')

@section('content')
<div class="container py-5">
  <h5 class="fw-bold mb-5">Our Writers:</h5>

  <div class="row text-center justify-content-center g-4">
    @foreach ($writers as $writer)
      <div class="col-md-3">
        <div class="card border-0 bg-transparent text-center">
          <img src="{{ asset($writer['image']) }}" 
               alt="{{ $writer['name'] }}" 
               class="rounded-circle mx-auto shadow-sm"
               style="width: 120px; height: 120px; object-fit: cover;">
          <div class="card-body">
            <h6 class="fw-bold mb-1">{{ $writer['name'] }}</h6>
            <small class="text-muted d-block mb-3">{{ $writer['specialty'] }}</small>
            <a href="{{ route('writer.detail', $writer['name']) }}" 
               class="btn btn-dark rounded-pill px-4 py-2">
              View Articles
            </a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>

<style>
  .card img:hover {
    transform: scale(1.05);
    transition: 0.3s ease;
  }
</style>
@endsection
