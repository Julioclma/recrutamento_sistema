<?php

include '../../connection-db.php';

//Quando for usuário candidato, ele irá adicionar também inserir dentro de uma tabela
// Profile

$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];
$profile = $_POST['profile'];
$profile_fk = 1;

//usuários candidatos

//inserindo no profile
$query_profile = "INSERT INTO profile (descricao_perfil) VALUES ('Ola, eu sou o ...')";

$query_profile_select = "SELECT id_profile FROM profile ORDER BY id_profile DESC limit 1";

$queryProfileSelect = $conn->query($query_profile_select);


//pega o valor da chave estrangeira pelo id da tabela profile
if ($queryProfileSelect) {
    while ($profile_values = $queryProfileSelect->fetch_array()) {

        $profile_fk = ($profile_values['id_profile'] + 1);
    }
}


//inserindo na users

$query_users_verify_exist = "SELECT * FROM users WHERE email = '$email'";
$QueryUsersVerifyExist = $conn->query($query_users_verify_exist);

$query_users_rh_verify_exist = "SELECT * FROM users_rh WHERE email = '$email'";
$QueryUsersRhVerifyExist = $conn->query($query_users_rh_verify_exist);


$query_users = "INSERT INTO users (email, name, password, type_user, profile_fk) VALUES ('$email', '$name', '$password', '$profile', '$profile_fk')";

//usuários recrutadores

$query_recrutadores = "INSERT INTO users_rh (email, name, password, type_user) VALUES ('$email', '$name', '$password', '$profile')";


if ($profile === 'Candidato') {

    if (mysqli_num_rows($QueryUsersVerifyExist) > 0 || mysqli_num_rows($QueryUsersRhVerifyExist) > 0) {
        echo 'Este email ja foi cadastrado, tente com outro!';
        echo '<a href="../../../registrar.php">Voltar</a>';
    } else {

        $queryProfile = $conn->query($query_profile);
        $queryUsers = $conn->query($query_users);
        header('Location: ../../../index.php');
    }
} else {
    if (mysqli_num_rows($QueryUsersVerifyExist) > 0 || mysqli_num_rows($QueryUsersRhVerifyExist) > 0) {
        echo 'Este email ja foi cadastrado, tente com outro!';
        echo '<a href="../../../registrar.php">Voltar</a>';
    } else {

        $queryRecrutadores = $conn->query($query_recrutadores);
        header('Location: ../../../index.php');
    }
}
