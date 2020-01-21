<?php
    require('functions.php');

    if (isset($_GET['users'])){
        $user = getUser($pdo);
    }

    echo json_encode($user);