<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../includes/stylecimetiere.css">
    <title>Registre du cimetière</title>
  </head>

  <ul id="header">
    <header>
    <img src="../images/logoban.png">
    </header>
  </ul>

  <body>
      <section>
                <label>Liste des présents défunts de notre cimetière :</label>
<?php require_once("../includes/pdo.php");
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
<p><a href="registre.php" class="bouton_submit_add">Retour au formulaire</a></p>
<?PHP
require_once("../includes/pdo.php");
    //On récupère les valeurs entrées par l'utilisateur :
    try{
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$age=$_POST['age'];
 
//On prépare la commande sql d'insertion
$sql = 'INSERT INTO REGISTRE(id,nom,prenom,age) VALUES("0","'.$nom.'","'.$prenom.'","'.$age.'")';
 
/*on lance la commande (mysql_query) et au cas où, 
on rédige un petit message d'erreur si la requête ne passe pas (or die) 
(Message qui intègrera les causes d'erreur sql)*/
$db->exec($sql);
echo "<p>Personne enregistré dans notre registre</p>";
    }catch(PDOException $e){
      echo "Erreur : " . $e->getMessage();
    }
?>
      </section>
  </body>
</html>

