<?php


if(isset($_POST['email'])) {



    // EDIT THE 2 LINES BELOW AS REQUIRED

    $email_to = "dana@danamalkin.com";

    $email_subject = $_POST['subject'];





    function died($error) {

        // your error code can go here

        echo '<script type="text/javascript">alert("' . $error . '");</script>';


        die();

    }



    // validation expected data exists

    if(!isset($_POST['first_name']) ||

        !isset($_POST['email']) ||

        !isset($_POST['subject']) ||

        !isset($_POST['message'])) {

       died('We are sorry, but there appears to be a problem with the form you submitted.');

    }



    $first_name = $_POST['first_name']; // required

    $email_from = $_POST['email']; // required

    $subject = $_POST['subject']; // not required

    $message = $_POST['message']; // required



    $error_message = "";

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp,$email_from)) {

    $error_message .= 'The Email Address you entered does not appear to be valid.';

  }

    $string_exp = "/^[A-Za-z .'-]+$/";

  if(!preg_match($string_exp,$first_name)) {

    $error_message .= 'The Name you entered does not appear to be valid.';

  }

  if(strlen($message) < 2) {

    $error_message .= 'The message you entered do not appear to be valid.';

  }

  if(strlen($error_message) > 0) {

    died($error_message);

  }

    $email_message = "Form details below.\n\n";



    function clean_string($string) {

      $bad = array("content-type","bcc:","to:","cc:","href");

      return str_replace($bad,"",$string);

    }


    $email_message .= "Name: ".clean_string($first_name)."\n";

    $email_message .= "Email: ".clean_string($email_from)."\n";

    $email_message .= "Subject: ".clean_string($subject)."\n";

    $email_message .= "Message: ".clean_string($message)."\n";







// create email headers

$headers = 'From: '.$email_from."\r\n".

'Reply-To: '.$email_from."\r\n" .

'X-Mailer: PHP/' . phpversion();

@mail($email_to, $email_subject, $email_message, $headers);

?>



<!-- include your own success html here -->


<?php

}

?>

<div class="modal fade" id="travelist-contact" tabindex="-1" role="dialog" aria-labelledby="applicationModal" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header text-center"><h2>Leviathan Contact Form</h2></div>
            <div class="modal-body">
                <form method="post" action="" enctype="multipart/form-data">
                  <div class="contact-field">
                        <label for="first_name">Name:</label>
                        <input class="form-control" type="text" name="first_name" placeholder="Enter name">
                    </div>
                    <div class="contact-field">
                        <label for="email">Email:</label>
                        <input class="form-control" type="text" name="email" maxlength="80" placeholder="Enter email">
                    </div>
                    <div class="contact-field">
                        <label for="subject">Subject:</label>
                        <input class="form-control" type="text" name="subject" maxlength="30" placeholder="Enter subject">
                    </div>
                    <div class="contact-field">
                        <label for="message">Message:</label>
                        <textarea class="form-control" name="message" placeholder="Enter Message" maxlength="1000" cols="25" rows="6"></textarea>
                    </div>

            </div>
            <div class="modal-footer">
                <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-red" type="submit" name="signup">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
