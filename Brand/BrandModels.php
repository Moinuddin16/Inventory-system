<?php

class Brand {
    public  $id;
    public  $title;
    public  $website;
    
    public function setId(int $id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setTitle(string $title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setWebsite(string $website) {
        $this->website = $website;
    }

    public function getWebsite() {
        return $this->website;
    }
}

?>