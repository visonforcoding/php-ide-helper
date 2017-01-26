<?php

class GearmanClient {

    /**
     * Runs a single task and returns a string representation of the result. 
     * It is up to the GearmanClient and GearmanWorker to agree on the format of the result.
     * @param string $function_name 由程序自动执行的已注册函数。
     * @param string $workload 被处理的序列化数据
     * @param string $unique 用于标识特定任务的唯一性 ID
     * @return string A string representing the results of running a task.
     */
    public function doNormal($function_name, $workload, $unique = null) {
        
    }

    /**
     * Adds a job server to a list of servers that can be used to run a task.
     *  No socket I/O happens here; the server is simply added to the list.
     * @param string $host  任务服务器主机名
     * @param int $port 任务服务器端口号
     * @return bool 成功时返回 TRUE， 或者在失败时返回 FALSE。
     */
    public function addServer($host = '127.0.0.1', $port = 4730) {
        
    }

    public function addOptions(int $options) {
        
    }

    public function addServers($servers = '127.0.0.1:4730') {
        
    }

    public function addTask(string $function_name, string $workload, $context, string $unique) {
        
    }

    public function addTaskBackground(string $function_name, string $workload, $context, string $unique) {
        
    }

    public function addTaskHigh(string $function_name, string $workload, $context, string $unique) {
        
    }

    public function addTaskHighBackground(string $function_name, string $workload, $context, string $unique) {
        
    }

    public function addTaskLow(string $function_name, string $workload, $context, string $unique) {
        
    }

    public function addTaskLowBackground(string $function_name, string $workload, $context, string $unique) {
        
    }

    public function addTaskStatus(string $job_handle, $context = null) {
        
    }

    public function clearCallbacks() {
        
    }

    public function context() {
        
    }

    public function data() {
        
    }

    public function doBackground(string $function_name, string $workload, string $unique = null) {
        
    }

    public function doHigh(string $function_name, string $workload, string $unique) {
        
    }

    public function doHighBackground(string $function_name, string $workload, string $unique) {
        
    }

    public function doJobHandle() {
        
    }

    public function doLow(string $function_name, string $workload, string $unique) {
        
    }

    public function doLowBackground(string $function_name, string $workload, string $unique) {
        
    }



    public function doStatus() {
        
    }

    public function error() {
        
    }

    public function getErrno() {
        
    }

    public function jobStatus(string $job_handle) {
        
    }

    public function ping(string $workload) {
        
    }

    public function removeOptions(int $options) {
        
    }

    public function returnCode() {
        
    }

    public function runTasks() {
        
    }

    public function setClientCallback(callable $callback) {
        
    }

    public function setCompleteCallback(callable $callback) {
        
    }

    public function setContext(string $context) {
        
    }

    public function setCreatedCallback(string $callback) {
        
    }

    public function setData(string $data) {
        
    }

    public function setDataCallback(callable $callback) {
        
    }

    public function setExceptionCallback(callable $callback) {
        
    }

    public function setFailCallback(callable $callback) {
        
    }

    public function setOptions(int $options) {
        
    }

    public function setStatusCallback(callable $callback) {
        
    }

    public function setTimeout(int $timeout) {
        
    }

    public function setWarningCallback(callable $callback) {
        
    }

    public function setWorkloadCallback(callable $callback) {
        
    }

    public function timeout() {
        
    }

}
