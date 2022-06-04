<?php

session_start();
include '../db/connection-db.php';
include 'verify_recrutadores/verify_recrutadores.php';
include 'select-db/select_candidatos.php';



/*


SELECT name, descricao_perfil, descricao_interesse,type_job,estate
FROM users, profile 
WHERE id_profile = profile_fk;

*/

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
    <title><?php echo $userType ?> - Candidatos</title>
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
                            <a class="nav-link" href="recrutadores.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Meu Perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="rh-candidatos.php">Candidatos</a>
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
            <h1>Candidatos</h1>
        </div>
    </div>

    <div class="container-contents">
        <h1 class="title-rh">Encontre agora o Perfil ideal para sua vaga de trabalho!</h1>

    </div>


    <div class="container-contents container-cards">
        <?php

        while ($candidato = $querySelectCandidatos->fetch_array()) {
            $id_profile = $candidato['id_profile'];
            $photo = $candidato['photo'];
            $nameCandidato = $candidato['name'];
            $descricaoPerfil = (substr($candidato['descricao_perfil'], 0, 100));
            $descricaoInteresse = $candidato['descricao_interesse'];
            $typeJob = $candidato['type_job'];
            $estate = $candidato['estate'];

            echo
            '
        <div class="card card-img-candidatos">' .
                //<img class="card-img-top" src="..." alt="Imagem candidato">
                '<div class="card-body">

                <form action="rh-candidato.php" method="post">
                <input hidden="true" name="id_profile" value="' . $id_profile . '">';

            if (!(empty($photo))) {
                echo '  <div class="block-img-candidatos"><div><img src="../candidatos-views/insert-db/images/' . $photo . '"></div></div>';
            }
            if (!(empty($nameCandidato))) {
                echo '<h3 class="card-title">' . $nameCandidato . '</h3><hr>';
            }

            if (!(empty($descricaoPerfil))) {
                echo '
                <p class="card-text">' . $descricaoPerfil . ' [...]</p><hr>';
            }

            if (!(empty($descricaoInteresse))) {
                echo '  <p class="card-text">' . $descricaoInteresse . '</p><hr>';
            }
            if (!(empty($typeJob))) {
                echo '  <p class="card-text">' . $typeJob . '</p><hr>';
            }

            if (!(empty($estate))) {
                echo ' <p class="card-text">' . $estate . '</p></ul><hr>';
            }

            echo '<div class="btn-card"><button type="submit" class="btn btn-primary">Veja mais</button></form></div>
            </div>
        
    </div>';
        }
        ?>
    </div>
</body>

</html>