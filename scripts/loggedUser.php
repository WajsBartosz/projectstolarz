<?php

    $sql = "select * from `users` where `email` like '$_SESSION[login]'";
    $result = $connect->query($sql);
    $_SESSION['user'] = $result->fetch_assoc();
?>