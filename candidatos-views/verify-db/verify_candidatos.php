<?php
if (empty($_SESSION['email']) && empty($_SESSION['email'])) {

    header('location:../index.php');
} else {

    $email = $_SESSION['email'];

    $userName = '';
    $userType = '';

    $query_select_user_candidato = "SELECT name, type_user FROM users WHERE email = '$email'";

    $querySelectUserCandidato = $conn->query($query_select_user_candidato);

    if (mysqli_num_rows($querySelectUserCandidato) > 0) {
        while ($userCandidato = $querySelectUserCandidato->fetch_array()) {

            $userName = $userCandidato['name'];
            $userType = $userCandidato['type_user'];
        }
    } else {
        echo 'error!';
    }
}
