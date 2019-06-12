<?

if (!$logged_in == 1 ){
header("location: /");
exit;
}


if (!$_POST['step2'] ) { 

include("form_step2.php");

exit;


}



//optional info check exit if there is a probleme with info and include form

// check localtion

	if (!$_POST['city']) {

		
print"<font color=#FF0000>  City is missing. </font>";

include("form_step2.php");
exit;
	}

if (!$_POST['state']) {

		
print"<font color=#FF0000>  State is missing. </font>";

include("form_step2.php");
exit;
	}






//check zip code
if(strlen($_POST[zip])!==5){
echo "<font color=#FF0000>Zip code need to be 5 digits</font>";
include("form_step2.php");
exit;
}
if (!$_POST['zip']){
print"<font color=#FF0000>  Zip code field is missing (5 digits). </font>";
include("form_step2.php");
exit;
	}

if(is_numeric($_POST[zip])){
$zip = $_POST[zip];
}else{
echo "<font color=#FF0000>Zip code need to be 5 digits </font>";
include("form_step2.php");
exit;
}


/* the rest of the information is optional, the only thing is to check it. */
//check web url
if ($_POST['website'] != '' & !preg_match("/^(http|ftp):\/\//", $_POST['website'])) {
		$_POST['website'] = 'http://'.$_POST['website'];	}

//check phonenumber if included
if($_POST['tel']){


if(is_numeric($_POST[tel])){
$tel = $_POST[tel];

} else{
echo "<font color=#FF0000>Invalid phone number. Numbers only </font>";
include("form_step2.php");
exit;
}
}//end if phone is post



$_SESSION[tel]= "$tel"  ;
$_SESSION[website]= "$_POST[website]" ;
$_SESSION[state]= "$_POST[state]";
$_SESSION[city]= "$_POST[city]";
$_SESSION[zip]= "$zip" ;

//than the query
if($_SESSION[email]){

$update = " UPDATE `users` SET `firstname` = '".$_SESSION[firstname]."',
`lastname` = '".$_SESSION[lastname]."',
`userphone` = '".$_SESSION[tel]."',
`website` = '".$_SESSION[website]."',
`address` = '".$_SESSION[address]."',
`city` = '".$_SESSION[city]."',
`state` = '".$_SESSION[state]."',
`zip` = '".$_SESSION[zip]."'
 WHERE `id` =$_SESSION[userid] LIMIT 1 ";


	$add_member = $db_object->query($update);

	if (DB::isError($add_member)) {
		die($add_member->getMessage());
	}

}else{
header("location: /");
exit;
}
	
?>

<center><h3>Thank you for registering. You can login now.</h3></center>

