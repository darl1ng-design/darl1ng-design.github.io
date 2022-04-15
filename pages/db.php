<?php 
$servername = 'localhost'; 
$username = 'root';
$pass = '';
$dbname = 'pvpbooster';

$conn = mysqli_connect($servername, $username, $pass, $dbname);
if(!$conn){
    die("Connection failed." . mysqli_connect_erro());
}
else{
    echo 'connected to mysql!';
}
//sprawdzic czy przez formularz na stronie sa przesylane dane do bazy danych 



//mysqli_close($conn);
?>