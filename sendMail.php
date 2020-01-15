<?php



$your_name = $_POST['name'];
$your_email = $_POST['emailid'];
$video_style = $_POST['syvideostyle'];
$video_length = $_POST['hlyayvideo2b'];
$form_message = $_POST['form_message'];

$to = 'sankettejas@gmail.com';
$subject = "Inquiry on creavids.co";
$message = "Hi Creavids, You have got and enquiry on website from <strong>" . $your_name . "</strong> below are the contact details and message of the " . $your_name . ". EmailId " . $your_email . " Video Style " . $video_style . " Video Lenght " . $video_length . ". And the message he left is " . $form_message . " please contact as soon as possible.";

$header = "From:admin@creavids.co \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

print_r($message);

$retval = mail($to, $subject, $message, $header);

if ($retval == TRUE) {
  echo "Message sent successfully...";
}
else {
  echo "Message could not be sent...";
}
