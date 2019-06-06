<? if ($logged_in == 1) {
} else {
?>

<table style="border: 1px solid rgb(206, 206, 206);"  class="main" background="images//newprodbg.gif" border="0"  cellpadding="0" cellspacing="0" width="100%">
              <tbody>
                <tr>
                  <td class="main" height="20">&nbsp;&nbsp;<b>Returning Customer please login:</b></td>
                </tr>
              </tbody>
            </table>
<?

echo"<BR><div style=\"text-align: center;\"><form action=\"login/login.php\" method=\"POST\">";
echo"<input type=\"hidden\" name=\"loginfrom\" value=\"http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]\">";
echo "<table align=\"center\" border=\"1\" cellspacing=\"0\" cellpadding=\"3\">";
echo "<tr><td>E-mail Address:</td><td>";
echo "<input type=\"text\" name=\"uname\"  value=\"$_SESSION[useremail]\" maxlength=\"40\">";
echo "</td></tr><tr><td>Password:</td><td>";
echo "<input type=\"password\" name=\"passwd\" maxlength=\"50\">";
echo "</td></tr><tr><td colspan=\"2\" align=\"right\">";

//echo"<input  type=\"submit\" name=\"submit\" value=\"Please Log in\" >";
echo"<input  type=\"hidden\" name=\"submit\" value=\"Please Log in\" >";
echo "<input title=\" Sign In \" alt=\"Sign In\" src=\"data/images/button_login.gif\" border=\"0\" type=\"image\">";
echo "</td></tr></table>";
echo"</form></div>";	 


?>
        <table style="border: 1px solid rgb(206, 206, 206);"  class="main" background="images//newprodbg.gif" border="0"  cellpadding="0" cellspacing="0" width="100%">
              <tbody>
                <tr>
                  <td class="main" height="20">&nbsp;&nbsp;<b>New Customer Create new acccount:</b></td>
                </tr>
              </tbody>
            </table>
<br>
<div style="margin-left: 40px; text-align: left;">By creating an
account at ALMARS.NET we will configure your website to include our advanced services of E-commerce and online inventory management.<br>
</div>
<br>
<a href="?content=register&register_from=<? echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>"><img title=" Continue " alt="Continue"
src="data/images/button_new_customer.gif" border="0" height="19"
width="103"></a><br>
<br><br>
<?}?>