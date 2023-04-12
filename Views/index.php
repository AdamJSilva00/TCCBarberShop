<?php
 include('conexao.php');

 if(isset($_POST['email']) == 0){
    echo "Preencha seu e-mail";
 } else if(strlen($_POST['senha']) == 0){
    echo "Preencha sua senha";
 } else {

    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code ="SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Falaha na execução do código SQL:" . $mysqli->error);

    $quantidade = $sql_query->num_rows;

    if($quantidade == 1){

        $usuario = $sql_query->fetch_assoc();

        if(!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];

        header("Location: user.php");

    } else {
        echo "Falha ao Logar! Email ou senha incorretos";
    }
 }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | BarberShop</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/signin.css">
</head>

<body>
    <div class="container-login">
        <div class="content-login">
            <div class="animation-login">
                <img src="./assets/img/logo.png" alt="GoBeauty" />

                <form method="POST">
                    <h1>Faça seu login</h1>

                    <div class="input">
                        <img src="./assets/img/icons/mail.svg" alt="icon login">
                        <input name="email" placeholder="E-mail" />
                    </div>
                    <div class="input">
                        <img src="./assets/img/icons/lock.svg" alt="icon login">
                        <input name="senha" type="password" placeholder="Senha" />
                    </div>

                    <button class="button" type="submit">Entrar</button>

                    <a href="./forgot-password.php">Esqueci minha senha</a>
                </form>

                <a href="./register.php">
                    <img src="./assets/img/icons/login.svg" alt="icon login">
                    Criar conta
                </a>
            </div>
        </div>

        <div class="background-signin"></div>
    </div>
</body>

</html>