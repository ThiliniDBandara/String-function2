<html>
<head>
<title>php</title>
</head>
<body>
<?php
$first="Good morning! ";
$second="Have a nice day! ";
$third=$first;
echo "$third";
echo "<br/>"; 
$third.=$second;
echo "$third";
echo "<br/>";
echo strtoupper($third);
echo "<br/>";
echo strtolower($third);
echo"<br/>";
echo ucwords($third);
echo"<br/>";
echo $third;
echo"<br/>";
echo"<br/>";

$msg="Have a nice day!";
echo "$msg";
echo"<br/>";
echo strlen("$msg");
echo"<br/>";
echo str_replace("nice","great",$msg);
echo"<br/>";
echo str_repeat($msg,4);
echo"<br/>";
echo substr($msg,7,16);

?>
</body>
</html>