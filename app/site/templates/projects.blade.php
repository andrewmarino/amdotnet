@extends('layouts.app')

@section('content')
<div class="flex flex-column flex-row-l justify-between-l f5">
  <header class="w-third-l lh-copy f5">
    <h1 class="mt0">Projects</h1>
    {{ $page->text()->kirbytext() }}
  </header>
  <section class="w-two-thirds-l ml4-l mt3 mt0-l macy">
    @foreach ($projects as $project)
      @php if ($photo = $project->coverImage()->toFile()) : @endphp
      <a class="overlay" href="{{ $project->url() }}">
        <div class="overlay-content tc pa3">
          <h2 class="f3 mt0 white">{{ $project->title()->html() }}</h2>
        </div>
        <figure class="ratio-container fig ma0 pa0 loading" data-aspect-ratio="{{ round($photo->dimensions()->ratio(), 2) }}">
          <img
            class="lazy lazyload"
            data-srcset="{{ $photo->resize(275)->url() }} 1x, {{ $photo->resize(500)->url() }} 2x"
            alt=""
            data-expand="-10"
          />
        </figure>
      </a>
      @php endif @endphp
    @endforeach
  </section>
</div>
@endsection
