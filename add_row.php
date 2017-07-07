<?php
	require 'db_functions.php';
	echo 'add_row wywolan';
	add_row_db($_GET["date"], $_GET["consultation"], $_GET["packet"],$_GET["outcome"],$_GET["outcome_description"]);
?>