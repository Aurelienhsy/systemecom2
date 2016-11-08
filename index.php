<?php
mysql_connect('localhost', 'root', '');
mysql_select_db('news') ;

$find_comments=mysql_query('SELECT * FROM `comments`') ;
if ($find_comments) {  
	while($row=mysql_fetch_assoc($find_comments))
	{
		$name=$row['pseudo'];
		$comment=$row['com'];
		
		echo "<p>$name - $comment</p>"; 
	}
  }
	if(isset($_GET['error']))
	{
		echo "<p>Limité à 200 caractères";
	}
?>

<?xml version="1.0" encoding="iso-8859-1" standalone="yes"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<title>Site généraliste</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<meta http-equiv="Content-Language" content="fr" />
<meta name="robots" content="all" /> 
<meta name="Copyright" content="&copy; 2016 site" /> 
<meta name="author" content="auteur" /> 
<meta name="reply-to" content ="site@site.fr" /> 
<meta name="description" content="e-commerce"/> 
<meta name="keywords" content="e-commerce"/> 
</head>

<body>

<div id="header">
</div>

<div id="menu">

</div>

<div id="corps">
<form action="postcom.php" method="POST">
Pseudo : <input type="text" name="pseudo"><br/>
Commentaires : <textarea name="com" rows="10" cols="50">Ecrivez votre commentaire</textarea><br/>
<input type="submit" name="submit" value="Soumettre"><br/>
</form>
</div>
	
<div id="foot">
</div>	

</body>
</html>