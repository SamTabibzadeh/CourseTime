<?php
 
  if (isset($_POST['submit'])) 
  {
		$search=$_POST['search'];
		if ($search === null) {
			$search = "";
		}
		$hp = "";
		$level = "";
		$pace = "";
 
		if ($_POST['hpfilter'] == "5hp") {
			
			$hp = "AND courseLength = '5hp'";
		}
		elseif ($_POST['hpfilter'] == "7.5hp") {
			
			$hp = "AND courseLength = '7,5hp'";
		}
		elseif ($_POST['hpfilter'] == "15hp") {
			
			$hp = "AND courseLength = '15hp'";
		}
		elseif ($_POST['hpfilter'] == "30hp") {
			
			$hp = "AND courseLength = '30hp'";
		}
		
 
		if ($_POST['levelfilter'] == "grund") {
			
			$level = "AND courseLevel LIKE '%Grund%'";
		}
		elseif ($_POST['levelfilter'] == "avancerad") {
			
			$level = "AND courseLevel LIKE '%Avancerad%'";
		}
		
 
		if ($_POST['pacefilter'] == "25") {
			
			$pace = "AND coursePace = '25%'";
		}
		elseif ($_POST['pacefilter'] == "33") {
			
			$pace = "AND coursePace = '33%'";
		}
		elseif ($_POST['pacefilter'] == "50") {
			
			$pace = "AND coursePace = '50%'";
		}
		elseif ($_POST['pacefilter'] == "75") {
			
			$pace = "AND coursePace = '75%'";
		}
		elseif ($_POST['pacefilter'] == "100") {
			
			$pace = "AND coursePace = '100%'";
		}
 
		$sql = "(SELECT * FROM courses WHERE (courseName LIKE '%" . $search . "%' OR courseSubject LIKE '%" . $search ."%') " . $hp . "  " . $level . "  " . $pace . " ORDER BY courseName)";
 
		
		
		$result= $db->connection->query($sql);
 
 
		if ($result->num_rows > 0) 
		{
			echo "<h1> Sökresultat – Kurser </h1>";
			while ($row = $result->fetch_assoc()) 
			{ 
				$cName=$row['courseName'];
				$cID=$row['courseId'];
				echo "<li id=\"courselistitem\"> <a id=\"subjectlinks\" href=\"index.php?courseID='$cID'\">" . $cName ."</a>" . "</li>  ";

			}
			
		}
		
		else {
			echo "Inga matchningar på din sökning.";
		}
  }
 
?>