<?php session_start();
  include('../Modele/FonctionInfoGene.php');
  if((isset($_SESSION['typeProfil']))){ //déja connecté
    if($_SESSION['typeProfil']=='g'){
      SuppressionInfoGene($_GET['idInfoGene']);
      echo "<script>alert('La news a bien été supprimés.'); history.back();</script>";
    }
  }
?>
