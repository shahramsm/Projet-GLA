<?php
  function GetMembre($idM)
  {
    include('../Constante/ConnexionBDD.php');
    $req = "SELECT * FROM utilisateur WHERE IDENTIFIANT='".$idM."'";
    $result = $mysqli->query($req);
    return $result;
  }
?>
