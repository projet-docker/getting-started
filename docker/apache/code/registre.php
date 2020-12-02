<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="includes/stylecimetiere.css">
    <title>Registre du cimetière</title>
    <style>
    

    </style>
  </head>

  <ul id="header">
    <header>
    <img src="images/logoban.png">
    </header>
  </ul>

  <body>
      <section>
          <label>Liste des présents défunts de notre cimetière :</label>
              <?php require_once("includes/pdo.php");
              $date = date("d-m-Y");
              echo "<h2>Registre du $date</h2>";
              $requete = $db->query("SELECT * FROM REGISTRE ORDER BY id ASC;");
              if ($requete->rowCount() > 0) {
                  echo "<table><tr><th>Nom</th><th>Prénom</th><th>Âge de sa Mort</th></tr>";
                  foreach ($requete->fetchAll(PDO::FETCH_ASSOC) as $registre) {
                      echo "<tr>";
                      echo "<td>${registre['nom']}</td>";
                      echo "<td>${registre['prenom']}</td>";
                      echo "<td>${registre['age']}</td>";
                      echo "</tr>";
                  }
                  echo "</table>";
              } else {
                  echo "Désolé, le cimetière est vide pour le moment.";
              } ?>
          <form action="insert.php" method="POST">
            <label>Nom :</label><input type="text" name="nom" />
            <label>Prénom :</label><input type="text" name="prenom" />
            <label>Âge de sa mort :</label><input type="text" name="age" />
          <input type="submit" value="Ajouter dans la liste" class="bouton_submit_add"/>
          </form>
          <form action="remove.php" method="post">
          <label>Nom :</label><input type="text" name="nom" />
            <label>Prénom :</label><input type="text" name="prenom" />
            <label>Âge de sa mort :</label><input type="text" name="age" />
          <input type="submit" value="Retirer de la liste" class="bouton_submit_supp"/>
          </form>
      </section>
  </body>
</html>

