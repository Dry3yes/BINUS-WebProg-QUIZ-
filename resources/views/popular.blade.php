@extends('layouts.master')

@section('title', 'Popular')

@section('content')
<div class="container py-5" style="padding-bottom: 120px;"> {{-- ruang untuk footer & pagination --}}
  <h4 class="fw-bold mb-4">Popular</h4>

  {{-- Daftar course populer --}}
  @foreach ($popularCourses as $course)
    <div class="bg-light rounded-4 shadow-sm p-3 mb-4 d-flex align-items-center">
      <div class="me-4">
        <img src="{{ asset($course->image) }}" 
             alt="{{ $course->title }}" 
             class="rounded-4" 
             style="width: 220px; height: 130px; object-fit: cover;">
      </div>
      
      <div class="flex-grow-1 position-relative pe-5">
        <h6 class="fw-bold mb-1">{{ $course->title }}</h6>
        <small class="text-muted">{{ $course->published_at->format('d M Y') }} | by {{ $course->writer }}</small>
        <p class="mt-2 mb-5">{{ Str::limit($course->content, 130) }}</p>

        {{-- Tombol read more kanan bawah --}}
        <a href="{{ route('detail', $course->id) }}" 
           class="btn btn-dark btn-sm rounded-pill px-3 position-absolute bottom-0 end-0 mb-3 me-3">
          read more...
        </a>
      </div>
    </div>
  @endforeach
</div>

{{--Pagination--}}
<div class="pagination-section">
  <small class="text-muted">
    Page |
    @for ($i = 1; $i <= $popularCourses->lastPage(); $i++)
      @if ($i == $popularCourses->currentPage())
        <span class="fw-bold text-dark">{{ $i }}</span>
      @else
        <a href="{{ $popularCourses->url($i) }}" class="text-muted text-decoration-none">{{ $i }}</a>
      @endif
      @if ($i < $popularCourses->lastPage())
        &nbsp;
      @endif
    @endfor
  </small>
</div>

{{-- CSS --}}
<style>
  body {
    padding-bottom: 120px; /* ruang buat footer & pagination */
  }

  /* Card */
  .bg-light {
    position: relative;
  }

  .btn {
    transition: all 0.2s ease-in-out;
  }

  .btn:hover {
    transform: scale(1.05);
  }

  /* Pagination tetap di bawah tapi tidak menutupi footer */
  .pagination-section {
    text-align: center;
    background-color: #f8f9fa;
    padding: 10px 0 20px;
    border-top: 1px solid #ddd;
    margin-top: 20px;
  }

  .pagination-section a:hover {
    color: #0b1b3f !important;
  }

  .pagination-section span {
    color: #000;
  }

  /* Responsive (biar tombol turun di bawah di layar kecil) */
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
