@extends('layouts.app')

@section('content')
<article class="measure-wide lh-copy f5">
  <h1 class="mt0">{{ $page->title() }}</h1>
  {{ $page->text()->kirbytext() }}
</article>
@endsection
