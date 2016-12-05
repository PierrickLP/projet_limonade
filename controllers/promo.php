<?php

	function promo_choix(){

        require_once("db_connect.php");

        // Create connection
        $conn = new mysqli($servername, $username, $password, $db_name);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";

        if($stmt = $conn->prepare("SELECT code_promo, libelle FROM promo")){
            $stmt->execute();
            $stmt->bind_result($code_promo, $libelle);
            while($stmt->fetch()){
                printf("%s je teste %s/n", $code_promo, $libelle);
            }
            $stmt->close();
        }
        $mysqli->close();
        return html('promo.php','layout/layout.php');
    }

	// function promo_ajout(){
		// require_once('/controllers/promo/promo_ajout.php');
	// }

	// function promo_modif(){
		// require_once('/controllers/promo/promo_modif.php');
	// }