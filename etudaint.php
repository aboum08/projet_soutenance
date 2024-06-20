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
        background-image: url(assets/images/etudiant1.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }
  </style>
</head>
<body class="">
        <div class="container-fluid " id="affiche" >
            <div class="row mt-5 mb-4 ">
                <div class="col-lg-4 bg-white m-auto rounded-top opacity-75">
                    <h2 class=" text-center mt-2" > Formulaire Etudiants</h2>
                    <p class="text-center text-muted lead"> Entrez ses cordonnes</p>
                    <form action="" method="post">
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class=" fa fa-user"></i></span>
                        <input type="text" class=" form-control" placeholder=" Matricul de l'étudiant" name="matricule" required maxlength="7" >
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class=" fa fa-user"></i></span>
                        <input type="text" class=" form-control" placeholder=" Nom de l'étudiant"name="nom" required maxlength="20">
                    </div>
                    <div class="input-group mb-4 ">
                        <span class="input-group-text"><i class=" fa fa-user"></i></span>
                        <input type="text" class=" form-control" placeholder=" Prenoms de l'étudiant" name="prenom" required maxlength="40">
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class=" fa graduation-cap"></i></span>
                        <select  class="custom-select form-control" required>
                            <option selected disabled> Choissze le cycle</option>
                            <option value="Licence"name="cycle">Licence</option>
                            <option value="Master" name=" cycle">Master</option>
                            <option value="Doctorat" name=" cycle">Doctorat</option>
                        </select>
                        
                    </div>
                    <div class="input-group mb-4 ">
                        <span class="input-group-text"><i class=" fa fa-envelope"></i></span>
                        <input type="text" class=" form-control" placeholder=" E-mail de l'étudiant"name=" email" required >
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class=" fa fa-mobile"></i></span>
                        <input type="tel" class=" form-control" placeholder="Contact de l'étudiant"name=" tel" required maxlength="10" minlength="10" >
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class=" fa fa-user"></i></span>
                        <select  class="custom-select form-control" required>
                            <option selected disabled> Nom de l'Encadreur</option>
                            <script>
                                for(var i=1;i<4;i++)
                                {
                                    document.write("<option name='encadreur'  value="+i+">"+i+"</option>")
                                }
                            
                            </script>
                        </select>
                    </div>
                    <div class="d-grid mb-4">
                    <button type="submit" class="btn btn-success" name="btn_etudiant">Ajouter</button>
                </div>

            </form>
            </div>
         </div>
        </div>
    <script src="fichier.js"></script>
</body>
</html>