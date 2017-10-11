<?php
/* Set e-mail recipient */
$myemail  = "Contact@iDissertation.co.uk";

/* Check all form inputs using check_input function */
$yourname =$_POST['yourname'];
$subject  = $_POST['subject'];
$email    = $_POST['email'];
$phone  = $_POST['phone'];
// $likeit   = check_input($_POST['likeit']);
$how_find = $_POST['how'];
$comments = $_POST['comments'];

/* If e-mail is not valid show error message 
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
    show_error("E-mail address not valid");
}
*/
/* If URL is not valid set $website to empty 
/*if (!preg_match("/^(https?:\/\/+[\w\-]+\.[\w\-]+)/i", $phone))
{
    $phone = '';
}
*/
/* Let's prepare the message for the e-mail */
$headers = "From $email";


$message = "Hello!

Your contact form has been submitted by:

Name: $yourname
E-mail: $email
Phone: $phone

How did he/she find it? $how_find

Comments:
$comments

End of message
";

/* Send the message using mail() function */
mail($myemail, $subject, $message, $headers);

/* Redirect visitor to the thank you page */
header('Location: thanks.html');
exit();

