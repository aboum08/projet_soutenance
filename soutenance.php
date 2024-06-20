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
                <div class="col-lg-4 bg-white m-auto rounded-top" id="frm">
                    <h2 class=" text-center" > Planifier une soutenance</h2>
                    <p class="text-center text-muted lead"> Donner les détails</p>
                    <form action="" method="post">
                
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class=" fa fa-user"></i></span>
                        <input type="text" class=" form-control" placeholder=" Matricule de l'étudiant" name="matricule" required maxlength="7">
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class=" fa fa-user"></i></span>
                        <select  class="custom-select form-control" required>
                            <option selected disabled>Type de soutenance</option>
                            <option name="soutenace" value="Publique">Publique</option>
                            <option name="soutenace" value="Privé">Privé</option>
                        </select>
                    </div>
                    <div class="input-group mb-4 ">
                        <span class="input-group-text"><i class=" fa fa-user"></i></span>
                        <input type="text" class=" form-control" placeholder=" Thème de soutenance" name="theme" required >
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class=" fa fa-home"> </i></span>
                        <input type="number" class=" form-control" placeholder="numero de la salle de soutenace" required>
                    </div>
                    <div class="input-group mb-4 ">
                        <span class="input-group-text"><i class=" text-left"> Date de la soutenance</i></span>
                        <input type="date" class=" form-control" required>
                    </div>
                    <div class="input-group mb-4 ">
                        <span class="input-group-text"><i class=" text-left">Heure de la soutenance</i></span>
                        <input type="time" class=" form-control" required>
                    </div>
                    <div class="input-group mb-4 ">
                        <span class="input-group-text"><i class=" text-left">Date de fin de radaction du mémoire</i></span>
                        <input type="date" class=" form-control"  required>
                    </div>
                   
                    
                    <div class="d-grid mb-2">
                    <button type="submit" class="btn btn-success mb-4">Ajouter</button>
                </div>
            </form>
            </div>
         </div>
         
        </div>
    
</body>
</html>