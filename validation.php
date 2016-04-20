<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
$validname = $validdesc = $validstreet = $validcity = $validpostal = $validname2 = $validquestion = false;
$name = $_POST["name"];
$description = $_POST["description"];
$street = $_POST["street"];
$city = $_POST["city"];
$postalcode = $_POST["postalcode"];
$name2 = $_POST["askname"];
$question = $_POST["question"];

    if(preg_match('/^[a-zA-Z]+$/', $name)) $validname = true;
    if(preg_match('/^[a-zA-Z]+$/', $name2)) $validname2 = true;

    if(!empty($description) && !empty($street) && !empty($city) && !empty($postalcode) && !empty($question)){
        $validdesc = $validstreet = $validcity = $validpostal = $validquestion = true;
    }

    if {
        if(!$validname) $_SESSION["errorname"] = "*invalid name format"; 
        if(!$validname2) $_SESSION["errorname2"] = "*invalid name format";    
        if(!$validdesc) $_SESSION["errordescription"] = "*description could not be empty"; 
        if(!$validstreet) $_SESSION["errorstreet"] = "*street could not be empty"; 
        if(!$validcity) $_SESSION["errorcity"] = "*city could not be empty";
        if(!$validpostal) $_SESSION["errorpostal"] = "*postal code could not be empty";  
        if(!$validquestion) $_SESSION["errorquestion"] = "*please fill your question";
    }
}
?>
