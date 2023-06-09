<?php


    class Auteur{

        private string $_nom;
        private int $_naissance;
        private array $_livres = [];

        public function __construct($nom, $naissance){
            $this->_nom = $nom;
            $this->_naissance = $naissance;
        }

        //Getters
        public function getNom(){
            return $this->_nom;
        }

        public function getNaissance(){
            return $this->_naissance;
        }

        public function getlivres(){
            return $this->_livres;
        }

        //Setters
        public function setNom(){
            $this->_nom = $nom;
        }

        public function setNaissance(){
            $this->_naissance = $naissance;
        }

        public function setLivres($livre){
            foreach ($livre as $livreItem) {
                if(!in_array($livreItem, $this->_livres, TRUE)){
                    array_push($this->_livres, $livreItem);
                }
            }
        }

        public function afficherBibliographie(){
            $data = "";
            foreach ($this->_livres as $livre) {
                $data .= $livre->getTitre()." : " .$livre->getPages(). " pages / ".  $livre->getPrix(). " € <br />";
            }

            return "
                <strong>Livres de $this->_nom :</strong><br />
                $data
            ";
        }



        public function __toString(){
            return "";
        }

    }




?>