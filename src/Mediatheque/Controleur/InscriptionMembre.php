<?php session_start();
  include('../Modele/FonctionMembre.php');
  include('../Modele/FonctionGeneral.php');
  if((isset($_SESSION['typeProfil']))){ //déja connecté
    if($_SESSION['typeProfil']=='g'){
      if(!ExisteId($_POST['ID'])){
          if($_POST['MDP'] == $_POST['MDPCONF']){
              InscriptionMembre($_POST['ID'],$_POST['NOM'],$_POST['PRENOM'],$_POST['MAIL'],$_POST['MDP'],$_POST['SOLDE']);
              echo "<script>alert('Le membre a bien été inscrit.'); history.back();</script>";
          }
          else {
            echo "<script>alert('Les 2 mots de passes sont différents.'); history.back();</script>";
          }

      }
      else {
        	echo "<script>alert('Le nom de compte est déjà utilisé.'); history.back();</script>";
      }
    }
  }
?>
