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
    <?php 
        require './scripts/errors.php';
    ?>
    <title>Rejestracja</title>
</head>
<body>
    <div class='main'>
        <img src='./images/logo_zigger.png' width='250px'>
        <form action='./scripts/registerscript.php' method='POST'>
            <label>E-mail:</label><br>
            <input type='mail' name='email' class='formInputs'><br>
            <div class='error'>test</div>
            <label> Hasło: </label><br>
            <input type='password' name='password' class='formInputs' id='password'><br>
            <div class='error'>test</div>
            <div class='passwordReq'>
                <img src='./images/heart_zigger_red.png' class='passSign'>min. 8 znaków<br>
                <img src='./images/heart_zigger_red.png' class='passSign'>min. 1 wielka litera<br>
                <img src='./images/heart_zigger_red.png' class='passSign'>min. 1 cyfra<br>
                <img src='./images/heart_zigger_red.png' class='passSign'>min. 1 znak specjalny
            </div>
            <label> Powtórz hasło: </label><br>
            <input type='password' name='passwordRepeat' class='formInputs'><br>
            <div class='error'>test</div>
            <label> Data urodzenia</label><br>
            <input type='date' name='birthDate' class='formInputs'><br>
            <div class='error'>test</div>
            <div class='sex'>
                <label>Płeć:</label><br>
                K<input type='radio' name='sex' value='k' class='radio' checked>
                M<input type='radio' name='sex' value='m' class='radio'>
            </div>
            <div class='height'>
                <label>Wzrost[cm]:</label><br>
                <input type='number' name='height' class='heightInput' min="1" max="250">
            </div>
            <input type='submit' value='zarejestruj' class='submitBut' id='submitBut'>
        </form>
        Lub <a href='login.php'> Zaloguj się </a>
    </div>
    <script src='./scripts/passwordReq.js'></script>
    <script src='./scripts/registerInputs.js'></script>
</body>
</html>