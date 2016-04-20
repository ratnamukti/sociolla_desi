<?php 

if(isset($_POST["name"]) || isset($_POST["description"]) || isset($_POST["street"]) || isset($_POST["city"]) || isset($_POST["province"]) || isset($_POST["postalcode"]) ) {

	http_response_code(200);
    echo "name: ". $_POST['name']. "<br>";
    echo "description: ". $_POST['description']. "<br>";
    echo "street: ". $_POST['street']. "<br>";
    echo "city: ". $_POST['city']. "<br>";
    echo "province: ". $_POST['province-y']. "<br>";
    echo "postalcode: ". $_POST['postalcode']. "<br>";

    exit();
   }


if(isset($_POST["division"]) || isset($_POST["askname"]) || isset($_POST["question"]))  {
	http_response_code(200);
	echo "division: ". $_POST['division-x']. "<br>";
	echo "name: ". $_POST['askname']. "<br>";
    echo "question: ". $_POST['question']. "<br>";
}

?>
