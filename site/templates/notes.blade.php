@extends('layouts.app')

@section('content')
<section class="measure-wide mxa lh-copy f5">
  <h1 class="mt0">Notes</h1>
  @kirbytext($page->text())
  <ul class="list m0 pa0">
    @foreach ($notes as $note)
    <li>
      <article>
        <h2 class="f3 mt0">
          <a href="{{ $note->url() }}">{{ $note->title()->html() }}</a>
        </h2>
        <time class="f6" datetime="{{ $note->date('c') }}">{{ $note->date('M d, Y') }}</time>
      </article>
    </li>
    @endforeach
  </ul>
</section>
@endsection
