<?php

class GearmanWorker {

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
    public function addFunction($function_name, $function, $context = null, $timeout = null) {
        
    }

    /**
     *
     * @param string $host
     * @param int $port 
     * @return
     */
    public function addServer($host = '127.0.0.1', $port = 4730) {
        
    }

    /**
     * Waits for a job to be assigned and then calls the appropriate callback function.
     * Issues an E_WARNING with the last Gearman error if the return code is not one of GEARMAN_SUCCESS, 
     * GEARMAN_IO_WAIT, or GEARMAN_WORK_FAIL.
     * ###usage:
     * ```
     * while ($worker->work()){
     *   ###some code 
     * }
     * ```
     * ###
     * @return function 成功时返回 TRUE， 或者在失败时返回 FALSE
     */
    public function work() {
        
    }

    public function addOptions(int $option) {
        
    }

    public function addServers($servers = '127.0.0.1:4730') {
        
    }

    public function error() {
        
    }

    public function getErrno() {
        
    }

    public function options() {
        
    }

    public function register($function_name) {
        
    }

    public function removeOptions(int $option) {
        
    }

    public function returnCode() {
        
    }

    public function setId(string $id) {
        
    }

    public function setOptions(int $option) {
        
    }

    public function setTimeout(int $timeout) {
        
    }

    public function timeout() {
        
    }

    public function unregister(string $function_name) {
        
    }

    public function unregisterAll() {
        
    }

    public function wait() {
        
    }

}
