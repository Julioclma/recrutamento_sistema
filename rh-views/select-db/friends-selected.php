<?php

$select_friends_users_and_rhusers = "SELECT * FROM friends_users_and_rhusers WHERE
email_user_rh = '$emailRecrutador' AND email_user_candidato = '$email'
";

$selectFriendsUsersAndRhUsers = $conn->query($select_friends_users_and_rhusers);