<?php

/**
 * Responsible for creating threads
 * 
 * @author Nathan O Wesly
 */ 
class Thread
{
	/**
	 * Init a thread
	 */ 
	public function __construct()
	{
		return "worker";
	}
    
    /**
     * Stops a worker thread
     */ 
	public function stop()
	{
		return "stopped";
	}
    
    /**
     * Starts a worker thread
     */ 
	public function start()
	{
		return "started";
	}
    
    /**
     * kills a worker thread 
     */
	public function kill()
	{
		return "killed";
	}
    
    /**
     * return worker handler
     */
	public function getWorkerHandler()
	{
		return 'Worker handler';
	}
    
    /**
     * kills a thread
     */ 
	public function __destruct()
	{
		$this->kill();
	}
}