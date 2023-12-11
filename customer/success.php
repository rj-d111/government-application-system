<?php
include "../php-connect/db-conn.php";
session_start();



// Assuming you have established a database connection

    // Retrieve the customer ID
    $customerID = $_SESSION['customerID'];
    // Generate a random numerical reference code
    $randomReferenceCode = mt_rand(1000000, 9999999);

    // Insert into tbl_application
    $status = "pending";
    $query = "INSERT INTO tbl_application (customerID, status, referenceCode) VALUES ('$customerID', '$status', '$randomReferenceCode')";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Successfully Added.');</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fill out Form</title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="../style/style.css">
    </head>
</head>


<body>
   <!-- Start of Logo -->
   <div class="container d-flex align-items-center my-3 ">
        <a class="navbar-brand" href="#">
            <img src="../img/government-registration-logo.png" alt="Bootstrap" style="max-width: 50px;">
        </a>
        <h2 class="text-success ms-3">ONLINE GOVERNMENT APPLICATION SYSTEM</h2>
    </div>
    <!-- End of Logo -->
    <!-- Start of Navbar -->
    <nav class="nav justify-content-center bg-success">
        <a class="nav-link  link-light active" aria-current="page" href="#">HOME</a>
        <a class="nav-link  link-light" href="#">REGISTER</a>
        <a class="nav-link  link-light" href="#">HOW TO APPLY</a>
        <a class="nav-link  link-light" href="#">REQUIREMENTS</a>
        <a class="nav-link  link-light" href="#">CHECK STATUS</a>
        <a class="nav-link  link-light" href="#">CONTACT US</a>
    </nav>
    <!-- End of Navbar -->

    <!-- Start of Main Content -->
    <div class="container mt-5">
    <div class="text-center">
        <img src="../img/check-green.png" alt="Check Icon" class="img-fluid" style="max-width: 200px;">
        <h2 class="mt-3">Application Successful</h2>
        <p>Your application was successfully accepted by the system and will be processed. You can check the status page for your application updates.</p>
    </div>

    <div class="mt-4">
        <div class="mb-3">
            <label for="referenceCode" class="form-label">Reference Code:</label>
            <div class="input-group">
                <input type="text" id="referenceCode" class="form-control" value="<?php echo $randomReferenceCode; ?>" readonly>
                <button class="btn btn-outline-secondary" onclick="copyToClipboard()">Copy</button>
            </div>
        </div>
        <div class="alert alert-info" role="alert">
            <strong>Note:</strong> Click the "Copy" button to copy the reference code to the clipboard.
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

<script>
    function copyToClipboard() {
        /* Get the text field */
        var copyText = document.getElementById("referenceCode");

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */

        /* Copy the text inside the text field */
        document.execCommand("copy");

        /* Alert the copied text */
        alert("Reference code copied to clipboard: " + copyText.value);
    }
</script>

    <!-- End of Main Content -->

</body>


 