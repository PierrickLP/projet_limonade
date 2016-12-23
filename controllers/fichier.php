<?php

    function fichier_choix(){

        return html('fichier.php','layout/layout.php');

    }

    function get_fichier(){
        return json_encode(Fichier::getAll());
    }


    function fichier_add(){
        move_uploaded_file($_FILES['file']['tmp_name'],$_FILES['file']['name']);
        //Fichier::add($_POST['rang'], $_POST['promo'], $_POST['libelle_fichier'], );
    }

    function fichier_delete(){
        Fichier::deleteById($_POST['id']);
    }

    function fichier_edit(){
        //Fichier::update($_POST['id'], $_POST['rang'], $_POST['promo'], $_POST['libelle_fichier'], );
    }