<?php

session_start();
include "navbar.php" ?>

<!-- Start of Main Content -->

<!-- Searching -->
<div class="container mt-5">
    <div class="text-center col-lg-6 col-md-6 col ms-auto me-auto">
        <form action="search-reference.php" method="post">
            <div class="input-group mb-3">
                <input type="text" pattern="[0-9]{7,}" name="ref-no" class="form-control" placeholder="Reference Number" aria-describedby="basic-addon2" required>
                <button type="submit" class="btn btn-teal">Check Status</button>
            </div>
        </form>
    </div>
</div>

<!-- Display Status-->
<?php
if (isset($_SESSION['error-msg'])) {
    if ($_SESSION['error-msg']) {
        noSearchHandler();
    }
}else{
    echo "<br><br><br>";
}
if (isset($_SESSION['status'])) {
    switch ($_SESSION['status']) {

        case "pending":
            pendingHandler();
            break;

        case "rejected":
            rejectedHandler();
            break;
        case "approved":
            approvedHandler();
            break;
    }
}

session_unset();
session_destroy();

?>

<?php function noSearchHandler()
{ ?>
    <div class="col-lg-2 col-md-4 col-sm-6 col-8 ms-auto me-auto mt-5">
        <img src="../img/no-search.png" class="img-fluid" alt="No Search" srcset="">
    </div>
    <h4 class="text-teal text-center mt-5">We could not find a match for Ref. No. <?php echo $_SESSION['ref-no'] ?>. Please try another search.</h4>
    <p class="text-secondary text-center mt-3">Can't find what you are looking for? Contact
        <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">
            Customer Service</a> or call +6344 667 7777
    </p>
<?php } //No Search Handler Ends Here 
?>

<?php function pendingHandler()
{ ?>
    <section class="container mt-5">
        <h4 class="text-teal">Order Status</h4>
        <p>Your application ID: <?php echo $_SESSION['ref-no'] ?></p>
        <div class="col-lg-3 col-md-4 col-sm-6 col-8 ms-auto me-auto">
            <img src="../img/pending-truck.png" class="img-fluid" alt="Pending" srcset="">
        </div>
        <h3 class="text-teal text-center mb-5">Your application is still processing...</h3>

        <!-- Body Content -->
        <p>This message is to inform you that your application for a <strong><?php echo ucwords($_SESSION['id-type']) ?> ID</strong> is currently pending. We appreciate your patience while we process your request.</p>
        <h4 class="text-teal">Estimated Timeline</h4>
        <p><strong>Expected review timeframe: </strong>[Provide estimated timeframe, e.g., 2-4 weeks, depending on your specific government agency's guidelines].</p>
        <p><strong>Updates will be provided: </strong>We'll send you updates on your application status via [Preferred communication channel, e.g., SMS, email]. Please ensure your contact information on your application is accurate and up-to-date.</p>
        <h4 class="text-teal">What you can do:</h4>
        <p><strong>Check Application Status Online: </strong>Online: You can check the status of your application online at [Link to online portal, if available]. Simply enter your application reference number or other identifying details.</p>
        <p><strong>Contact Us: </strong>If you have any questions or concerns, please don't hesitate to contact us. You can reach us through:</p>
        <ul>
            <li><strong>Email: </strong>governmentapplication@gmail.com</li>
            <li><strong>Hotline: </strong>+6344 667 7777</li>
            <li><strong>Website contact form: </strong>www.governmentapplication.com</li>
        </ul>
        <h5 class="text-teal">We appreciate your patience and understanding as we work to process your application.</h5>

    </section>
<?php } //Pending Handler ends here
?>

<?php function rejectedHandler()
{ ?>
    <section class="container mt-5">
        <h4 class="text-teal">Order Status</h4>
        <p>Your application ID: <?php echo $_SESSION['ref-no'] ?></p>
        <div class="col-lg-3 col-md-4 col-sm-6 col-8 ms-auto me-auto">
            <img src="../img/rejected-form.png" class="img-fluid" alt="Pending" srcset="">
        </div>
        <h3 class="text-teal text-center mb-5">Your application has been rejected</h3>
        <p>Thank you for your interest in applying for a <strong><?php echo ucwords($_SESSION['id-type']) ?> </strong> through our website. We appreciate you taking the time to submit your application.</p>
        <p>We regret to inform you that your application for a <strong><?php echo ucwords($_SESSION['id-type']) ?>
            </strong> has not been approved at this time.</p>
        <h4 class="text-teal">Reason for rejection:</h4>
        <ul>
            <li><strong>Incomplete application:</strong> Please ensure you have filled out all required fields on the application form and attached all necessary documents.</li>
            <li><strong>Missing documentation:</strong> You may be missing required documents such as proof of residency, birth certificate, or 2x2 photo.</li>
            <li><strong>Ineligibility:</strong> You may not meet the eligibility criteria for the ID you applied for.</li>
        </ul>
        <h4 class="text-teal">Next Steps:</h4>
        <ul>
            <li>If the reason for rejection is due to incomplete information or missing documents, you may resubmit your application after addressing the issue.</li>
            <li>If you believe the rejection is due to an error, please contact us at governmentapplication@gmail.com or +6344 667 7777 to discuss your application further.</li>
        </ul>
        <p>We apologize for any inconvenience this may cause. We encourage you to visit our website or contact your local barangay office for further information about our ID issuance process.</p>
    </section>
<?php } //End of rejected handler 
?>

<?php function approvedHandler()
{ ?>
<section class="container mt-5">
        <h4 class="text-teal">Order Status</h4>
        <p>Your application ID: <?php echo $_SESSION['ref-no'] ?></p>
        <div class="col-lg-3 col-md-4 col-sm-6 col-8 ms-auto me-auto">
            <img src="../img/accepted-form.png" class="img-fluid" alt="Pending" srcset="">
        </div>
        <h3 class="text-teal text-center mb-5">Congratulations! Your <?php echo ucwords($_SESSION['id-type']) ?> ID has been successfully approved</h3>
        <p>Thank you for using our website to apply for Barangay ID, Senior Citizen ID, or PWD ID. We're excited to help you! Here's what you need to know:</p>
        <h4 class="text-teal">What happens next?</h4>
        <ul>
            <li><strong>Your order is waiting for payment</strong><br>
            This means that your order was successfully accepted by the system and will be processed as soon as your payment posts. To see the list of available payment channels, please click <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">
  here
</a>
.
            </li>
            <li><strong>ID Claiming</strong><br>
            This After successful payment, you can claim your ID at [Claiming location] on [Claiming schedule] by presenting the provided claim slip and a valid government-issued ID.
            </li>
        </ul>
        <h4 class="text-teal">Stay informed</h4>
        <ul>
            <li><strong>Application status: </strong>Keep an eye on your email or SMS for updates on your application status. You can also track your application online by logging in to your account with the reference number provided in your application confirmation email.
            </li>
            <li><strong>News and updates: </strong>Visit our website or social media pages for any important announcements regarding ID processing or claiming schedules.</li>
        </ul>
        <h4 class="text-teal">Get Help</h4>
        <ul>
            <li><strong>Frequently Asked Questions (FAQs): </strong>Check our FAQs section on the website for answers to common questions about the application process, fees, and claiming.</li>
            <li><strong>Contact us: </strong>If you have any further questions or concerns, please don't hesitate to contact us through<br>
            <ul>
                <li><strong>Email: </strong>governmentapplication@gmail.com</li>
                <li><strong>Contact No: </strong>+6344 667 7777</li>
            </ul>
        </li>
        </ul>
        <h4 class="text-teal">Additional Tips</h4>
        <ul>
            <li><strong>Be patient: </strong>The processing and claiming process may take some time. We appreciate your patience and understanding.</li>
        </ul>
        <p>We hope this information is helpful. We look forward to welcoming you to our barangay with your new ID!</p>


</section>
<?php } //End of approved handler 
?>




<?php include "../footer.php" ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

<script>
    function copyToClipboard() {
        /* Get the text field */
        var copyText = document.getElementById("referenceCode");

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */

        /* Copy the text inside the text field */
        document.execCommand("copy");

        /* Alert the copied text */
        alert("Reference code copied to clipboard: " + copyText.value);
    }
</script>

<!-- End of Main Content -->

</body>