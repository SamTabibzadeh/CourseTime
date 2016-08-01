
	<div id="writecoursecomment">
	 	<form name="sendReview" method="post" action="sendReview.php?">
	 		
	 		<h3>Skriv omdöme</h3>
	 		<textarea type="text" id="msgReview" name="msgReview" placeholder="Skriv dina tankar och reflektioner här..." ></textarea><br/>
	 		<input name="cid" type="hidden" value="<?=$cid?>">
	 		<select name="rateReview">
              <option value="">Betyg</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
            <input id="sendreviewbutton" type="submit" value="Skicka">
	 	</form>
	</div>
