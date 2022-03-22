<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['login'])){
    header("location: ./user.php");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='./styles/login.css'>
    <link rel='icon' href='./images/favicon_zigger.png'>
    <title>Logowanie</title>
</head>
<body>
    <div class='main'>
        <div class='logo'>
            <img src='./images/logo_zigger.png' width='320px'>
        </div>
        <div class='form'>
            <form action='./scripts/loginscript.php' method='POST'>
                <label>E-mail:</label><br>
                <input type='mail' name='email' class='formInputs'><br>
                <label> Hasło: </label><br>
                <input type='password' name='usersPassword' class='formInputs'><br>
                <input type='submit' value='zaloguj' class='submitBut'>
            </form>
            Lub <a href='register.php'> Zarejestruj się </a>
        </div>
      </div>
</body>
</html>