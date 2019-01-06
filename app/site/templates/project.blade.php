@extends('layouts.app')

@section('content')
<div class="flex flex-column flex-row-l justify-between-l">
  <header class="w-third-l lh-copy f5">
    <h1 class="mt0">{{ $page->title() }}</h1>
    {{ $page->text()->kirbytext() }}
  </header>
  <section class="w-two-thirds-l ml4-l mt3 mt0-l macy">
    @foreach ($photos as $photo)
    <a class="db lightbox" href="{{ $photo->resize(1200, 1200)->url() }}">
      <span class="sr-only">View Lightbox Image: {{ $loop->iteration }} of {{ $loop->count }}</span>
      <figure class="ratio-container fig ma0 pa0 loading" data-aspect-ratio="{{ round($photo->dimensions()->ratio(), 2) }}">
        <img
          class="lazy lazyload"
          data-srcset="{{ $photo->resize(275)->url() }} 1x, {{ $photo->resize(500)->url() }} 2x"
          alt="{{ $photo->alt() }}"
          data-caption="{{ $photo->caption() }}"
          data-expand="-10"
        />
      </figure>
    </a>
    @endforeach
  </section>
</div>
@endsection
