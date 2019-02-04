<?php

  function GetListRessource()
  {
    include('../Constante/ConnexionBDD.php');
    $req = "SELECT * FROM ressource ORDER BY NOM, AUTEUR";
    $result = $mysqli->query($req);
    return $result;
  }

  function GetNbrReserv($idRessource)
  {
    include('../Constante/ConnexionBDD.php');
    $req = "SELECT count(*) as NbrReserv FROM reservation
            WHERE ID_RESSOURCE = ".$idRessource." AND DATE_RETOUR IS NULL";
    $result = $mysqli->query($req);
    $ligne = mysqli_fetch_array($result);
    return $ligne['NbrReserv'];
  }

  function GetNbrExemp($idRessource)
  {
    include('../Constante/ConnexionBDD.php');
    $req = "SELECT NBR_EXEMP FROM ressource
            WHERE ID_RESSOURCE = ".$idRessource;
    $result = $mysqli->query($req);
    $ligne = mysqli_fetch_array($result);
    return $ligne['NBR_EXEMP'];
  }

  function NouvelleRessource($NOM,$AUTEUR,$ANNEEPUBLI,$TYPE,$NBREXEMP,
                            $CAUTION,$DELAI,$NIVEAU,$ETAGERE)
  {
    include('../Constante/ConnexionBDD.php');

    switch ($TYPE) {
    case 'L':
        $typeRess="Livre";
        break;
    case 'D':
        $typeRess="DVD";
        break;
    case 'R':
        $typeRess="Revue";
        break;
    }

    $req ="INSERT INTO ressource VALUES(NULL,".$NBREXEMP.",".$CAUTION.",".$DELAI.",
                                        0,'".$typeRess."','".$NOM."','".$AUTEUR."',
                                        ".$ANNEEPUBLI.",".$NIVEAU.",".$ETAGERE.") ";
    $result = $mysqli->query($req);
  }

  function AchatRessource($NbrAchat,$idRessource)
  {
    include('../Constante/ConnexionBDD.php');

    $req1 = "Select NBR_EXEMP from ressource
             WHERE ID_RESSOURCE =".$idRessource;
    $result = $mysqli->query($req1);
    $ligne = mysqli_fetch_array($result);
    //echo $req1;
    $nouveauNbrExemp = $NbrAchat + $ligne['NBR_EXEMP'];
    $req2 ="UPDATE ressource SET NBR_EXEMP=".$nouveauNbrExemp."
            WHERE ID_RESSOURCE =".$idRessource;
    $mysqli->query($req2);
    echo $req2;
  }

  function CreationPerte($idReserv,$typePerte)
  {
    include('../Constante/ConnexionBDD.php');
    $req1 = "SELECT * FROM utilisateur U, reservation RE,ressource RO WHERE RE.ID_RESSOURCE = RO.ID_RESSOURCE AND U.IDENTIFIANT = RE.ID_MEMBRE AND RE.ID_RESERV = ".$idReserv." ORDER BY RE.DATE_RESERV";
    $result = $mysqli->query($req1);

    $ligne = mysqli_fetch_array($result);
    $nbJoursTimestamp = date('Y-m-d') - $ligne['DATE_RESERV'];

    $req2 ="UPDATE Reservation SET DATE_RETOUR ='".date('Y-m-d')."' WHERE ID_RESERV ='".$idReserv."'";
    $mysqli->query($req2);
    switch ($typePerte) {
    case 'NAT':
        $perte="Perte naturelle";
        break;
    case 'DEG':
        $perte="Dégradation Apparente";
        break;
    case 'VOL':
        $perte="VOL";
        break;
    }

    $req3 ="INSERT INTO Perte VALUES(NULL,".$ligne['ID_RESSOURCE'].",'".$perte."','".date('Y-m-d')."') ";
    $mysqli->query($req3);

    PerteRessource($ligne['ID_RESSOURCE']);

  }

  function PerteRessource($idRess)
  {
    include('../Constante/ConnexionBDD.php');
    $req1 = "Select NBR_EXEMP from ressource where ID_RESSOURCE =".$idRess;
    $result = $mysqli->query($req1);
    $ligne = mysqli_fetch_array($result);

    $nouveauNbr = $ligne['NBR_EXEMP']-1;
    $req2 ="UPDATE ressource SET NBR_EXEMP=".$nouveauNbr." WHERE ID_RESSOURCE =".$idRess;
    $mysqli->query($req2);

    if($nouveauNbr==0){
      Dereference($idRess);
    }

  }

  function Dereference($idRessource)
  {
    include('../Constante/ConnexionBDD.php');
    $req ="UPDATE ressource SET DEREFERENCE=1 WHERE ID_RESSOURCE ='".$idRessource."'";
    $result = $mysqli->query($req);
  }

  function Reference($idRessource)
  {
    include('../Constante/ConnexionBDD.php');
    $req ="UPDATE ressource SET DEREFERENCE=0 WHERE ID_RESSOURCE ='".$idRessource."'";
    $result = $mysqli->query($req);
  }

  function CalculPerteParRessource($dateDeb,$dateFin)
  {
    include('../Constante/ConnexionBDD.php');
    $req = "SELECT count(*) AS NBRPERTE, R.NOM, R.AUTEUR, R.TYPE_RESS
            FROM ressource R, perte P
            WHERE R.ID_RESSOURCE = P.ID_RESSOURCE
            AND P.DATE_PERTE BETWEEN '".$dateDeb."' and '".$dateFin."'
            GROUP BY R.NOM, R.AUTEUR, R.TYPE_RESS";
    $result = $mysqli->query($req);
    return $result;
  }

  function CalculPerteParType($dateDeb,$dateFin)
  {
    include('../Constante/ConnexionBDD.php');
    $req = "SELECT count(*) AS NBRPERTE, P.TYPE_PERTE
            FROM ressource R, perte P
            WHERE R.ID_RESSOURCE = P.ID_RESSOURCE
            AND P.DATE_PERTE BETWEEN '".$dateDeb."' and '".$dateFin."'
            GROUP BY P.TYPE_PERTE";
    $result = $mysqli->query($req);
    return $result;
  }


?>
