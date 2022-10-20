<?php
session_start();
function logout(){
if(session_status() ==  PHP_SESSION_ACTIVE ){
    session_destroy();
    echo "Logout Successful <br>";
    echo "Redirecting to login Page...";
    header("refresh:1; url= ../forms/login.html");
}
    // if(isset(session_start);
    /*
Check if the existing user has a session
if it does
destroy the session and redirect to login page
*/
}

logout();


// echo "HANDLE THIS PAGE";