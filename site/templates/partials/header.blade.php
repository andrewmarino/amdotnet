<header>
  <a id="skip-navigation" class="sr-only sr-only-focusable" href="#content">Skip Navigation</a>
  <nav class="flex flex-column flex-row-ns items-center-ns justify-between-ns fw6">
    <a class="f3 mb3 mb0-ns" href="{{ url() }}">{{ $site->title()->html() }}</a>
    <ul class="flex list pa0 ma0 f5">
      @foreach ($pages->visible() as $page)
        <li class="mr3 mr0-ns ml3-ns">
          <a class="{{ $page->isOpen() ? 'active' : '' }}" href="{{ $page->url() }}">{{ $page->title()->html() }}</a>
        </li>
      @endforeach
    </ul>
  </nav>
</header>
