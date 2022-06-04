<?php
session_start();

include '../../connection-db.php';



$email = $_POST['email'];
$password = $_POST['password'];


// prmetros ds sessoes
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;
//


// Identifica usuário Recrutador

$query_identify_userRh = "SELECT name, email, type_user From users_rh WHERE email = '$email' AND password = '$password' and (type_user = 'Candidato' OR type_user = 'Recrutador');";

$queryIdentifyUserRh = $conn->query($query_identify_userRh);

// Identifica usuário candidato
$query_identify_user = "SELECT name, email, type_user From users WHERE email = '$email' AND password = '$password' and (type_user = 'Candidato' OR type_user = 'Recrutador');";

$queryIdentifyUser = $conn->query($query_identify_user);


while ($query = $queryIdentifyUserRh->fetch_array()) {

    if ($query['type_user'] === 'Recrutador') {

        header("location:../../../rh-views/recrutadores.php");

        exit();
    }
}

while ($query = $queryIdentifyUser->fetch_array()) {

    if ($query['type_user'] === 'Candidato') {

        header("location:../../../candidatos-views/candidatos.php");
        exit();
    }
}

header('location:../../../index.php');
