<table style=" width: 100%; text-align: left;" border="0"
cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td style="text-align: center; vertical-align: middle;">

<?
@include("./modules/banner/banner_home_top.php");


?>

</td>
</tr>
</tbody>
</table>
<br>
<?
//search page
//@include("./wiki/wiki43");

$_GET[cat]="39";
@include("./wiki/wiki54");
//end search page

@include("./modules/mod_news/home_news.php");
echo "<br>";
//@include("./modules/calendar1/list.php");

?>

<object
classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0"
height="400" width="460"> 

<param name="movie" value="http://www.islamicsocietyofwichita.com/pics/flash/pictures.swf"> <param
name="quality" value="high">
<embed src="./pics/flash/pictures.swf" quality="high"
pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"
type="application/x-shockwave-flash" height="400" width="460"> </object>