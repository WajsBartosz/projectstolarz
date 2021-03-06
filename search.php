<!DOCTYPE html>
<?php session_start();
if(!isset($_SESSION['login'])){
    header("location: ./login.php");
}
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
        <a href='search.php' class='link active'>Znajdź parę</a>
        <a href='chat.php' class='link'>Czat</a>
        <a href='user.php' class='link'>Profil</a>
        <a href='./scripts/logout.php' class='link'>Wyloguj się</a>  
    </div>
    <div class='main'>
        <div class='filters'>
            <h4>Filtry</h4>
            <hr>
            <form action='./search.php/' method='post'>
                <div class='filterButton'>Oczy</div>
                <div class='filterTab'>
                    <div class='inputFilter eyes'><input type='checkbox' name='eyes[]' value='brown'> Brązowe</div>
                    <div class='inputFilter eyes'><input type='checkbox' name='eyes[]' value='green'> Zielone</div>
                    <div class='inputFilter eyes'><input type='checkbox' name='eyes[]' value='blue'> Niebieskie</div>
                    <div class='inputFilter eyes'><input type='checkbox' name='eyes[]' value='grey'> Szare</div>
                    <div class='inputFilter eyes'><input type='checkbox' name='eyes[]' value='beer'> Piwne</div>
                </div>
                <div class='filterButton'>Wzrost</div>
                <div class='filterTab'>
                   <div class='inputFilter height'>Minimalny wzrost:<input type='number' name='heightMin'></div>
                   <div class='inputFilter height'>Maksymalny wzrost:<input type='number' name='heightMax'></div>
                </div>
                <div class='filterButton'>Włosy</div>
                <div class='filterTab'>
                     <div class='inputFilter eyes'><input type='checkbox' name='hair[]' value='light'> Jasne</div>
                     <div class='inputFilter eyes'><input type='checkbox' name='hair[]' value='dark'> Ciemne</div>
                     <div class='inputFilter eyes'><input type='checkbox' name='hair[]' value='different'> Inne</div>
                </div>
                <div class='filterButton'>Wiek</div>
                <div class='filterTab'>
                    <div class='inputFilter age'>Minimalny wiek:<input type='number' name='ageMin'></div>
                   <div class='inputFilter age'>Maksymalny wiek:<input type='number' name='ageMax'></div>
                </div>
            </form>
        </div>
        <div class='searchEngine'> 
            <h4>Użytkownicy</h4>
            <hr>
            <div class='usersShow'>
                <?php
                require_once('./scripts/connect.php');
                require_once('./scripts/loggedUser.php');
                $sql = 'select * from `users` where `name` is not null and `surname` is not null and `sex` is not null and `eye color` is not null and `country` is not null and `hair color` is not null';
                $result = $connect->query($sql);
                $counter=0;
                foreach($result as $key){
                    if($key['id']==$_SESSION['user']['id'])
                        continue;
                    echo "<div class='usersTab'><img src='./userPhotos/profilePicture_id$key[id].png' width=100%>$key[name] $key[surname]</div>";

                $counter++;
                }

                $rest = $counter%3;
                if($rest==2)
                    echo "<div class='usersTab gapFill'></div>";
                else if($rest==1){
                    echo "<div class='usersTab gapFill gapFillSecond'></div>";
                    echo "<div class='usersTab gapFill gapFillSecond'></div>";
                }
                ?>
            </div>
        </div>
    </div>
    <footer>
        Wszelkie prawa zastrzeżone 	&copy;
    </footer>
    <script src='./scripts/navbarActive.js'></script>
    <script src='./scripts/FiltersOpen.js'></script>
</body>
</html>