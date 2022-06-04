<?php
session_start();

include '../db/connection-db.php';
include 'verify-db/verify_candidatos.php';
include 'verify-db/verify_solicitacoes_de_amizade.php';
include 'verify-db/verify_my_friends.php';



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
        <p class="text-justify">Solicitações de amizades</p>

        <?php


        foreach ($selectFriendsUsersAndRhusers as $friends => $friend) {

            $idFriend = $friend['id_friends'];
            $email_user_friend = $friend['email_user_rh'];


            echo '<form action="insert-db/update_to_accept_friend.php" method="post"><input hidden="true" name="id_friends" value="' . $idFriend . '"><br>';
            echo  '<input hidden="true" name="email_user_rh" value="' . $email_user_friend . '"> 
            <div class="card-body">' . $email_user_friend . '
            <button type="submit" class="btn btn-primary" value="accept" name="btn-action">Aceitar</button>
            <button type="submit" class="btn btn-primary" value="refuse" name="btn-action">Recusar</button>
            </div></form>';;
        }

        ?>

    </div>


    <div class="container-contents">
        <p class="text-justify">Seus amigos</p>

        <?php

        

        foreach ($selectMyFriends as $friends => $friend) {
            $friendId = $friend['id_friends'];
            $friendEmail = $friend['email_user_rh'];

            echo '<div class="card-body my-friends">
            <form action="candidato-chat.php" method="post">
            <input hidden="true" name="id_friends" value="' . $friendId . '">
            
            ';
            
            echo  '<input hidden="true" name="email_user_rh" value="' . $friendEmail . '"> ' . $friendEmail . '
            <button type="submit" class="btn btn-primary send-message" value="send-message" name="btn-action">Enviar Mensagem</button>
            <button type="submit" class="btn btn-primary exclude-friend" value="exclude-friend" name="btn-action">Excluir</button>
            </form>
            </div>';
        }
        ?>


    </div>

</body>

</html>