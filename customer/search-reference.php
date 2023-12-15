<?php
include "../php-connect/db-conn.php";

session_start();

$refNo = $_POST['ref-no'];

$errorMessage = false;

$sql = "SELECT * FROM tbl_application INNER JOIN tbl_customer  ON tbl_application.customerID = tbl_customer.customerID
WHERE referenceCode='$refNo'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){

        $_SESSION['ref-no'] = $refNo;
        $_SESSION['email'] = $row['email'];
        $_SESSION['id-type']= $row['idType'];
        $_SESSION['status'] = $row['status'];
        $_SESSION['id-type'] = "";
       
switch($row['idType']){
    case "barangay id":
        $_SESSION['id-type'] = "Barangay ID";
        break;
    case "senior citizen":
        $_SESSION['id-type'] = "Senior Citizen ID";
        break;
    case "pwd":
        $_SESSION['id-type'] = "PWD ID";
        break;
}


        echo "
                {$_SESSION['ref-no']} {$_SESSION['email']} {$_SESSION['id-type']} {$_SESSION['status']}
                
                ";

        header("Location: check-status.php");
    }

}else{
    $errorMessage = true;
    $_SESSION['error-msg'] = $errorMessage;   
    $_SESSION['ref-no'] = $refNo; 
    header("Location: check-status.php");

}
