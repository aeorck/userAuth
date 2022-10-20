<?php

if(isset($_POST['submit'])){
    $email = $_POST['email']; //complete this;
    $newpassword = $_POST['passwordd'];//complete this;
    resetPassword($email, $password);
}
$file=fopen("../storage/users.csv", "a");

function resetPassword($email, $password){
   
    if($file){
        while ($row=fgetcsv($file)) {
            $new_details=array($email, $password);
            if($row[1]==$email){
                print_r ($row[1]);
                fputcsv($file,$new_details);
                echo "Password changed successfully";
                header("refresh:1; url=../forms/login.html");
                exit();
            }
            else{
                echo "User does not exist";
                exit();
            }
            
        }
    }



    //open file and check if the username exist inside
    //if it does, replace the password
}


// echo "HANDLE THIS PAGE";
fclose($file);

