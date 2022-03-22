<!DOCTYPE html>
<?php 
session_start();
//if(!isset($_SESSION['login'])){
//    header("location: ./login.php");
//}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='./styles/search.css'>
    <title>Zigger</title>
    <link rel='icon' href='./images/favicon_zigger.png'>
    
</head>
<body>
    <div id='navbar'>
        <a href='#' class='responsiveButton'>
            <span class='element'></span>
            <span class='element'></span>
            <span class='element'></span>
        </a>
        <img src='./images/logo_zigger.png' class='logo'>
        <a href='search.php' class='link'>Znajdź parę</a>
        <a href='chat.php' class='link'>Czat</a>
        <a href='user.php' class='link active'>Profil</a>
        <a href='./scripts/logout.php' class='link'>Wyloguj się</a> 
    </div>
    <div class='main'>
        
    </div>
    <footer>
        Wszelkie prawa zastrzeżone 	&copy;
    </footer>
    <script src='./scripts/navbarActive.js'></script>
    <script src='./scripts/FiltersOpen.js'></script>
</body>
</html>