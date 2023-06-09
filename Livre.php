<?php

class Livre {

    private string $titre;
    private float $prix;
    private int $pages, $sortie;
    private object $auteur;

    //Constructeur
    public function __construct($titre, $pages, $sortie, $prix, $auteur){
        $this->titre = $titre;
        $this->pages = $pages;
        $this->sortie = $sortie;
        $this->prix = $prix;
        $this->auteur = $auteur;
    }

    //Getters
    public function getTitre(){
        return $this->titre;
    }

    public function getPages(){
        return $this->pages;
    }

    public function getSortie(){
        return $this->sortie;
    }

    public function getPrix(){
        return $this->prix;
    }

    public function getAuteur(){
        return $this->auteur;
    }

    //Setters
    public function setTitre($titre){
        $this->titre = $titre;
    }

    public function setPages($page){
        $this->pages = $pages;
    }

    public function setSortie($sortie){
        $this->sortie = $sortie;
    }

    public function setPrix($prix){
        $this->prix = $prix;
    }

    public function setAuteur($auteur){
        $this->auteur = $auteur;
    }
        

    
    //Retour des caractères
    public function __toString(){

        return "
            <strong>Informations du livre \"$this->titre\" :</strong><br />
            Nombre de pages: $this->pages <br />
            Année de parution: $this->sortie <br />
            Prix: $this->prix €<br />
            Auteur: $this->auteur <br />
        
        ";
    }

}



?>