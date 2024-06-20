<!DOCTYPE html>
<html lang="en">
<head>
<?php
include('includes/head.php');
?>
<link rel="stylesheet" href="includes/all.min.css">
  
  <title>PAGE DE Connection</title>
  <style>
    body{
        background-image: url(assets/images/pigie_centre.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }
  </style>
</head>
<body class="bg-light">
     <div class="container">
        <div class="row mt-5">
            <div class="col-lg-4 e m-auto rounded-top">
                 <h3 class=" text-center" >Connexion</h3>
                <p class="text-center text-muted lead"> Entrez vos identifiants</p>
                <form action="actions/page.php" method="post">
                    <?php
                    if(isset($_GET["mes"]))
                    { ?>                    
                         <div class="alert alert-success" role="alert" >
                         <?php
                         echo $_GET["mes"];
                         ?>
                         </div>
                     <?php
                    }
                    ?>
                    <label class="text-center-danger"></label>
                    <div class="input-group mb-4 ">
                        <span class="input-group-text"><i class=" fa fa-user"></i></span>
                        <input type="text" class=" form-control" id="validationDefault01" placeholder=" Nom d'utilisateur"name="nom" required maxlength="20">
                    </div>
                    <div class="input-group mb-4 ">
                        <span class="input-group-text"><i class=" fa fa-envelope"></i></span>
                        <input type="text" class=" form-control"id="validationDefault02" placeholder=" E-mail" name="email" required>
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class=" fa fa-lock"></i></span>
                        <input type="password" class=" form-control" id="validationDefault03" placeholder=" mot de passe" name="pasword" required>
                    </div>
                    <div class="d-grid">
                    <button type="submit" class="btn btn-success" name="btn_connexion">Ajouter</button>
                </div>
            </form>
            </div>
         </div>
        </div>
    
</body>
</html>