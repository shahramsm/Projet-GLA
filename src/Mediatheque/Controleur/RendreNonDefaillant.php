<?php
  session_start();
  include('../Modele/IncludeFonction.php');
  if((isset($_SESSION['typeProfil']))){ //déja connecté
    if($_SESSION['typeProfil']=='g'){

      RendreNonDefaillant($_GET['id']);
      echo "<script>alert('Vous venez de rendre non défaillant l'utilisateur".$_GET['id']."');</script>";
      header('Location:Membre.php');
    }
  }

?>
