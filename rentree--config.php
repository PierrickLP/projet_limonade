<?php

  $titre = "Documents de rentrée";
  $annee = "2016";
  
  // mot de passe diffusé aux parents
  $cle1 = "isen1617";
  // pour garder si besoin le mot de passe de l'année dernière
  $cle2 = "isen2016";
    
  // informations concernant la base de données
  $DbHost = "127.0.0.1";
  $DbName = "doc_rentree";
  $DbUser = "cir32016";
  $DbPassword = "cir32016"; 
  
  
  $DbLink = mysql_connect($DbHost, $DbUser, $DbPassword) or die('erreur de connexion au serveur');
  mysql_select_db($DbName) or die('erreur de connexion a la base de donnees');
  mysql_query("SET NAMES 'utf8'");
  $query = "SELECT libelle, code_promo FROM promo";
  $result = mysql_query($query);
  $libellePromo = array();
  while($data = mysql_fetch_array($result)){
	  $libellePromo[$data['libelle']]=$data['code_promo'];
  }
  
  require_once("lib.php");
  
?>
