<?php session_start();
  include('../Modele/IncludeFonction.php');
  if((isset($_SESSION['typeProfil']))){ //déja connecté
    if($_SESSION['typeProfil']=='g'){
      CreationRetour($_GET['idReserv']);
      echo "<script>alert('La retour a bien été pris en charge.'); history.back();</script>";
    }
  }
?>
