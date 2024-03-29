<?php
    require '../vendor/autoload.php';
    $useCase = $_GET['use_case'];
    
    $brandRepository = new BrandRepository(DB::getInstance());
    
    switch($useCase) {
        case "GetBrands":
        $getBrands = new GetBrands($brandRepository);
        $inventroyResponse = $getBrands->execute();
        
        if ($inventroyResponse->inventoryData != null) {
            echo RestResponse::createSuccessResponse($inventroyResponse->inventoryData);
        } 
        else {
            echo RestResponse::createErrorResponse($inventroyResponse->inventoryError);
        }
        break;

        case "AddBrand":
        $name = $_POST["name"];
        $website = $_POST["website"];

        $brand = new Brand();

        $brand->setTitle($name);
        $brand->setWebsite($website);

        $addBrand = new Addbrand($brand,$brandRepository);
        $inventroyResponse = $addBrand->execute();
        
        if ($inventroyResponse->inventoryData != null) {
            echo RestResponse::createSuccessResponse($inventroyResponse->inventoryData);
        } 
        else {
            echo RestResponse::createErrorResponse($inventroyResponse->inventoryError);
        }
        break;

        //echo $name."<br>";
        //echo $website;
    }

    

?>  