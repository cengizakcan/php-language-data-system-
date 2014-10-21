
<?php 

echo 
"
<a href='?language=turkis' >Türkis</a>
<a href='?language=english' >English</a>
<a href='?language=russian' >Russian</a>
";

// Select language or default language
if(@$_GET["language"] == "" && !@$_GET["language"]){ include("language/turkis.php");}
if(@$_GET["language"] == "english"){ include("language/english.php");}
if(@$_GET["language"] == "turkis"){ include("language/turkis.php");}
if(@$_GET["language"] == "russian"){ include("language/russian.php");}

// language[v1]; or not v1 add to languange folder write files
echo"<br>";
echo $language["home"];


?>
