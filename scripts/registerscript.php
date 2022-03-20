<?php 
require './connect.php';
$mail=$_POST['email'];
$password=$_POST['password'];
$passwordRepeat=$_POST['passwordRepeat'];
$birthDate=$_POST['birthDate'];
$sexTMP=$_POST['sex'];
$height=$_POST['height'];

if($sexTMP=='k'){
    $sex="female";
}else{
    $sex="male";
}


$passwordLength=strlen($password);
$smallLetter=false;
$bigLetter=false;
$number=false;
$special=false;

for($i=0;$i<$passwordLength;$i++){
    if($password[$i]>='a' and $password[$i]<='z') $smallLetter=true;
    if($password[$i]>='A' and $password[$i]<='Z') $bigLetter=true;
    if($password[$i]>='0' and $password[$i]<='9') $number=true;
}
if(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/',$password)){
    $special=true;
}

if($passwordLength<=7 || $smallLetter==false || $bigLetter==false || $number==false || $special==false){
    header("location: ../register.php?error=1");
}
if($password!=$passwordRepeat){
    header("location: ../register.php?error=2");
}
if($mail==""){
    header("location: ../register.php?error=3");
}
if($birthDate==""){
    header("location: ../register.php?error=4");
}
if($sex==""){
    header("location: ../register.php?error=5");
}
if($height==""){
    header("location: ../register.php?error=6");
}
$year=substr($birthDate,0,4);
if(date("Y")-$year<=17){
    header("location: ../register.php?error=7");
}
if($height<1 && $height>250){
    header("location: ../register.php?error=8");
}
$encryptedPassword=sha1($password);
$sql="INSERT INTO `users`(`email`, `password`,`birthDate`, `height`, `sex`) VALUES ('$mail','$encryptedPassword','$birthDate',$height,'$sex');";
$connect->query($sql);
header("location: ../register.php");
?>