<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-nav-bar">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Contato</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="">Sobre nós</a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>


    <div class="container-name-page">
        <div class="name-page">
            <h1>Registre-se como candidato ou recrutador</h1>
        </div>
    </div>
    <!--Formulário para criar usuário tipos = recrutador/candidato -->
    <div class="form-create-account">
        <h1>Registrar</h1>
        <div id="form-login">
            <form method="post" action="db/post/validation-register-db/create-account-validation.php">

                <label>Email</label>
                <input type="email" placeholder="insira seu email ..." name="email">
                <br><br>
                <label>Nome</label>
                <input type="text" placeholder="insira seu nome ..." name="name">
                <br><br>
                <label>Senha</label>
                <input type="password" placeholder="Digite sua senha ..." name="password">

                <br><br>
                <legend>Você é candidato ou um recrutador?</legend>
                <br>
                <div>
                    <input type="radio" name="profile" value="Recrutador">
                    <label for="Recrutador">Recrutador</label>
                </div>
                <br>
                <div>
                    <input type="radio" name="profile" value="Candidato">
                    <label for="Candidato">Candidato</label>
                </div>
                <br>
                <button type="submit">Criar conta</button>
            </form>

        </div>
    </div>

</body>

</html>