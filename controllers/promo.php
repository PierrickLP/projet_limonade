<?php

	function promo_choix(){
        return html('promo.php','layout/layout.php');
    }

    function get_promo(){
        return json_encode(Promo::getAll());
    }

    function promo_add(){
        Promo::add($_POST['code_promo'],$_POST['libelle']);
    }

    function promo_delete(){
        Promo::deleteById($_POST['id']);
    }

    function promo_edit(){
        Promo::update($_POST['id'],$_POST['code_promo'],$_POST['libelle']);
    }