<?php
//$pass = "1234";
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<title>Files</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5" />
<link rel="stylesheet" type="text/css" href="../style.css" />
</head>

<body>
	<div id="header">
		<a href="../index.html"><img src="../images/logo.jpg" alt="" width="318" height="138" class="logo" /></a>
		<ul class="menu">
			<li><a href="../index.html"><img src="../images/but0.gif" alt="" width="100" height="19" /></a></li>
			<li><a href="../aboutus.html"><img src="../images/but1.gif" alt="" width="100" height="19" /></a></li>
			<li><a href="../services.html"><img src="../images/but2.gif" alt="" width="100" height="22" /></a></li>
			
			<li><a href="files.php"><img src="../images/but4.gif" alt="" width="100" height="21" /></a></li>
			<li><a href="../contactus.html"><img src="../images/but5.gif" alt="" width="100" height="20" /></a></li>
		</ul>
	</div>
	<div id="content">
    
		<?php


/*$getpass = $_REQUEST['pwd'];

if($getpass != $pass)
{
	echo "<script>alert('Incorrect Password');</script>";
	echo "<script>window.location='../dpass.html'</script>";
}
else
{*/
// open this directory 
$myDirectory = opendir(".");

// get each entry
while($entryName = readdir($myDirectory)) {
	$dirArray[] = $entryName;
}

// close directory
closedir($myDirectory);

//	count elements in array
$indexCount	= count($dirArray);


// sort 'em
sort($dirArray);

// print 'em
print("<TABLE border=1 cellpadding=5 cellspacing=0 class=whitelinks>\n");
print("<TR><TH>Filename</TH><th>Filesize(KB)</th></TR>\n");
// loop through the array of files and print them all
for($index=0; $index < $indexCount; $index++) {
        if (substr("$dirArray[$index]", 0, 1) != "." && $dirArray[$index] != "files.php"){ // don't list hidden files
		print("<TR><TD><a href=\"$dirArray[$index]\">$dirArray[$index]</a></td>");
		print("<td>");
		print(filesize($dirArray[$index])/1024);
		print("</td>");
		print("</TR>\n");
	}
}
print("</TABLE>\n");

//}
?>
		
		</div>
	</div>
	<div id="footer">
		<div class="copy">
			Copyright &copy; 2014 <br/> Paras Electromech<br /> All Rights Reserved<br />
			<a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a>
		</div>
		<div class="dots">
			<span>Delhi, India</span>
			<p>4/2708, Street No-5, Bihari Colony, Shahdara, Delhi-110032</p>
		</div>
		<div class="tel">
			<span>Tel: (0)9313204230</span>
			<p>E-mail : paras_electromech<br/>@yahoo.com</p>
		</div>
	</div>
</body>
</html>
