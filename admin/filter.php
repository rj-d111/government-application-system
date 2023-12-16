<?php

include "../php-connect/db-conn.php";

// if(!isset($_POST['statusFilter'])){
//     return;
// }

if(isset($_POST['request'])){
    $sql = "SELECT tbl_customer.firstName, tbl_customer.lastName, tbl_customer.idType, tbl_application.status, tbl_application.referenceCode, tbl_application.FormID
    FROM tbl_application
    INNER JOIN tbl_customer ON tbl_application.customerID = tbl_customer.customerID";

    $request= $_POST['request'];
    
    if($request == 'all'){
        $sql = "SELECT tbl_customer.firstName, tbl_customer.lastName, tbl_customer.idType, tbl_application.status, tbl_application.referenceCode, tbl_application.FormID
        FROM tbl_application
        INNER JOIN tbl_customer ON tbl_application.customerID = tbl_customer.customerID";
    }else{
        $sql = "SELECT tbl_customer.firstName, tbl_customer.lastName, tbl_customer.idType, tbl_application.status, tbl_application.referenceCode, tbl_application.FormID
        FROM tbl_application
        INNER JOIN tbl_customer ON tbl_application.customerID = tbl_customer.customerID
        WHERE tbl_application.status='$request'";
    }



$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

?>


<?php if($count){?>
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
<?php }else{
 echo "Sorry No Record Found!";   
}?>
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
<?php } ?>