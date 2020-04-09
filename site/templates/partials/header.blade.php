<header>
  <a class="sr-only focus:not-sr-only skippy" href="#content">Skip Navigation</a>
  <div class="container">
    <nav class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
      <a class="mb-4 sm:mb-0 text-xl" href="{{ url() }}">{{ $site->title()->html() }}</a>
      <ul class="flex mb-0">
        @foreach ($pages->listed() as $page)
          <li class="mr-8 sm:mr-0 sm:ml-8">
            <a class="{{ $page->isOpen() ? 'active' : '' }}" href="{{ $page->url() }}">{{ $page->title()->html() }}</a>
          </li>
        @endforeach
      </ul>
    </nav>
  </div>
</header>
