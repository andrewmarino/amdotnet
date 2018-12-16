<header class="pt4 mb5">
  <a id="skip-navigation" class="sr-only sr-only-focusable" href="#content">Skip Navigation</a>
  <nav class="dib">
    <ul class="list pa0 mb0 f5 fw6">
      <li>
        <a class="dib mb2 f3" href="{{ url() }}">{{ $site->title()->html() }}</a>
      </li>
      @foreach ($pages->visible() as $page)
        <li class="dib mr3 mt2">
          <a class="{{ $page->isOpen() ? 'active' : '' }}" href="{{ $page->url() }}">{{ $page->title()->html() }}</a>
        </li>
      @endforeach
    </ul>
  </nav>
</header>
