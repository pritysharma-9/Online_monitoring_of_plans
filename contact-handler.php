<?php
error_reporting(0);


?>



<?php
$name=$_post['name'];
$visitor_email=$_post['email'];
$message=$_post['message'];


$email_from='prity.kri.sharma@gmail.com';

$email_subject="new form submission";

$email_body="user name:$name.\n".
              " user email:$visitor_email.\n".
                  "user message:$message.\n";


$to="kumarisharmaprity@gmail.com";

$headers="form:$email_from \r\n";

$headers="reply-to:$visitor_email \r\n";
mail($to, $email_subject, $email_body,$headers);

header("location:contact.html");

?>