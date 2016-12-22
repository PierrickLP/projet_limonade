<?php


class Fichier{

    private static $table = 'document';

    public function __construct() {
    }

    public static function getAll() { return Connection::connection()->query('SELECT * FROM `'.Fichier::$table.'`'); }
    public static function getById($id) { return Connection::connection()->query('SELECT * FROM `'.Fichier::$table.'` WHERE id = ?',$id); }
    public static function deleteById($id) { Connection::connection()->query('DELETE FROM `'.Fichier::$table.'` WHERE id = ?',$id);}

    public static function add($rang, $promo, $libelle, $fichier){
        Connection::connection()->query('INSERT INTO `'.Fichier::$table.'`(id, rang, promo, libelle, fichier) VALUES(?,?,?,?,?)',NULL,$rang, $promo, $libelle, $fichier);
    }

    public static function update($id, $rang, $promo, $libelle, $fichier){
        Connection::connection()->query('UPDATE `'.Fichier::$table.'` SET rang = ?, promo = ?, libelle = ?, fichier = ? WHERE id = ?',$rang, $promo, $libelle, $fichier, $id);
    }
}