<? 

echo "<center>";




echo "<table style=\" background-color: rgb(204, 204, 204);width: 100%; text-align: center;\" border=\"0\" cellpadding=\"2\" cellspacing=\"2\">";
echo "<tbody><tr><td style=\"vertical-align: top;\">";
echo "<b><a href=\"?home\">Home Page</a></b><br>";
echo "</td></tr></tbody></table><br>";

echo "<table style=\"background-color: rgb(204, 204, 204);width: 100%; text-align: center;\" border=\"0\" cellpadding=\"2\" cellspacing=\"2\">";
echo "<tbody><tr><td style=\"vertical-align: top;\">";
echo "<b><a href=\"./members/\">Members Area</a></b><br>";
echo "</td></tr></tbody></table><br>";

echo "<table style=\" background-color: rgb(204, 204, 204);width: 100%; text-align: center;\" border=\"0\" cellpadding=\"2\" cellspacing=\"2\">";
echo "<tbody><tr><td style=\"vertical-align: top;\">";
echo "<b><a href=\"http://www.islamicsocietyofwichita.com/?content=view&cat=1&cat_name=Prayer%20Times&content_title=Prayer%20Schedule\">Prayer Times</a></b><br>";
echo "</td></tr></tbody></table><br>";

echo "<table style=\"background-color: rgb(204, 204, 204);width: 100%; text-align: center;\" border=\"0\" cellpadding=\"2\" cellspacing=\"2\">";
echo "<tbody><tr><td style=\"vertical-align: top;\">";
echo "<b><a href=\"?content=mod_calendar\">Events Calendar</a></b><br>";
echo "</td></tr></tbody></table><br>";

echo "<table style=\"background-color: rgb(204, 204, 204);width: 100%; text-align: center;\" border=\"0\" cellpadding=\"2\" cellspacing=\"2\">";
echo "<tbody><tr><td style=\"vertical-align: top;\">";
echo "<b><a href=\"?content=forms\">Reservation & Forms</a></b><br>";
echo "</td></tr></tbody></table><br>";


//echo "<table style=\"background-color: rgb(204, 204, 204);width: 100%; text-align: center;\" border=\"0\" cellpadding=\"2\" cellspacing=\"2\">";
//echo "<tbody><tr><td style=\"vertical-align: top;\">";
//echo "<b><a href=\"?content=islamic_library\">Islamic Library</a></b><br>";
//echo "</td></tr></tbody></table><br>";


//echo "<table style=\"background-color: rgb(204, 204, 204);width: 100%; text-align: center;\" border=\"0\" cellpadding=\"2\" cellspacing=\"2\">";
//echo "<tbody><tr><td style=\"vertical-align: top;\">";
// "<b><a href=\"?content=ISWBoard\">Boards & Members</a></b><br>";
//echo "</td></tr></tbody></table><br>";



//echo "<table style=\"background-color: rgb(204, 204, 204);width: 100%; text-align: center;\" border=\"0\" cellpadding=\"2\" cellspacing=\"2\">";
//echo "<tbody><tr><td style=\"vertical-align: top;\">";
//echo "<b><a href=\"./school.html\">Annoor Islamic School</a></b><br>";
//echo "</td></tr></tbody></table><br>";


$maincat = $db_object->query("SELECT  * FROM cat_info WHERE cat_parent=0 AND cat_type = 99 ORDER BY `cat_name` ASC  ");

	if (DB::isError($maincat)) {
		echo"I can't get main categories";
	}

$numRows  = $maincat->numRows();
for($i=0;$i<$numRows;$i++){
	$_maincat= $maincat->fetchRow();

echo "<table style=\"background-color: rgb(204, 204, 204);width: 100%; text-align: center;\" border=\"0\" cellpadding=\"2\" cellspacing=\"2\">";
echo "<tbody><tr><td style=\"vertical-align: top;\">";
echo "<b><a href=\"?content=view&cat=$_maincat[cat_id]&cat_name=$_maincat[cat_name]\">$_maincat[cat_name]</a></b><br>";
echo "</td></tr></tbody></table><br>";


}




?>
<table
style=" text-align: center; width: 12px; height: 32px;"
border="0" cellpadding="2" cellspacing="2">
<tbody>
<tr>
<td style="vertical-align: top; text-align: left;"><span
style="font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
</td>
</tr>
</tbody>
</table>



</center>
