<?php
if(isset($_POST['email'])) {

$email_to = "rockexams@gmail.com";
$email_subject = "Feedbacks for site";

function died($error) {
echo "We are very sorry, but there were error(s) found with the form you submitted .";
echo "These errors appear below.<br/><br/>";
echo $error."<br /><br />";
echo "Please go back and fix these errors.<br/><br/>";
die();
}

$email_message = "Form details below. \n\n";

function clean_string($string) {
$bad = array("content-type",


Thankyou for your feedback.

<?php

}
?>
