<!doctype html>
<html lang="en-us">
  @include('partials.head')
  <body class="bg-red-700">
    <main class="flex flex-column items-center justify-center">
      <h1 class="sans-serif uppercase h3">{{ $page->title()->html() }}</h1>
    </main>
  </body>
</html>
