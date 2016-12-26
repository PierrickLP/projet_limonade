<?php

	require_once('lib/limonade.php');
    require_once('parameters.php');
    foreach (glob("model/*.php") as $filename)
    {
        require_once($filename);
    }

    $path = '../appli_documents_rentree';

	dispatch('/','accueil');

    dispatch('/promo','promo_choix');
    dispatch_post('/promo','promo_add');
	dispatch_put('/promo','promo_edit');
    dispatch_delete('/promo','promo_delete');

    dispatch('/get/promo','get_promo');


    dispatch('/fichier','fichier_choix');
    dispatch_post('/fichier','fichier_add');
    dispatch_put('/fichier','fichier_edit');
    dispatch_delete('/fichier','fichier_delete');

    dispatch('/get/fichier','get_fichier');

	run();