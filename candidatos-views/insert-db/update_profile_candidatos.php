<?php
include '../../db/connection-db.php';

$id_users = $_POST['id_users'];
$descricao_perfil = $_POST['descricao_perfil'];
$descricao_interesse = $_POST['descricao_interesse'];
$descricao_faculdade = $_POST['descricao_faculdade'];
$type_job = $_POST['type_job'];
$time_job = $_POST['time_job'];
$estate = $_POST['estate'];
$city = $_POST['city'];
$tel_number = $_POST['tel_number'];


$query_update_profile = "UPDATE profile SET
descricao_perfil='$descricao_perfil',
descricao_interesse='$descricao_interesse',
descricao_faculdade='$descricao_faculdade',
type_job='$type_job',
time_job='$time_job',
estate='$estate',
city='$city',
tel_number='$tel_number' 
WHERE id_profile = '$id_users'";


$queryUpdateProfile = $conn->query($query_update_profile);

if($queryUpdateProfile){

    echo 'Perfil atualizado com sucesso';
}else{
    echo 'Error!';
}



