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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../style/style.css">
    </head>
</head>

<body>

    
    <!-- Navbar in mobile devices -->
    <div> 
     <!-- Start of Logo -->
     <div class="container-md d-flex align-items-center my-3 mx-auto text-center">
        <div class="d-flex align-items-center me-auto">
            <a class="navbar-brand d-flex align-items-center" href="../index.php">
                <img src="../img/government-registration-logo.png" alt="Bootstrap" style="max-width: 50px; margin-right: 10px;">
                <h4 class="text-teal ms-0 mb-0">ONLINE GOVERNMENT APPLICATION SYSTEM</h4>            
            </a>
        </div>
        <!-- <div class="text-end">
            <a href="admin/login.php" class="text-teal text-decoration-none fw-bold">ADMIN LOGIN</a>
        </div> -->
    </div>

    <!-- End of Logo -->

    <nav class="navbar navbar-expand-md navbar-dark bg-teal" aria-label="Offcanvas navbar large">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
        <div class="offcanvas-header bg-teal">
          <h5 class="offcanvas-title" id="offcanvasNavbar2Label">MENU</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body bg-teal">
          <ul class="navbar-nav justify-content-evenly flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">HOW TO REGISTER</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">REQUIREMENTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CHECK STATUS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CONTACT US</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
    </div> 
    <!-- End of navbar in mobile devices -->



    <!-- Script for navbar -->
    <script src="../script/admin-script.js"></script>