@extends('layouts.master')

@section('title', $writer['name'])

@section('content')
<div class="container py-5">

  {{-- Header writer --}}
  <div class="d-flex align-items-center mb-5">
    <img src="{{ asset($writer['image']) }}" 
         alt="{{ $writer['name'] }}" 
         class="rounded-circle me-3 shadow-sm" 
         style="width: 70px; height: 70px; object-fit: cover;">
    <div>
      <h5 class="fw-bold mb-1">{{ $writer['name'] }}</h5>
      <small class="text-muted">{{ $writer['specialty'] }}</small>
    </div>
  </div>

  {{-- Daftar artikel milik writer --}}
  @foreach ($courses as $course)
    <div class="bg-light rounded-4 p-3 mb-4 d-flex align-items-center shadow-sm">
      <div class="me-4">
        <img src="{{ asset($course->image) }}" 
             alt="{{ $course->title }}" 
             class="rounded-4" 
             style="width: 220px; height: 130px; object-fit: cover;">
      </div>
      <div class="flex-grow-1">
        <h6 class="fw-bold mb-1">{{ $course->title }}</h6>
        <small class="text-muted">{{ $course->published_at->format('d M Y') }} | by {{ $course->writer }}</small>
        <p class="mt-2 mb-3">{{ Str::limit($course->content, 140) }}</p>
        <a href="{{ route('detail', $course->id) }}" 
           class="btn btn-dark btn-sm rounded-pill px-3 float-end">
          read more...
        </a>
      </div>
    </div>
  @endforeach
</div>

<style>
  .bg-light {
    background-color: #f8f9fa !important;
  }
  .btn:hover {
    background-color: #0b1b3f;
  }
</style>
@endsection
