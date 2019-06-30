<?php 

require '../vendor/autoload.php';
    
    class Addbrand {

        private $brand;
        private $brandRepository;

        public function __construct(Brand $brand , BrandRepository $brandRepository)
        {
            $this->brand = $brand;
            $this->brandRepository = $brandRepository;
        }

       public function execute() {
           
            $Website_varification = filter_var($this->brand->website,FILTER_VALIDATE_URL);
            
            if($this->brand->title == Null || empty($this->brand->title))
            {
                return new InvetoryResponse(null, new EmptyOrNullValue("BrandName"));
            }
            if($this->brand->website == Null || empty($this->brand->website))
            {
                return new InvetoryResponse(null, new EmptyOrNullValue("BrandWebsite"));
            } 
            if($Website_varification == FALSE )
            {
                return new InvetoryResponse(Null,new InvalidUrl($this->brand->website));
            }   
            if($this->brand->website != Null && $this->brand->title != Null && $Website_varification == TRUE)
            {
                return $this->brandRepository->addBrand($this->brand->title,$this->brand->website);
            }
        }

    }
  
?>