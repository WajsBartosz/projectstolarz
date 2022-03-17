<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='./styles/login.css'>
    <link rel='icon' href='./images/favicon_zigger.png'>
    <title>Rejestracja</title>
</head>
<body>
    <div class='main'>
        <img src='./images/logo_zigger.png' width='250px'>
        <form action='./scripts/registerscript.php'>
            <label>E-mail:</label><br>
            <input type='mail' name='email' class='formInputs'><br>
            <label> Hasło: </label><br>
            <input type='password' name='password' class='formInputs'><br>
            <label> Powtórz hasło: </label><br>
            <input type='password' name='passwordRepeat' class='formInputs'><br>
            <label> Data urodzenia</label><br>
            <input type='date' name='birthDate' class='formInputs'><br>
            <div class='sex'>
                <label>Płeć:</label><br>
                K<input type='radio' name='sex' value='k' class='radio'>
                M<input type='radio' name='sex' value='m' class='radio'>
            </div>
            <div class='height'>
                <label>Wzrost[cm]:</label><br>
                <input type='number' name='height' class='heightInput'>
            </div>
            <input type='submit' value='zarejestruj' class='submitBut'>
        </form>
        Lub <a href='login.php'> Zaloguj się </a>
    </div>
</body>
</html>