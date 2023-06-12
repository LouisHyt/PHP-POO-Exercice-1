<h1>Exercice 1</h1>
<p>Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des livres et 
leurs auteurs respectifs.
Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un 
auteur. Un auteur comporte un nom et un prénom.
Une méthode toString() sera appréciée dans chacune de vos classes.
Vous implémenterez une méthode afficherBibliographie() qui permettra d’afficher la bibliographie 
complète d'un auteur </p>



<?php

spl_autoload_register(function ($class) {
    require_once  $class . '.php';
});


$baudelaire = new Auteur("Baudelaire", "Charles", 1821);

$fleurs_du_mal = new Livre("Les fleurs du mal", 304, 1857, 15, $baudelaire);
$albatros = new Livre("L'albatros", 272, 1859, 13.99,$baudelaire);
$spleen = new Livre("Le Spleen de Paris", 89, 1869, 8.45,$baudelaire);



echo($baudelaire);
echo($baudelaire->afficherBibliographie());
echo($fleurs_du_mal);



?>