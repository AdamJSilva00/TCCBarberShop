<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário | BarberShop</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
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
                <li><a class="teste" href="user.php">Home</a></li>
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
            <form>
                

                <h1>Meu perfil</h1>
                <div class="input-profile">
                    <img src="./assets/img/icons/user.svg" alt="icon login">
                    <input name="name" placeholder="Usuário" />
                </div>
                <div class="input-profile">
                    <img src="./assets/img/icons/mail.svg" alt="icon login">
                    <input name="email" placeholder="E-mail" />
                </div>


                <div class="input-profile">
                    <img src="./assets/img/icons/phone.svg" alt="icon login">
                    <input name="telefone" type="telefone" placeholder="Telefone" />
                </div>
                <div class="input-profile">
                    <img src="./assets/img/icons/lock.svg" alt="icon login">
                    <input name="newPassword" type="password" placeholder="Nova Senha" />
                </div>
                <div class="input-profile">
                    <img src="./assets/img/icons/lock.svg" alt="icon login">
                    <input name="confirmPassword" type="password" placeholder="Confirmação da nova senha" />
                </div>
                

                <button class="button" type="submit">Confirmar mudanças</button>
            </form>
        </div>
    </div>
</body>

</html>