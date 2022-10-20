<?php

session_start();
if(isset($_POST['submit'])){
    $username = $_POST['username'];//finish this line
    $password = $_POST['password'];//finish this
    $email=$_POST['email'];
loginUser($email, $password);

}

function loginUser($email, $password){

    $file=fopen("../storage/users.csv", "r");

    if($file){
        while ($row=fgetcsv($file)) {
            // var_dump($row);
            if ($row[1]==$email && $row[2]==$password) {
                $_SESSION['username']=$row[0];
                echo "Login Success! <br> You will be redirected to your dashboard";
                header("refresh:1; url=../dashboard.php");
                exit();
            }

            elseif($row[1]==$email && $row[2]!=$password){
                echo "Incorrect Password";
                header("refresh:1; url=../forms/login.html");
                exit();
            }


            else{
                echo "Unrecognized credentials.";
                header("refresh:1; url=../forms/login.html");
                
                exit();
            }

            /*
                Finish this function to check if username and password 
            from file match that which is passed from the form
            */
        }
      
    }
    
        echo "Login Failed";
        fclose($file);
}

    

  
// echo "HANDLE THIS PAGE";

