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
   * @param string $name The event name
   * Takes other optional arguments
   */
   public function emit(string $name, ...$args) {
     if(method_exists($this, $emit = 'emit' . ucFirst($name)))
       return $this->$emit(...$args);
     throw new Error('Cannot emit event ' . $this::class . "::$name", Error::EMITTING);
   }
}
