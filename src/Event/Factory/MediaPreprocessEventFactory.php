<?php

namespace Drupal\preprocess_media_event_dispatcher\Event\Factory;

use Drupal\preprocess_media_event_dispatcher\Event\MediaPreprocessEvent;
use Drupal\preprocess_event_dispatcher\Event\AbstractPreprocessEvent;
use Drupal\preprocess_event_dispatcher\Factory\PreprocessEventFactoryInterface;
use Drupal\preprocess_media_event_dispatcher\Event\Variables\MediaEventVariables;

/**
 * Class MediaPreprocessEventFactory.
 */
class MediaPreprocessEventFactory implements PreprocessEventFactoryInterface {

  public function createEvent(array &$variables): AbstractPreprocessEvent
  {
    return new MediaPreprocessEvent(
      new MediaEventVariables($variables)
    );
  }

  public function getEventHook(): string
  {
    return MediaPreprocessEvent::getHook();
  }

}
