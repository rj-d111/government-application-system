<?php
include "../php-connect/db-conn.php";

session_start();
$alertmessage="";
$formCode = $_GET['id'];

$sql = "UPDATE tbl_application SET status='approved' WHERE referenceCode='$formCode'";

if(mysqli_query($conn, $sql)){
    $alertmessage = <<<EOT
    <div class="alert alert-success alert-dismissible fade show my-4" role="alert">
    Form <strong>$formCode</strong> has been updated
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    EOT;
    $_SESSION['alertmessage'] = $alertmessage;
    header("Location: home.php");
}else{
    $alertmessage = <<<EOT
    <div class="alert alert-danger alert-dismissible fade show my-4" role="alert">
    Error updating record.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    EOT;
    $_SESSION['alertmessage'] = $alertmessage;
    header("Location: home.php");
}

?>