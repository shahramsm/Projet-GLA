<?php session_start();
  include('../Modele/FonctionMembre.php');
  if((isset($_SESSION['typeProfil']))){ //déja connecté
    if($_SESSION['typeProfil']=='g'){
      AjoutSolde($_POST['solde'],$_GET['idMembre']);
      echo "<script>alert('Le solde a bien été incrémenté de ".$_POST['solde']." euros.'); history.back();</script>";
    }
  }
?>
