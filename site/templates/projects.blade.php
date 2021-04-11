@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">
  <header class="content mb-10">
    <h1 class="mt-0">Projects</h1>
    @kirbytext($page->text()->toBlocks())
  </header>
  <section class="macy">
    @foreach ($projects as $project)
      @if ($photo = $project->coverImage())
        <a class="overlay" href="{{ $project->url() }}">
          <div class="overlay__content">
            <h2>{{ $project->title()->html() }}</h2>
          </div>
          @include('partials.photo', [
            'photo' => $photo,
          ])
        </a>
      @endif
    @endforeach
  </section>
</div>
@endsection
