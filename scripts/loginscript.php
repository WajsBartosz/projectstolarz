<?php
    session_start();
    require_once './connect.php';
    $mail=$_POST['email'];
    $password=sha1($_POST['usersPassword']);
    if($mail=="" || $password==""){
        header("location: ../login.php");
    }
    $sql="select * from `users` where `email` like '$mail' and `password` like '$password'";
    $result=$connect->query($sql);
    if($result->num_rows>0 || $result->num_rows==1){
    $user=$result->fetch_assoc();
    $_SESSION['login']=$user['email'];
    $_SESSION['id']=$user['id'];
    header("location: ../search.php");
    }else{
        header("location: ../login.php?");
    }

?>