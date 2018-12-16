@extends('layouts.app')

@section('content')
<section class="mw7-ns lh-copy f5">
  <h1 class="mt0">Projects</h1>
  <ul>
    @foreach ($projects as $project)
    <li>
      <a href="{{ $project->url() }}">{{ $project->title()->html() }}</a>
    </li>
    @endforeach
  </ul>
</section>
@endsection
