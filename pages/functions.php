<?php 
$res; 
function emptyInput($nick, $email, $license_key, $pwd){
    
if(empty($nick) || empty($email) || empty($license_key) || empty($pwd)){
    $GLOBALS['res'] = true; 
}else{
    $GLOBALS['res'] = false;
}
return $GLOBALS['res'];
}


function userExists($conn, $nick, $email, $license_key, $pwd){
    $sql = "INSERT INTO users (user_nickname, user_email, user_license_key, user_password) values ( ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
   
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ./main.php?error=userexists");
        exit();
    }
    $hash = hash('sha256', $pwd);
    mysqli_stmt_bind_param($stmt, "ssss", $nick, $email, $license_key, $hash);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ./main.php?error=none");
    exit();

}

?>