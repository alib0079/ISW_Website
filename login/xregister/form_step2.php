<center><big style="font-weight: bold; color: rgb(0, 0, 102);">Step(1)----Step(2)</big>----Step(3)----Finish</center>
<form action="" method="post">
<input type="hidden" value= "true"  name="users_address" maxlength="30">
  <table style="text-align: left; width: 100%;" border="0"
 cellspacing="2" cellpadding="2">
    <tbody>
      <tr>
        <td style="vertical-align: top;"><br>
        </td>
        <td style="vertical-align: top;"><span
 style="font-weight: bold;"><br><br></span></td>
</tr>
      <tr>
        <td style="vertical-align: top; font-weight: bold;">
        <div style="margin-left: 40px;">Firstname :&nbsp;</div>
        </td>
        <td style="vertical-align: top;"> <input type="text" value= "<?echo "$_POST[firstname]";?>"  name="firstname" maxlength="30"> </td>
      </tr>

</tr>
      <tr>
        <td style="vertical-align: top; font-weight: bold;">
        <div style="margin-left: 40px;">Lastname :&nbsp;</div>
        </td>
        <td style="vertical-align: top;"> <input type="text" value= "<?echo "$_POST[lastname]";?>"  name="lastnamemaxlength="30"> </td>
      </tr>



</tr>
      <tr>
        <td style="vertical-align: top; font-weight: bold;">
        <div style="margin-left: 40px;">Address 1 :&nbsp;</div>
        </td>
        <td style="vertical-align: top;"> <input type="text" value= "<?echo "$_POST[address1]";?>"  name="address1" maxlength="30"> </td>
      </tr>



</tr>
      <tr>
        <td style="vertical-align: top; font-weight: bold;">
        <div style="margin-left: 40px;">Address 2 :&nbsp;</div>
        </td>
        <td style="vertical-align: top;"> <input type="text" value= "<?echo "$_POST[address2]";?>"  name="address2" maxlength="30"> </td>
      </tr>




      </tr>
      <tr>
        <td style="vertical-align: top; font-weight: bold;">
        <div style="margin-left: 40px;">City :&nbsp;</div>
        </td>
        <td style="vertical-align: top;"> <input type="text" value= "<?echo "$_POST[city]";?>"  name="city" maxlength="30"> </td>
      </tr>

      <tr>
        <td style="vertical-align: top; font-weight: bold;">
        <div style="margin-left: 40px;">State :&nbsp;</div>
        </td>
        <td style="vertical-align: top;"><? include("form_states.php");?></td>
      </tr>


      <tr>
        <td style="vertical-align: top; font-weight: bold;">
        <div style="margin-left: 40px;">Zip code(5 digits) :</div>
        </td>
        <td style="vertical-align: top;"><input type="text" value= "<?echo "$_POST[zip]"; ?>"  name="zip" maxlength="5"></td>
      </tr>
      <tr>
        <td style="vertical-align: top; font-weight: bold;">
        <div style="margin-left: 40px;">Phone number : (Optional)</div>
        </td>
        <td style="vertical-align: top;"><input type="text" name="tel"  value="<?echo "$_POST[tel]"; ?>"></td>
      </tr>
      <tr>
        <td
 style="vertical-align: top; width: 250px; font-weight: bold;">
        <div style="margin-left: 40px;">Your web site :(Optional)<br>
        </div>
        </td>
        <td style="vertical-align: top;"><input type="text" value= "<?echo "$_POST[website]"; ?>"  name="website" maxlength="150"><font color="blue"> </font></td>
      </tr>
      <tr>
        <td style="vertical-align: top;"><br>
        </td>
        <td style="vertical-align: top;"> 

<input type="hidden"  name="step2" value="true"> 
<input type="hidden"  name="submit" value="Finish">
 
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


