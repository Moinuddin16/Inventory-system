<?php
include '../InventoryError.php';
 class NoBrandDataFound extends InventoryError {
     function getErrorCode() {
         return "NoBrandDataFound";
     }

     function getErrorMessage() {
         return "No brand data found";
     }
} 

?>

