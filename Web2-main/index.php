<?php
    if(isset($_POST['submit']))
    {
        // print_r($_POST['firstname']);
        // print_r($_POST['email']);
        // print_r($_POST['number']);
        // print_r($_POST['password']);
        
        include_once('php/config.php');

        $nome = $_POST['firstname'];
        $email = $_POST['email'];
        $celular = $_POST['number'];
        $senha = $_POST['password'];

        $result = mysqli_query($mysqli, "INSERT INTO usuarios(nome,email,celular,senha) VALUES ('$nome','$email','$celular','$senha')");
    }

    
?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho-web2</title>
    <link rel="stylesheet" href="Style/index.css">
    <style>
        .continue-button {
        width: 100%;
        margin-top: 2.5rem;
        border: none;
        background-color: #6c63ff;
        padding: 0.62rem;
        border-radius: 5px;
        cursor: pointer;
    }
        
    .continue-button:hover {
        background-color: #6b63fff1;
    }

    .continue-button{
        text-decoration: none;
        font-size: 0.93rem;
        font-weight: 500;
        color: #fff;
    }
    </style>    
</head>

<body>
    <div class="container">
        <div class="form-img">
            <img src="Imagens/sup1.jpg" alt="Treino">
        </div>
        <div class="form">
            <form action="index.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="php/login.php">Já tem uma conta? <br> Fazer login</a></button>
                    </div>
                </div>
                <div class="input-grupo">
                    <div class="input-box">
                        <label for="firstname">Nome</label>
                        <input type="text" id="firstname" name="firstname" placeholder="Digite seu nome"
                            required>
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input type="text" id="email" name="email" placeholder="Digite seu email" required>
                    </div>
                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input type="tel" id="number" name="number" placeholder="(xx) xxxx-xxxx" required>
                    </div>
                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input type="password" id="password" name="password" placeholder="Crie sua senha" required>
                    </div>
                </div>
                <div>
                    <input type="submit" name="submit" value="Continuar" class="continue-button">
                </div>
            </form>
        </div>
    </div>
</body>

</html>