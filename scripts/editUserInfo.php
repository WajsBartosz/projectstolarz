<?php
    //print_r($_POST);
    if($_POST['submitButton']){
        $img_tmp = $_FILES['profilePicture']['tmp_name'];
        echo "<br>";
        print_r($img_tmp);
        move_uploaded_file($img_tmp,'../userPhotos/image.png');
    }
?>