<?php
//the Subcategory class

class Subcategory 
{
    public $subcategoryID = 0;
    public $subcategoryName = '';
    public $subcategoryDescription = '';
    public $subcategoryRSS = '';
    public $categoryID = 0;
    public $subcategoryImage = '';

    //constructor
    public function __construct($subcatID, $subcatName, $subcatDescription, $subcatRSS, $catID) {
        $this->subcategoryID = (int) $subcatID;
        $this->subcategoryName = $subcatName;
        $this->subcategoryDescription = $subcatDescription;
        $this->subcategoryRSS = $subcatRSS;
        $this->categoryID = (int) $catID;
        $this->setImages($this->subcategoryName);
    }//end of constructor
private function setImages($name) {
    switch($name) {
        case "Alternative Medicine":
        $this->subcategoryImage = "../images/alternative_medicine.jpeg";
        break;
        case "Nutrition":
        $this->subcategoryImage = "../images/nutrition.jpeg";
        break;
        case "Fitness":
        $this->subcategoryImage = "../images/fitness.jpeg";
        break;
        case "Global Warming":
        $this->subcategoryImage = "../images/global_warming.jpeg";
        break;
        case "Biodiversity":
        $this->subcategoryImage = "../images/biodiversity.jpeg";
        break;
        case "Renewable Energy":
        $this->subcategoryImage = "../images/renewable.jpg";
        break;
        case "Video Games":
        $this->subcategoryImage = "../images/video_games.jpeg";
        break;
        case "Software":
        $this->subcategoryImage = "../images/software.jpeg";
        break;
        case "Hacking":
        $this->subcategoryImage = "../images/hacking.jpeg";
        break;
    }//end of switch
}//end of setImages function 

}//end of subcategory class