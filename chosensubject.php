<?php
if(isset($_GET['category'])) 
{
	$subject = $_GET['category'];
	$sql = "SELECT * FROM courses WHERE courseSubject = $subject";
	$result= $db->connection->query($sql);

	if ($result->num_rows > 0) 
	{	

		echo "<h2>" . $subject . "</h2>";
		while ($row = $result->fetch_assoc()) 
		{	
		 
			// $course = $row["courseName"];
			$cName=$row['courseName'];
			$cID=$row['courseId'];
			
			echo "<li id=\"courselistitem\"> <a id=\"subjectlinks\" href=\"index.php?courseID='$cID'\">" . $cName ."</a>" . "</li>  ";
			
		} 	
	}

	else 
	{
		echo "Inga kurser hittades inom det valda ämnesområdet.";
	}
}
?>