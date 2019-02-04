<?php session_start();?>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li> <a href="../Controleur/Home.php">Accueil</a> </li>
        <li> <a href="../Controleur/Recherche.php">Recherche</a> </li>
      <?php
        if((isset($_SESSION['typeProfil']))) //déja connecté
        {
          if($_SESSION['typeProfil']=='g')
          {
            echo '<li> <a href="../Controleur/Membre.php">Membre</a></li>';
            echo '<li> <a href="../Controleur/Ressource.php">Ressources</a></li>';
            echo '<li> <a href="../Controleur/InfoGeneGest.php">Information générale</a></li>';
            echo '<li> <a href="../Controleur/CalculPerte.php">Calcul des pertes</a></li>';

          }
          else
          {
            echo '<li> <a href="../Controleur/Emprunts.php">Emprunts</a> </li>';
			      echo '<li> <a href="../Controleur/EspacePerso.php">Espace personnel</a> </li>';
            echo '<li style="color:white;"> Solde : '.$_SESSION['SOLDE'].'€      </li>';
          }
        }
      ?>
      </ul>
      <?php
        if((!isset($_SESSION['typeProfil']))) //pas encore connecté
        {
      ?>
          <form class="navbar-form navbar-right inline-form" action="../Controleur/Connexion.php" method="post">
            <div class="form-group">
              <input type="search" class="input-sm form-control" placeholder="Identifiant" name="id">;
              <input type="password" class="input-sm form-control" placeholder="Mot de passe" name="mdp">;
              <button type="submit" class="btn btn-primary btn-sm"> Connexion</button>;
            </div>
          </form>
      <?php
        }
        else //déja connecté
        {
          echo '<a href="../Controleur/Deconnexion.php"> <input align="right" type="button" value="Déconnexion" class="btn btn-primary btn-sm"> </a>';
        }
      ?>
    </div>
  </nav>
