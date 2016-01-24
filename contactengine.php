<?php

$EmailFrom = "inquiry@auricag.com";
$EmailTo = "info@auricag.com";
$Subject = "Contact Form Inquiry";
$Name = Trim(stripslashes($_POST['Name']));
<<<<<<< HEAD
$Company = Trim(stripslashes($_POST['Company']));
$Email = Trim(stripslashes($_POST['Email']));
$Phone = Trim(stripslashes($_POST['Phone']));
$Message = Trim(stripslashes($_POST['Message']));
=======
$Company = Trim(stripslashes($_POST['Company']));
$Email = Trim(stripslashes($_POST['Email']));
$Phone = Trim(stripslashes($_POST['Phone']));
$Message = Trim(stripslashes($_POST['Message']));
>>>>>>> 3c844851177066068b4be4a3ead63c936c1dc926

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Company: ";
$Body .= $Company;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $Phone;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

<<<<<<< HEAD
// send email
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page
=======
// send email
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page
>>>>>>> 3c844851177066068b4be4a3ead63c936c1dc926
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}

?>
