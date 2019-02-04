<?php session_start();
  include('../Modele/FonctionRessource.php');
  if((isset($_SESSION['typeProfil']))){ //déja connecté
    if($_SESSION['typeProfil']=='g'){
      CreationPerte($_GET['idReserv'],$_POST['typePerte']);
      echo "<script>alert('La perte a bien été créée.'); history.back();</script>";
    }
  }
?>
