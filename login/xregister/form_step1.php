

<form action="" method="post">
<table style="text-align: left; width: 100%;" border="0" cellspacing="2"
 cellpadding="2">
  <tbody>
    <tr>
      <td style="vertical-align: top; ">
      <div style="margin-left: 40px;"><b>Your E-Mail Address :&nbsp;</b></div>
      </td>
      <td style="vertical-align: top;"><input type="text" value= "<?echo "$_POST[email]"; ?>"  name="email" maxlength="100" size="50"></td>
    </tr>
    <tr>
      <td style="vertical-align: top; font-weight: bold;">
      <div style="margin-left: 40px;">New Password :</div>
      </td>
      <td style="vertical-align: top;"><input type="password" name="passwd" maxlength="50"></td>
    </tr>
    <tr>
      <td style="vertical-align: top; font-weight: bold;">
      <div style="margin-left: 40px;">Confirm Password :</div>
      </td>
      <td style="vertical-align: top;"><input type="password" name="passwd_again" maxlength="50"></td>
    </tr>
<tr>
     <td style="vertical-align: top; font-weight: bold;">
       <div style="margin-left: 40px;">Newsletter :</div>
      
      </td>
      <td style="vertical-align: top;"><input checked="checked"
name="newsletter" value="1" type="checkbox"> </td>
    </tr>



    <tr>
      <td style="vertical-align: top; width: 250px;"><br>
      </td>
      <td style="vertical-align: top;">

      </td>
    </tr>
  <tr>
      <td style="vertical-align: top;"><br>
      </td>

      <td style="vertical-align: top;">

<input type="hidden"  name="step1" value="true"> 
<input type="hidden"  name="submit" value="Sign Up"> 
<input title=" Sign up" alt="Sign up" src="data/images/button_login.gif" border="0" type="image">


</td>
    </tr>
  </tbody>
</table>

</form>

______________________________________________________________________
<BR>
<BR>
<script language="JavaScript"><!--

function NAME_IT33() {

window.open('./info/useragreement.php','EANITHING','toolbar=no,location=no, directories=no, status=yes, menubar=no, resizable=yes, copyhistory=no, scrollbars=yes, width=500, height=600');

}

// --></script>
&copy;2004-2006 <? echo $_config[sitename]; ?>. All Rights Reserved.
<a href="javascript:NAME_IT33()"onmouseover="window.status='Click me and you will get the script!'; return true"><font color="blue">Privacy</a>


