@extends('layouts.app')

@section('content')
<section class="content max-w-3xl mx-auto">
  <h1 class="mt-0">{{ $page->title() }}</h1>
  @if ($page->date())
    <time datetime="{{ $page->date()->toDate('c') }}">
      {{ $page->date()->toDate('F jS, Y') }}
    </time>
  @endif
  @foreach ($page->blocks()->toBlocks() as $block)
    {!! $block !!}
  @endforeach
</section>
@endsection
