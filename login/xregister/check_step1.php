<?
if($_GET[register_from]){$_SESSION[register_from]=$_GET[register_from];}
if($_POST[register_from]){$_SESSION[register_from]=$_POST[register_from];}

if (!$_POST['step1'] ) { 

include("form_step1.php");

exit;


}


if ( !$_POST['passwd'] | !$_POST['passwd_again'] | !$_POST['email']) {

print "<font color=#FF0000><center>  You did not fill in a required field.</center></font>";


include("form_step1.php");



		
exit;
	}

	// check if email exists in database.

	if (!get_magic_quotes_gpc()) {
		$_POST['email'] = addslashes($_POST['email']);
	}



	$name_check = $db_object->query("SELECT email FROM users WHERE email = '".$_POST['email']."' OR username ='".$_POST['email']."' ");

	if (DB::isError($name_check)) {
		die($name_check->getMessage());
	}

	$name_checkk = $name_check->numRows();


 
	if ($name_checkk != 0) {

		echo "The email: <strong>$_POST[email]</strong> is already registered.<BR> If you forgot your password please<a href=\"?content=flogin\">click here</a>.</center><br><br>";
include("form_step1.php");
exit;

	}

	// check passwords match

	if ($_POST['passwd'] != $_POST['passwd_again']) {

		echo "<font color=#FF0000><center>Passwords did not match</center></font>";

include("form_step1.php");
exit;
	}

	// check e-mail format

	if (!preg_match("/.*@.*..*/", $_POST['email']) | preg_match("/(<|>)/", $_POST['email'])) {

		
print"<font color=#FF0000> <center> Invalid e-mail address.</center> </font>";

include("form_step1.php");
exit;
	}



	// no HTML tags in username, website, location, password

	
	$_POST['passwd'] = strip_tags($_POST['passwd']);
	


	
	
	// now we can add them to the database.
	// encrypt password

	$_POST['passwd'] = md5($_POST['passwd']);

	if (!get_magic_quotes_gpc()) {
		$_POST['passwd'] = addslashes($_POST['passwd']);
		$_POST['email'] = addslashes($_POST['email']);
		$_POST['website'] = addslashes($_POST['website']);
		$_POST['location'] = addslashes($_POST['location']);
                $phone  = addslashes ($phone);
	}



	$regdate = date('m d, Y');


//register in session
$_SESSION[email]= "$_POST[email]";
$_SESSION[username]= "$_POST[email]";
$_SESSION[passwd]= "$_POST[passwd]" ;
$_SESSION[password]= "$_POST[passwd]" ;
$_SESSION[regdate]= "$regdate";
$_SESSION[agree_to_terms]= "1"; 
$_SESSION[Never]= 	'Never';
$_SESSION[register_step1]=ok;
$_SESSION[newsletter]=$_POST[newsletter];






if($_SESSION[email]){

$insert = "INSERT INTO `users` ( `id` , `username` , `password` , `regdate` , `email` ,`newsletter`, `agree_to_terms`  )
VALUES ( '', '".$_SESSION[email]."', '".$_SESSION[passwd]."', NOW( ), '".$_SESSION[email]."','".$_SESSION[newsletter]."','1')";




	$add_member = $db_object->query($insert);

	if (DB::isError($add_member)) {
		die($add_member->getMessage());
	}
$returen_id = mysql_insert_id();

$_SESSION[userid]=$returen_id;

unset($_SESSION[regdate]);
unset($_SESSION[agree_to_terms]); 
unset($_SESSION[Never]);
unset($_SESSION[newsletter]);


header("location: $_SESSION[register_from] ");

}















?>