@extends('layouts.app')

@section('content')
<div class="flex flex-column flex-row-l justify-between-l f5">
  <header class="w-third-l lh-copy f5">
    <h1 class="mt0">Projects</h1>
    @kirbytext($page->text()->blocks())
  </header>
  <section class="w-two-thirds-l ml4-l mt3 mt0-l macy">
    @foreach ($projects as $project)
      @if ($photo = $project->cover()->toFile())
        @php $aspect_ratio = round($photo->dimensions()->ratio(), 2) @endphp
        <a class="overlay" href="{{ $project->url() }}">
          <div class="overlay-content tc pa3">
            <h2 class="f3 mt0 white">{{ $project->title()->html() }}</h2>
          </div>
          <div class="ratio-container fig ma0 pa0" data-aspect-ratio="{{ round($photo->dimensions()->ratio(), 2) }}">
            <img
              class="lazy lazyload"
              data-sizes="auto"
              data-aspectratio="{{ $aspect_ratio }}"
              data-lowsrc="{{ $photo->thumb('lowsrc')->url() }}"
              data-srcset="{{ $photo->srcset([275 => '1x', 500 => '2x']) }}"
              alt=""
            />
          </div>
        </a>
      @endif
    @endforeach
  </section>
</div>
@endsection
