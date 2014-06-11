<?php
namespace Kampernet\Action;

/**
 * this Command class is just to store the previous command
 * at a superclass level
 *
 * @package Kampernet\Action
 */
abstract class Command implements CommandInterface {

	/**
	 *
	 * a place to store the previous command for
	 * automatic undo within a chain.
	 *
	 * @var \Kampernet\Action\CommandInterface
	 */
	public $previous;
}