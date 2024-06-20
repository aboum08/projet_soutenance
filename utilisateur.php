<!DOCTYPE html>
<html lang="en">
<head>
<?php
include('includes/head.php');
?>
<link rel="stylesheet" href="includes/all.min.css">
  
  <title>ajouter un utilisateur</title>
</head>
<body class="bg-light">

        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-4 bg-white m-auto rounded-top">
                    <h2 class=" text-center" > Incription d'un utlisateur</h2>
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
                    elseif(isset($_GET["mes1"]))
                    {
                        ?>                    
                         <div class="alert alert-danger" role="alert">
                         <?php
                         echo $_GET["mes"];
                         ?>
                         </div>
                     <?php
                    }

                    ?>
                    <!-- <p class="text-center text-muted lead"> Entrez ses cordonnes</p> -->
                    <form action="actions/page.php" method="post">
                
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class=" fa fa-user"></i></span>
                        <input type="text" class=" form-control" placeholder=" Nom" name="nom" required maxlength="20">
                    </div>
                    <div class="input-group mb-4 ">
                        <span class="input-group-text"><i class=" fa fa-user"></i></span>
                        <input type="text" class=" form-control" placeholder=" Prenoms" name="prenom" required maxlength="40">
                    </div>
                    <div class="input-group mb-4 ">
                        <span class="input-group-text"><i class=" fa fa-envelope"></i></span>
                        <input type="text" class=" form-control" placeholder=" E-mail" name="email" required>
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class=" fa fa-lock"></i></span>
                        <input type="password" class=" form-control" placeholder=" mot de passe"name="password" required>
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class=" fa fa-user"></i></span>
                        <select  class="custom-select form-control" name='user' required>
                            <option selected disabled>Type d'utilisateur</option>
                            <option name='user'  value="enseignant">Enseignant</option>
                            <option name='user'  value="gestionaire">gestionaire</option>
                            <option name='user'  value="admin">administrateur</option>
                        </select>
                    </div>
                    <div class="d-grid mb-4">
                    <button type="submit" class="btn btn-success" name="btn_ajout">Ajouter</button>
                </div>
            </form>
            </div>
         </div>
        </div>
    
</body>
</html>