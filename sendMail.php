<?php




use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$smtpUsername = 'info@creavids.co';
$smtpPassword = 'creavids212#$'; 


$mail = new PHPMailer;
$mail->isSMTP(); 
$mail->SMTPDebug = 2; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
$mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
$mail->Port = 587; // TLS only
$mail->SMTPSecure = 'tls'; // ssl is depracated
$mail->SMTPAuth = true;
$mail->Username = $smtpUsername;
$mail->Password = $smtpPassword;
$mail->setFrom($emailFrom, $smtpUsername);
$mail->addAddress($emailTo, 'sankettejas@gmail.com');
$mail->Subject = 'PHPMailer GMail SMTP test';
$mail->msgHTML("test body"); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
$mail->AltBody = 'HTML messaging not supported';
// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file

if(!$mail->send()){
    print_r("Mailer Error: " . $mail->ErrorInfo;);
}else{
    print_r("Message sent!");
}




$messageSuccessful = FALSE;

$messageFailed = FALSE;

$newPage = TRUE;
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
  elseif ($formName == 'questionarieForm') {
    $subject = "Video Brife Questionnarie From " . $_POST['name'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $website = $_POST['website'];
    $purpose = $_POST['purpose'];
    $videoStyle = $_POST['videoStyle'];
    $videoSec = $_POST['videoSec'];
    $product_solution = $_POST['product_solution'];
    $brief_about_product = $_POST['brief_about_product'];
    $moodOfVideo = $_POST['moodOfVideo'];
    $audience = implode(',', $_POST['audience']);
    $sees = implode(',', $_POST['sees']);
    $targetSegment = implode(',', $_POST['targetSegment']);
    $whatCustomProspects = $_POST['whatCustomProspects'];
    $voice_over = $_POST['voice-over'];
    $voice_accent = $_POST['accent'];
    $background_music = $_POST['background-music'];
    $terms_of_video = $_POST['terms-of-video'];
    $brand_tagline = $_POST['brand-tagline'];
    $call_to_action = $_POST['call-to-action'];
    $call_to_action_if_yes = $_POST['call-to-action-if-yes'];
    $reference_video = $_POST['reference-video'];
    $offering_better = $_POST['offering-better'];
    $competitors = $_POST['competitors'];
    $did_we_miss_something = $_POST['did_we_miss_something'];
    $message = "Hi Creavids, You have got a video brief questionnarie submitted by " . $name . "there company webiste is " . $website . " and email id of the contactor is " . $email . " & below are the answers of the question in the form: <br> 1. What is the purpose of this video? (In one line why are you having this video created and what do you hope to accomplish?)? <br> Answer: " . $purpose . "<br> 2. What video style you are looking for? <br> Answer: " . $video_style . ". <br> 3. How long do you anticipate your video to be? <br> Answer: " . $videoSec . ". <br> 4. Product / Solution is for...? <br> Answer: " . $product_solution . ". <br> 5.Brief about the Product / Solution / Service / Concept? <br> Answer: " . $brief_about_product . ".<br> 6.Mood of the video – Businesslike/Humorous etc (you can choose multiple Moods)? <br> Answer: " . $moodOfVideo . " .<br> 7. Where is your audience? <br> Answer: " . $audience . ". <br> 7.Who sees the video? <br> Answer: " . $sees . " .<br> 8. Target segment age group? <br> Answer: "  . $targetSegment . ". <br> 9. What do your customers / prospects / audience want the most? <br> Answer: " . $whatCustomProspects . " . <br> 10. Do you need a voice-over for this video? <br> Answer: " . $voice_over . " .<br> 11. If yes, which voice accent do you prefer? <br> Answer: " . $voice_accent . " . <br> 12. Do you want background music in your video? <br> Answer: " . $background_music . " . <br> 13. Any “do’s and don’ts” in terms of the video? <br> Answer: " . $terms_of_video . " . <br> 14. Any brand tagline or slogan that you’d like to include in the video? <br> Answer: " . $brand_tagline . " . <br> 15. Do you have a call-to-action that you’d like to include? <br> Answer: " . $call_to_action . " . <br> 16. If Yes, the call-to-action will be...? <br> Answer: " . $call_to_action_if_yes . " . <br> 17. Is there any reference videos or styles that you would like us to refer for this production? <br> Answer: " . $reference_video . " . <br> 18. To know your offering better please suggest any other web link we should refer to? <br> Answer:  " . $offering_better . " . <br> 19. Name two of your direct competitors. <br> Answer: " . $competitors . " . <br> 20. Did we miss something? <br> Answer: " . $did_we_miss_something . ".  <br> <strong> Thank You </strong>";
  }

  $to = 'info@creavids.co';
  $header = "From:admin@creavids.co \r\n";
  $header .= "MIME-Version: 1.0\r\n";
  $header .= "Content-type: text/html\r\n";

  $retval = mail($to, $subject, $message, $header);

  if ($retval == TRUE) {
    $newPage = FALSE;
    $messageSuccessful = TRUE;
    $_POST = [];
  }
  else {
    $newPage = FALSE;
    $messageFailed = TRUE;
    $_POST = [];
  }
}
