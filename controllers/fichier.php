<?php

    function fichier_choix(){
        return html('fichier.php','layout/layout.php');
    }

    function get_fichier(){
        return json_encode(Fichier::getAll());
    }

    function fichier_add(){
        Fichier::add();
    }

    function fichier_delete(){
        Fichier::deleteById($_POST['id']);
    }

    function fichier_edit(){
        Fichier::update($_POST['id']);
    }