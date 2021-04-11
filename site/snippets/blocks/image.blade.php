@if ($image = $block->image()->toFile())
  @php
    $data = [
      'ratio'   => round($image->dimensions()->ratio(), 2),
      'lowsrc'  => $image->thumb('lowsrc')->url(),
      'srcset'  => $image->srcset(),
      'src'     => $image->src(),
      'alt'     => $image->alt(),
      'caption' => $block->caption(),
    ];
  @endphp
  <figure class="ratio-container mb3 pa0" data-aspect-ratio="{{ $data['ratio'] }}">
    <img class="lazy" src="{{ $data['lowsrc'] }}" data-srcset="{{ $data['srcset'] }}" alt="{{ $data['alt'] }}" />
    <noscript>
      <img src="{{ $data['src'] }}" srcset="{{ $data['srcset'] }}" alt="{{ $data['alt'] }}" />
    </noscript>
    @if ($data['caption'])
      <figcaption>{{ $data['caption'] }}</figcaption>
    @endif
  </figure>
@endif
