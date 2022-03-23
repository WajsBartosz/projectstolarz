<?php
    //print_r($_POST);
    session_start();
    if($_POST['submitButton']){
        $img = $_FILES['profilePicture']['name'];
        $img_tmp = $_FILES['profilePicture']['tmp_name'];
        echo "<br>";
        print_r($img_tmp);
        move_uploaded_file($img_tmp,"../userPhotos/profilePicture_id".$_SESSION['user']['id'].".png");
    }
    header('location: ../user.php');
?>