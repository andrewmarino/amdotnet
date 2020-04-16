<picture class="ratio-container fig ma0 pa0 max-w-xl" data-aspect-ratio="{{ round($photo->dimensions()->ratio(), 2) }}">
  <img
    class="lazy"
    src="{{ $photo->thumb('lowsrc')->url() }}"
    data-srcset="{{ $photo->srcset([275 => '1x', 500 => '2x']) }}"
    data-caption="{{ $photo->caption() }}"
    alt="{{ $photo->alt() }}"
  />
  <noscript>
    <img src="{{ $photo->src() }}" srcset="{{ $photo->srcset([275 => '1x', 500 => '2x']) }}" alt="{{ $photo->alt() }}" />
  </noscript>
</picture>
