
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Acceuil</title>
    <?php
include('includes/head.php');
?>  
    <link rel="stylesheet" href="includes/all.min.css">
    <link rel="stylesheet" href="assets/page_css.css">
    <style>
      li{
          list-style: none;
          height: content;
      }
      #user img{
        width: 60px;
        height: auto;
        margin-bottom: 20%;
        margin-top: 0;

      }
      img{
        width: 150px;
        height: 150px;
        
      }
      #cn1 li{
        
        border-radius: 50px;
        text-align: center;
        font-weight: bold;
        box-shadow: 10px wheat;
      }
       #col2{
        height: 800px;
        border: 10px bold ;
       }
       #contentFrame {
            width: 100%;
            height: 700px;
            border: none;
        }
    </style>
</head >
<body class="bg-primary-subtle m-auto ">
  <header class=" bg-primary opacity ">
    <div class="navbar navbar-expand-sm  rounded-top  ">
      <ul class="navbar-nav d-flex  container-fluid opacity-100 rounded-top">
        <li class="nav-item "style="height=inerit" >
          <img src="assets/images/pigier_bleu.png" alt="Logo" class="container-fluid">
        </li>
        <li class="nav-item">
          <label  class="text-center fs-2 fw-bold  text-uppercase text-info"> ACCeuil</label>
        </li>
        <li class=" nav-item d-inline-block" id="user">
          <label class="text-end mt-10 fs-4 fw-bold"> Maniga Abou <p class="text-warnig-subtle fw-4">admin</p></label>
        <a href=""> <img src="assets/images/maniga.jpg" alt="" class="image-fluid rounded-circle  mt-10 mb-10"></a>
        </li>
      </ul>
    </div>
  </header>
  <hr class="bg-succes">
  <!-- <label class="container-fluid text-center text-wight text-capitalize  fs-3 text-danger"><marquee behavior="" direction="horizontal">Acceil</marquee></label> -->
<div class="container-fluid mt-8">
    
  <div class="row d-flex ">
    <div class="col-2 border-end border-warning" id="col1">
 <ul class="nav flex-column mt-4">
    <li class="nav-item ">
    <p class="text-center fs-4 fw-bold border-bottom container-fluid "> GESTION DES</p>
  </li>
<hr>
  <div class=" container " id="cn1">
  <li class="nav-item mt-2 bg-info ">
    <a class="nav-link "  onclick="loadPage('etudaint.php')"> ETUDIANTS</a>
  </li>
  <li class="nav-item mt-4 borber border-warning border-rounded bg-info">
    <a class="nav-link" onclick="loadPage('Affichage.php')"> ENSEIGNANTS</a>
  </li>
  <li class="nav-item mt-4 borber border-warning border-rounded bg-info">
    <a class="nav-link"  onclick="loadPage('encadreur.php')"> ENCADREURS</a>
  </li>
  <li class="nav-item mt-4 borber border-warning border-rounded bg-info">
    <a class="nav-link"  onclick="loadPage('soutenance.php')">SOUTENANCES</a>
  </li>
  <li class="nav-item mt-4 mb-4 borber border-warning border-rounded bg-info">
    <a class="nav-link"  onclick="loadPage('salle.php')"> SALLES</a>
  </li>
</div>
</ul>
     </div>
     <div class="col-8 bg-light borber border-warning" id="col2">
      <div class="navbar navbar-light container-fluid ">
    <form class="d-flex m-auto" role="search float-end">
      <input class="form-control me-4 " type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>

  <!-- </div> -->
      </div>
      <iframe id="contentFrame"></iframe>
     </div>
    </div>
  </div>
  <script>
        function loadPage(page) {
          document.getElementById('contentFrame').src = page;
        }
    </script>
</body>
</html>