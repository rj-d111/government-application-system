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

<?php include "navbar.php" ?>

    <!-- Start of Main Content -->
    <div class="container mt-5">
    <div class="text-center">
        <img src="../img/check.png" alt="Check Icon" class="img-fluid" style="max-width: 200px;">
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


 