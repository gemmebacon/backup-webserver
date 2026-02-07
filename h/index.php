<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <link rel="icon" type="image/x-icon" href="/yes.ico" sizes="64x64" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="#031f1f" data-react-helmet="true" name="theme-color"/>
	  <meta property="og:type" content="website">
	<meta property="og:description" content="H">
	<link rel="stylesheet" href="/style.css">
<title>H</title>
</head>
<h1>H</h1>
<?php
$counter_name = "counter.txt";
$counter_name2 = "counter2.txt";

if (!file_exists($counter_name)) {
  $f = fopen($counter_name, "w");
  fwrite($f,"1");
  fclose($f);
}


$f = fopen($counter_name,"r");
$counterVal = fread($f, filesize($counter_name));
fclose($f);

  $counterVal++;
  $f = fopen($counter_name2, "w");
  fwrite($f, $counterVal);
  fclose($f);

$text = "You are visitor number $counterVal to this site. This page has been loaded $counterVal times since 13th of July, 2024";
//echo "<font color='gray'>".$text."</font>";
?>

</body>
</html>
