<?php
  function Connexion($id,$mdp)
  {
    include('../Constante/ConnexionBDD.php');
    $req = "SELECT * FROM utilisateur WHERE IDENTIFIANT ='".$id."'
            AND MDP ='".sha1($mdp)."' AND DEFAILLANT = 0";
    $result = $mysqli->query($req);
    $nbrRow = $result->num_rows;
    $result->close();
    if($nbrRow == 1)
      return true;
    else
      return false;
  }

  function ExisteId($idUtilisateur)
  {
    include('../Constante/ConnexionBDD.php');
    $req = "SELECT * FROM utilisateur WHERE IDENTIFIANT ='".$idUtilisateur."'";
    $result = $mysqli->query($req);
    $nbrRow = $result->num_rows;
    $result->close();
    if($nbrRow == 1)
      return true;
    else
      return false;
  }

  function GetInfoTypeUtilisateur($id)
  {
    include('../Constante/ConnexionBDD.php');
    $req = "SELECT TYPE_USER FROM utilisateur WHERE IDENTIFIANT ='".$id."'";
    $result = $mysqli->query($req);
    echo $req;
    return mysqli_fetch_array($result);
  }

  function GetInfoMembre($user)
  {
    include('../Constante/ConnexionBDD.php');
    $req = "SELECT * FROM utilisateur WHERE IDENTIFIANT ='".$user."'";
    $result = $mysqli->query($req);
    return mysqli_fetch_array($result);
  }
?>
