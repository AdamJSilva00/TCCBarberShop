<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcar horário | BarberShop</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/make-appointment.css">
    <link rel="stylesheet" href="./assets/css/profile.css">
    <link rel="stylesheet" href="./assets/css/change-password.css">
    <link rel="stylesheet" href="./assets/css/gallery.css">
</head>

<body>
    <header id="topo_web">
        <nav class="menu flex">
            <a href="index.php">
                <img class="logo" src="./assets/img/logo.png" alt="Logo">
            </a>
            <ul class="flex">
                <li><a class="teste" href="user.php ">Home</a></li>
                <li><a class="teste" href="gallery.php">Galeria</a></li>
                <li><a class="teste" href="edit-user.php">Configuração</a>
                <li><a class="teste" href="make-appointment.php">Agendar</a>
                </li>
            </ul>
            <ul>
                <a class="logoff" href="./index.php">
                    <img src="./assets/img/icons/power.svg" alt="power icon">
                </a> 
            </ul>
            <div class="icon ">
                <a href="# ">
                    <i class="fas fa-bars"></i>
                </a>
            </div>
        </nav>
    </header>

    <div class="container-profile">
        <div class="content-profile">
            <form style="margin-top: 80px;">
                <h1>Agendamento de serviços</h1>
                <div class="input-profile">
                    <select name="service" placeholder="Selecione um serviço">
                        <option value="" selected>Selecione um serviço</option>
                        <option value="Nome do serviço">Nome do serviço</option>
                        <option value="Nome do serviço">Nome do serviço</option>
                        <option value="Nome do serviço">Nome do serviço</option>
                        <option value="Nome do serviço">Nome do serviço</option>
                    </select>
                </div>
                <div class="input-profile">
                    <input type="date" name="date" placeholder="Selecione uma data" />
                </div>
                <div class="input-profile">
                    <input type="time" name="hour" placeholder="Selecione um horário" />
                </div>

                <div class="input-profile">
                    <select name="funcionario" placeholder="Selecione um funcionario">
                        <option value="" selected>Selecione um funcionário</option>
                        <option value="Nome do funcionário">Nome do funcionário</option>
                        <option value="Nome do funcionário">Nome do funcionário</option>
                        <option value="Nome do funcionário">Nome do funcionário</option>
                        <option value="Nome do funcionário">Nome do funcionário</option>
                    </select>
                </div>

                <button class="button" type="submit">Confirmar agendamento</button>
            </form>
        </div>
    </div>
</body>

</html>