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
   
<?php

  $request = $_GET['rss'];
  $response = file_get_contents($request);
  $xml = simplexml_load_string($response);
  echo '<h1>' . $xml->channel->title . '</h1>
        </header>';
  

  //the images are not showing because they are under a namespace "media".
  //get an array of namespace prefixes with their associated URIs.
  //read more@: https://www.sitepoint.com/parsing-xml-with-simplexml/
  $ns = $xml->getNamespaces(true);
  foreach($xml->channel->item as $story)
  {
    $thumbnail = $story->children($ns['media']);
    //display only stories that have thumbnail images
    if($thumbnail) {
      echo '<div><h3><a href="' . $story->link . '">' . $story->title . '</a></h3><br />';
      echo '<img src=' .$thumbnail->thumbnail->attributes()->url . '></img>'; 
      echo '<p>' . $story->description . '</p><br /></div>';
    }    
  }
?>