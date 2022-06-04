<?php

$select_my_friends = "SELECT id_friends, email_user_candidato
FROM  friends_users_and_rhusers 
WHERE email_user_rh = '$email'
AND accepted = 'yes'";

$selectMyFriends = $conn->query($select_my_friends);






