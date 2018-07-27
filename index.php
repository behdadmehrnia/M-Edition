<!DOCTYPE HTML>
<?php

require 'os.php';

if ($status) { ?>
<html>
	<head>
		<title>M Edition Dolphin</title>
		<link rel=stylesheet href='bin/style.css' type="text/css" />
	</head>
	<body os='style:body1'>
        <script>document.body.addEventListener("keydown", function (event) {
            if (event.keyCode === 113) {
                window.location.assign("bin/setup");
            }
        });</script>
		Press F2 For Get BIOS<br />
		<h1 style='padding: 10%;font-size: 40pt;' align="center" style='font-weight: 5%;'>M</h1>
		<center><img src='mnt/system/os/cursor/loadhome.gif' style='width: 4%;height: 4%;' align='middle' alt='loading' /><br /><p style='font-size: 2pt;'>Dolphin OS</p></center>
		<script>setInterval(function () {window.location.assign('mnt/system/os/start.php')},10000);</script>
	</body>
</html>
<?php } else { ?>
<html>
	<head>
		<title>M Edition Console</title>
		<link rel=stylesheet href='bin/style.css' type="text/css" />
	</head>
	<body os='style:body2'>
		<h1>&alefsym; Dolphin OS Doesn't Installed</h1>
		<p>
		Hello Sir.<br />
		Welcome to the M Edition OS.<br />
		Your System Doesn't Installed On Your Device.<br />
		System Boot's On [/bin/setup -boot do install] After 10 Seconds ...</p>
		<div id="myProgress">
		  <div id="myBar"></div>
		</div>
		<style>
			#myProgress {
				width: 100%;
				background-color: grey;
			}
			
			#myBar {
				width: 0%;
				height: 30px;
				background-color: green;
			}
		</style>
		<Script>
			function move() {
				var elem = document.getElementById("myBar"); 
				var width = 0;
				var id = setInterval(frame, 1000);
				function frame() {
					if (width >= 100) {
						clearInterval(id);
						window.location.assign('bin/setup/install');
					} else {
						width = width + 10; 
						elem.style.width = width + '%'; 
					}
				}
			}
			move();
		</Script>
	</body>
</html>
<?php } 