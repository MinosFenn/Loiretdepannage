<?php 

if (isset($_POST['submit'])) {
$name = $_POST['surname-2'];
$nickname = $_POST['name-2']
$email = $_POST['email-2'];
$phone = $_POST['phone-2'];
$message = $_POST['field-2'];
$formcontent="From: $name \n Message: $message";

$recipient = "simon.joachim@kedgebs.com";
$headers = "De: ".$email;
$txt = "Vous avez reçu un email de " .$name.".\n\n".$message;
/*$mailheader = "From: $email \r\n";
*/
mail($recipient, $txt, $headers) or die("Error!");
echo "Merci pour votre message!";
header("Location: index.php?mailsend");
}
?>