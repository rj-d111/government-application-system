<?php
// Go to db-conn file
include "../php-connect/db-conn.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $middleName = $_POST['middleName'];
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
     $allowedFormats = array('jpg', 'jpeg', 'png', 'pdf');
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
 
         // Create a folder for each customer using FormID
         createFolder($folderName);
 
         // Move the uploaded file to the specified folder
         $destination = $folderName . '/' . $filename;
         move_uploaded_file($fileTmpName, $destination);
 
         return $destination; // Return the file path for database storage
     }
 
     // Get FormID (replace this with your actual FormID retrieval logic)
     $formID = 125; // Replace with your logic to get FormID
 
     // Upload Birth Certificate
     $birthCertificatePath = uploadFile('birthCertificate', 'uploads/' . $formID, $allowedFormats, $maxFileSize);
 
     // Upload Proof of Residency
     $proofOfResidencyPath = uploadFile('proofOfResidency', 'uploads/' . $formID, $allowedFormats, $maxFileSize);
 
     // Upload Client Picture
     $clientPicturePath = uploadFile('clientPicture', 'uploads/' . $formID, $allowedFormats, $maxFileSize);
 
     // Now you can use $birthCertificatePath, $proofOfResidencyPath, $clientPicturePath for database storage



     //put into the database

     // Assuming you have retrieved the file paths from the file upload logic
     // $birthCertificatePath, $proofOfResidencyPath, $clientPicturePath
     
     $query = "INSERT INTO tbl_customer (firstName, lastName, middleName, dateOfBirth, gender, bloodType, countryOfBirth, province, municipalityCity, barangay, address, birthCertificate, proofOfResidency, clientPicture)
     VALUES ('$firstName', '$lastName', '$middleName', '$dateOfBirth', '$gender', '$bloodType', '$countryOfBirth', '$province', '$municipalityCity', '$barangay', '$address', '$birthCertificatePath', '$proofOfResidencyPath', '$clientPicturePath')";
    mysqli_query($conn, $query);

    echo "<script>alert('Successfully Added');</script>";

     //Return to fill out form
    header("Location: fill-out.php");
}


?>