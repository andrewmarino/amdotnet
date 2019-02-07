@extends('layouts.app')

@section('content')
<section class="mxa measure-wide w-100 lh-copy f5">
  <h1 class="mt0">{{ $page->title() }}</h1>
  @kirbytext($page->text())
</section>
@endsection
