<?php

    function fichier_choix(){

        return html('fichier.php','layout/layout.php');

    }

    function get_fichier(){
        return json_encode(Fichier::getAll());
    }


    function fichier_add(){
        $file_prefix = '';
        $promo = $_POST['promo'];
        if (strpos($promo, 'A1') !== false || strpos($promo, 'A2') !== false){
            $file_prefix .= 'A12/';
        }else if (strpos($promo, 'A3') !== false || strpos($promo, 'A4') !== false || strpos($promo, 'A5') !== false){
            $file_prefix .= 'A345/';
        }
        move_uploaded_file($_FILES['file']['tmp_name'],path.$file_prefix.$_FILES['file']['name']);
        Fichier::add($_POST['rang'], $promo, $_POST['libelle_fichier'], $file_prefix.$_FILES['file']['name']);
    }

    function fichier_delete(){
        if (Fichier::countFileNumberById($_POST['id'])[0]['count'] == 1){
            unlink(realpath(path.Fichier::getById($_POST['id'])[0]['fichier']));
        }
        Fichier::deleteById($_POST['id']);
    }

    function fichier_edit(){
        $file_prefix = '';
        $promo = $_POST['promo'];
        if (strpos($promo, 'A1') !== false || strpos($promo, 'A2') !== false){
            $file_prefix .= 'A12/';
        }else if (strpos($promo, 'A3') !== false || strpos($promo, 'A4') !== false || strpos($promo, 'A5') !== false){
            $file_prefix .= 'A345/';
        }
        if (strcmp($file_prefix.$_FILES['file']['name'],Fichier::getById($_POST['id'])[0]['fichier']) != 0){
            if (Fichier::countFileNumberById($_POST['id'])[0]['count'] == 1){
                unlink(realpath(path.Fichier::getById($_POST['id'])[0]['fichier']));
            }
        }
        move_uploaded_file($_FILES['file']['tmp_name'],path.$file_prefix.$_FILES['file']['name']);
        Fichier::update($_POST['id'], $_POST['rang'], $_POST['promo'], $_POST['libelle_fichier'], $file_prefix.$_FILES['file']['name']);
    }