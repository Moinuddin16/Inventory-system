<?php

    include_once '../DB.php';
    include_once '../InvetoryResponse.php';
    include_once 'BrandModels.php';
    include_once 'BrandConstant.php';

    
    
    class BrandRepository{
        
        public $DB;
        
        public function __construct(DB $DB){
            $this->DB = $DB;
        }

        public function brands()
        {
            $brands = array();
            $query = "SELECT * FROM brand";
            $result = $this->DB->executeQuery($query);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $brand = new Brand();
                    $brand->setId($row[BrandConstant::BRAND_COLLUMN_ID]);
                    $brand->setTitle($row[BrandConstant::BRAND_COLLUMN_NAME]);
                    $brand->setWebsite($row[BrandConstant::BRAND_COLLUMN_WEBSITE]);
                    $brands[] = $brand;
                }
                return new InvetoryResponse($brands, null);
            } else {
                return new InventoryResponse(null, NoBrandDataFound());
            }
        }
        
        public function addBrand($Name,$Website)
        {
            $query = "INSERT INTO brand (Name,Website) VALUES ('$Name','$Website')";

            $result = $this->DB->executeQuery($query);
           
            if($result){
                $brand = new Brand();
                $brand->setId($this->DB->getId());
                $brand->setTitle($this->Name);
                $brand->setWebsite($this->Website);               
                //echo "Brand is insert successfully";
            }
            else{
                echo "Brand is not insert successfully";
            }

        }
    }

?>