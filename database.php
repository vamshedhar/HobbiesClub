<?php
$con=mysql_connect("localhost","root","");
$sel=mysql_select_db("hobbies_club",$con);
if(!$sel)
{
	mysql_error() or die();
}

?>

