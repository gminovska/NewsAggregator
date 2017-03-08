<!doctype html>
<html>
    
<head>
    <meta charset="UTF-8">
    <title>Feeds List</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="../css/style.css" type="text/css" rel="stylesheet">
</head>

<body>
<header>
<h1>News Aggregator</h1>
<h2>- subcategories -</h2>
</header>
    
<?php
require 'config/common.php';
require 'subcategory.php';

//grab the categoryID from the URL
$catID = (int) $_GET['id'];
$result = getSubcategoryData($catID);

//check if there are rows 
if(mysqli_num_rows($result) > 0) {
    //fetch each row
    while($row = mysqli_fetch_assoc($result)) 
    {
        //create an array of category objects
        $mySubcategories[] = new Subcategory($row['SubcategoryID'], $row['SubcategoryName'], 
        $row['SubcategoryDescription'], $row['SubcategoryRSS'], $row['CategoryID']);     
    }
    
    //build the html categories display by looping through the categories array
    foreach($mySubcategories as $subcategory) 
    {
        
        echo '<div>
                <h2>' . $subcategory->subcategoryName . '</h2>
                <a href=' . '../feed.php/?rss=' . $subcategory->subcategoryRSS . '><img src="' . $subcategory->subcategoryImage . '" alt=""></a>
                <p>' . $subcategory->subcategoryDescription . '<br>
                <strong><a href=' . '../feed.php/?rss=' . $subcategory->subcategoryRSS . '>Go to ' . $subcategory->subcategoryName . ' news feeds</a></strong></p>
              </div>';
    }//end of foreach loop

}//end of if block
else
{
    //what should happen if we don't have data in the db?
}
    
        ?>
    
</body>
</html>