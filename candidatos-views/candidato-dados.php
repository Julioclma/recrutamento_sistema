<?php
session_start();

include '../db/connection-db.php';
include 'verify-db/verify_candidatos.php';
include 'verify-db/verify_perfil.php';




while ($queryProfile = $queryProfileUser->fetch_array()) {



    $descricao_perfil = $queryProfile['descricao_perfil'];
    $descricao_interesse = $queryProfile['descricao_interesse'];
    $descricao_faculdade = $queryProfile['descricao_faculdade'];
    $type_job = $queryProfile['type_job'];
    $estate = $queryProfile['estate'];
    $city = $queryProfile['city'];
    $tel_number = $queryProfile['tel_number'];
}
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
    <title><?php echo $userType ?> - Meus Dados</title>
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
            <h1>Meus Dados</h1>
        </div>
    </div>

    <div class="container-contents candidato-perfil">
        <h1>Preencha suas informações</h1>
        <br>

       
            <?php

echo         '<form method="POST" action="insert-db/date-upload-image.php" enctype="multipart/form-data">
<input hidden="true" type="hidden" name="id_users" value="' . $id_users . '">
  <label for="conteudo">Enviar imagem:</label>
  <input type="file" name="pic" accept="images/*" class="form-control">

  
    <button type="submit" class="btn btn-success">Enviar imagem</button>
 
</form>';

            echo
            ' <form method="post" action="insert-db/update_profile_candidatos.php"><div class="card" style="width: 75rem;">
<input hidden="true" type="hidden" name="id_users" value="' . $id_users . '">


<ul class="list-group list-group-flush">
<li class="list-group-item"><label><h5>Me diga mais sobre você</h5></label>
<textarea name="descricao_perfil" value="' . $descricao_perfil . '"  rows="8" cols="150">' . $descricao_perfil . '</textarea>
</li>
<li class="list-group-item"><label><h5>Quais são seus interesses?</h5></label>
<textarea name="descricao_interesse" value="' . $descricao_interesse . '"  rows="8" cols="150">' . $descricao_interesse . '</textarea>
</li>
<li class="list-group-item"><label><h5>Nivel de Formação</h5></label>
<select type="text" name="descricao_faculdade">
<option type="text" name="descricao_faculdade" value="Ensino médio Completo">Ensino Médio Completo</option>
<option type="text" name="descricao_faculdade" value="Ensino Técnico Completo em TI">Ensino Técnico Completo em TI</option>
<option type="text" name="descricao_faculdade" value="Ensino Superior Incompleto em TI">Ensino Superior Incompleto em TI</option>
<option type="text" name="descricao_faculdade" value="Ensino Superior Completo em TI">Ensino Superior Completo em TI</option>
</select></li>
<li class="list-group-item">
<label><h5>Tipo de procura?</h5></label>
<select name="type_job">
<option type="text" name="type_job" value="Estágio">Estágio</option>
<option type="text" name="type_job" value="Trainee">Trainee</option>
<option  type="text" name="type_job" value="Júnior">Júnior</option>
<option type="text" name="type_job" value="Pleno">Pleno</option>
<option type="text" name="type_job" value="Sênior">Sênior</option>
</select></li>
<li class="list-group-item">
<label><h5>Horário de trabalho?</h5></label>
<select name="time_job">
<option type="text" name="time_job" value="Manhã">Manhã</option>
<option  type="text" name="time_job" value="Tarde">Tarde</option>
<option type="text" name="time_job" value="Noite">Noite</option>
<option type="text" name="time_job" value="A combinar">A combinar</option>
</select></li>
<li class="list-group-item">
<label><h5>Estado?</h5></label>
<select name="estate">
<option type="text" name="estate" value="AM">AM</option>
<option type="text" name="estate" value="RR">RR</option>
<option  type="text" name="estate" value="AC">AC</option>
<option type="text" name="estate" value="RO">RO</option>
<option type="text" name="estate" value="AP">AP</option>
<option type="text" name="estate" value="PA">PA</option>
<option type="text" name="estate" value="MT">MT</option>
<option type="text" name="estate" value="MS">MS</option>
<option type="text" name="estate" value="GO">GO</option>
<option type="text" name="estate" value="TO">TO</option>
<option type="text" name="estate" value="MA">MA</option>
<option type="text" name="estate" value="PI">PI</option>
<option type="text" name="estate" value="CE">CE</option>
<option type="text" name="estate" value="BA">BA</option>
<option type="text" name="estate" value="PE">PE</option>
<option type="text" name="estate" value="AL">AL</option>
<option type="text" name="estate" value="SE">SE</option>
<option type="text" name="estate" value="PB">PB</option>
<option type="text" name="estate" value="RN">RN</option>
<option type="text" name="estate" value="MG">MG</option>
<option type="text" name="estate" value="ES">ES</option>
<option type="text" name="estate" value="RJ">RJ</option>
<option type="text" name="estate" value="SP">SP</option>
<option type="text" name="estate" value="PR">PR</option>
<option type="text" name="estate" value="SC">SC</option>
<option type="text" name="estate" value="RS">RS</option>
</select>
</li>
<li class="list-group-item">
<label><h5>Qual sua cidade?</h5></label>
<input type="text" name="city" value="' . $city . '">
</li>
<li class="list-group-item">
<label><h5>Número para contato (De preferência com whatssap)?</h5></label>
<input type="text" name="tel_number" value="' . $tel_number . '"></li>';
            ?>

            <button class="btn-candidato-perfil" type="submit">Salvar Informações</button>
    </div>
    </form>

    </div>

</body>

</html>