<!DOCTYPE html>
<html lang="en">
<head>
<?php
include('includes/head.php');
?>
<link rel="stylesheet" href="includes/all.min.css">
  
  <title>PAGE DE Connection</title>
</head>
<body class="bg-light">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-4 bg-white m-auto rounded-top">
                    <h2 class=" text-center" > Affecter une salle</h2>
                    <p class="text-center text-muted lead"> Donner ses caracteristiques</p>
                    <form action="" method="post">
                
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class=" fa fa-user"></i></span>
                        <input type="number" class=" form-control" placeholder=" numero de la salle" name="num" required >
                    </div>
                    <div class="input-group mb-4 ">
                        <span class="input-group-text"><i class=" fa fa-user"></i></span>
                        <input type="number" class=" form-control" placeholder=" nombre de place" name="nbreplace" required >
                    </div>
                    <div class="input-group mb-4 ">
                        <span class="input-group-text"><i class=" fa fa-envelope"></i></span>
                        <input type="text" class=" form-control" placeholder=" où se situe la salle" required>
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class=" fa fa-lock"></i></span>
                        <input type="text" class=" form-control" placeholder=" Etat de la salle" required>
                    </div>
                
                    <div class="d-grid mb-2">
                    <button type="submit" class="btn btn-success" name="btn_salle">Ajouter</button>
                </div>
            </form>
            </div>
         </div>
        </div>
    
</body>
</html>