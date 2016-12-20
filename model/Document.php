<?php


class Document{

    private static $table = 'document';

    public function __construct() {
    }

    public static function getAll() { return Connection::connection()->query('SELECT * FROM `'.Document::$table.'`'); }
    public static function getById($id) { return Connection::connection()->query('SELECT * FROM `'.Document::$table.'` WHERE id = ?',$id); }
    public static function deleteById($id) { Connection::connection()->query('DELETE FROM `'.Document::$table.'` WHERE id = ?',$id);}

    public static function add($rang, $promo, $libelle, $fichier){
        Connection::connection()->query('INSERT INTO `'.Document::$table.'`(id, rang, promo, libelle, fichier) VALUES(?,?,?,?,?)',NULL,$rang, $promo, $libelle, $fichier);
    }

    public static function update($id, $rang, $promo, $libelle, $fichier){
        Connection::connection()->query('UPDATE `'.Document::$table.'` SET rang = ?, promo = ?, libelle = ?, fichier = ? WHERE id = ?',$rang, $promo, $libelle, $fichier, $id);
    }
}
