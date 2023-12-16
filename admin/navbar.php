<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title ?></title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
  rel="stylesheet"  type='text/css'>
        <link rel="stylesheet" href="../style/style.css">
    </head>
</head>

<body>

    
    <!-- Navbar in mobile devices -->
    <div class="fixed-top bg-white" id="navbar-all"> 
     <!-- Start of Logo -->
     <div class="container-md d-flex align-items-center my-3 mx-auto text-center">
        <div class="d-flex align-items-center me-auto">
            <a class="navbar-brand d-flex align-items-center" href="navbar.php">
                <img src="../img/government-registration-logo.png" alt="Bootstrap" style="max-width: 50px; margin-right: 10px;">
                <h4 class="text-teal ms-0 mb-0">ONLINE GOVERNMENT APPLICATION SYSTEM</h4>            
            </a>
        </div>
        <div class="text-end">
            <a href="logout.php" class="text-danger text-decoration-none fw-bold">LOG OUT</a>
        </div>
    </div>

    <!-- End of Logo -->

    <nav class="navbar navbar-expand-md navbar-dark bg-teal" aria-label="Offcanvas navbar large">
      
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a href="index.php">
          <img src="../img/government-white.png" alt="" srcset="" id="logo-white" class="img-fluid position-absolute start-50 bottom-0" style="height: 55px;">
        </a>
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
              <a class="nav-link" href="../index.php#id-types">REGISTER</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../index.php#section-3">HOW TO APPLY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../index.php#section-4">REQUIREMENTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../customer/check-status.php">CHECK STATUS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../index.php#section-5">CONTACT US</a>
            </li>
            <span class="admin-log-in">
            <hr>
            <li class="nav-item">
              <a class="text-danger text-decoration-none fw-bold" href="logout.php">LOG OUT</a>
            </li>
            </span>
          </ul>
        </div>
      </div>
    </div>
   
  </nav>
    </div> 
    <!-- End of navbar in mobile devices -->

    <section id="fix-top"></section>


    <!-- Script for navbar -->
    <script src="../script/navbar.js"></script>