<?php namespace SIKessEm\Events;
/**
 * Emittable events interface
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/events
 * @license Apache-2.0
 */
interface Emittable {
  /**
   * Emit an event
   *
   * @param string $event The event name
   * Takes other optional arguments
   */
   public function emit(string $event, ...$args);
}
