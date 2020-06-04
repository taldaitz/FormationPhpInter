<?php

class Livre {

    public $id;
    public $titre;
    public $auteur;
    public $nbPages;


    public function sauvegarder() {
        $db = new PDO('mysql:host=localhost;dbname=security;charset=utf8', 'root', '');

        $requete = "INSERT INTO `livre`(`titre`, `auteur`, `nbPages`) 
                VALUES (:titre, :auteur, :nbPages)";

        
        $stmt = $db->prepare($requete);
        $stmt->bindValue(':titre', $this->titre, PDO::PARAM_STR);
        $stmt->bindValue(':auteur', $this->auteur, PDO::PARAM_STR);
        $stmt->bindValue(':nbPages', $this->nbPages, PDO::PARAM_INT);
        $stmt->execute();
    }


    public static function getById(int $id) : Livre {

        $sql = "SELECT * FROM `livre` WHERE id = :id";
        $db = new PDO('mysql:host=localhost;dbname=security;charset=utf8', 'root', '');

        $stmt = $db->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        /*
        Fetch traditionel
        $resultat = $stmt->fetch();

        $livre = new Livre();
        $livre->id = $resultat['id'];
        $livre->titre = $resultat['titre'];
        $livre->auteur = $resultat['auteur'];
        $livre->nbPages = $resultat['nbPages'];*/


        //Fetch par classe
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Livre');
        $livre = $stmt->fetch();


        return $livre;
    }

    public function __toString()
    {
        return $this->titre . ' par '. $this->auteur; 
    }

}


$book = Livre::getById(2);
echo $book;



$i = 5;
$y = 2;

$num = $i / $y;

echo $num;


