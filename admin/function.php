<?php
// Go to db-conn file
include "../php-connect/db-conn.php";

session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    switch($_POST['submit']){
        case "admin-log-in":
            adminLogin();
            break;
            }
        }

function adminLogin(){
    if(isset($_POST['email']) !== isset($_POST['password'])) {
        echo "Invalid Credentials... please try again";
        return;
    }
    
    //Sanitize the user input first
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $email = test_input($_POST['email']);
    $password = test_input($_POST['password']);

}



 //Hashing the password
 $password = md5($password);

 $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
 $result = mysqli_query($conn, $sql);
 
 if(mysqli_num_rows($result) === 1){
     //the username must be unique
     $row = mysqli_fetch_assoc($result);
     // Assigning to SESSION
     if($row['password']=== $password){
         $_SESSION['username'] = $row['username'];                
         $_SESSION['id'] = $row['id'];
         $_SESSION['name'] = $row['name'];

         header("Location: home.php");
     }else{
        header("Location: admin-login.php?error=Incorrect username or password");
    }
}else{
   header("Location: admin-login.php?error=Incorrect username or password");
}
?>