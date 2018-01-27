<?php 
include('database.php');
$a=mysql_query("SELECT * FROM members WHERE (club='Electronics','Literary','Photography') ");
$v=mysql_fetch_array($a);
echo $v['club']."hij";
?>
<!DOCTYPE HTML >
<html>
<head>
<title>Hobbies Club</title>
</head>
<body>
</body>
</html>