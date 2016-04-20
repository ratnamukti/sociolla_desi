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


    if($validusername && $validemail && $validpassword){
        //$db = pg_connect("host=ipin.cs.ui.ac.id dbname=ppw user=ppw password=ppw123");
        $db = mysqli_connect("localhost", "root", "", "ppw") or die("Could not connect");

        $query = pg_query($db, "SET search_path TO '1306397904';INSERT INTO users values ('".$username."', '".$email."','".md5($password)."');");
        //mysqli_query($db, $query);
        header("location: login.php");
    } else {
        if(!$validname) $_SESSION["errorname"] = "*invalid name format"; 
        if(!$validname2) $_SESSION["errorname2"] = "*invalid name format";    
        if(!$validdesc) $_SESSION["errordescription"] = "*description could not be empty"; 
        if(!$validstreet) $_SESSION["errorstreet"] = "*description could not be empty"; 
        if(!$validpassword) $_SESSION["errorpassword"] = "*password did not match";
        
        header("Location: register.php");
    }
}
?>
