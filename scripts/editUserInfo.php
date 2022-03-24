<?php
    //print_r($_POST);
    session_start();
    if($_POST['submitButton']){
        $img_tmp = $_FILES['profilePicture']['tmp_name'];
        move_uploaded_file($img_tmp,"../userPhotos/profilePicture_id".$_SESSION['user']['id'].".png");
        
        $name = $_POST['firstname'];
        $surname = $_POST['surname'];
        $height = $_POST['height'];
        $sex = $_POST['sex'];
        $eye = $_POST['eyeColor'];
        $hair = $_POST['hairColor'];
        $country = $_POST['country'];

        $user = $_SESSION['user'];   

        require_once("./connect.php");
        $sql = "update `users` set `name`='$name', `surname`='$surname', `height`='$height', `sex`='$sex', `eye color`='$eye', `country`='$country', `hair color`='$hair' where `id` like '$user[id]'";
        echo $sql;
        $result = $connect->query($sql);
    }
    header('location: ../user.php');
?>