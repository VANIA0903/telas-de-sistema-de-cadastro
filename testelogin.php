<?php
    sessão_inicio();
    // print_r($_REQUEST);
    if(isset($_POST['enviar']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM usuarios WHERE email = '$email' e senha = '$senha'";

        $resultado = $conexao->query($sql);

        // print_r($sql);
        // print_r($resultado);

        if(mysqli_num_rows($resultado) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Localização: login.php');
        }
        outro
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Localização: sistema.php');
        }
    }
    outro
    {
        // Não acessa
        header('Localização: login.php');
    }
?>