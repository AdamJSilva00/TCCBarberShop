<?php

if(!isset($_SESSION)){
    session_start();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/home-adm.css">
    <link rel="stylesheet" href="./assets/css/change-password.css">

</head>
<body>
    
    <header id="topo_web">
        <nav class="menu flex">
            <a href="index.php">
                <img class="logo" src="./assets/img/logo.png" alt="Logo">
            </a>
            <ul class="flex">
                <li><a class="teste" href="user.php">Home</a></li>
                <li><a class="teste" href="gallery.php">Galeria</a></li>
                <li><a class="teste" href="edit-user.php">Configuração</a>
                <li><a class="teste" href="make-appointment.php">Agendar</a>
                </li>
            </ul>
            <ul>
                <li>
                   <?php echo $_SESSION['nome']; ?>
                </li>
            </ul>
            <ul>
                <div class="iconUser">
                    <img src="./assets/img/icons/power.svg" alt="icon login">
                </div>
            </ul>
            <div class="icon ">
                <a href="# ">
                    <i class="fas fa-bars"></i>
                </a>
            </div>
        </nav>
    </header>
    <div class="content-home">
        <h1>MEUS AGENDAMENRTOS</h1>

   

        <div class="appointments">
            <div class="appointment">
                <p class="nome"><strong>Nome:</strong> Adam Silva</p>
                <p class="servico"><strong>Serviço:</strong> Nome do serviço</p>
                <p class="nome"><strong>Data/hora:</strong> 28/11/2020 / 17:00</p>
                 <button class="button" type="submit">Excluir</button>
            </div>
            <div class="appointment">
                <p class="nome"><strong>Nome:</strong> Adam Silva</p>
                <p class="servico"><strong>Serviço:</strong> Nome do serviço</p>
                <p class="nome"><strong>Data/hora:</strong> 28/11/2020 / 17:00</p>
                 <button class="button" type="submit">Excluir</button>
            </div>
            <div class="appointment">
                <p class="nome"><strong>Nome:</strong> Adam Silva</p>
                <p class="servico"><strong>Serviço:</strong> Nome do serviço</p>
                <p class="nome"><strong>Data/hora:</strong> 28/11/2020 / 17:00</p>
                 <button class="button" type="submit">Excluir</button>
            </div>
            <div class="appointment">
                <p class="nome"><strong>Nome:</strong> Adam Silva</p>
                <p class="servico"><strong>Serviço:</strong> Nome do serviço</p>
                <p class="nome"><strong>Data/hora:</strong> 28/11/2020 / 17:00</p>
                 <button class="button" type="submit">Excluir</button>
            </div>
            <div class="appointment">
                <p class="nome"><strong>Nome:</strong> Adam Silva</p>
                <p class="servico"><strong>Serviço:</strong> Nome do serviço</p>
                <p class="nome"><strong>Data/hora:</strong> 28/11/2020 / 17:00</p>
                 <button class="button" type="submit">Excluir</button>
            </div>
            <div class="appointment">
                <p class="nome"><strong>Nome:</strong> Adam Silva</p>
                <p class="servico"><strong>Serviço:</strong> Nome do serviço</p>
                <p class="nome"><strong>Data/hora:</strong> 28/11/2020 / 17:00</p>
                 <button class="button" type="submit">Excluir</button>
            </div>
        </div>
    </div>
</body>
</body>
</html>