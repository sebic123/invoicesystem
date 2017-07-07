<html>
<head>
<link rel="stylesheet" type="text/css" href="mainstyle.css">
<script src="jquery-3.2.1.min.js"></script>
<script src="form_style.js"></script>
</head>
<body>

<?php
	
	require 'db_functions.php';
	
	connect_db();
	
	if(isset($_GET['date'])){
		add_row_db($_GET["date"], $_GET["consultation"], $_GET["packet"],$_GET["outcome"],$_GET["outcome_description"]);
		$_GET['date']="";
	}
	echo "<input type=\"image\" src=\"plus.png\" id=\"add_customer_show\" value=\"Add customer\">";
	if(isset($_GET['id'])) //called from edit 
	{ 
		echo "<div id=\"edit_customer_form\">";
		echo "<form method = \"GET\" action = \"edit.php\">";
		echo "Data:<input type = \"text\" id = \"firstname\" value=\"edit\" name=\"date\">";
		echo "<br>";
		echo "<p>Konsultacja:<input type = \"text\" id = \"lastname\" name=\"consultation\">";
		echo "<br>";
		echo "<p>Pakiet_Premium: <input type = \"text\" id = \"address\" name=\"packet\">";
		echo "<br>";
		echo "<p>Wydatki: <input type = \"text\" id = \"packet\" name=\"outcome\">";
		echo "<br>";
		echo "<p>Opis wydatkow: <input type = \"text\" id = \"packet\" name=\"outcome_description\">";
		echo "<br>";
		echo "&nbsp;";
		echo "<input type=\"hidden\" name=\"id\" value=\"".$_GET['id']."\">";
		echo "<p><input type = \"submit\" id = \"add_customer_hide\" value=\"Save\">";
		echo "</form>";
		echo "</div>";
	
	}
	else //load main page
	{	
		echo "<center>";
		echo "<div id=\"add_customer_form\">";
		echo "<a class=\"close\" href=\"#\">\&times;</a>";
		echo "<form method = \"GET\" action = \"index.php\">";
		echo "Data:<input type = \"text\" id = \"firstname\" value=\"test\" name=\"date\">";
		echo "<br>";
		echo "<p>Konsultacja:<input type = \"text\" id = \"lastname\" name=\"consultation\">";
		echo "<br>";
		echo "<p>Pakiet_Premium: <input type = \"text\" id = \"address\" name=\"packet\">";
		echo "<br>";
		echo "<p>Wydatki: <input type = \"text\" id = \"packet\" name=\"outcome\">";
		echo "<br>";
		echo "<p>Opis wydatkow: <input type = \"text\" id = \"packet\" name=\"outcome_description\">";
		echo "<br>";
		echo "<p><input type = \"submit\" id = \"add_customer_hide\" value=\"Add\">";
		echo "</form>";
		echo "</div>";
		echo "</center>";
	}
?>

<div>
	<table class="customer_table">
		<?php
			$titles = array("Data","Konsultacja","Pakiet_Premium","Wydatki","Opis wydadtku","Option");
			echo "<tr class=\"customer_table_cell\">";
			foreach($titles as $x)
			{
				echo "<th class=\"customer_table_cell\">".$x."</th>";
			}
			echo "</tr>";
		?>
		<?php
			$results = get_all_rows_db();
			if($results -> num_rows > 0)
			{
				while($row = $results->fetch_assoc())
				{
					echo "<tr class=\"customer_table_cell\">";
					$i=0;
					foreach($row as $x)
					{
						if($i == 0)
						{
							$i=1;
							$y=$x;
						}
						else
						{
							echo "<td class=\"customer_table_cell\">".$x."</td>";
						}
					}
					echo "<td class=\"customer_table_cell\"><a href=\"remove.php?id=".$y."\">Remove</a></td>";
					echo "<td class=\"customer_table_cell\"><a href=\"index.php?id=".$y."\">Edit</a></td>";
					
					$i=0;
					echo "</tr>";
					
				}
				
			}
		?>
		
		
		<?php
			$customer1 = array("Sabina","Migza","Premium","Wał Miedzeszyński", "True");
			echo "<tr class=\"customer_table_cell\">";
			foreach($customer1 as $x)
			{
				echo "<td class=\"customer_table_cell\">".$x."</td>";
			}
			echo "</tr>";
		?>

		
	</table>
</div>

<?php
?>
</body>
</html>