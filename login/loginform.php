<form action="" method="post">
<table align="center" border="1" cellspacing="0" cellpadding="3">
<tr><td>Email:</td><td>
<input type="text" name="uname" maxlength="40">
</td></tr>
<tr><td>Password:</td><td>
<input type="password" name="passwd" maxlength="50">
</td></tr>
<tr><td colspan="2" align="right">
<input type="submit" name="submit" value="Login">
</td></tr>
</table>
</form>


<div style="text-align: center;"> <a href="http://<? echo "$_SERVER[HTTP_HOST]/"; ?>"> Go back to the home page</a> <br>

<a href="http://<? echo "$_SERVER[HTTP_HOST]/?content=flogin"; ?>"> Click here to renew your password </a>

</div>