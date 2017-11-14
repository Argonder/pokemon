<?php

// Entête HTML ce require permet de charger toutes les balises d'en-tête de la page HTML
require_once('header.php');

// Fonctions de bases
require_once('../resources/function.php');

// Affichage du lien d'insertion
echo '<a href="insert.php" class="btn btn-primary">Ajouter un pokemon</a>';

// Affichage de la liste des pokemon
affichePokemon();

require_once('footer.php');
