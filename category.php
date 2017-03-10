<?php

class Category {
    public $categoryID = 0;
    public $categoryName = '';
    public $categoryImage = '';
    public $categoryDescription = '';
    public $subcategoriesURL = '';

//constructor
public function __construct($id, $name, $description) {
$this->categoryID = (int)$id;
$this->categoryName = $name;
$this->categoryDescription = $description;
$this->subcategoriesURL = "subcategories_list.php/?id=$this->categoryID&name=$this->categoryName";
$this->setImages($this->categoryName);

}//end of Category constructor

private function setImages($name) {
    switch($name) {
        case "Health":
        $this->categoryImage = "images/health.jpeg";
        break;
        case "Technology":
        $this->categoryImage = "images/technology.jpeg";
        break;
        case "Environment":
        $this->categoryImage = "images/environment.jpeg";
        break;
    }//end of switch
}//end of setImages function 

}//end of Category class