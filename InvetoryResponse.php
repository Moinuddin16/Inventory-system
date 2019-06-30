<?php
require 'vendor/autoload.php';
    class InvetoryResponse{

        public $inventoryError;
        public $inventoryData;
        function __construct($inventoryData, $inventoryError)
        {
            $this->inventoryError = $inventoryError;
            $this->inventoryData = $inventoryData;
        }
        

    }
?>