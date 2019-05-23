@extends('layouts.app')

@section('content')
<section class="flex items-center justify-center">
  <h1 class="serif sr-only">{{ $site->title()->html() }}</h1>
  @foreach ($page->images()->sortBy('sort', 'asc') as $photo)
    <figure class="ratio-container fig ma0 pa0 loading" data-aspect-ratio="{{ round($photo->dimensions()->ratio(), 2) }}">
      <img
        class="lazy lazyload"
        data-srcset="{{ $photo->srcset([475 => '1x', 950 => '2x']) }}"
        alt="{{ $photo->alt() }}"
      />
    </figure>
  @endforeach
</section>
@endsection
