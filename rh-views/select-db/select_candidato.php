<?php

$candidatoName = '';

$query_select_candidato = "SELECT email,photo,name, descricao_perfil, descricao_interesse,descricao_faculdade,
type_job,time_job,estate,city,tel_number
FROM users, profile 
WHERE profile_fk = '$id_profile' AND id_profile = '$id_profile'";

$querySelectCandidato = $conn->query($query_select_candidato);

foreach ($querySelectCandidato as $candidato => $value) {
    $email = $value['email'];
    $photo = $value['photo'];
    $name = $value['name'];
    $descricao_perfil = $value['descricao_perfil'];
    $descricao_interesse = $value['descricao_interesse'];
    $descricao_faculdade = $value['descricao_faculdade'];
    $type_job = $value['type_job'];
    $time_job = $value['time_job'];
    $estate = $value['estate'];
    $city = $value['city'];
    $tel_number = $value['tel_number'];
}
