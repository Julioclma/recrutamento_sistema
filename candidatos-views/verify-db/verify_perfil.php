<?php
$email = $_SESSION['email'];
$id_users = 0;

//variáveis perfil 

$descricao_perfil = '';
$descricao_interesse = '';
$descricao_faculdade = '';
$type_job = '';
$estate = '';
$city = '';
$tel_number = '';


//Encontra ID do usuári
$query_id = "SELECT id_users FROM users WHERE email = '$email'";
$queryId = $conn->query($query_id);

while($queryFindIdUsers = $queryId->fetch_array()){
    $id_users =  $queryFindIdUsers['id_users'];

}

//id do usuário = $id_users

$query_profile_user = "SELECT email, name, descricao_perfil, descricao_interesse, descricao_faculdade, type_job, estate, city, tel_number FROM users, profile WHERE (email = '$email' AND id_profile = '$id_users')";

$queryProfileUser = $conn->query($query_profile_user);


