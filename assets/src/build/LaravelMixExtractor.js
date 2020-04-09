/**
 * PurgeCSS extractor for allowing special characters in class names.
 * @link https://github.com/FullHuman/purgecss#extractor
 */
class LaravelMixExtractor {
  static extract(content) {
    return content.match(/[A-Za-z0-9-_:\/]+/g) || [];
  }
}

module.exports = LaravelMixExtractor;
