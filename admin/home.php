<?php
session_start();
include "../php-connect/db-conn.php";

// Assume you have a database connection established
// Include your database connection logic here

// SQL query to join tbl_application and tbl_customer
 $sql = "SELECT tbl_customer.firstName, tbl_customer.lastName, tbl_customer.idType, tbl_application.status, tbl_application.referenceCode, tbl_application.FormID
         FROM tbl_application
         INNER JOIN tbl_customer ON tbl_application.customerID = tbl_customer.customerID";

// Use the $selectedValue in your switch statement and SQL query adjustments
// switch ($selectedValue) {
//   case "btnradio2":
//     $sql .= "WHERE tbl_application.status='pending'";
//     break;
// }
//WHERE status='pending'
// Execute the query

$result = mysqli_query($conn, $sql);
// Check for errors
// if (!$result) {
//     die("Query failed: " . mysqli_error($conn));
// }


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
            <div class="col-md-4 mb-5">
                <label for="bloodType" class="form-label">Fetch Results By</label>
                <select class="form-select" id="fetchval" name="fetchval" required="">
                    <option value="all" disabled="" selected="">Select Filter</option>
                    <option value="all">All</option>
                    <option value="pending">Pending</option>
                    <option value="approved">Approved</option>
                    <option value="rejected">Rejected</option>
                </select>
            </div>

    
            <table class="table table-striped table-hover"  id="container">
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
 <script src="../script/filter.js"></script>


<?php
   include "footer.php";
} else {
    header("Location: login.php");
}

?>