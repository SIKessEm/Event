<?php namespace SIKessEm\Events;
/**
 * Events listener trait
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/events
 * @license Apache-2.0
 */
trait Listener {
  /**
   * Listen an event
   *
   * @param string $event The event name
   * @param callable $action The event name
   */
  public function on(string $event, callable $action) {
    if(method_exists($this, $listen = 'on' . ucFirst($event)))
      return $this->$listen(...$args);
    throw new Error("Cannot listen $event on " . $this::class, Error::LISTENING);
  }
}
