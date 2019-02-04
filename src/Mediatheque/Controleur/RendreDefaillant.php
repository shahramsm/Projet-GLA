<?php session_start();
  include('../Modele/IncludeFonction.php');
  if((isset($_SESSION['typeProfil']))){ //déja connecté
    if($_SESSION['typeProfil']=='g'){
      RendreDefaillant($_GET['id']);
      echo "<script>alert('Le membre est devenu défaillant.'); history.back();</script>";
    }
  }
?>
