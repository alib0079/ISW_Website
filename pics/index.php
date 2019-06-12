<?
include("./make_large_pics.php");
header("location: index2.php?pic=$_GET[pic]&f=$_GET[f]&return=$_GET[return]");
?>