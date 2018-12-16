<!doctype html>
<html lang="en-us" class="no-js {{ isset($_COOKIE['fonts-loaded']) ? 'fonts-loaded' : '' }}">
  @include('partials.head')
  <body class="body sans-serif ph3 ph4-l {{ $page->template() }}">
    @include('partials.header')
    <main id="content">
      @yield('content')
    </main>
    @include('partials.footer')
  </body>
</html>
