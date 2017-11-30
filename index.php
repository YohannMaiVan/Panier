<?php
session_start();
//index le controleur fait appel au model créer des variables et les passer a view qui soccupe de les afficher
require "model/model.php";

//if (isset($_SESSION["user_id"])){

  $produits = listeProduits();

  if (isset($_POST["ajouter_panier"])){
    ajouterPanier(1, $_POST['article_id']);
    //Quand l'user clique sur ajouter au panier, php crée le tableau $POST cf panier.html.php
  }
  require "view/produits.html.php";

/*  else {
    require "view/login.html.php";
  }
*/
 ?>
