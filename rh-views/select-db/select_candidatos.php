<?php

$id_profile = '';
$photo = '';
$nameCandidato = '';
$descricaoPerfil = '';
$descricaoInteresse = '';
$typeJob = '';
$estate = '';

$query_select_candidatos = "SELECT id_profile, photo, name, descricao_perfil, descricao_interesse,type_job,estate
FROM users, profile 
WHERE id_profile = profile_fk";

$querySelectCandidatos = $conn->query($query_select_candidatos);
