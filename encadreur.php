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
        <div class="container-fluid ">
            <div class="row mt-5">
                <div class="col-lg-4 bg-white m-auto rounded-top">
                    <h2 class=" text-center mt-2" > Formulaire Encadreur</h2>
                    <p class="text-center text-muted lead"> Entrez ses cordonnes</p>
                    <form action="" method="post">
                    
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class=" fa fa-user"></i></span>
                        <input type="text" class=" form-control" placeholder=" Nom de l'encadreur"name="nom" required maxlength="20">
                    </div>
                    <div class="input-group mb-4 ">
                        <span class="input-group-text"><i class=" fa fa-user"></i></span>
                        <input type="text" class=" form-control" placeholder=" Prenoms de l'encadreur" name="prenom" required maxlength="40">
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class=" fa fa-mobile"></i></span>
                        <input type="tel" class=" form-control" placeholder="Contact de l'encadreur"name=" tel" required maxlength="10" minlength="10" >
                    </div>
                    <div class="input-group mb-4 ">
                        <span class="input-group-text"><i class=" fa fa-envelope"></i></span>
                        <input type="text" class=" form-control" placeholder=" E-mail de l'encadreur"name=" email" required >
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class=" fa fa-book"></i></span>
                        <select  class="custom-select form-control" required>
                            <option selected disabled> UE Ensegnée</option>
                            <script>
                                for(var i=1;i<4;i++)
                                { 
                                    document.write("<option name='ue'  value="+i+">"+i+"</option>")
                                }
                            
                            </script>
                        </select>
                    </div>
                    <div class="d-grid mb-4">
                    <button type="submit" class="btn btn-success" name="btn_encadreur">Ajouter</button>
                </div>
            </form>
            </div>
         </div>
        </div>
    
</body>
</html>