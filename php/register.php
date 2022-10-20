<?php
// session_start;

if(isset($_POST['submit'])){
    $username = $_REQUEST['fullname'];
    $email = $_REQUEST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    $file=fopen("../storage/users.csv", "a");
    $details=array($username, $email, $password);

    //save data into the file
    fputcsv($file,$details);
    echo "User Successfully registered<br>";
    echo "Redirecting you to the login page...";
    header("refresh:3; url=../forms/login.html");
    fclose($file);
}
// echo "HANDLE THIS PAGE";
