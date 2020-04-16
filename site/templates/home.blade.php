@extends('layouts.app')

@section('content')
<section class="flex justify-center mx-auto">
  <h1 class="serif sr-only">{{ $site->title()->html() }}</h1>
  @foreach ($page->images()->sortBy('sort', 'asc') as $photo)
    @include('partials.photo', [
      'photo' => $photo,
    ])
  @endforeach
</section>
@endsection
