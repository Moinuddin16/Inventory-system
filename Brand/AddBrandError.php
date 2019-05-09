<?php
include '../InventoryError.php';

class NoDataInsert extends InventoryError{

    function getErrorCode(){
        return "NoDataInsert";
    }

    function getErrorMessage(){
        return "No Data Insert In Repository";
    } 
}


?>