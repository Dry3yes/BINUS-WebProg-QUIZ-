@extends('layouts.master')

@section('title', $category)

@section('content')
<div class="container py-5">
  <h3 class="fw-bold mb-4">{{ $category }}</h3>

  <div class="row g-4">
    @foreach ($courses as $course)
      <div class="col-md-12">
        <div class="d-flex bg-light p-3 rounded-4 align-items-center shadow-sm">
          <img src="{{ asset($course->image) }}" 
               alt="{{ $course->title }}" 
               class="rounded-4 me-3" 
               style="width: 250px; height: 150px; object-fit: cover;">

          <div class="flex-grow-1 position-relative pe-5">
            <h5 class="fw-bold">{{ $course->title }}</h5>
            <small class="text-muted">{{ $course->writer }}</small>
            <p class="mt-2 mb-5">{{ Str::limit($course->content, 120, '...') }}</p>

            {{-- Tombol read more di kanan bawah --}}
            <a href="{{ route('detail', $course->id) }}" 
               class="btn btn-dark btn-sm rounded-pill px-3 position-absolute bottom-0 end-0 mb-3 me-3">
              read more...
            </a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>

<style>
  /* Supaya layout tetap rapi di layar kecil */
  @media (max-width: 768px) {
    .d-flex {
      flex-direction: column;
      text-align: center;
    }
    .position-absolute {
      position: static !important;
      margin-top: 10px;
    }
  }
</style>
@endsection
