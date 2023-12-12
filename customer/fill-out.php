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
    <div class="container d-flex align-items-center my-3 mx-auto text-center">
        <div class="d-flex align-items-center me-auto">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="../img/government-registration-logo.png" alt="Bootstrap" style="max-width: 50px; margin-right: 10px;">
                <h2 class="text-teal ms-0">ONLINE GOVERNMENT APPLICATION SYSTEM</h2>
            </a>
        </div>
        <div class="text-end">
            <a href="../admin/login.php" class="text-teal text-decoration-none fw-bold">ADMIN LOGIN</a>
        </div>
    </div>

    <!-- End of Logo -->
    <!-- Start of Navbar -->
    <nav class="nav justify-content-center bg-teal">
        <a class="nav-link  link-light active" aria-current="page" href="#">HOME</a>
        <a class="nav-link  link-light" href="#">REGISTER</a>
        <a class="nav-link  link-light" href="#">HOW TO APPLY</a>
        <a class="nav-link  link-light" href="#">REQUIREMENTS</a>
        <a class="nav-link  link-light" href="#">CHECK STATUS</a>
        <a class="nav-link  link-light" href="#">CONTACT US</a>
    </nav>
    <!-- End of Navbar -->

    <!-- Start of main content -->

    <!-- Background Picture First -->

    <!-- End of Background Picture -->



    <div class="container mt-5">
        <h1 class="my-5">Registration Form</h1>
        <form action="function.php" method="post" enctype="multipart/form-data">
            <div class="row mb-3">
            <div class="col-md-4">
                    <label for="bloodType" class="form-label">ID Type</label>
                    <select class="form-select" id="idType" name="idType" required="">
                        <option value="" disabled="" selected="">Select an ID</option>
                        <option value="barangay id">Barangay ID</option>
                        <option value="senior citizen">Senior Citizen</option>
                        <option value="pwd">PWD</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" name="firstName" class="form-control" id="firstName" required="">
                </div>
                <div class="col-md-4">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" name="lastName" class="form-control" id="lastName" required="">
                </div>
            </div>

            <div class="row mb-3">
            <div class="col-md-4">
                    <label for="middleName" class="form-label">Middle Name</label>
                    <input type="text" name="middleName" class="form-control" id="middleName">
                </div>
                <div class="col-md-4">
                    <label for="dateOfBirth" class="form-label">Date of Birth</label>
                    <input type="date" name="dateOfBirth" class="form-control" id="dateOfBirth" required="">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Gender</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male" required="">
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female" required="">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add other form fields as needed -->


            <div class="row mb-3">
            <div class="col-md-4">
                    <label for="bloodType" class="form-label">Blood Type</label>
                    <select class="form-select" id="bloodType" name="bloodType" required="">
                        <option value="" disabled="" selected="">Select Blood Type</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="firstName" class="form-label">Country of Birth</label>
                    <input type="text" name="countryOfBirth" class="form-control" id="firstName" required="">
                </div>
                <div class="col-md-4">
                    <label for="firstName" class="form-label">Province</label>
                    <input type="text" name="province" class="form-control" id="firstName" required="">
                </div>

            </div>
            <div class="row mb-3">
            <div class="col-md-4">
                    <label for="lastName" class="form-label">Municipality/City</label>
                    <input type="text" name="municipalityCity" class="form-control" id="lastName" required="">
                </div>
                <div class="col-md-4">
                    <label for="middleName" class="form-label">Barangay</label>
                    <input type="text" name="barangay" class="form-control" id="middleName">
                </div>
                <div class="col-md-4">
                    <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                    <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <label for="formFile" class="form-label">Birth Certificate</label>
                    <input class="form-control" name="birthCertificate" type="file" id="formFile" required>
                </div>
                <div class="col-md-4">
                    <label for="formFile" class="form-label">Proof of Residency (Ex. Billing Statement)</label>
                    <input class="form-control" name="proofOfResidency" type="file" id="formFile" required>
                </div>
                <div class="col-md-4">
                    <label for="formFile" class="form-label">2X2 Picture (Format)</label>
                    <input class="form-control" name="clientPicture" type="file" id="formFile" required>
                </div>
            </div>
            <div class="row mt-5 text-center">
                <div class="col-md-12">
                    <button type="submit" name="submit" class="btn btn-success btn-lg">Submit</button>
                </div>
            </div>
        </form>
    </div> <!-- End of main content -->

    <!-- Start of Footer -->
    <footer class="bg-secondary text-white text-center text-lg-start mt-5">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">ABOUT</h5>

                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                        molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
                        voluptatem veniam, est atque cumque eum delectus sint!
                    </p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">CONTACT US</h5>

                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                        molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
                        voluptatem veniam, est atque cumque eum delectus sint!
                    </p>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

    </footer>
    <!-- End of Footer -->
</body>

</html>