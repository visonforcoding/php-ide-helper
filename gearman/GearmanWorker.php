<?php

class GearmanWorker{
   
    
    /**
     * Register and add callback function
     * Registers a function name with the job server and specifies a callback 
     * corresponding to that function. Optionally specify extra application 
     * context data to be used when the callback is called and a timeout.
     * @param string $function_name The name of a function to register with the job server
     * @param callable $function  A callback that gets called when a job for the registered function name is submitted
     * @param mixed $context A reference to arbitrary application context data that can be modified by the worker function
     * @param int $timeout  An interval of time in seconds
     * @return bool
     */
  public function addFunction ($function_name ,$function,$context = null ,$timeout = null){
      
  }

  /**
  *
  *@param string $host
  *@param int $port 
  *@return
  */
  public function addServer($host = '127.0.0.1',$port = 4730){

  }

}