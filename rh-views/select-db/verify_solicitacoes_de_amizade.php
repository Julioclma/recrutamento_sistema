<?php

$select__friends_users_and_rhusers = "SELECT id_friends, email_user_rh
FROM  friends_users_and_rhusers 
WHERE email_user_candidato = '$email'
AND accepted = 'no'";

$selectFriendsUsersAndRhusers = $conn->query($select__friends_users_and_rhusers);
