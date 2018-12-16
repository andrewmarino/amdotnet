@extends('layouts.app')

@section('content')
<article class="flex flex-column flex-row-l justify-between-l">
  <header class="w-third-l lh-copy f5 pr5-l">
    <h1 class="mt0">{{ $page->title() }}</h1>
    {{ $page->text()->kirbytext() }}
  </header>
  <section class="w-two-thirds-l mt3 mt0-l macy">
    @foreach ($photos as $photo)
    <a class="db lightbox" href="{{ thumb($photo, ['width' => 992, 'quality' => 100])->url() }}">
      <span class="sr-only">View Lightbox Image: {{ $loop->iteration }} of {{ $loop->count }}</span>
      <figure class="ratio-container ma0 pa0 loading" data-aspect-ratio="{{ round($photo->dimensions()->ratio(), 2) }}">
        <img
          class="lazy lazyload"
          data-srcset="{{ thumb($photo, ['width' => 275])->url() }} 1x, {{ thumb($photo, ['width' => 500])->url() }} 2x"
          alt="{{ $photo->alt() }}"
          data-caption="{{ $photo->caption() }}"
          data-expand="-10"
        />
      </figure>
    </a>
    @endforeach
  </section>
</article>
@endsection
