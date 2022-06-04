<?php
session_start();

include '../db/connection-db.php';
include 'verify-db/verify_candidatos.php';

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title><?php echo $userType ?> - Home</title>
</head>

<body>

    <div class="hold-welcome-user">


        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-nav-bar">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="candidatos.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="candidato-dados.php">Alterar Meus Dados</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="candidato-perfil-exibicao.php">Meu Perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="solicitacoes-de-amizade.php">Minhas Conexões</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../db/logout.php">Sair</a>
                        </li>

                    </ul>
                </div>
                <div class="paragrafo-welcome">
                    <p>Bem vindo, <?php echo $userName  ?>!</p>
                </div>
            </div>
        </nav>


    </div>


    <div class="container-name-page">
        <div class="name-page">
            <h1>Home</h1>
        </div>
    </div>

    <div class="container-contents">
        <p class="text-justify">Bem vindo, <?php echo $userType  ?></p>
        <p class="text-justify">Aqui nós disponibilizamos esta plataforma para que o contato entre recrutadores/candidatos
            seja menos burocrático. Logo, pensamos nesta plataforma, onde os candidatos podem se cadastrar e registrar suas informações pessoais.
            Para que os recrutadores possam visualizar os candidatos que estão abertos para a prestação de serviços e que o recrutador tenha um meio rápido e prático
            para entrar em contato com o candidato.
        </p>
    </div>

</body>

</html>