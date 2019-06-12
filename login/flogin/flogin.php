

<?php
// check login
if($logged_in == 1) {
	header("location: /");
exit;
}
if( $_GET['ID'] OR $_SESSION['ID']  ){

include("renewpass.php");

exit;
}
?>
<h3 align="center" style="color: rgb(0, 0, 102);">Enter your email</h2>
<?



//start email proccessing

if($_POST[FEmail]){

// check e-mail format
if (!preg_match("/.*@.*..*/", $_POST['FEmail']) | preg_match("/(<|>)/", $_POST['FEmail'])) {

		//die('Invalid e-mail address.');
print"<font color=#FF0000>  Invalid e-mail address format. </font>";
include("form_flogin.php");
exit;

}

//check if e-mail exists
if (!get_magic_quotes_gpc()) {
		$_POST['FEmail'] = addslashes($_POST['FEmail']);
	}



	$email_check = $db_object->query("SELECT * FROM users WHERE email = '".$_POST['FEmail']."'");

	if (DB::isError($email_check)) {
		die($email_check->getMessage());
	}

	$email_checkk = $email_check->numRows();

	if ($email_checkk != 0) {
      $row = $email_check->fetchRow();
      $SellerEmail = $row['email'];
      $SellerUsername =$row['username'];
      $SellerPassword =$row['password'];
      $subject ="$_SERVER[HTTP_HOST]  login info";
      $fromName =" http://$_SERVER[HTTP_HOST] ";
      $fromAddress = "no_reply@$_SERVER[HTTP_HOST]";
      $message = "You have requested the login information for your account. Click here to get new password   http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]&ID=$SellerPassword&email=$SellerEmail";
//echo "$message";
$temp = mail($SellerEmail, $subject, $message, "From: ".$fromName." <".$fromAddress.">") or print "<br>Could not send mail. Please try again later<BR><BR><P>";
		if ($temp) {echo "The login information was sent to: <strong>$_POST[FEmail]</strong>.";}
		


//echo"$message";
//print_r($row);
		//echo "The login information was sent to: <strong>$_POST[FEmail]</strong>.";

exit;

}else {

echo "<font color=#FF0000>Sorry, the email: <strong>$_POST[FEmail]</strong> doesn't exist in our database, please try again.</font>";
include("form_flogin.php");
exit;
}//end if FEmail posted


}else{
include("form_flogin.php");

}//end if forgot email

?>





