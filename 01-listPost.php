﻿<?php
require_once("dbconnect.php");
$sql="select * from guestbook";
$i=0;
if ($results=mysqli_query($conn,$sql) ) {
	echo "<table border=1>";
	while (	$rs=mysqli_fetch_array($results)) {
$i++;
	echo "<tr><td>" , $i ,
		"</td><td>" , $rs['title'],
		"</td><td>", "<a href='01-viewPost.php?id=",$rs['id'] ,"'>查看</a>",
		"</td><td>", "<a href='01-deletePost.php?id=",$rs['id'] ,"'>Delete</a>",
		"</td><td>", "<a href='01-editPost.php?id=",$rs['id'] ,"'>Edit</a>",
		"</td></tr>";
	}
	echo "</table>";
}
?>
<form method="post" action="01-addPost.php">
name: <input type="text" name="name" /> <br />
title: <input type="text" name="title" /> <br />
content: <input type="text" name="content" /> <br />
<input type ="submit" />
</form>
