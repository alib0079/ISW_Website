<?
//include("./login/loginckeck.php");
//if ($logged_in == 1) {


if ($_POST[submit] AND $_POST[contact]){






$msg=" Your friend $_POST[author] recommended this page for you http://islamicsocietyofwichita.com/?content=mod_news&sid=232&c=r ";

mail("$_POST[mailto]","$_POST[author] ",$msg,"From: $_POST[contact]");

$_admin_mailto="ab.ali.bouhouch@gmail.com";

$admin_msg="$_POST[author]:$_POST[contact] -Emailed:  $_POST[mailto] And Said : $_POST[note] ";

mail("$_admin_mailto","$_POST[author] ",$admin_msg,"From: $_POST[contact]");

echo "Thank you, your email was sent to your friend";


}else{$error="set";}






?>


<?if(!$_POST[submit] OR $error ){
if ($error){echo "<br><b>All field are Required</b><br>";}?>
<form action="" method="POST">

<input type="hidden" size="40" value="<? echo "$_GET[link]";?>" name="link">

<table style="width: 100%; text-align: left;" border="0" cellpadding="2"
cellspacing="2">
<tbody>
<tr>
<td style="vertical-align: top; text-align: right;"><span
style="font-weight: bold;">Your Email: </span><br>
</td>
<td style="vertical-align: top;"><input  size="40" value="<? echo "$_SESSION[useremail]";?>"
name="contact">&nbsp; <small><span style="font-weight: bold;"></span></small><br>
</td>
</tr>
<tr>
<td style="vertical-align: top; text-align: right;"><span
style="font-weight: bold;">Your Name:</span><br>
</td>
<td style="vertical-align: top;"><input  size="40" value="<?
if($_SESSION[userlastname] OR  $_SESSION[userfirstname] ){ echo "$_SESSION[userfirstname] $_SESSION[userlastname]";
}else{echo "";}?>"
name="author"></td>
</tr>
<tr>
<td style="vertical-align: top; text-align: right;"><span
style="font-weight: bold;">Your Friends Email: </span><br>
</td>
<td style="vertical-align: top;"><input  size="40" name="mailto">&nbsp; <small><span style="font-weight: bold;"></span></small><br>
</td>
</tr>

<tr>
<td style="vertical-align: top; text-align: right;"><span
style="font-weight: bold;">Note:</span><br>
</td>
<td style="vertical-align: top;"><textarea maxlength="200"
rows="10" name="note" cols="40">
<? echo "$_POST[note]";?>
</textarea></td>
</tr>
<tr>
<td style="vertical-align: top; text-align: right;"><br>
</td>
<td style="vertical-align: top;"><input 
name="submit" value="Submit link" type="submit"> </td>
</tr>
</tbody>
</table></form>
<?}
//}?>