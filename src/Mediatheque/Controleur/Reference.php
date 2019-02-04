<?php session_start();
  include('../Modele/FonctionRessource.php');
  if((isset($_SESSION['typeProfil']))){ //déja connecté
    if($_SESSION['typeProfil']=='g'){
      if(GetNbrExemp($_GET['idRessource']) != 0){
        Reference($_GET['idRessource']);
        echo "<script>alert('La ressource a bien été référencé.'); history.back();</script>";
      }
      else {
        echo "<script>alert('La ressource ne possède pas d'exemplaire.'); history.back();</script>";
      }

    }
  }
?>
