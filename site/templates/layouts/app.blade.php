<!doctype html>
<html lang="en-us" class="no-js">
  @include('partials.head')
  <body class="md:px-4 py-10 {{ join(' ', $body_class) }}">
    @include('partials.header')
    <main class="container my-16" id="content">
      @yield('content')
    </main>
    @include('partials.footer')
  </body>
</html>
