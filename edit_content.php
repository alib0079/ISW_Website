<?
require './connection/db_connect.php';
include("./config/config.php");

include("./login/loginckeck.php");

if ($logged_in == 1) {

?>


<html>
<head>
<title>openWYSIWYG editor</title>
</head>
<script language="JavaScript" type="text/javascript" src="./modules/wysiwyg_beta/wysiwyg.js">
</script>


<body >

<h2>Content Editor </h2> 
<a href="/?content=edit_wiki&wikiid=<? echo "$_GET[wikiid]&wiki_title=$_GET[wiki_title]";if($_GET[path]){echo"&path=$_GET[path]";}?>">[Simple Text editor]</a>
 <a href="/?home">[Go back to homepage]</a>
<br><br>

<?echo "<div style=\"text-align: left; margin-left: 40px;\"><b><u>Editing:</u></b> $_GET[wiki_title]<FONT color=#ff0000>Changes will not be saved if you don't have the privilege to edit this content But they will be emailed to us to look at</FONT></div>";?>

<br><br>
<center>

<form  action="./?content=save_wiki&wikiid=<? echo "$_GET[wikiid]";if($_GET[path]){echo"&path=$_GET[path]";}?>" method="post" id="edit" name="edit"  >
<input type="submit" name="ok" value="  Submit Editing  " /><br><br>
<? 
if($_GET[path]){

$path=$_GET[path];
$datadir.="$path";

}

$fp =@ fopen("$datadir$_GET[wikiid]", "rb"); 


print "<textarea id=\"ta\" name=\"content\" style=\"width:100%\" rows=\"24\" cols=\"80\">";
   print htmlentities(fread($fp, filesize("$datadir$_GET[wikiid]")));
    fclose ($fp);
    print "</textarea>";
?>
<script language="javascript1.2">
  generate_wysiwyg('ta');
</script>

<input type="submit" name="ok" value="  Submit Editing  " />

</form>
</center>
<?}?>
</body>
</html>
