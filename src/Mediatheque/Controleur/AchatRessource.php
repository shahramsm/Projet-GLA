<?php session_start();
  include('../Modele/FonctionRessource.php');
  if((isset($_SESSION['typeProfil']))){ //déja connecté
    if($_SESSION['typeProfil']=='g'){
      AchatRessource($_POST['achat'],$_GET['idRessource']);
      echo "<script>alert('Le nombre d'exemplaire a bien été incrémenté de ".$_POST['achat'].".'); history.back();</script>";
    }
  }
  header('Location:Ressource.php');
?>
