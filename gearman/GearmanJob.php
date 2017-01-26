<?php

class GearmanJob {

    public function complete(string $result) {
        
    }

    public function data(string $data) {
        
    }

    public function exception(string $exception) {
        
    }

    public function returnCode() {
        
    }

    public function sendComplete(string $result) {
        
    }

    public function sendData(string $data) {
        
    }

    public function sendException(string $exception) {
        
    }

    public function sendFail() {
        
    }

    public function sendStatus(int $numerator, int $denominator) {
        
    }

    public function sendWarning(string $warning) {
        
    }

    public function setReturn(int $gearman_return_t) {
        
    }

    public function status(int $numerator, int $denominator) {
        
    }

    public function unique() {
        
    }

    public function warning(string $warning) {
        
    }

    
    /**
     * Returns the workload for the job. This is serialized data that is to be processed by the worker
     * @return string Serialized data
     */
    public function workload() {
        
    }

    public function workloadSize() {
        
    }

}
