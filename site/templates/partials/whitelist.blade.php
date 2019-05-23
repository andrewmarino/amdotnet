@php
  if (!defined('KIRBY')) exit
  // Additional base element whitelist for Purgecss.
@endphp

<main>
  @php
    $elems = ['<h1>', '<h2>', '<h3>', '<h4>', '<h5>', '<h6>', '<blockquote>', '<p>', '<abbr>', '<picture>'];
  @endphp
</main>
