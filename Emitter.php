<?php namespace SIKessEm\Event;
/**
 * Events emitter trait
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/events
 * @license Apache-2.0
 */
trait Emitter {
  /**
   * Emit an event
   *
   * @param string $event The event name
   * Takes other optional arguments
   */
   public function emit(string $event, ...$args) {
     if(method_exists($this, $emit = 'emit' . ucFirst($event)))
       return $this->$emit(...$args);
     throw new Error('Cannot emit event ' . $this::class . "::$event", Error::EMITTING);
   }
}
