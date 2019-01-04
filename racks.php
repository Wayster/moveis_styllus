<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119271350-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-119271350-1');
</script>

    <meta charset="utf-8">
    <title>Racks</title>
    <link rel="icon" href="css/img/table.png">
    <link rel="stylesheet" href="css/racks3.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <script src="js/jquery.min.js"></script>
    <!--  propagandas text-->
    <link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
    <!-- navbar text -->
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Do+Hyeon" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />
    <link rel="stylesheet" href="css/lightbox.css">
  </head>
  <body>

  <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="menu">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      MENU
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="cadeiras.php">Cadeiras</a>
                      <a class="dropdown-item" href="banquetas.php">Banquetas & Bancos</a>
                      <a class="dropdown-item" href="mesas.php">Mesas</a>
                      <a class="dropdown-item" href="racks.php">Racks & Aparadores</a>

                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="contact.php"> Contato</a>
                  </div>
              </li>
          </ul>
      </div>
  </nav>

    <div class="bg3">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="text-center text font-weight-bold">
                        <h1 class="mb-5 font-weight-bold">Diversas opções de racks para sala.
                            Deixe seu ambiente ainda mais perfeito!</h1>
                        <p>Um design simples com estilo distinto</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- products -->
    <section id="products" class="bg-light mb-5">
      <div class="container-fluid">
        <div class="text-left bg-light">
          <div class="py-5">
          <h4 >Racks & Aparadores</h4>
          <nav class="navbar navbar-expand-sm navbar-light">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="cadeiras.php" class="nav-link">Cadeiras</a></li>
              <li class="nav-item"><a href="poltrona.php" class="nav-link">Poltronas</a></li>
              <li class="nav-item"><a href="banquetas.php" class="nav-link">Banquetas & Bancos</a></li>
            </ul>
          </nav>
        </div>
        </div>
      </div><!--fim do container do menu com titulo -->


      <div class="container-fluid">
        <div class="row">


          <?php
            include("bd/mysql.php");
           $get_products = "select * from products where id_categoria = 5";
           $result = mysqli_query($con, $get_products);
           while($p=mysqli_fetch_array($result)){ ?>
          <div class="card mb-5" >
          <div class="card-body">
          <label class=""><?php echo $p['name_product']?></label>
          </div>
          <a href="admin/images/<?php echo $p['img_product'] ?>" data-lightbox="img"  data-title="<?php echo $p['name_product'] ?>">
        <img src="admin/images/<?php echo $p['img_product']?>" class="img-fluid" data-toggle="lightbox"></img>
           </a>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>

    <section class="cordefundofooter">
      <div class="container-fluid">
      <div class="row">
        <div class="col-sm-2 col" >
          <h6 class="mt-5">Racks & Aparadores</h6>
            <div class=" d-inline-block">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link text-secondary" href="cadeiras.php">Cadeiras</a></li>
                <li class="nav-item"><a class="nav-link text-secondary" href="banquetas.php">Banquetas & Bancos</a></li>
              </ul>
            </div>
              <div class="ml-4 d-inline-block">
                <ul class="navbar-nav">
                  <li class="nav-item"><a class="nav-link text-secondary" href="racks.php">Racks</a></li>
                  <li class="nav-item"><a class="nav-link text-secondary" href="racks.php">Aparadores</a></li>
                </ul>
              </div>
        </div>
        <div class="col-sm-8" >
           <iframe class="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d234.52320786594262!2d-43.99223056804621!3d-19.866536416419915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa6911010901bb7%3A0x8488218a79b48f26!2sR.+Pedrog%C3%A3o+Pequeno%2C+578+-+Itamarati%2C+Belo+Horizonte+-+MG%2C+31340-300!5e0!3m2!1sen!2sbr!4v1525805980416"
            width="100%" height="280" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-sm-2 col">
          <div class="mt-5 text-center">
            <h5 class="mb-5">Styllus Móveis</h5>
            <p>Rua Pedrogão Pequeno ,578 <br> Itamaraty <br>
            Belo horizonte-MG <br><br> (31)3288-0030 </p>
          </div>
        </div>
        </div>
      </div>
    </div>
    </section>

    <footer class="footer bg-dark">
      <div class="container">
       <div class="row">
          <h6 class=" mx-auto mt-2 text-light">Desenvolvido Por: <a href="https://www.linkedin.com/in/wayster-de-mello-b32278105/" target="_blank" class="text-light">Wayster D' Mello</a></h6>
       </div>
      </div>
    </footer>


    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <script src="js/main.js"></script>
    <script src="js/lightbox.js"></script>
  </body>
</html>
