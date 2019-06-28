@extends('layouts.app')

@section('content')
<div class="flex flex-column flex-row-l justify-between-l">
  <header class="w-third-l lh-copy f5">
    <h1 class="mt0">{{ $page->title() }}</h1>
    @kirbytext($page->text())
  </header>
  <section class="w-two-thirds-l ml4-l mt3 mt0-l macy">
    @foreach ($photos as $photo)
      @php $aspect_ratio = round($photo->dimensions()->ratio(), 2) @endphp
      <a class="db lightbox" href="{{ $photo->resize(1200, 1200)->url() }}">
        <span class="sr-only">View Lightbox Image: {{ $loop->iteration }} of {{ $loop->count }}</span>
        <div class="ratio-container fig ma0 pa0" data-aspect-ratio="{{ $aspect_ratio }}">
          <img
            class="lazy lazyload"
            data-sizes="auto"
            data-aspectratio="{{ $aspect_ratio }}"
            data-lowsrc="{{ $photo->thumb('lowsrc')->url() }}"
            data-srcset="{{ $photo->srcset([275 => '1x', 500 => '2x']) }}"
            alt="{{ $photo->alt() }}"
            data-caption="{{ $photo->caption() }}"
          />
        </div>
      </a>
    @endforeach
  </section>
</div>
@endsection
