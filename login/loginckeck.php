<?
if ($logged_in == 1) {

echo '<div style="text-align: right;">Logged in as<b> '.$_SESSION['username'].'</b>,'; echo "<a href=\"http://$_SERVER[HTTP_HOST]/$_configure[base_dir]/login/login.php?logout=true\">logout</a></div>";

} else {
echo"<BR><BR><div style=\"text-align: center;\"><form action=\"http://$_SERVER[HTTP_HOST]/$_configure[base_dir]/login/login.php\" method=\"POST\">";
echo"<input type=\"hidden\" name=\"loginfrom\" value=\"http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]\">";
echo "<table align=\"center\" border=\"1\" cellspacing=\"0\" cellpadding=\"3\">";
echo "<tr><td>Email:</td><td>";
echo "<input type=\"text\" name=\"uname\" maxlength=\"40\">";
echo "</td></tr><tr><td>Password:</td><td>";
echo "<input type=\"password\" name=\"passwd\" maxlength=\"50\">";
echo "</td></tr><tr><td colspan=\"2\" align=\"right\">";
echo"<input  type=\"submit\" name=\"submit\" value=\"Please Log in\" >";
echo "</td></tr></table>";
echo"</form></div>";
?>
<div style="text-align: center;"> <a href="../?home "> Go back to the home page</a> <br>

<a href="http://<? echo "$_SERVER[HTTP_HOST]/$_configure[base_dir]/?content=flogin"; ?>"> Click here to renew your password </a><br>

<a href="http://<? echo "$_SERVER[HTTP_HOST]/$_configure[base_dir]/?content=register"; ?>"><big><big>I don't have an account here</big></big></a>
</div>


<?	 
}
?>