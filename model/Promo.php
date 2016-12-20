<?php


class Promo{

    public function __construct() {
    }

    public static function getAll() { return Connection::connection()->query('SELECT * FROM promo')->fetch_object(); }
    public static function getById($id) { return Connection::connection()->query('SELECT * FROM promo WHERE id = ?',$id)->fetch_object(); }
    public static function deleteById($id) { Connection::connection()->query('DELETE FROM promo WHERE id = ?',$id);}

    public static function add($rang, $promo, $libelle, $fichier){
        Connection::connection()->query('INSERT INTO promo(id, rang, promo, libelle, fichier) VALUES(?,?,?,?,?)',NULL,$rang, $promo, $libelle, $fichier);
    }

    public static function update($id, $rang, $promo, $libelle, $fichier){
        Connection::connection()->query('UPDATE promo SET rang = ?, promo = ?, libelle = ?, fichier = ? WHERE id = ?',$rang, $promo, $libelle, $fichier,$id);
    }
}
