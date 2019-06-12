
<?php

// database connect script.

if($logged_in == 1) {
	header("location: /");
exit;


}

// this will put GET[id] in Session[id] so will start checking by the $_SESSION[ID]

if( $_GET['ID']){

$_SESSION['ID']=$_GET['ID'];

}


// check of signature is valid

if (!get_magic_quotes_gpc()) {
		$_GET['ID'] = addslashes($_GET['ID']);
	}


$check = $db_object->query("SELECT username, password, email FROM users WHERE password = '".$_SESSION['ID']."' AND email='".$_GET['email']."'");

       if (DB::isError($check) || $check->numRows() == 0) {
		//die('That username does not exist in our database.');

print "<br><br><font color=#FF0000>The signature in your email link is corrupted. Please try to get another email sent to your MailBox.</font>";
unset($_SESSION[ID]);
print "<a href=\"?content=flogin\">Click here </a>";


exit;
}

$info = $check->fetchRow();
if($info['password']){
$_SESSION['useremail']=$info['email'];

}//end if password was not empty

// is signature check ok post form with the user email 




//start renew pass and some ckecks this form will on top and error message will be at the bottom

?>
<h3 align="center" style="color: rgb(0, 0, 102);">Renew your password</h3>
<form action="" method="post">
<table align="center" border="1" cellspacing="0" cellpadding="3">
<tr><td>E-Mail Address:</td><td>
<input type="hidden" value= "<?echo "$_SESSION[useremail]"; ?>"  name="Reemail" > &nbsp; <?echo "$_SESSION[useremail]"; ?>
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

if($_POST[Reemail]){

  // check Reemail format
if (!preg_match("/.*@.*..*/", $_POST['Reemail']) | preg_match("/(<|>)/", $_POST['Reemail'])) {

		//die('Invalid e-mail address.');
print"<font color=#FF0000>  Invalid e-mail  format. </font>";

exit;

}

  //check again if they submit different email with the form

if (!get_magic_quotes_gpc()) {
		$_GET['ID'] = addslashes($_GET['ID']);
	}

	$check = $db_object->query("SELECT id,username FROM users WHERE password = '".$_SESSION['ID']."' AND email='".$_SESSION['useremail']."'");

       if (DB::isError($check) || $check->numRows() == 0) {
		//die('That username does not exist in our database.');
print "<font color=#FF0000>The email : $_POST[Reemail] is not the one we have in our database. Please try again</font>";
header("location: /");
exit;
}else{
$row = $check->fetchRow();

$_SESSION[userid]="$row[id]";

}


  //check of password empty


if ( !$_POST['passwd'] | !$_POST['passwd_again'] ) {

print "<font color=#FF0000>  The new password can't be empty.</font>";



		
exit;
	}
  //password match

if ($_POST['passwd'] != $_POST['passwd_again']) {

		echo "<font color=#FF0000>Passwords did not match</font>";


exit;
	}



if ($_POST['passwd'] = $_POST['passwd_again']){ 

$newpasswd= $_POST['passwd'];
}

if($newpasswd){
$update = $db_object->query("UPDATE users SET password = MD5( '".$newpasswd."' ) WHERE username = '".$_SESSION['useremail']."' LIMIT 1") ;

$_SESSION[ID]="";

echo "<big><center> Your password has been updated, Use your new password to login now</center>";
print "<a href=\"?content=coustomer_login\">Click here </a></big>";

mkdir("./pics/$_SESSION[userid]",0777);

}



}//end post Reemail





