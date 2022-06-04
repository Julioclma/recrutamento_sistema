<?php

include '../../db/connection-db.php';

$email_user_rh = $_POST['email_user_rh'];
$email_user_candidato = $_POST['email_user_candidato'];


//SELECT friends_users_and_rhusers to verify that is a friend

$select_friends_users_and_rhusers = "SELECT * FROM friends_users_and_rhusers WHERE
email_user_rh = '$email_user_rh' AND email_user_candidato = '$email_user_candidato'
";

$selectFriendsUsersAndRhUsers = $conn->query($select_friends_users_and_rhusers);

//Insert INTO friends_users_and_rhusers

$into_friends_users_and_rhusers = "INSERT INTO friends_users_and_rhusers (email_user_rh, email_user_candidato, accepted) 
VALUES('$email_user_rh','$email_user_candidato','no')";

$intoFriendsUsersAndRhUsers = $conn->query($into_friends_users_and_rhusers);


if (mysqli_num_rows($selectFriendsUsersAndRhUsers) <= 0) {
    if ($intoFriendsUsersAndRhUsers) {
        echo 'Pedido de amizade enviado com sucesso!';
    }
} else {
    "Pedido de amizade já enviado";
}
