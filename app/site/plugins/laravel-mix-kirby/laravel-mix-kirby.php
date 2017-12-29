<?php
/**
 * Laravel Mix helper for the Kirby CMS
 *
 * @version   1.1.0
 * @author    Robert Cordes <robert@diverently.com>
 */

if (! function_exists('mix')) {
  /**
   * Get the appropriate HTML tag with the right path for the (versioned) Mix file.
   *
   * @param  string  $path
   */
  function mix($path)
  {
    static $manifest;
    static $mixFilePath;
    static $pathExtension;
    static $mixFileLink;

    $manifest_path = c::get('mix.manifest', 'assets/mix-manifest.json');
    $assets_path = c::get('mix.assets', 'assets');

    if (str::startsWith($manifest_path, '/')) {
      $manifest_path = str::substr($manifest_path, 1);
    }

    if (! str::startsWith($assets_path, '/')) {
      $assets_path = "/{$assets_path}";
    }

    if (str::endsWith($assets_path, '/')) {
      $assets_path = str::substr($assets_path, -1);
    }

    if (! $manifest) {
      if (! f::exists($manifest_path)) {
        trigger_error("The Mix manifest does not exist");
      }

      $manifest = str::parse(f::read($manifest_path), 'json');
    }

    if (! array_key_exists($path, $manifest)) {
      trigger_error("Unable to locate Mix file: {$path}. Please check your webpack.mix.js output paths and try again.");
    }

    $mixFileLink = $assets_path . $manifest[$path];

    return $mixFileLink;
  }
}
