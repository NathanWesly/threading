<?php

/**
 * Responsible for creating threads
 * 
 * @author Nathan O Wesly
 */ 
class Thread
{
	public function __construct()
	{
		return "worker";
	}

	public function stop()
	{
		return "stopped";
	}

	public function start()
	{
		return "started";
	}

	public function kill()
	{
		return "killed";
	}

	public function __destruct()
	{
		$this->kill();
	}
}