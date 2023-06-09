<h1>Exercice 1</h1>
<p>Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des livres et 
leurs auteurs respectifs.
Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un 
auteur. Un auteur comporte un nom et un prénom.
Une méthode toString() sera appréciée dans chacune de vos classes.
Vous implémenterez une méthode afficherBibliographie() qui permettra d’afficher la bibliographie 
complète d'un auteur </p>



<?php

require_once("Livre.php");

$fdm = new Livre("Les fleurs du mal", 304, 1857, 15,'Baudelaire');
echo($fdm);

?>