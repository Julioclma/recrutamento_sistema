<?php

if (empty($_SESSION['email']) && empty($_SESSION['email'])) {

header('location:../index.php');
} else {



$email = $_SESSION['email'];



$userName = '';
$userType = '';


$query_select_user_rh = "SELECT name, type_user FROM users_rh WHERE email = '$email'";

$querySelectUserRh = $conn->query($query_select_user_rh);

if (mysqli_num_rows($querySelectUserRh) > 0) {
    while ($userRh = $querySelectUserRh->fetch_array()) {

        $userName = $userRh['name'];
        $userType = $userRh['type_user'];
    }
}
}

?>