<?php 
  $msg=0;
  $msg =$_REQUEST['msg'];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Contato</title>
		<link rel="icon" href="css/img/sofaM.png">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/contato.css">
        <link rel="stylesheet" href="css/style_index2.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.css">
		<script src="js/jquery.min.js"></script>

    <!--  propagandas text-->
    <link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
    <!-- navbar text -->
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Do+Hyeon" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
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
                        <a class="dropdown-item" href="index.php">Home</a>
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


		<section>
		<div class="container animated fadeIn mt-5">
		  <div class="row">
		   <div class="col">
		   	<div class="py-5 text-center">
		   		 <h1 class=" text-center"> Contato </h1>
		   	</div>
		   </div>
		    <hr>
		   <div class="container">
		   	<div class="row">
					<div class="col-lg-6" id="parent">
					 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d234.52320786594262!2d-43.99223056804621!3d-19.866536416419915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa6911010901bb7%3A0x8488218a79b48f26!2sR.+Pedrog%C3%A3o+Pequeno%2C+578+-+Itamarati%2C+Belo+Horizonte+-+MG%2C+31340-300!5e0!3m2!1sen!2sbr!4v1525805980416"
						width="450" height="500" frameborder="2" style="border:0" allowfullscreen></iframe>
					</div>
                            
                
					 <div class="col-lg-6">
					     <?php if($msg == enviado) {?>
					        <div class="alert alert-success" role="alert">
                              <strong>Feito !!</strong> Sua mensagem foi enviada, em breve retornaremos.
                            </div>
                            <?php }  else {?>
						 <form action="send.php" class="contact-form" method="post">
								 <div class="form-group">
									 <input type="text" class="form-control" id="name" name="name" placeholder="Nome" required="" autofocus="">
								 </div>
							<div class="form-group form_left">
							<input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
						  	 </div>
						  	 <div class="form-group form_left">
							<input type="text" class="form-control" id="name" name="assunto" placeholder="Assunto" required="">
						  	 </div>
						  	 <div class="form-group">
										<input type="text" class="form-control" name="phone" placeholder="Telefone" required="">
							 </div>
							 <div class="form-group">
							 <textarea class="form-control textarea-contact" rows="10" id="comment" name="FB" placeholder="Digite sua mensagem ou Feedback...." required=""></textarea>
							 <br>
								 <center><button class="btn btn-default btn-send" name="submit"> <span class="glyphicon glyphicon-send"></span> Enviar </button></center>
							 </div>
							 <div class="form-group">
							 	
							 </div>
						 </form>
						 <?php } ?>
					 </div>
				 </div>
		   	</div>
		   </div>
		  </div>
	</section>

	<script src="js/bootstrap.min.js"></script>
	</body>
</html>
