<?php
    session_start();    
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['firstname']) && !empty($_POST['number']))
    {
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['password'];
        $nome = $_POST['firstname'];
        $celular = $_POST['number'];

        // print_r($email);
        // print_r($senha);

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha' and nome = '$nome' and celular = '$celular'";

        $result = $mysqli->query($sql);

        // print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            unset($_SESSION['nome']);
            unset($_SESSION['celular']);
            header('Location: login.php');
        }
        else
        {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        $_SESSION['nome'] = $nome;
        $_SESSION['celular'] = $celular;
        header('Location: ../html/Home.html');
        }
    }
    else
    {
        header('Location: login.php');
    }
?>