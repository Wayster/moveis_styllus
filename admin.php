
 <?php
  include("bd/mysql.php");


?>
<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <link rel="icon" href="css/img/sofaM.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="admin.css">
    <script src="js/jquery.min.js"></script>
    <!--  propagandas text-->
    <link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
    <!-- navbar text -->
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Do+Hyeon" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">


  </head>
  <body>

    <div class="jumbotron jumbotron-fluid bg-primary">
      <div class="container">
        <h1 class="display-4">Painel de Administracão do Site </h1>
        <p class="lead">Cadastre , Edite , Atualize e Delete Produtos.</p>
        <a href="index.php"><button class="btn btn-warning">Voltar ao Site</button></a>
      </div>
    </div>

          <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="categoria-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Cadastrar Categoria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="add-tab" data-toggle="tab" href="#categoria" role="tab" aria-controls="profile" aria-selected="false">Cadastrar Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="edit-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Editar Produtos</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">

        <!-- CADASTRAR CATEGORIA -->
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="add-tab">
          <center><h1 class="py-5">Cadastrar Categoria </h1></center>
          <div class="box  d-flex justify-content-center">
            <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <h6 class="text-center">Categoria</h6>
              <input type="text" class="form-control" name="input_cate" placeholder="Digite a Categoria">
            </div>
            <center><button type="submit" class="btn btn-danger" name="send">Cadastrar</button></center>
          </form>
          </div>
        </div>

         <!-- PRODUTOS  -->
        <div class="tab-pane fade" id="categoria" role="tabpanel" aria-labelledby="categoria-tab">
          <center><h1 class="py-5">Cadastrar Produtos</h1></center>
           <div class="box d-flex justify-content-center">
            <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label class="text-center">Produto</label>
              <input type="text" class="form-control" name="produto" placeholder="Digite a o nome do produto Ex: Cadeira Ana"><br>
            <label class="text-center">Imagem do Produto</label>
              <input type="file" class="form-control" name="product_img"><br><br>
              <select name="cat" class="form-control">
                <option>Selecione a Categoria</option>
                <?php
                  $get_cat = "select * from category";
                  $result = mysqli_query($con, $get_cat);
                  while ($row_cat = mysqli_fetch_array($result)) {
                    $id_c = $row_cat['id_c'];
                    $categoria = $row_cat['categoria'];
                    echo "<option value='$id_c'>$categoria</option>";
                  }
                 ?>
              </select>
            </div>
            <center><button type="submit" class="btn btn-danger mb-5" name="sendProduto">Cadastrar</button></center>
          </form>
          </div><!--BOX -->
        </div><!--TAB PRODUTOS -->
         <!-- EDITAR PRODUTOS -->
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="edit-tab">
          <center><h1 class="py-5">Editar Produtos</center></h1>
        </div>
        </div>



      </div><!--MY TAB CONTENT -->


      <script src="js/bootstrap.min.js"></script>
  </body>
</html>

<?php
  if (isset($_POST['send'])) {

  $categoria = $_POST['input_cate'];

  $insert = "insert into category (categoria) values ('$categoria')";

  $result = mysqli_query($con, $insert);

  if ($result) {
    # code...
    echo "<script>alert('Categoria Registrada com sucesso')</script>";
    echo "<script>window.open('admin.php','_self')</script>";
   }
  }
 ?>

<?php

 if (isset($_POST['sendProduto'])) {
   # code...
  $produto = $_POST['produto'];
  $product_img = $_FILES['product_img']['name'];
  $temp1 = $_FILES['product_img']['tmp_name'];
  $cat = $_POST['cat'];

  move_uploaded_file($temp1, "admin/images/$product_img");

  $sql = "insert into products (name_product, img_product, id_categoria) values('$produto','$product_img','$cat')";

    $result = mysqli_query($con, $sql);

    if($result) {
      # code...
      echo "<script>alert('Produto cadastrado com sucesso')</script>";
      echo "<script>window.open('admin.php','_self')</script>";
    }else{
        echo "<script>alert('erro')</script>";
    }
 }
?>
