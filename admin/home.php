<?php
session_start(); 
include "../php-connect/db-conn.php";

// Assume you have a database connection established
// Include your database connection logic here

// SQL query to join tbl_application and tbl_customer
$sql = "SELECT tbl_customer.firstName, tbl_customer.lastName, tbl_customer.idType, tbl_application.status
        FROM tbl_application
        INNER JOIN tbl_customer ON tbl_application.customerID = tbl_customer.customerID";

// Execute the query
$result = mysqli_query($conn, $sql);

// Check for errors
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}


if(isset($_SESSION['email'])){
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Mockup</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-1iJmfhCYz0SNmHflWWOYtvcIeyfC1Fg6OM1eF/4UfLMZ/kxs+V/Txa/Ch5h8i7x4" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style/style.css">

</head>

<body>
    <!-- Start of Logo -->
    <div class="container d-flex align-items-center my-3 mx-auto text-center">
        <div class="d-flex align-items-center me-auto">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="../img/government-registration-logo.png" alt="Bootstrap" style="max-width: 50px; margin-right: 10px;">
                <h2 class="text-success ms-0">ONLINE GOVERNMENT APPLICATION SYSTEM</h2>
            </a>
        </div>
        <div class="text-end">
            <a href="logout.php" class="text-danger text-decoration-none fw-bold">LOGOUT</a>
        </div>
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



    <div class="container my-5">
        <h1 class="text-success">Registration Approval</h1>

        <table class="table table-striped table-hover">
        <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Type of ID</th>
      <th scope="col">Referral No.</th>
      <th scope="col">Status</th>
      <th scope="col">View Source</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $i =1;
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo '<th scope="row">'.$i.'</td>';
        echo "<td>{$row['firstName']} {$row['lastName']}</td>";
        echo "<td>{$row['idType']}</td>";
        echo "<td>{$row['status']}</td>";
       ?>
    <td>
      <button class="btn btn-success">Approve</button>
        <button class="btn btn-danger">Reject</button>
    </td>
      <td>       
         <button class="btn btn-primary">View Source</button>
</td>
       <?php
        echo "</tr>";
        $i++;
    }
    ?>
  </tbody>
        </table>
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

<?php
}else{
    header("Location: login.php");
}

?>