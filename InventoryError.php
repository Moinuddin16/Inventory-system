<?php

    abstract class InventoryError{

        abstract function getErrorCode();

        abstract function getErrorMessage();

        
        public function ToJson(){
            return 'errorCode:'.getErrorCode().'errorMessage :'.getErrorMessage();
        }
    }

    class EmptyOrNullValue extends InventoryError {
        
        private  $fieldName;
        
        public function __construct(string $fieldName)
        {
            $this->fieldName = $fieldName;
        }

        public function getErrorCode()
        {
            return $this->fieldName."EmptyOrNull";
        }

        public function getErrorMessage()
        {
            return $this->fieldName.' can not be empty or null';
        }
    }

    class InvalidUrl extends InventoryError {
        
        private $url;
        
        public function __construct($url)
        {
            return $this->url = $url;
        }

        public function getErrorCode()
        {
            return "InvalidUrl";
        }

        public function getErrorMessage()
        {
            return $this->url." is not a valid url";
        }
    }
?>