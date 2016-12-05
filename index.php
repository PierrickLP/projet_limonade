<?php

	require_once('lib/limonade.php');

	dispatch('/','accueil');
    dispatch('/promo','promo_choix');
    dispatch_post('/promo','promo_ajout');
	dispatch_put('/promo','promo_modif');
    dispatch_delete('/promo','promo_delete');
    dispatch('/fichier','fichier_choix');
    dispatch_post('/fichier','fichier_ajout');
    dispatch_put('/fichier','fichier_modif');
    dispatch_delete('/fichier','fichier_delete');

	run();