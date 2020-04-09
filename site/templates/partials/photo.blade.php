@php $aspect_ratio = round($photo->dimensions()->ratio(), 2) @endphp

<div class="ratio-container fig ma0 pa0" data-aspect-ratio="{{ $aspect_ratio }}">
  <img
    class="lazy lazyload"
    data-sizes="auto"
    data-aspectratio="{{ $aspect_ratio }}"
    data-lowsrc="{{ $photo->thumb('lowsrc')->url() }}"
    data-srcset="{{ $photo->srcset([275 => '1x', 500 => '2x']) }}"
    data-caption="{{ $photo->caption() }}"
    alt="{{ $photo->alt() }}"
  />
</div>
