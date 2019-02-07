<!doctype html>
<html lang="en-us" class="no-js {{ isset($_COOKIE['fonts-loaded']) ? 'fonts-loaded' : '' }}">
  @include('partials.head')
  <body class="body sans-serif pt4 ph3 pt4-l ph4-l {{ $page->template() }}">
    @include('partials.header')
    <main class="mv5" id="content">
      @yield('content')
    </main>
    @include('partials.footer')
  </body>
</html>
