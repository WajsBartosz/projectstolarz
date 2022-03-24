<!DOCTYPE html>
<?php 
session_start();
if(!isset($_SESSION['login'])){
    header("location: ./login.php");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='./styles/users.css'>
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
        <div class='profile'>
            <h3> Profil </h3>
            <hr>
            <?php
                require_once('./scripts/connect.php');
                require_once('./scripts/loggedUser.php');
                $eyes = array('Brązowe','Zielone','Niebieskie','Szare','Piwne');
                $hair = array('Jasne','Ciemne','Inne');
            ?>
            <div class='edit'>
                <form action='./scripts/editUserInfo.php' method='post' enctype='multipart/form-data'>
                    <div class='editOne'>
                        <label>Zdjęcie:</label>
                        <img src='./userPhotos/profilePicture_id<?php echo $_SESSION['user']['id']; ?>.png' class='profileImage'>
                        <input type='file' name='profilePicture'>
                    </div> 
                    <div class='editOne'>
                        <label>Imię: <input type='text' class='input' name='firstname' value=<?php  ?>></label>
                    </div>
                    <div class='editOne'>
                        <label>Nazwisko: <input type='text' class='input' name='surname' value=<?php  ?>></label>  
                    </div>
                    <div class='editOne'>
                        <label>Wzrost:  <input type='number' class='input' name='height' min="1" max="250" value=<?php  ?>></label>
                    </div>
                    <div class='editOne'>
                        <label>Płeć:</label>
                        <input type='radio' class='radio' name='sex' value='female'> Kobieta
                        <input type='radio' class='radio' name='sex' value='male'> Mężczyzna
                    </div>
                    <div class='editOne'>
                        <label>Kolor oczu:</label>
                        <?php
                        for($i=0; $i<count($eyes); $i++)
                            echo "<input type='radio' class='radio' name='eyeColor' value='$eyes[$i]'> $eyes[$i]";  
                        ?>
                    </div>
                    <div class='editOne'>
                        <label>Kolor włosów:</label>
                        <?php
                        for($i=0; $i<count($hair); $i++)
                            echo "<input type='radio' class='radio' name='eyeColor' value='$hair[$i]'> $hair[$i]";  
                        ?>
                    </div>
                    <div class='editOne'>
                        <label>Kraj pochodzenia:</label>
                        <div class="custom-select">
                            <select name='country' class='selekt' value=<?php  ?>>
                                <?php 
                                    $sql_countries = 'select * from `countries`';
                                    $result = $connect->query($sql_countries);
                                    foreach($result as $key){
                                        echo "<option>$key[country_name]</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class='editOne'>
                        <input type='submit' value='AKTUALIZUJ' name='submitButton' class='submitButton'>
                    </div>
                </form>
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