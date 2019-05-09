<?php

    abstract class InventoryError{

        abstract function getErrorCode();

        abstract function getErrorMessage();

        
        public function ToJson(){
            return 'errorCode:'.getErrorCode().'errorMessage :'.getErrorMessage();
        }
    }
?>