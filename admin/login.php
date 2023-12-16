<?php 
//Check if admin is still logged in
session_start();
if (isset($_SESSION['email'])) {
  header("Location: home.php");
}



$title = "Admin Log In";
include "navbar.php" ?>
    <div class="d-flex justify-content-center">
        <div class="card py-3 px-5 my-5 col-lg-4 col-md-6 col-sm-8 col-10" id="admin-login">
            <!-- Start of Login Page-->
            <form class="form-signin" action="function.php" method="post">
                <div class="text-center">
                    <img src="../img/admin-icon.png" alt="" width="72" height="72" class="mb-4">
                    <h1 class="h3 mb-3 fw-bold">ADMIN LOG IN</h1>
                </div>
                <?php if(isset($_GET['incorrect']) && $_GET['incorrect']){ ?>
                <div class="alert alert-danger" role="alert">Incorrect Email or Password</div>
                <?php }?>
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Email address</label>
                    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="" autofocus="">
                </div>
                <div class="mb-3">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <div class="form-check mb-3">
                    <input type="checkbox" value="remember-me" id="rememberMe" class="form-check-input">
                    <label for="rememberMe" class="form-check-label">Remember me</label>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary btn-block" value="admin-log-in" name="submit" type="submit">Sign in</button>
                </div>
                <p class="mt-5 mb-3 text-muted text-center">© 2023 ALL RIGHTS RESERVED</p>
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