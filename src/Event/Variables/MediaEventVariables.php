<?php

namespace Drupal\preprocess_media_event_dispatcher\Event\Variables;

use Drupal\Core\Entity\EntityInterface;
use Drupal\media\MediaInterface;
use Drupal\preprocess_event_dispatcher\Variables\AbstractEntityEventVariables;

/**
 * Class MediaEventVariables.
 */
class MediaEventVariables extends AbstractEntityEventVariables {

  /**
   * @return EntityInterface
   */
  public function getEntity(): EntityInterface
  {
    return $this->getMedia();
  }

  /**
   * Get the media.
   *
   * @return MediaInterface
   *   The media.
   */
  public function getMedia(): MediaInterface {
    return $this->variables['media'];
  }

  /**
   * Set a max age to the media template.
   *
   * @param int $maxAge
   *   A max age context.
   */
  public function setCacheMaxAge(int $maxAge): void {
    $this->variables['#cache']['max-age'] = $maxAge;
  }

  /**
   * Add a cache context to the media template.
   *
   * @param string $context
   *   A cache context.
   */
  public function addCacheContext(string $context): void {
    $this->variables['#cache']['contexts'][] = $context;
  }

  /**
   * Add a cache tage to the media template.
   *
   * @param string $tag
   *   A cache tag.
   */
  public function addCacheTag(string $tag): void {
    $this->variables['#cache']['tags'][] = $tag;
  }

}
