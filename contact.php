<?php include 'includes/header.php'; ?>

<?php

require('includes/connection.php');
require('emailheaders.php');

$emailSuccess = "";
    $error = "";

if (isset($_POST['btnSubmit'])) {

    $custName = $_REQUEST['txtName'];
    $custPhone = $_REQUEST['txtPhone'];
    $custEmail = $_REQUEST['txtEmail'];
    $custMessage = $_REQUEST['txtMessage'];

    $emailSuccess = "1";


    $variables = array();

    $variables['imgpath'] = SITE_URL;
    $variables['kavName'] = $custName;
    $variables['kavPhone'] = $custPhone;
    $variables['kavEmail'] = $custEmail;
    $variables['kavMessage'] = $custMessage;

    $template = file_get_contents("includes/feedbackTemplate.html");

    foreach ($variables as $key => $value) {
        $template = str_replace('{{ ' . $key . ' }}', $value, $template);
    }

    $email_body = $template;

try {

    //admin email
    $phpemail->AddAddress(ADMIN_EMAIL);

    $phpemail->From = ADMIN_EMAIL;
    $phpemail->Subject = "New Query from Website";
    $phpemail->MsgHTML($email_body);
    // $phpemail->addBCC('kavilashtech@gmail.com');


    if (!$phpemail->Send()) {
        echo '<p style="color:red"></p>';
        echo '<script>document.getElementById("error").innerHTML = "Error sending email. Contact Administrator";</script>';
        $emailSuccess = "";
        $error = "Message could not be sent. Mailer Error: {$phpemail->ErrorInfo}";
        exit;
    }
    echo '<script>document.getElementById("message").innerHTML = "Information Submitted!";</script>';
    $emailSuccess = "Information Submitted!";
} catch (Exception $e){
    echo " Error in Try Catch ";
    exit(0);
}

    //clear all mail receipients and Attachments
    $phpemail->clearAddresses();
    $phpemail->clearAttachments();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Kavilash Enterprises</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f4f9f6;
            padding: 40px 15px;
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

        button {
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

        button:hover {
            background: #0f3d2e;
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
            <p>Merchant Exporters from India delivering premium bio fertilizers and sustainable agricultural solutions worldwide.</p>
            <div class="contact-details">
                <div><strong>📍 Location:</strong> India</div>
                <div><strong>📞 Phone:</strong> +91 7708960727</div>
                <div><strong>📧 Email:</strong> info@kavilashenterprises.com</div>
            </div>
        </div>

        <!-- Right -->
        <div class="contact-form">
            <h2>Send Us an Enquiry</h2>

            <?php if ($emailSuccess): ?>
                <div class="success"><?php echo $emailSuccess; ?></div>
            <?php endif; ?>

            <?php if ($error): ?>
                <div class="error"><?php echo $error; ?></div>
            <?php endif; ?>

            <form method="POST">

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

                <input type="submit" value="Send" name="btnSubmit">

            </form>
        </div>

    </div>
    <div class="py-5"></div>
    <?php include 'includes/footer.php'; ?>