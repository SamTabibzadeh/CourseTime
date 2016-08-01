<?php include "userManager.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <title> CourseTime </title>
    <link rel="stylesheet" href="assets/main.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <meta charset="utf-8">
  </head>
  <body>
    <div id="content">
      <div id="header">
        <a href="index.php"><img id="logga" src="images/CourseTime-logo.png"></a>
        <div id="loginbox">
          <div class="loginboxHead">
            <div id="loginboxExit">&#10006</div>
          </div>
          <div class="loginboxButton" id="loginButton">Logga in </div>
          <div id="loginformContainer"> <?php include "loginform.php"; include "registerform.php"; ?>  </div>
          <div class="loginboxButton" id="registerButton">Registrera</div>
        </div>
        <?php include "notlogged.php" ?> 
        <div id="welcome"></div>
        <div id="fullsizeimage"></div> 
        <div id="editprofile"> <?php include "editprofileform.php"; ?></div>
      </div> 
      <div id="upper">
        <form action="index.php" method="POST" class="searchfield">
          <label for="inputsearch"><h1 id="h1search"> Sök efter kurser </h1> </label>
          <input type="text" placeholder=" Skriv din sökning här..." id="inputsearch" name="search">
          <input type="submit" name="submit" value="Sök" id="searchBtn" class="searchBtn">
          <div id="filtersection"> Filtrera sökning  
            <select name="hpfilter">
              <option value="hp">Högskolepoäng</option>
              <option value="5hp">5</option>
              <option value="7.5hp">7,5</option>
              <option value="15hp">15</option>
              <option value="30hp">30</option>
            </select>
            <select name="levelfilter">
              <option value="nivå">Nivå</option>
              <option value="grund">Grundnivå</option>
              <option value="avancerad">Avancerad nivå</option>
            </select>
            <select name="pacefilter">
              <option value="%">Studietakt (%)</option>
              <option value="25">25%</option>
              <option value="33">33%</option>
              <option value="50">50%</option>
              <option value="75">75%</option>
              <option value="100">Heltid (100%)</option>
            </select>
          </div>
        </form>
      </div>
      <div id="main">
        <div id="leftnav" class="sidebar">
          <p class="subjecthdr"> Ämnesområden </p>
          <p id="subjectareas">
          <?php include "navigation.php"; ?>
          </p>
        </div>
        <div id="middle">
          <p id="readComments" class="field">
          </p>
            <?php include "search.php"; ?>
            <?php include "chosensubject.php"; ?>
            <?php include "displayCourseInfo.php"; ?>
        </div>
        <div id="rightnav" class="sidebar">
          <p class="subjecthdr" id="rightheader"> <?php include "rightnavheader.php";?> </p>
          <div id="userPage"> <?php include "currentuser.php";?> </div>
        </div>
      </div>
    </div>
    <div id="footer">© CourseTime 2015 – Grupp 16 Uppsala Universitet</div>
    <div id="overlay"> </div>
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
