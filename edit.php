<?php
	require 'db_functions.php';
	connect_db();
	
	echo $_GET['id'];
	edit_row_id($_GET["id"]);
	//echo "<script>window.location = 'http://localhost/appmng/index.php'</script>";
	
	function edit_row_id($id)
	{
		global $db;
		$sql="UPDATE incomes SET id=".$id.",date=\"".$_GET["date"]."\",consultation=".$_GET["consultation"].",premium_packet=".$_GET["packet"].",outcome=".$_GET["outcome"].",description_outcome=\"".$_GET["outcome_description"]."\" WHERE id=".$id;
		echo $sql;
	
		if( $db->query($sql) === TRUE){
		}
		else
		{
			echo $db->error;
		}
	}
?>


