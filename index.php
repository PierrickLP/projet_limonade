<?php

	require_once('lib/limonade.php');
	require_once('controllers/promo/promo.php');
	require_once('controllers/fichier/fichier.php');

	layout('views/layout.php');

	dispatch('/','accueil');
	dispatch('/promo','promo_choix');
	// dispatch('/promo/ajout','promo_ajout');
	// dispatch('/promo/modif','promo_modif');
	// dispatch('/fichier','fichier_choix');
	// dispatch('/fichier/ajout','fichier_ajout');
	// dispatch('/fichier/modif','fichier_modif');

	function accueil(){
		require_once('/controllers/accueil.php');
	}

	run();