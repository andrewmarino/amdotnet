@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">
  <header class="content mb-10">
    <h1 class="mt-0">{{ $page->title() }}</h1>
    @kirbytext($page->text()->blocks())
  </header>
  <section class="macy">
    @foreach ($photos as $photo)
      <a class="db lightbox" href="{{ $photo->resize(1200, 1200)->url() }}">
        <span class="sr-only">View Lightbox Image: {{ $loop->iteration }} of {{ $loop->count }}</span>
        @include('partials.photo', [
          'photo' => $photo,
        ])
      </a>
    @endforeach
  </section>
</div>
@endsection
