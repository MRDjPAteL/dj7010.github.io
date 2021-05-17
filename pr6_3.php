<?php require_once "header.php"?>

<body>
<center><h1>File handling in php</h1></center>
<hr>
<p><b>Use of readfile() function:</b></p>
<p><b>Output:</b></p>
<?php
echo readfile("intro.html");
?>
<hr>
<p><b>Use of fopen(), fread() and fclose()</b></p>
<p><b>Output:</b></p>
<?php
$myfile = fopen("intro.html", "r") or die("Unable to open file!");
echo fread($myfile,filesize("intro.html"));
fclose($myfile);
?>
<hr>
<p><b>Use of fgetc()</b></p>
<p><b>Output:</b></p>
<?php
$file = fopen("intro.html","r");
echo fgetc($file);
fclose($file);
?>
<p><b>Use of feof()</b></p>
<p><b>Output:</b></p>
<?php
$file = fopen("intro.html", "r");
//Output lines until EOF is reached
while(! feof($file)) {
 $line = fgets($file);
 echo $line. "<br>";
}
fclose($file);
?>
<hr>
<p><b>Use of fgets()</b></p>
<p><b>Output:</b></p>
<?php
$file = fopen("intro.html","r");
$c=0;
while(! feof($file)) {
 $line = fgets($file);
 $c=$c + 1;
 echo $line. "<br>";
}
echo $c;
echo fgets($file);
fclose($file);
?>
<hr>
<p><b>Use of fwrite()</b></p>
<?php
$myfile = fopen("intro.html", "w") or die("Unable to open file!");
$txt = "hello\n";
fwrite($myfile, $txt);
$txt = "i am student\n";
fwrite($myfile, $txt); 
fclose($myfile);
echo readfile("intro.html");
?>

<?php require_once "footer.php"?>