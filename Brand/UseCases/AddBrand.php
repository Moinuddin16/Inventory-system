<?php 

    include_once 'BrandController.php';
    include_once 'BrandRepository.php';
    include_once 'BrandModels.php';

    class Addbrand {

        public $brand;
        public $Name;
        public $Website;
        public $brandRepository;
        public $validation_flag;


        public function __construct(Brand $brand , BrandRepository $brandRepository)
        {
            $this->Name = $brand->getTitle();
            $this->Website = $brand->getWebsite();
            $this->brandRepository = $brandRepository;
        }

        public function data_validation()
        {
            if($this->Name != Null){
                $this->validation_flag['Name']='ture';
            }
            else{
                $this->validation_flag['Name']='false';
            }
            
            if($this->Website != Null){
                $this->validation_flag['Website']='ture';
            }
            else{
                $this->validation_flag['Website']='false';
            }

            if(filter_var($this->website,FILTER_VALIDATE_URL)){
                $this->validation_flag['Webiste_validation']='ture';
            }
            else{
                $this->validation_flag['Webiste_validation']='false';
            }
        }

       public function execute() {
            
            if($this->Website != Null && $this->Name != Null)
            {
                return $this->brandRepository->addBrand($this->Name,$this->Website);
            }
            else
            {
                echo"No data found";
            }
            
        }

    }
  
?>