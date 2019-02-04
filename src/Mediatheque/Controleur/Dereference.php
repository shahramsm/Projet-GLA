<?php session_start();
  include('../Modele/FonctionRessource.php');
  if((isset($_SESSION['typeProfil']))){ //déja connecté
    if($_SESSION['typeProfil']=='g'){
      Dereference($_GET['idRessource']);
      echo "<script>alert('La ressource a bien été déréférencé.'); history.back();</script>";
    }
  }
?>
