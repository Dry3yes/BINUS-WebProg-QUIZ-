@extends('layouts.master')

@section('title', $course->title)

@section('content')
<div class="container py-5">
  <small class="text-muted">{{ $course->category }}</small>
  <h3 class="fw-bold mt-2 mb-3">{{ $course->title }}</h3>
  <img src="{{ asset($course->image) }}" alt="{{ $course->title }}" class="rounded-4 mb-4" style="width:100%; max-height:400px; object-fit:cover;">
  <small class="text-muted d-block mb-3">{{ $course->published_at->format('d M Y') }} | by {{ $course->writer }}</small>

  <p style="text-align: justify; line-height:1.8;">
    {{ $course->content }}
  </p>
</div>
@endsection
