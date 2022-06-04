<?php

session_start();
$id_friend = $_POST['id_friends'];
$friendEmail = $_POST['email_user_candidato'];

$_SESSION['id_friends'] = $id_friend;
$_SESSION['email_user_candidato'] = $friendEmail;
$email = $_SESSION['email'];
include '../../db/connection-db.php';

include '../verify-db/verify_candidatos.php';

$mensagem = $_POST['mensagem'];
$friendEmail = $_POST['email_user_candidato'];

$idRh = '';
$fk_candidato='';


$id_user_rh = "SELECT id_users_rh FROM users_rh WHERE email = '$email'";

$idUserRh = $conn->query($id_user_rh);

//Pegar id recrutador
foreach ($idUserRh as $id_user_rh => $idUserRh) {
    $idRh = $idUserRh['id_users_rh'];
}

//PEGAR ID USUARIO
$query_take_id_user = "SELECT id_users, name FROM users WHERE email = '$friendEmail'";

$queryTakeIdUser = $conn->query($query_take_id_user);

foreach ($queryTakeIdUser as $users => $user) {
    $fk_candidato = $user['id_users'];

}


$query_send_message = "INSERT INTO mensagem (fk_recrutador, fk_candidato, de, para, mensagem)
VALUES ('$idRh',' $fk_candidato', '$email', '$friendEmail', '$mensagem')";

$querySendMessage = $conn->query($query_send_message);

if($querySendMessage){
    header('Location:../recrutador-chat.php');
}else{
    echo 'erro ao enviar mensagem';
}
