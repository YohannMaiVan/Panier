<?php
session_start();
require '../model/model.php';

if (isset($_POST["login"]))
{
  //appeler la fonction qui verifie si mail et mdp sont bien remplis
  $userConnected = login($_POST["mail"], $_POST["password"]);
// la fonction renvoie un chiffre considéré comme true si ils sont bien remplis et on passe dans le if
  if ($userConnected)
  {
    // il faut co l'utilisateur:
    $_SESSION["user_id"] = $userConnected;
    header('location: ../index.php');

  }
  else
  {

    // il faut s'assurer qu'il n'y a pas de session: détruire troutes variables de sessions et fermer la session
    unset($_SESSION);
    session_destroy();
    // et on redirige vers la page d'accueil pour afficher à nouveau le form de conexxion
    header('location: ../index.php');
  }
}

 ?>
