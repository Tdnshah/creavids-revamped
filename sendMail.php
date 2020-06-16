<?php
$messageSuccessful = false;

$messageFailed = false;

$newPage = true;
$formName = $_POST['formName'];
if (isset($_POST["submit"])) {
  if ($formName == 'contactusForm') {
    $your_name = $_POST['name'];
    $your_email = $_POST['emailid'];
    $video_style = $_POST['syvideostyle'];
    $video_length = $_POST['hlyayvideo2b'];
    $form_message = $_POST['form_message'];
    $subject = "Inquiry on creavids.co";
    $message = "Hi Creavids, You have got and enquiry on website from " . $your_name . " below are the contact details and message of the " . $your_name . ". EmailId " . $your_email . " Video Style " . $video_style . " Video Lenght " . $video_length . ". And the message he left is " . $form_message . " please contact as soon as possible.";
  }
  elseif ($formName == 'partnershipForm') {
    $fullname = $_POST['fullname'];
    $emailid = $_POST['emailid'];
    $company_name = $_POST['company_name'];
    $company_website = $_POST['company_website'];
    $choiceofpartnership = $_POST['choiceofpartnership'];
    $more_info = $_POST['more_info'];

    $subject = "Inquiry for Parnership on Creavids.co";

    $message = "Hi Creavids, You have got and partnership enquiry on website from " . $fullname . " below are the contact details and message of the " . $fullname . ". EmailId " . $emailid . " The Company name is " . $company_name . " and the website of the company is  " . $company_website . ". And the message they left is " . $more_info . " please contact as soon as possible.";
  }

  $to = 'info@creavids.co';
  $header = "From:admin@creavids.co \r\n";
  $header .= "MIME-Version: 1.0\r\n";
  $header .= "Content-type: text/html\r\n";

$retval = mail($to, $subject, $message, $header);

if ($retval == TRUE) {
  $newPage=false;
  $messageSuccessful = true;
  $_POST=[];
}
else {
  $newPage = false;
  $messageFailed = true;
  $_POST = [];
}
}
