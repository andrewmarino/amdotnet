<!doctype html>
<html lang="en-us">
  @include('partials.head')
  <body class="bg-dark-red">
    <main class="flex flex-column items-center justify-center">
      <h1 class="white sans-serif uppercase f3">{{ $page->title()->html() }}</h1>
    </main>
  </body>
</html>
