<?php
 
include_once "userManager.php";
 
 
include_once "courseID.php";
 
$sql = "SELECT * FROM reviews WHERE courseID = $cid" or die(mysqli_error());
$resultat = $db->connection->query($sql);

if(isset($_SESSION['admin']) || isset($_SESSION['name'])){
  include_once "reviewForm.php";
}
 
 
?> 
 
<h2 id="commentheader">Stundenters tankar om kursen</h2>
<p id="clicktoreadcmnt">Klicka på omdöme för att läsa innehåll. </p> <?php
 
while ($row = $resultat->fetch_assoc()) 
    { 
      $rUser=$row['rUser'];
      $rText=$row['rText'];
      $rDate=$row['rDate'];
      $rRate =$row['rRate'];
      $rID = $row['rId'];
      $ccid = $row['courseID'];
      ?>

          <div class="titelReview">
            <div id="cmnttop">
              <span id="cmntwriter"><?php echo $rUser;?> </span>
              <span id="writersrate"> Kursbetyg: <?php echo $rRate; ?>/5</span>    
            </div>
            <div class="wholeReview reviewStyle">

              <div id="writingdate">Datum: <?php echo $rDate; ?></div>
              <div><?php echo $rText; ?> </div>
              <div id="radera">
                <?php
                 if(isset($_SESSION['admin'])){
                   ?> <form action="deleteReview.php" method="POST">
                        <input name="rID" type="hidden" value="<?=$rID?>">
                        <input name="ccid" type="hidden" value="<?=$ccid?>">
                         <input type="submit" value="Radera omdöme"> 
                      </form>
                   <?php
             
                    } 
                 if (isset($_SESSION['name'])) {
                    if ($rUser===$_SESSION['name']) {
                      ?> <form action="deleteReview.php" method="POST">
                          <input name="rID" type="hidden" value="<?=$rID?>">
                          <input name="ccid" type="hidden" value="<?=$ccid?>">
                           <input type="submit" value="Radera omdöme"> 
                        </form>
                   <?php
                    }
                  } 
 
                 ?>
              </div>
            <br/>
            </div> 
          </div>
      <?php
      }
 
 
 
 
?>

