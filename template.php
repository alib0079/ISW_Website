<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<?
include("./modules/tabber.php");
include("./modules/tabber_links.php");
?>
<title>Islamic Society of Wichita ISW</title>
<meta content="text/html; charset=ISO-8859-1"  http-equiv="content-type">
<link href="./style/home_style.css" rel="stylesheet" type="text/css">

</head>
<script language="JavaScript" type="text/javascript" src="./modules/wysiwyg_beta/wysiwyg_w500.js">
</script>
<body style="color: rgb(0, 0, 0); background-image: url(./pics/b1.jpg); "
 alink="#000099" link="#000099" vlink="#990099">
<div
 style="text-align: center; font-weight: bold; color: rgb(0, 102, 0);"><big><big><big><span
 style="color: rgb(51, 0, 153);"></span></big></big></big>
<table
 style="  background-color: rgb(255, 255, 255);  margin-left: auto; margin-right: auto; text-align: left; width: 950px; height: 1001px;"
 border="0" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td
style="  background-image: url(./pics/b2_top.jpg);  text-align: center; vertical-align: top;"> <big><span
style="font-weight: bold;"><big><big><span style="color: rgb(255, 255, 255);">Islamic Society of Wichita</span></big></big></span></big>


&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a style="font-weight: bold; color: rgb(255, 255, 153);" href="/?home">[Home]</a>
<a style="font-weight: bold; color: rgb(255, 255, 153);" href="/members/">[Members]</a>
<a style="font-weight: bold; color: rgb(255, 255, 153);" href="/?content=view&amp;cat=1&amp;cat_name=Prayer%20Times">[Prayer_Time]</a>
<a style="font-weight: bold; color: rgb(255, 255, 153);" href="/?content=register">[Register]</a>
</td>
    </tr>
    <tr >
      <td style="vertical-align: top;">
      <table
 style="  background-color: rgb(255, 255, 255);  margin-left: auto; margin-right: auto; text-align: left; width: 100%; height: 584px;"
 border="0" cellpadding="2" cellspacing="2">
        <tbody>
          <tr>
<? if($_GET[content]!=="view" AND $_GET[content]!=="edit_wiki" ){ ?>
            <td style=" vertical-align: top;  width: 160px;   ">
            <div style="text-align: center;">
<? if($_GET[content]!=="view" AND $_GET[content]!=="edit_wiki" ){include("mylinksleft.php"); }?>
 </div>
            </td>
<?}?>
            <td style="width: 20px; vertical-align: top;">
            <div style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp; </div>
            </td>
            <td style=" width; 100%; vertical-align: top; text-align: center; ">
<br><? include("control.php"); ?>
            </td>
            <td style="width: 20px; vertical-align: top;">
            <div style="text-align: center;"> &nbsp;&nbsp;&nbsp;&nbsp;</div>
            </td>
<? if(!$_GET[content]){?>
            <td style=" width: 183px; vertical-align: top; text-align: right;"> 

<? if(!$_GET[content]){ include("mylinksright.php"); } ?>

            
            </td>
<?}?>
          </tr>
        </tbody>
      </table>
      <center><br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>

<a target="_blank" href="http://www.almars.net/"><small>By ALMARS IT&M</small></a>
      </p>
      </center>
      </td>
    </tr>
  </tbody>
</table>
<big><big><big><span style="color: rgb(51, 0, 153);"></span></big></big></big></div>

</body>
</html>
