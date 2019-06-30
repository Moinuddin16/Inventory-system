<?php

require '../vendor/autoload.php';
class NoDataInsert extends InventoryError{

    function getErrorCode(){
        return "NoDataInsert";
    }

    function getErrorMessage(){
        return "No Data In Repository";
    } 
}


?>