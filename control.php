<? if(!$_GET[content]){ 

include("home.php");

}
if($_GET[content]){
if(@$_GET[content]){ @include("modules/$_GET[content].php");}





if($_GET[cat]==11){@include("modules/multimedia.php");}
//if($_GET[cat]==20){@include("modules/iframe.php");}

if($_GET[content]==edit){ @include("editor.php"); }
if($_GET[content]==save){ include("./modules/editor/save.php"); }

if($_GET[content]==flogin){    @include("login/flogin/flogin.php");}
if($_GET[content]==coustomer_login){@include("login/loginckeck.php");}


}

?>