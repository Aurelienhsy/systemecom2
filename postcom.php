<?php
mysql_connect('localhost', 'root', '');
mysql_select_db('news');

$name=$_POST['pseudo'];
$comment=$_POST['com'];

$comment_length=strlen($comment);

	if($comment_length>200)
	{
		header('location:index.php?error=1');
	}
	else
	{
		mysql_query("INSERT INTO comments (id, pseudo, com) VALUES('', '$name', '$comment')");
		header('location:index.php');
	}
?>
