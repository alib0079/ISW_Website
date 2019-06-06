<?php

// database connect script.

require "../connection/db_connect.php";


if ($_POST[loginfrom]){
$_SESSION[loginfrom]= $_POST[loginfrom]; 
}


if($_GET[logout]){ 
unset($_SESSION[username]);
unset($_SESSION['password']);
unset($_SESSION['passwd']);
unset($_SESSION['email']);
unset($_SESSION['register_step1']);
unset($_SESSION['register_step2']);
unset($_SESSION['cart_id']);
unset($_SESSION['userid']);
//unset($_SESSION['useremail']);
unset($_SESSION['userphone']);
unset($_SESSION['Website']);
unset($_SESSION['Location']);
unset($_SESSION['loginfrom']);
unset($_SESSION['login_guest']);
unset($_SESSION['userfirstname']);
unset($_SESSION['userlastname']);

header("location: /"); }





if (isset($_POST['submit'])) { // if form has been submitted


	/* check they filled in what they were supposed to and authenticate */
	if(!$_POST['uname'] | !$_POST['passwd']) {
		//die('You did not fill in a required field.');
print "<font color=#FF0000>You did not fill in a required field.</font>";
include("loginform.php");
exit;
	}



	// authenticate.

	if (!get_magic_quotes_gpc()) {
		$_POST['uname'] = addslashes($_POST['uname']);
	}

	$check = $db_object->query("SELECT username, password FROM users WHERE username = '".$_POST['uname']."'");

	if (DB::isError($check) || $check->numRows() == 0) {
		//die('That username does not exist in our database.');
print "<font color=#FF0000>Incorrect username or password, please try again.</font>";
include("loginform.php");
exit;
	}

	$info = $check->fetchRow();

	// check passwords match

	$_POST['passwd'] = stripslashes($_POST['passwd']);
	$info['password'] = stripslashes($info['password']);
	$_POST['passwd'] = md5($_POST['passwd']);

	if ($_POST['passwd'] != $info['password']) {
		//die('Incorrect password, please try again.');
print "<font color=#FF0000> Incorrect username or password, please try again. </font>";

include("loginform.php");
exit;
	}else{

	// if we get here username and password are correct, 
	//register session variables and set last login time.

	$date = date('m d, Y');

	$update_login = $db_object->query("UPDATE users SET last_login = '$date' WHERE username = '".$_POST['uname']."'");

	$_POST['uname'] = stripslashes($_POST['uname']);
	$_SESSION['username'] = $_POST['uname'];
	$_SESSION['password'] = $_POST['passwd'];
//get some more info about the user like email 
      $userdata= $db_object->query("SELECT * FROM users WHERE username = '".$_POST['uname']."'");
      if (DB::isError($userdata) ) {
		die('i can select from the users table .');
	}
          $row = $userdata->fetchRow(); 
         // print"this is mysql result in the users table:";
         // print_r($row); 
      

      $_SESSION['useremail'] = $row['email'];
      $_SESSION['userphone'] =$row['userphone'];
      $_SESSION['userid'] =$row['id'];
      $_SESSION['Website'] =$row['website'];
      $_SESSION['Location'] =$row['location'];
      $_SESSION['userid'] =$row['id'];
      $_SESSION['userfirstname'] =$row['firstname'];
      $_SESSION['userlastname'] =$row['lastname'];

      $db_object->disconnect();


//if user does not use the cookies uncomment the next line.
//$tmp = session_id(); 
	header("location: $_SESSION[loginfrom]");

exit;

}


} else {	// if form hasn't been submitted

include("loginform.php");
}
?>

</body>
</html>
