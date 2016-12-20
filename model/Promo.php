<?php


class Promo{

    private static $table = 'promo';

    public function __construct() {
    }

    public static function getAll() { return Connection::connection()->query('SELECT * FROM `'.Promo::$table.'`'); }
    public static function getById($id) { return Connection::connection()->query('SELECT * FROM `'.Promo::$table.'` WHERE id = ?',$id); }
    public static function deleteById($id) { Connection::connection()->query('DELETE FROM `'.Promo::$table.'` WHERE id = ?',$id);}

    public static function add($code_promo, $libelle){
        Connection::connection()->query('INSERT INTO `'.Promo::$table.'`(id, code_promo, libelle) VALUES(?,?,?)',NULL,$code_promo, $libelle);
    }

    public static function update($id, $code_promo, $libelle){
        Connection::connection()->query('UPDATE `'.Promo::$table.'` SET code_promo = ?, libelle = ? WHERE id = ?',$code_promo, $libelle, $id);
    }
}
