<?php session_start();
  include('../Modele/FonctionInfoGene.php');
  if((isset($_SESSION['typeProfil']))){ //déja connecté
    if($_SESSION['typeProfil']=='g'){
      NouvelleInfoGene($_POST['TITRE'],$_POST['TEXTE'],$_SESSION['identifiant']);
      echo "<script>alert('La news a bien été créer.'); history.back();</script>";
    }
  }
?>
