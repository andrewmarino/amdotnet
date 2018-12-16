@extends('layouts.app')

@section('content')
  <h1 class="serif sr-only">{{ $site->title()->html() }}</h1>
  @foreach ($page->images()->sortBy('sort', 'asc') as $photo)
    <figure class="ratio-container ma0 pa0 loading" data-aspect-ratio="{{ round($photo->dimensions()->ratio(), 2) }}">
      <img
        class="lazy lazyload"
        data-srcset="{{ thumb($photo, ['width' => 475])->url() }} 1x, {{ thumb($photo, ['width' => 950])->url() }} 2x"
        alt="{{ $photo->alt() }}"
      />
    </figure>
  @endforeach
@endsection
