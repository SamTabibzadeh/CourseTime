<?php

$sql = "SELECT DISTINCT coursesubject FROM courses ORDER BY coursesubject";
$result= $db->connection->query($sql);

if ($result->num_rows > 0) 
{
	while ($row = $result->fetch_assoc()) 
	{ 
		$catsub = $row["coursesubject"];
		echo "<a id=\"subjectlinks\"  href=\"index.php?category='$catsub'\">" . $row["coursesubject"] . "</a>" . "</br>";	
	}
}

?>