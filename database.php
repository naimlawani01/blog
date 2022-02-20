<?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=my_recipes;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>