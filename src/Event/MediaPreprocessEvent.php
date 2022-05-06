<?php

namespace Drupal\preprocess_media_event_dispatcher\Event;

use Drupal\preprocess_event_dispatcher\Event\AbstractPreprocessEntityEvent;

/**
 * Class MediaPreprocessEvent.
 */
final class MediaPreprocessEvent extends AbstractPreprocessEntityEvent
{

  public static function getHook(): string
  {
    return 'media';
  }

}
