<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Mockup</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../style/style.css">
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
    <div class="d-flex justify-content-center">
        <div class="card py-3 px-5 my-5" style="width: 30rem;">
            <!-- Start of Login Page -->
            <form class="form-signin" action="function.php" method="post">
                <div class="text-center">
                    <img src="../img/admin-icon.png" alt="" width="72" height="72" class="mb-4">
                    <h1 class="h3 mb-3 fw-bold">ADMIN LOG IN</h1>
                </div>
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Email address</label>
                    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-check mb-3">
                    <input type="checkbox" value="remember-me" id="rememberMe" class="form-check-input">
                    <label for="rememberMe" class="form-check-label">Remember me</label>
                </div>
                <div class="text-center">
                    <button class="btn btn-success btn-block" value="admin-log-in" name="submit" type="submit">Sign in</button>
                </div>
                <p class="mt-5 mb-3 text-muted text-center">&copy; 2023 ALL RIGHTS RESERVED</p>
            </form>
            <!-- End of Login Page -->
        </div>
    </div>

    <!-- Start of Footer -->
<footer class="bg-secondary text-white text-center text-lg-start">
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