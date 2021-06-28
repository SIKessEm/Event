<?php namespace SIKessEm\Events;
/**
 * Events error class
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/events
 * @license Apache-2.0
 */
class Error extends \Error {
  /**
   * Events listening error code
   */
  public const LISTENING = 0x01;

  /**
   * Event emission error code
   */
  public const EMISSION = 0x02;
}
