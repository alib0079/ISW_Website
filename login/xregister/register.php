<br>
<?php
 
if ($logged_in == 1 ){
echo "you are logged in";
header("location: /"); 
exit;
}
if (isset($_POST['step1']) OR !$_SESSION[register_step1] ) { 
?><center><big style="font-weight: bold; color: rgb(0, 0, 102);">New Account Registration </big><br><br></center><?
include("check_step1.php");

} 
?>

