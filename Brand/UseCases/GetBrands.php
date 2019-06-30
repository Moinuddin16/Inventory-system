<?php 

require '../vendor/autoload.php';

    class GetBrands{

        public $title;


        public $website;

        private $brandRepository;

        public function __construct(BrandRepository $brandRepository){
            $this->brandRepository = $brandRepository;
         }

        public function execute() {
            return $this->brandRepository->brands();
         }
}
?>