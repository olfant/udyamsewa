<?php
    session_start();
    include_once('./config.php'); //contain datbase &  payment gateway credentials
    error_reporting(E_ERROR | E_PARSE);
    include_once('./validate-special.php'); //form validations

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use Olfant\CrmOlfantSdk\FormAction;

    require 'vendor/autoload.php';

    $applicant_name   = $_POST['applicant_name'];
    $mobile_number    = $_POST['mobile_number'];
    $email_id         = $_POST['email_id'];


    $crm_website = $webNameUpperCase;
    $host_name = $webName;
    $url1 = $_SERVER['SERVER_NAME'];
    $webpath = pathinfo($url1, PATHINFO_FILENAME);
    $website = strtoupper($webpath);
    $table='msme_form';
    $formAction = new FormAction;

    if((isset($_POST['form_id'])&& $_POST['form_id'] == 'msme_enquiry')) {
        include_once('uploads.php');
        $_SESSION['table_id'] = 'msme_form';
        $payment_status = 'Unpaid';
        $product_price = 0;
        $sql=" INSERT INTO $table ( form_name, applicant_name, mobile_number, email_id, enquiry_message)
            VALUES ( '".$_POST["form_name"]."', '".$_POST["applicant_name"]."', '".$_POST["mobile_number"]."', '".$_POST["email_id"]."', '".$_POST["enquiry_message"]."')
        ";
        if(!$result = $conn->query($sql)){
            die('There was an error running the query [' . $conn->error . ']');
        }else {
            //crm api
            $response = $formAction->formToCRM("MSME", $form_name, $applicant_name, $mobile_number, $email_id, "Unpaid", (int)$product_price,$_SESSION["form_id"], null, null);
            // $ch = curl_init('https://crm.webinfinix.com/api/registration-form-submission.php?formId='.$_SESSION["form_id"].'&vendor=TTG&business=MSME&website='.$crm_website.'&amount='.$product_price.'&status=Unpaid&name='.$applicant_name.'&mobile='.$mobile_number.'&email='.$email_id.'&state='.$state.'&formName='.$form_name.'');
            // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // $response = curl_exec($ch);
            $_SESSION["form_id"] = $conn->insert_id;
            $_SESSION["panel_form_id_2"] = $response;
            $form_name = $_POST["form_name"];
            //
            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                // $mail->SMTPDebug = 2;
                $mail->CharSet = 'UTF-8';
                $mail->Host = $mailHost;
                $mail->SMTPAuth = true;
                $mail->Username = $mailAddress;
                $mail->Password = $mailPassword ;
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;
                $mail->setFrom($mailAddress, 'MSME Registration');
                $mail->addAddress($_POST["email_id"]);
                $mail->isHTML(true);
                $mail->Subject = "Your ".$_POST['form_name']." Form Submitted Sucessfully";
                $mail->Body =
                '
                <section style="width:100%;background-color: ; padding: 10px;font-family: \'Poppins\', sans-serif;">
                <div style="display: flex;align-items: center;"><div style="
                align-items: center;
                "><p style="font-size: 31px;font-weight: 700;">Form Submitted Sucessful For '.$_POST['form_name'].'</p></div></div>
                <hr style="margin-top: 20px;margin-bottom: 20px;">
                <span>Dear '.$_POST['applicant_name'].',</span><br><br>
                <span>Greeting of the Day</span><br><br>

                <div id="container" style=" padding: 40px ;; background: #ddd;margin: 10px 0px 20px 0px;">
                This mail is an acknowledgement of successful submission of your Enquiry application, on our website.
                </div>
                <span>Regards</span><br>
                <span>Team Processing</span><br>
                For Order Status: '.$mailAddress.'<br><br>
                    <div style="text-align: center;padding: 20px 0px;color: gray;">
              <div style="margin-bottom: 5px;">MSME Registration © 2021</div>
              <div><a href="https://'.$webName.'/about-us.php" style="text-decoration: none;color: gray;">About</a></div>
            </div>

                </section>
                ';
                $mail->send();
            }
            catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
            
            include('thanks.php');
        }
    }
?>
