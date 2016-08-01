<?php
include_once "userManager.php";

include "courseID.php";
if (isset($_GET['courseID'])) {
  // $cid = $_GET['courseID'];
  $sql = "SELECT * FROM courses WHERE courseId = $cid";
  $resultat= $db->connection->query($sql);

  while ($row = $resultat->fetch_assoc()) 
      { 
        $cBeskrivning=$row['courseInfo'];
        // $cBetyg=$row['courseRate'];
        $cNamn=$row['courseName'];
        $cLängd =$row['courseLength'];
        $cTakt = $row['coursePace'];
        $cLevel = $row['courseLevel'];
        $cUni = $row['university'];
        $link = $row['uniLink'];
        ?>
            <div id="courseInfo">
              <div>
                <h3><?php echo $cNamn; ?></h3>
              </div>
              <span id="length">Högskolepoäng: </span> <?php echo $cLängd; ?> </br>
              <span id="pace">Studietakt:</span> <?php echo $cTakt; ?> </br>
              <span id="level">Nivå: </span><?php echo $cLevel; ?> </br>
              <!-- <span id="grade"> Betyg: </span> <?php echo $cBetyg; ?> </br> -->
              <br/>
              <span id="beskrivning">Beskrivning: </span><?php echo $cBeskrivning; ?> </br>

            </div>
            </br>
            <p id="readmore"> <a id="unilink" href="<?php echo $link; ?>" target=”_blanck”> Läs om kursen på <?php echo $cUni; ?>s hemsida </a> </p>
        <?php
         include "review.php"; 
        }
}
?>