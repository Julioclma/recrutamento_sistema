<?php

$idRh = '';
$fk_candidato = '';

$id_user_rh = "SELECT id_users_rh FROM users_rh WHERE email = '$email'";

$idUserRh = $conn->query($id_user_rh);

//Pegar ID DO RECRUTADOR
foreach ($idUserRh as $id_user_rh => $idUserRh) {
    $idRh = $idUserRh['id_users_rh'];
}

//PEGAR ID DO USUARIO
$query_take_id_user = "SELECT id_users FROM users WHERE email = '$friendEmail'";

$queryTakeIdUser = $conn->query($query_take_id_user);

foreach ($queryTakeIdUser as $users => $user) {
    $fk_candidato = $user['id_users'];
}




$query_select_messages = "SELECT de, para, mensagem, horario FROM mensagem WHERE (fk_recrutador = '$idRh' AND fk_candidato = '$fk_candidato') ORDER BY horario";

$querySelectMessages = $conn->query($query_select_messages);
