
<?php

// database connect script.

if($logged_in == 1) {
	header("location: /");
exit;


}


// authenticate them if they are coming form the mail box 

if(!$_SESSION['newpasswd']){

if( $_GET['ID'] OR $_SESSION['ID']  ){
if( !$_GET['ID']){
  $_GET['ID']=$_SESSION['ID'];
}


	if (!get_magic_quotes_gpc()) {
		$_GET['ID'] = addslashes($_GET['ID']);
	}

	$check = $db_object->query("SELECT username, password, email FROM users WHERE password = '".$_GET['ID']."'");

       if (DB::isError($check) || $check->numRows() == 0) {
		//die('That username does not exist in our database.');

print "<font color=#FF0000>The signature in your email link is corrupted. Please try to get another email sent to your MailBox.</font>";
include("form_flogin.php");
exit;
}

$info = $check->fetchRow();
if($info['password']){
$_SESSION['ID']=$info['password'];
$_SESSION['useremail']=$info['email'];
}


?>
<h3 align="center" style="color: rgb(0, 0, 102);">Renew your password</h3>
<form action="" method="post">
<table align="center" border="1" cellspacing="0" cellpadding="3">
<tr><td>E-Mail Address:</td><td>
<input type="hidden" value= "<?echo "$_SESSION[useremail]"; ?>"  name="Reemail" > &nbsp;&nbsp;&nbsp;&nbsp;  <?echo "$_SESSION[useremail]"; ?>
</td></tr>
<tr><td>New Password*:</td><td>
<input type="password" name="passwd" maxlength="50">
</td></tr>
<tr><td>Confirm New Password*:</td><td>
<input type="password" name="passwd_again" maxlength="50">
</td></tr>
<tr><td colspan="2" align="right">
<input type="submit" name="submit" value="Renew">
</td></tr>
</table>
</form>


<?


}//end if there coming from mail box


//start renew pass and some ckecks
if($_POST[Reemail]){

// check Reemail format
if (!preg_match("/.*@.*..*/", $_POST['Reemail']) | preg_match("/(<|>)/", $_POST['Reemail'])) {

		//die('Invalid e-mail address.');
print"<font color=#FF0000>  Invalid e-mail  format. </font>";

exit;

}
if (!get_magic_quotes_gpc()) {
		$_GET['ID'] = addslashes($_GET['ID']);
	}

	$check = $db_object->query("SELECT username  FROM users WHERE password = '".$_SESSION['ID']."' AND email='".$_POST[Reemail]."'");

       if (DB::isError($check) || $check->numRows() == 0) {
		//die('That username does not exist in our database.');
print "<font color=#FF0000>The email : $_POST[Reemail] is not the one we have in our database. Please try again</font>";

exit;
}
if ($check != 0) {
         $row = $check->fetchRow();
         $SellerEmail = $_POST[Reemail];
         $SellerUsername = $row['username'];
         $_SESSION['username']= $row['username'];
        

}


if ( !$_POST['passwd'] | !$_POST['passwd_again'] ) {

print "<font color=#FF0000>  The new password can't be empty.</font>";



		
exit;
	}
if ($_POST['passwd'] != $_POST['passwd_again']) {

		echo "<font color=#FF0000>Passwords did not match</font>";


exit;
	}if ($_POST['passwd'] = $_POST['passwd_again']){ 
$_SESSION['newpasswd'] = $_POST['passwd'];
}
//don't forget to unset the session id and print out the login info with link to the login
//end post new pass
}//end post Reemail

//compare the the passwords and set the newpasswd if not the print password don't match


}



if($_SESSION['newpasswd']){
$update = $db_object->query("UPDATE users SET password = MD5( '".$_SESSION[newpasswd]."' ) WHERE username = '".$_SESSION['username']."' LIMIT 1") ;

unset($_SESSION[ID]);

echo "<center> Your password has been updated, Use your new password to login now</center>";

}

?>


