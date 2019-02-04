<?php
  session_start();
  include('../Modele/IncludeFonction.php');

  if(Connexion($_POST['id'],$_POST['mdp']))
  {
    $_SESSION['identifiant']=$_POST['id'];
    $data = GetInfoTypeUtilisateur($_POST['id']);
    $_SESSION['typeProfil'] = $data['TYPE_USER'];
    if($_SESSION['typeProfil']=="m")
    {
      $result = GetInfoMembre($_POST['id']);
      $_SESSION['SOLDE'] = $result['SOLDE'];
    }
    header('Location:home.php');
  }
  else
  {
  	echo "<script>alert('Le nom de compte ou le mot de passe est incorrecte'); history.back();</script>";
  }

?>
