<?php
namespace Kampernet\Action;

/**
 * the command interface
 *
 * @package Kampernet\Action
 */
interface CommandInterface {

	/**
	 * The command execute method
	 *
	 * @param Object $request
	 * @return boolean
	 */
	public function execute(&$request);

	/**
	 * The command undo method
	 */
	public function undo();
}