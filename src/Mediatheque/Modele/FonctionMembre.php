<?php
  function GetListMembre()
  {
    include('../Constante/ConnexionBDD.php');
    $req = "SELECT * FROM utilisateur WHERE TYPE_USER ='m' ORDER BY NOM, PRENOM";
    $result = $mysqli->query($req);
    return $result;
  }

  function GetListReservationSansRetour($idMembre)
  {
    include('../Constante/ConnexionBDD.php');
    $req = "SELECT * FROM reservation RE,ressource RO
            WHERE RE.ID_RESSOURCE = RO.ID_RESSOURCE
            AND RE.DATE_RETOUR IS NULL
            AND RE.ID_MEMBRE = '".$idMembre."'
            ORDER BY RE.DATE_RESERV";
    $result = $mysqli->query($req);
    return $result;
  }

  function GetListReservationAvecRetour($idMembre)
  {
    include('../Constante/ConnexionBDD.php');
    $req = "SELECT * FROM reservation RE,ressource RO
            WHERE RE.ID_RESSOURCE = RO.ID_RESSOURCE
            AND RE.DATE_RETOUR IS NOT NULL
            AND RE.ID_MEMBRE = '".$idMembre."'
            ORDER BY RE.DATE_RESERV";
    $result = $mysqli->query($req);
    return $result;
  }

  function InscriptionMembre($id,$nom,$prenom,$mail,$mdp,$solde)
  {
    include('../Constante/ConnexionBDD.php');
    $req ="INSERT INTO utilisateur VALUES('".$id."','".$nom."','".$prenom."','".$mail."','".sha1($mdp)."','m',".$solde.",0) ";
    $result = $mysqli->query($req);
  }

  function CreationRetour($idReserv)
  {
    include('../Constante/ConnexionBDD.php');
    $req1 = "SELECT * FROM utilisateur U, reservation RE,ressource RO WHERE RE.ID_RESSOURCE = RO.ID_RESSOURCE AND U.IDENTIFIANT = RE.ID_MEMBRE AND RE.ID_RESERV = ".$idReserv." ORDER BY RE.DATE_RESERV";
    $result = $mysqli->query($req1);

    $ligne = mysqli_fetch_array($result);
    $nbJoursTimestamp = date('Y-m-d') - $ligne['DATE_RESERV'];
    if($nbJoursTimestamp > $ligne['NBR_JOUR_RETOUR'])
    {
      $nbJourRetard = $nbJoursTimestamp - $ligne['NBR_JOUR_RETOUR'];
      if($nbJourRetard < $ligne['CAUTION'])
      {
        AjoutSolde($ligne['CAUTION']-2,$ligne['ID_MEMBRE']);
      }
    }
    else {
      AjoutSolde($ligne['CAUTION'],$ligne['ID_MEMBRE']);
    }
    $req2 ="UPDATE Reservation SET DATE_RETOUR ='".date('Y-m-d')."' WHERE ID_RESERV ='".$idReserv."'";
    $mysqli->query($req2);

  }

  function AjoutSolde($soldeAjoute,$idMembre)
  {
    include('../Constante/ConnexionBDD.php');

    $req1 = "Select SOLDE from utilisateur where IDENTIFIANT ='".$idMembre."'";
    $result = $mysqli->query($req1);
    $ligne = mysqli_fetch_array($result);
    //echo $req1;
    $nouveauSolde = $soldeAjoute + $ligne['SOLDE'];
    $req2 ="UPDATE utilisateur SET SOLDE=".$nouveauSolde." WHERE IDENTIFIANT ='".$idMembre."'";
    $mysqli->query($req2);
  }

  function RendreDefaillant($id)
  {
    include('../Constante/ConnexionBDD.php');
    $req ="UPDATE utilisateur SET DEFAILLANT=1 WHERE IDENTIFIANT ='".$id."'";
    $result = $mysqli->query($req);
  }

  function RendreNonDefaillant($id)
  {
    include('../Constante/ConnexionBDD.php');
    $req ="UPDATE utilisateur SET DEFAILLANT=0 WHERE IDENTIFIANT ='".$id."'";
    $mysqli->query($req);
  }
?>
