<?php 
    if(isset($_GET['error'])){
        if($_GET['error']==1){
            echo "<script>alert(\"Hasło nie spełnia wymagań\");
            location.href=\"./register.php\";
            </script>";  
        }
        if($_GET['error']==2){
            echo "<script>alert(\"Hasła nie są takie same\");
            location.href=\"./register.php\";
            </script>";    
        }
        if($_GET['error']==3){
            echo "<script>alert(\"Proszę podać E-mail\");
            location.href=\"./register.php\";
            </script>";    
        }
        if($_GET['error']==4){
            echo "<script>alert(\"Proszę podać datę urodzenia\");
            location.href=\"./register.php\";
            </script>";    
        }
        if($_GET['error']==5){
            echo "<script>alert(\"Proszę podać płeć\");
            location.href=\"./register.php\";
            </script>";    
        }
        if($_GET['error']==6){
            echo "<script>alert(\"Proszę podać wzrost\");
            location.href=\"./register.php\";
            </script>";    
        }
        if($_GET['error']==7){
            echo "<script>alert(\"Jesteś za młody aby założyć konto na portalu Zigger\");
            location.href=\"./register.php\";
            </script>";    
        }
        if($_GET['error']==8){
            echo "<script>alert(\"Zły wzrost\");
            location.href=\"./register.php\";
            </script>";    
        }
    }
?>