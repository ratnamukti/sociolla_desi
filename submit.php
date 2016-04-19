<?php 

if(isset($_POST["name"]) || isset($_POST["description"])) {

	http_response_code(200);
    echo "name: ". $_POST['name']. "<br>";
    echo "description: ". $_POST['description'];
      exit();
   }


?>
