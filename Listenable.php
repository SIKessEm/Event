<?php namespace SIKessEm\Events;
/**
 * Listenable events interface
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/events
 * @license Apache-2.0
 */
interface Listenable {
  /**
   * Listen an event
   *
   * @param string $event The event name
   * @param callable $action The event name
   */
  public function on(string $event, callable $action);
}
