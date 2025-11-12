@extends('layouts.master')

@section('title', 'Home')

@section('content')
<div class="container my-4">

  {{-- Banner utama --}}
  <div class="text-center mb-5">
    <img src="{{ asset('images/StudentHOME.jpg') }}" 
         alt="EduFun" 
         class="img-fluid rounded shadow-sm"
         style="max-height: 380px; object-fit: cover; width: 100%;">
  </div>

  {{-- Card horizontal untuk course --}}
  @foreach($courses as $course)
    <div class="card mb-4 border-0 shadow-sm rounded-4 overflow-hidden" style="background-color: #f9f9f9;">
      <div class="row g-0 align-items-center">
        
        {{-- Gambar di kiri --}}
        <div class="col-md-4">
          <img src="{{ asset($course->image) }}" 
               alt="{{ $course->title }}" 
               class="img-fluid h-100 w-100" 
               style="object-fit: cover;">
        </div>

        {{-- Konten di kanan --}}
        <div class="col-md-8 p-4 d-flex flex-column justify-content-between">
          <div>
            <h5 class="fw-bold mb-1">{{ $course->title }}</h5>
            <small class="text-muted d-block mb-2">
              {{ $course->published_at->format('d M Y') }} | by {{ $course->writer }}
            </small>
            <p class="text-secondary mb-3">{{ Str::limit($course->content, 130) }}</p>
          </div>
          {{-- Tombol di kanan bawah --}}
          <div class="text-end mt-auto">
            <a href="{{ route('detail', $course->id) }}" 
               class="btn btn-dark btn-sm rounded-pill px-3">
               read more...
            </a>
          </div>
        </div>
      </div>
    </div>
  @endforeach
@endsection
