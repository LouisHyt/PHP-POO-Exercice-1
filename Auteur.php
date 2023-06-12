<?php


    class Auteur{

        private string $_nom;
        private string $_prenom;
        private int $_naissance;
        private array $_livres = [];

        public function __construct($nom, $prenom, $naissance){
            $this->_nom = $nom;
            $this->_prenom = $prenom;
            $this->_naissance = $naissance;
        }

        //Getters
        public function getNom(){
            return $this->_nom;
        }

        public function getPrenom(){
            return $this->_prenom;
        }

        public function getNaissance(){
            return $this->_naissance;
        }

        public function getlivres(){
            return $this->_livres;
        }

        //Setters
        public function setNom($nom){
            $this->_nom = $nom;
        }

        public function setPrenom(){
            $this->_prenom = $prenom;
        }

        public function setNaissance(){
            $this->_naissance = $naissance;
        }

        public function addLivre($livre){
                    array_push($this->_livres, $livre);
                
            
        }

        public function afficherBibliographie(){
            $data = "";
            foreach ($this->_livres as $livre) {
                $data .= $livre->getTitre()." : " .$livre->getPages(). " pages / ".  $livre->getPrix(). " € <br />";
            }

            $data .= "<br />";

            return "
                <strong>----- Livres de $this->_prenom $this->_nom -----</strong><br />
                $data
            ";
        }



        public function __toString(){

            $livresRaw = array_map(function($o){
                return $o->getTitre();
            }, $this->_livres);

            $livres = implode(", ", $livresRaw);

            return "
                <strong>----- Informations sur $this->_prenom $this->_nom -----</strong><br />
                Année de naissance : $this->_naissance <br />
                Livres répertoriés: $livres <br /><br />
            ";
        }

    }




?>