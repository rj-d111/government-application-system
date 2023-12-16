<?php

$title = "View Source";
include "navbar.php";
include "../php-connect/db-conn.php";

$formID = $_GET['id'];
//Query
$sql = "SELECT * FROM tbl_application INNER JOIN tbl_customer  ON tbl_application.customerID = tbl_customer.customerID
WHERE referenceCode='$formID'";
$result = mysqli_query($conn, $sql);
$applications = array();
while($row = mysqli_fetch_assoc($result)){
    $applications[] =  $row;
}



//Loop through applications and generate HTML
foreach($applications as $app):
?>

<div class="container-md">
<a href="home.php" class="text-decoration-none link-dark ">
                <div class="fs-6 mt-5 mb-3"><i class='fa fa-angle-left text-dark'></i>Back</div>
            </a>

<section>
    <h3 class="text-teal">Ref. No. <?php echo $formID ?> Details</h3>
</section>

<form action="function.php" method="post" enctype="multipart/form-data">
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="firstName" class="form-label">ID Type</label>
                <input type="text" class="form-control" id="idType" name="idType" value="<?php echo $app['idType']; ?>" readonly>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" name="firstName" class="form-control" id="firstName" value="<?php echo $app['firstName']; ?>" readonly>
            </div>
            <div class="col-md-4">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" name="lastName" class="form-control" id="lastName" value="<?php echo $app['lastName']; ?>" readonly>
            </div>
            <div class="col-md-4">
                <label for="middleName" class="form-label">Middle Name</label>
                <input type="text" name="middleName" class="form-control" id="middleName" value="<?php echo $app['middleName']; ?>" readonly>
            </div>
        </div>


        <div class="row mb-3">
            <div class="col-md-4">
                <label for="firstName" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="firstName" value="<?php echo $app['email']; ?>"  readonly>
            </div>
            <div class="col-md-4">
                <label for="dateOfBirth" class="form-label">Date of Birth</label>
                <input type="date" name="dateOfBirth" class="form-control" id="dateOfBirth" value="<?php echo $app['dateOfBirth']; ?>" readonly>
            </div>
            <div class="col-md-4">
                <label for="gender" class="form-label">Gender</label>
                <input type="text" class="form-control" id="gender" name="gender" value="<?php echo ucwords($app['gender']) ?>" readonly>
            </div>
        </div>

        <!-- Add other form fields as needed -->


        <div class="row mb-3">
            <div class="col-md-4">
                <label for="bloodType" class="form-label">Blood Type</label>
                <input type="text" class="form-control" id="bloodType" name="bloodType" value="<?php echo ucwords($app['bloodType']) ?>" readonly>
            </div>
            <div class="col-md-4">
                <label for="firstName" class="form-label">Country of Birth</label>
                <input type="text" name="countryOfBirth" class="form-control" id="firstName" value="<?php echo ucwords($app['countryOfBirth']) ?>" readonly>
            </div>
            <div class="col-md-4">
                <label for="firstName" class="form-label">Province</label>
                <input type="text" name="province" class="form-control" id="firstName" value="<?php echo ucwords($app['province']) ?>" readonly>
            </div>

        </div>
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="lastName" class="form-label">Municipality/City</label>
                <input type="text" name="municipalityCity" class="form-control" id="lastName" value="<?php echo ucwords($app['municipalityCity']) ?>"readonly>
            </div>
            <div class="col-md-4">
                <label for="middleName" class="form-label">Barangay</label>
                <input type="text" name="barangay" class="form-control" id="middleName" value="<?php echo ucwords($app['barangay']) ?>" readonly>
            </div>
            <div class="col-md-4">
                <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="2" readonly><?php echo ucwords($app['address']) ?></textarea>
            </div>
        </div>
        <!-- Proof of Disability -->
        <div class="row mt-3 mb-3" id="disability-proof" style="display: none;">
            <div class="col-md-4">
                <label for="formFile" class="form-label">Proof of Disability</label>
                <img src="<?php echo "../customer/".$app['proofOfDisability']?>" class="img-fluid p-3" alt="" srcset="">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-4">
                <label for="formFile" class="form-label">Birth Certificate</label>
                <img src="<?php echo "../customer/".$app['birthCertificate']?>" alt="" class="img-fluid p-3" srcset="">

            </div>
            <div class="col-md-4">
                <label for="formFile" class="form-label">Proof of Residency (Ex. Billing Statement)</label>
                <img src="<?php echo "../customer/".$app['proofOfResidency']?>" class="img-fluid p-3" alt="" srcset="">
         
            </div>
            <div class="col-md-4">
                <label for="formFile" class="form-label">2X2 Picture (Format)</label>
                <img src="<?php echo "../customer/".$app['clientPicture']?>" class="img-fluid p-3" alt="" srcset="">
            </div>

        </div>

    </form>
</div>

<script src="../script/view-source.js"></script>
<?php  endforeach; //End of For each loop

include "../footer.php" ?>