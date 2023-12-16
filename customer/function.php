<?php
session_start();
// Go to db-conn file
include "../php-connect/db-conn.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $idType = $_POST['idType'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $middleName = $_POST['middleName'];
    $email = $_POST['email'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $gender = $_POST['gender'];
    $bloodType = $_POST['bloodType'];
    $countryOfBirth = $_POST['countryOfBirth'];
    $province = $_POST['province'];
    $municipalityCity = $_POST['municipalityCity'];
    $barangay = $_POST['barangay'];
    $address = $_POST['address'];
   // $birthCertificate = $_POST['birthCertificate'];
   // $proofOfResidency = $_POST['proofOfResidency'];
   // $clientPicture = $_POST['clientPicture'];
//    echo "<script>alert('First Name: $firstName\nLast Name: $lastName\nMiddle Name: $middleName\nDate of Birth: $dateOfBirth\nGender: $gender\nBlood Type: $bloodType\nCountry of Birth: $countryOfBirth\nProvince: $province\nMunicipality/City: $municipalityCity\nBarangay: $barangay\nAddress: $address');</script>";


     // Define allowed file formats and maximum file size
     $allowedFormats = array('jpg', 'jpeg', 'png', 'pdf', 'heic', 'hif', 'webp', 'bmp', 'tif', 'tiff');
     $maxFileSize = 10 * 1024 * 1024; // 10 MB
 
     // Function to get file extension
     function getFileExtension($filename) {
         return pathinfo($filename, PATHINFO_EXTENSION);
     }
 
     // Function to create a folder if it doesn't exist
     function createFolder($folderName) {
         if (!file_exists($folderName)) {
             mkdir($folderName, 0777, true);
         }
     }
 
     // Function to handle file upload
     function uploadFile($fileInputName, $folderName, $allowedFormats, $maxFileSize) {
         $filename = $_FILES[$fileInputName]['name'];
         $fileSize = $_FILES[$fileInputName]['size'];
         $fileTmpName = $_FILES[$fileInputName]['tmp_name'];
         $fileError = $_FILES[$fileInputName]['error'];
 
         // Check if file format is allowed
         $fileFormat = getFileExtension($filename);
         if (!in_array($fileFormat, $allowedFormats)) {
             echo "Invalid file format. Allowed formats are: " . implode(', ', $allowedFormats);
             return false;
         }
 
         // Check if file size is within limit
         if ($fileSize > $maxFileSize) {
             echo "File size exceeds the maximum limit (10MB).";
             return false;
         }
 
         // Create a folder for each customer using customerID
         createFolder($folderName);
 
         // Move the uploaded file to the specified folder
         $destination = $folderName . '/' . $filename;
         move_uploaded_file($fileTmpName, $destination);
 
         return $destination; // Return the file path for database storage
     }

     $query = "INSERT INTO tbl_customer (idType, firstName, lastName, middleName, email, dateOfBirth, gender, bloodType, countryOfBirth, province, municipalityCity, barangay, address)
         VALUES ('$idType','$firstName', '$lastName', '$middleName', '$email' ,'$dateOfBirth', '$gender', '$bloodType', '$countryOfBirth', '$province', '$municipalityCity', '$barangay', '$address')";
     mysqli_query($conn, $query);

        // Get the auto-incremented ID of the last inserted record
        $customerID = mysqli_insert_id($conn);
      
        //Pass the customerID to another PHP file
        $_SESSION['customerID'] = $customerID;

        // Upload Birth Certificate
        $birthCertificatePath = uploadFile('birthCertificate', 'uploads/' . $customerID, $allowedFormats, $maxFileSize);

        // Upload Proof of Residency
        $proofOfResidencyPath = uploadFile('proofOfResidency', 'uploads/' . $customerID, $allowedFormats, $maxFileSize);

        // Upload Client Picture
        $clientPicturePath = uploadFile('clientPicture', 'uploads/' . $customerID, $allowedFormats, $maxFileSize);


        //put the pictures into the database   
         $sql = "UPDATE tbl_customer SET birthCertificate='$birthCertificatePath', proofOfResidency='$proofOfResidencyPath', 
         clientPicture='$clientPicturePath' WHERE customerID='$customerID'";
        mysqli_query($conn, $sql);

        //put proof of disability to the database        
        if($idType == 'pwd'){
            $proofOfDisabilityPath = uploadFile('proofOfDisability', 'uploads/' . $customerID, $allowedFormats, $maxFileSize);
           //put into the database   
           $sql = "UPDATE tbl_customer SET proofOfDisability='$proofOfDisabilityPath' WHERE customerID='$customerID'";
           mysqli_query($conn, $sql);
        }

        echo "<script>alert('The id is $customerID');</script>";
        
        //Return to fill out form
        header("Location: success.php");
        exit();
}


?>