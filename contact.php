<?php include 'includes/header.php'; ?>

<?php
// echo "test";
require('includes/connection.php');
// require('emailheaders.php');

// Import PHPMailer classes into the global namespace 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$emailSuccess = "";
$error = "";

$phpemail = new PHPMailer(true);

if (isset($_POST['btnSubmit'])) {

    $custName = $_REQUEST['txtName'];
    $custPhone = $_REQUEST['txtPhone'];
    $custEmail = $_REQUEST['txtEmail'];
    $custMessage = $_REQUEST['txtMessage'];

    // $emailSuccess = "1";

    // $variables = array();

    // $variables['imgpath'] = SITE_URL;
    // $variables['kavName'] = $custName;
    // $variables['kavPhone'] = $custPhone;
    // $variables['kavEmail'] = $custEmail;
    // $variables['kavMessage'] = $custMessage;


    // TO USE HTML TEMPLATE USE THE FOLLOWING CODE TO REPLACE VARIABLE VALUES IMAGE PATH
    // $template = file_get_contents("includes/feedbackTemplate.html");

    // foreach ($variables as $key => $value) {
    //     $template = str_replace('{{ ' . $key . ' }}', $value, $template);
    // }


    // TO USE HTML TEMPLATE USE THE FOLLOWING VARIABLE
    // $email_body = $template;
    // $email_body = "This is generated email from phpmailer.";
    $email_body = $custMessage;

    try {
        //Server Settings
        // $phpemail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output (set to 0 for production)
        $phpemail->isSMTP(); // Send using SMTP
        $phpemail->Host = 'mail.kavilash.com';  // Set the SMTP server to send through
        $phpemail->SMTPAuth = true;  // Enable SMTP authentication
        $phpemail->Username = 'contact@kavilash.com';  // SMTP username
        $phpemail->Password = 'Target@1cr';  // SMTP app password
        $phpemail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Enable implicit TLS encryption ("ssl" is deprecated)

        $phpemail->Port = 587;  //TCP port to connect to; use 587 for "tls"

        //Content
        $phpemail->setFrom('contact@kavilash.com', 'Sampath');  //Sender Name (admin email)
        $phpemail->addAddress('sampathraj.mp@gmail.com', 'Sampath Kagrotech'); // Add a recipient
        $phpemail->addReplyTo('contact@kavilash.com', 'Information Kagrotech');  // reply to Address
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        $phpemail->isHTML(true);  // Set email format to HTML
        $phpemail->Subject = "ENQUIRY - New Query from Website - KAVILASH.COM";
        $phpemail->Body = $email_body;
        $phpemail->AltBody = 'Alternate body text for non Html';  // Plain text alternative

        // $phpemail->send();
        // echo "message sent";

        if (!$phpemail->send()) {
            echo '<p style="color:red"></p>';
            echo '<script>document.getElementById("error").innerHTML = "Error sending email. Contact Administrator";</script>';
            $emailSuccess = "";
            $error = "Message could not be sent. Mailer Error: {$phpemail->ErrorInfo}";
            exit;
        }
        echo '<script>document.getElementById("message").innerHTML = "Information Submitted!";</script>';
        $emailSuccess = "Information Submitted!";
    } catch (Exception $e) {
        echo " Error in Try Catch - Mailer Error : {$phpemail->ErrorInfo} ";
    }

    //clear all mail receipients and Attachments
    $phpemail->clearAddresses();
    $phpemail->clearAttachments();
}

?>




<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Arial, sans-serif;
        background: #f4f9f6;
        padding: 0px 15px;
    }

    /* Wrapper */
    .contact-wrapper {
        max-width: 1200px;
        margin: auto;
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        display: flex;
        flex-wrap: wrap;
    }

    /* Left Column */
    .contact-info {
        flex: 1 1 400px;
        background: linear-gradient(135deg, rgb(7, 62, 94), rgb(46, 119, 161));
        color: #fff;
        padding: 50px 40px;
    }

    .contact-info h2 {
        font-size: 30px;
        margin-bottom: 20px;
    }

    .contact-info p {
        margin-bottom: 20px;
        line-height: 1.6;
        opacity: 0.9;
    }

    .contact-details div {
        margin-bottom: 12px;
        font-size: 15px;
    }

    /* Right Column */
    .contact-form {
        flex: 1 1 500px;
        padding: 50px 40px;
    }

    .contact-form h2 {
        font-size: 26px;
        margin-bottom: 25px;
        color: #0f3d2e;
    }

    .form-group {
        margin-bottom: 18px;
    }

    label {
        display: block;
        margin-bottom: 6px;
        font-weight: 600;
        color: #0f3d2e;
        font-size: 14px;
    }

    input,
    textarea {
        width: 100%;
        padding: 12px;
        border-radius: 8px;
        border: 1px solid #ccc;
        font-size: 14px;
        transition: 0.3s ease;
    }

    input:focus,
    textarea:focus {
        outline: none;
        border-color: #1c6b4f;
        box-shadow: 0 0 0 3px rgba(28, 107, 79, 0.1);
    }

    textarea {
        min-height: 110px;
        resize: vertical;
    }

    #contactForm #btnSubmit {
        width: 100%;
        padding: 13px;
        border-radius: 30px;
        border: none;
        background: rgb(7, 62, 94);
        color: #fff;
        font-weight: 600;
        cursor: pointer;
        font-size: 15px;
        transition: 0.3s;
    }

    #contactForm #btnSubmit:hover {
        background: #fff;
        color: rgb(7, 62, 94);
        border: 2px solid rgb(7, 62, 94);
        font-weight: bold;
    }

    /* Alerts */
    .success {
        background: #d4edda;
        color: #155724;
        padding: 10px;
        border-radius: 6px;
        margin-bottom: 15px;
        font-size: 14px;
    }

    .error {
        background: #f8d7da;
        color: #721c24;
        padding: 10px;
        border-radius: 6px;
        margin-bottom: 15px;
        font-size: 14px;
    }

    /* Tablet */
    @media (max-width: 992px) {
        .contact-wrapper {
            flex-direction: column;
        }

        .contact-info,
        .contact-form {
            padding: 40px 25px;
        }
    }

    /* Mobile */
    @media (max-width: 576px) {

        body {
            padding: 20px 10px;
        }

        .contact-info h2 {
            font-size: 24px;
        }

        .contact-form h2 {
            font-size: 22px;
        }

        .contact-info,
        .contact-form {
            padding: 30px 20px;
        }

        input,
        textarea {
            font-size: 13px;
        }
    }
</style>

<div class="contact-wrapper my-5">

    <!-- Left -->
    <div class="contact-info">
        <h2>Kavilash Enterprises</h2>
        <p>Merchant Exporters from India delivering high quality products from India to the World !</p>
        <ul>
            <li>Bio fertilizers, Cow Dung Powder and Compost</li>
            <li>Millet based modern food products</li>
            <li>Human remy hair and hair products</li>
            <li>Leather & Leather Products</li>
            <li>and many more...</li>
        </ul>
        <div class="contact-details">
            <div style="padding-left: 25px;text-indent:-28px;"><strong>📍 Address:</strong>15 B/2, Bhaskar Street, Nehru Nagar,<br>Saligramam, Chennai 600093. India</div>
            <div><strong>📞 Phone:</strong> +91 7708960727</div>
            <div><strong>📧 Email:</strong> info@kavilashenterprises.com</div>
        </div>
    </div>

    <!-- Right -->
    <div class="contact-form">
        <h2>Connect with us. Let's discuss !</h2>

        <?php if ($emailSuccess): ?>
            <div class="success"><?php echo $emailSuccess; ?></div>
        <?php endif; ?>

        <?php if ($error): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>

        <form id="contactForm" method="POST">

            <div class="form-group">
                <label>Full Name *</label>
                <input type="text" name="txtName" id="txtName" required>
            </div>

            <div class="form-group">
                <label>Mobile Number *</label>
                <input type="tel" name="txtPhone" id="txtPhone" required>
            </div>

            <div class="form-group">
                <label>Email ID *</label>
                <input type="email" name="txtEmail" id="txtEmail" required>
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea required="true" name="txtMessage" id="txtMessage" placeholder="Type your message..."></textarea>
            </div>

            <input id="btnSubmit" type="submit" value="Send" name="btnSubmit">

        </form>
    </div>

</div>
<div class="py-5"></div>
<?php include 'includes/footer.php'; ?>