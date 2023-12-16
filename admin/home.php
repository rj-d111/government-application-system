<?php
session_start();
include "../php-connect/db-conn.php";

// Assume you have a database connection established
// Include your database connection logic here

// SQL query to join tbl_application and tbl_customer
$sql = "SELECT tbl_customer.firstName, tbl_customer.lastName, tbl_customer.idType, tbl_application.status, tbl_application.referenceCode, tbl_application.FormID
        FROM tbl_application
        INNER JOIN tbl_customer ON tbl_application.customerID = tbl_customer.customerID";

// Execute the query
$result = mysqli_query($conn, $sql);

// Check for errors
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}


if (isset($_SESSION['email'])) {

$title = "Admin Home";
include "navbar.php";
?>

        <div class="container my-5">

            <h1 class="text-teal my-3">Registered Applicants</h1>
        
            <!-- Alert Message -->
            <?php 
                if (isset($_SESSION['alertmessage'])) {
                echo $_SESSION['alertmessage'];
                // Clear the session variable after displaying
                }
            ?>
            <!-- End of Alert Message -->

            <!-- Start Group button -->
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                <label class="btn btn-outline-primary" for="btnradio1">All</label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                <label class="btn btn-outline-secondary" for="btnradio2">Pending</label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                <label class="btn btn-outline-success" for="btnradio3">Approved</label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
                <label class="btn btn-outline-danger" for="btnradio4">Rejected</label>

            </div>
            <!-- End Group Button -->


            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Type of ID</th>
                        <th scope="col">Referral No.</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                        <th scope="col">View Source</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo '<th scope="row">' . $i . '</td>';
                        echo "<td>{$row['firstName']} {$row['lastName']}</td>";
                        echo "<td>{$row['idType']}</td>";
                        echo "<td>{$row['referenceCode']}</td>";
                        echo "<td>{$row['status']}</td>";
                        echo '<td>';
                        echo '<a class="btn btn-success me-3" href="update.php?id=' . $row['referenceCode'] . '">Approve</a>';
                        echo '<a class="btn btn-danger" href="reject.php?id=' . $row['referenceCode'] . '">Reject </a>';
                        echo '</td>';
                        echo '<td>';
                        echo '<a class="btn btn-primary" href="view-source.php?id=' . $row['referenceCode'] . '">View Source</a>';
                        echo '</td>';
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
} else {
    header("Location: login.php");
}

?>