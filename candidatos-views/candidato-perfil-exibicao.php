<?php

session_start();


include '../db/connection-db.php';
include 'verify-db/verify_candidatos.php';
include 'verify-db/verify_perfil.php';
include 'verify-db/select_candidato.php';


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
    <title><?php echo 'Perfil -' . $name ?></title>
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


    <div class="container-name-page profile-candidato">
        <div class="name-page">





            <?php echo  '<h1>Perfil de ' . $name . '</h1>'; ?>

        </div>
    </div>

    <div class="container-contents profile-candidato-info">

        <?php


        echo    '<div class="card" style="width: 75rem;"><div class="card-body">';

        if (!(empty($photo)) && !(empty($photo))) {
            echo '<div class="text-image-candidato"><p class="card-text"><div class="title-candidato-profile"><h1 class="card-title">' . $name . '</h1></div><div class="img-candidato-profile"><img src="../candidatos-views/insert-db/images/' . $photo . '"></div></p></div>';
       
       
        }else{



        if (!(empty($name))) {

            echo   '<h5 class="card-title">' . $name . '</h5>';
        }
    }
        if (!(empty($descricao_perfil))) {
            echo '   <ul class="list-group list-group-flush"><li class="list-group-item">' . $descricao_perfil . '</li>';
        }


        if (!(empty($descricao_faculdade))) {
            echo '<li class="list-group-item">' . $descricao_faculdade . '</li>';
        }

        '
         
            ';
        if (!(empty($descricao_interesse))) {
            echo ' <li class="list-group-item">' . $descricao_interesse . '</li>';
        }

        if (!(empty($type_job))) {
            echo ' <li class="list-group-item">Tipo de trabalho - ' . $type_job . '</li>';
        }

        if (!(empty($time_job))) {
            echo ' <li class="list-group-item">Horário - ' . $time_job . '</li>';
        }

        if (!(empty($estate))) {
            echo ' <li class="list-group-item">Estado - ' . $estate . '</li>';
        }

        if (!(empty($city))) {
            echo ' <li class="list-group-item">Cidade - ' . $city . '</li>';
        }
        if (!(empty($email))) {
            echo ' <li class="list-group-item">Email - ' . $email . '</li>';
        }

        if (!(empty($tel_number))) {
            echo ' <li class="list-group-item">Contato - ' . $tel_number . '</li></ul><div class="card-body button-wpp">
            <a href="https://wa.me/+55' . $tel_number . '?text=Ol%C3%A1%2C+achei+voc%C3%AA+no+RH-Solid%C3%A1rio.+Prazer%2C+me+chamo+' . $userName . '" target="_blank" class="card-link">Chamar no Whatssap</a>
    </div>';
        }




        ?>
    </div>



</body>

</html>