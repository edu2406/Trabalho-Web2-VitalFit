<?php 
  session_start();
  include_once('config.php');
  if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['email']) == true))
  {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    unset($_SESSION['nome']);
    unset($_SESSION['celular']);
    header("Location: index.php");
  }
  $logado = $_SESSION['email'];

  //$sql = "SELECT * FROM usuarios WHERE $logado = '$email'";

  //$result = $mysqli->query($sql);
  

?>





<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Informações do Usuário</title>
  <link rel="stylesheet" href="../Style/user.css" />
  <link rel="stylesheet" href="../Style/header.css" />
  <link rel="stylesheet" href="../Style/form.css" />
  <link
   href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
   rel="stylesheet"
   integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
   crossorigin="anonymous"
  />
 </head>

 <body>
  <header>
    <div class="head">
      <div id="nomedosite" style="float: left;">
        <a href="../html/Home.html">VitalFit</a>

      </div>
      <div  style="text-align: right;">
        <a class="btlinkheader" 
        
        href="../html/carrinho.html">
          <img style="width: 25px;" src="../Imagens/carrinho-de-compras.png" alt="">
        </a>
      </div>
    </div> 
  </header>
  <div class="container">
   <div class="main" role="main">
    <div class="title mt-3">
     <h1>Meu perfil</h1>
     <h6>Gerenciar e proteger sua conta</h5>
    </div>
   </div>

   <div class="row">
    <div class="col-sm-4">
        
        <form class="mt-4 ">
            <div class="mb-3 ">
              <label for="exampleInputEmail1" class="form-label">Usuário</label>
              
              <input type="text" name="nome" id="nome"  value="<?php echo $_SESSION['nome']; ?>" class="form-control"  aria-describedby="emailHelp" required>
              
            </div>
            <div class="mb-3 ">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" name="email" id="email"  value="<?php echo $_SESSION['email']; ?>" class="form-control"  aria-describedby="emailHelp" required>
              
            </div>
            <div class="mb-3 ">
              <label for="exampleInputEmail1" class="form-label">Telefone</label>
              <input type="telefone" name="telefone" id="telefone"  value="<?php echo $_SESSION['celular']; ?>" class="form-control"  aria-describedby="emailHelp" required>
              
            </div>
            
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Senha</label>
              <input type="text" class="form-control" value="<?php echo $_SESSION['senha']; ?>" id="exampleInputPassword1">
            </div>
            <a type="submit" class="btn btn-primary" href="logout.php">Fazer logout</a>
          </form> 

    </div>
   </div>

   
  </div>
  <footer>
    <div id="footer">
        <p>&copy; by <a href="https://github.com/Joaopaulo2006" target="_blank">João Paulo</a>, <a href="https://github.com/TallesEduardoAlmeidaSousa" target="_blank">Talles</a>, <a href="https://github.com/edu2406" target="_blank">Carlos Eduardo</a> - Todos os Direitos Reservados</p>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>