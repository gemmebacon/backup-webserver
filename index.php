
<?php
http_response_code(500);
header("Retry-After: 120"); 
?>


<style>
body {
	background-color: #0078d7;
     }

h1 {
	color: white;
	font-family: "Segoe UI", Helvetica, Arial;
	font-size: 750%;
	font-weight: normal;
   }
h2 {
	color: white;
	font-family: "Segoe UI", Helvetica, Arial;
	font-size: 250%;
	font-weight: normal;
   }
p {
	color: white;
	font-family: "Segoe UI", Helvetica, Arial;
	font-size: 200%;
  }
img {
	width: auto;
	height: 25%;
	float: left;
	padding-right: 2%;
    }
div {
	width: auto;
	padding: 7%;
	padding-top: 1%;
	padding-bottom: 1%;
    }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>500 Error</title>
	<link rel="icon" type="image/x-icon" href="/yes.ico" sizes="64x64" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
</head>
<body>
	<div>
	<h1>:(</h1>
	<h2>Error 500: Web Server Is Down.</h2>
	<p>The original server is down or unavailable.</p>
	<p>The server administror has been notified and will try to get the server back up and running as soon as possible.</p>
	<a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/500"><img src="/files/500.png" alt="https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/500"></a>
	</div>
	<p style='font-size: 150%'>This is running on a very slow backup server (Raspberry Pi 1 model b) with very little storage</p>
	<p style='font-size: 150%'>For backup purposes, a copy of the Daily CPU is <a href="/daily-cpu">here.</a></p>
	<p style='font-size: 150%'>For more information, join my <a href="https://discord.gg/BfAmuPNbNq">Discord server.</a></p>
</body>
</html>









