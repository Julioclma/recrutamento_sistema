<?php

include '../../db/connection-db.php';

$id_friends = $_POST['id_friends'];
$email_user_rh = $_POST['email_user_rh'];
$accept_refuse = $_POST['btn-action'];

if ($accept_refuse == 'accept') {

    $update_friends_users_and_rhusers = "UPDATE friends_users_and_rhusers
SET accepted = 'yes'
WHERE id_friends = '$id_friends' AND email_user_rh = '$email_user_rh'";

    $updateFriendsUsersAndRhusers = $conn->query($update_friends_users_and_rhusers);

    if ($updateFriendsUsersAndRhusers) {
        header('Location:../solicitacoes-de-amizade.php');
    } else {
        'erro em aceitar convite';
    }
} else if ($accept_refuse == 'refuse') {

    $delete_friends_users_and_rhusers = "DELETE FROM friends_users_and_rhusers WHERE id_friends = '$id_friends' AND email_user_rh = '$email_user_rh'";

    $deleteFriendsUsersAndRhusers = $conn->query($delete_friends_users_and_rhusers);

    if ($deleteFriendsUsersAndRhusers) {

        header('Location:../solicitacoes-de-amizade.php');
    } else {
        'erro em rejeitar convite';
    }
}
