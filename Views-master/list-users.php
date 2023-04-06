<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Views/assets/css/list-users.css">
     <link rel="stylesheet" href="./assets/css/styles.css"> 
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/home-adm.css">
</head>
<body>

    <div class="header">
        <div class="header-content-profile">
            <img src="./assets/img/logo.png" alt="Logo" />
            <div class="header-profile">
                <div>
                    <span>Bem-vindo,</span>
                    <a href="./edit-user.php">
                        <strong>Adam</strong>
                    </a>
                    <a href="./listar-clientes">Listar Clientes</a>
                    <a href="./criar-funcionarios">Criar Funcionários</a>
                </div>
            </div>
            <a class="logoff" href="./index.php">
                <img src="./assets/img/icons/power.svg" alt="power icon">
            </a>
        </div>
    </div>

    <main>
        <div class="texto">
            <h1>todos os usuários</h1>
        </div>
        <table>
            <thead>
                <tr>
                    <th>nome</th>
                    <th>email</th>
                    <th>telefone</th>
                    <th>deletar</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Alexandre Castro</td>
                    <td>alexcastro@gmail.com</td>
                    <td>12345678</td>
                   
                    <td><img class="excluir" src="./assets/img/icons/delete.svg" alt="power icon"></td>
                </tr>
                <tr>
                    <td>Samuel Santos</td>
                    <td>samsantos@gmail.com</td>
                    <td>11987874543</td>
                   

                    <td><img class="excluir" src="./assets/img/icons/delete.svg" alt="power icon"></td>
                    </td>
                </tr>
                <tr>
                    <td>Luis Cardozo</td>
                    <td>luicard@gmail.com</td>
                    <td>1198767621</td>
                    
                    <td><img class="excluir" src="./assets/img/icons/delete.svg" alt="power icon"></td>
                </tr>

                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>