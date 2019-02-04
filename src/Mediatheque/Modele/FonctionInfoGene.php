<?php
  function GetListInfoGene()
  {
    include('../Constante/ConnexionBDD.php');
    $req = "SELECT * FROM info_gene ORDER BY DATE_PUBLI DESC";
    $result = $mysqli->query($req);
    return $result;
  }
  function SuppressionInfoGene($idInfoGene)
  {
    include('../Constante/ConnexionBDD.php');
    $req ="DELETE FROM info_gene WHERE ID_INFOGENE = ".$idInfoGene;
    $mysqli->query($req);
  }


  function NouvelleInfoGene($titre,$texte,$idGest)
  {
    include('../Constante/ConnexionBDD.php');
    $dateJour = date('Y-m-d');
    $req ="INSERT INTO info_gene VALUES(NULL,'".$dateJour."','".$titre."','".$texte."','".$idGest."') ";
    $result = $mysqli->query($req);
  }
?>
