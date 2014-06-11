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
	 * @param Object $response
	 * @return boolean
	 */
	public function execute($request, $response = null);

	/**
	 * The command undo method
	 */
	public function undo();
}