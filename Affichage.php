<!DOCTYPE html>
<html lang="en">
<head>
<?php
include('includes/head.php');
?>
<title>Document</title>
<link rel="stylesheet" href="includes/all.min.css">
<link rel="stylesheet" href="assets/page_css.css">
    
</head>
<body class="bg-light">
    <div class="container">
    
    <div class="row m-auto mt-2">
    <h2 class=" text-left rounded-top bg-green bg-info" > Liste des utlisateurs</h2>
<table class="table table-hover table-bordered">
  <thead class=" boeder border-bottom-warning  border-lg ">
    <tr >
      <th scope="col">Nom</th>
      <th scope="col">Prénoms</th>
      <th scope="col">E_mail</th>
      <th scope="col">Mots de passe</th>
      <th scope="col">Type</th>
      <th scope="col">Modifier</th>
      <th scope="col">Suprimer</th>
    </tr>
  </thead>
  <tbody>
  <?php
  // inclusion de la page de connecxion
include('includes/bd.php');
//requête pour afficher laliste utilisateur
  $req=mysqli_query($con,"SELECT * FROM t_user");
if (mysqli_num_rows ($req)==0 ){
  // s'il n'existe pas d'utilisateur dans la base de donnée
  echo "aucun n'utilisateur n'est enregistrer pour l'instant";
}
else
// si non, afficher la liste
while($row=mysqli_fetch_assoc($req)){
?>
    <tr>
      <td><?=$row['Nom_utilisateur'] ?></td>
      <td><?=$row['Prenom_Utilisateur'] ?></td>
      <td><?=$row['Email_Utilisateur'] ?></td>
      <td><?=$row['Mdp'] ?></td>
      <td><?=$row['user'] ?></td>
      <td><a href="mdofication.php?id=<?=$row ['Num_Utilisateur']?>,"><img src="assets/images/pen1.png" alt="pen" role="button"></a></td> 
      <td><a href="supression.php?id=<?=$row ['Num_Utilisateur']?>"><img src="assets/images/trash.png" alt="trash" role="button"></a></td> 
    </tr>
    <?php 
    }
   ?>
  </tbody>
</table>
<a href="utilisateur.php" class="btn_add " ><img src="images/plus.png" alt="+">Ajouter</a>
</div>
</div>
</body>
</html>