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
        $eye = $_POST
    }
    header('location: ../user.php');
?>