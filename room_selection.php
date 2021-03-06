<?php
  echo "<html>
  <head>
    <title>Room Selection Results</title>
  </head>
  <body>"; 
  $residence = $_POST["residence"];
  $gender = $_POST["gender"];
  $class = $_POST["class"];
  $specialNeeds = $_POST["special-needs"];
  $laundry = $_POST["laundry"];
  $kitchen = $_POST["kitchen"];
  
  if($residence){
    $verify=false;
    switch($residence){
      case "Leo":
        if($class=="Freshman"&&(!$specialNeeds)){
          $verify=true;
        }
        break;
      case "Champagnat":
        if($class=="Freshman"&&(!$specialNeeds)){
          $verify=true;
        }
        break;
      case "Marian":
        if($class=="Freshman"&&(!$specialNeeds)&&(!$kitchen)){
          $verify=true;
        }
        break;
      case "Sheahan":
        if($class=="Freshman"&&(!$specialNeeds)){
          $verify=true;
        }
        break;
      case "midrise":
        if($class=="Sophomore"&&(!$specialNeeds)&&(!$kitchen)){
          $verify=true;
        }
        break;
      case "foy":
        if($class=="Sophomore"&&(!$specialNeeds)){
          $verify=true;
        }
        break;
      case "gartland":
        if($class=="Sophomore"&&(!$specialNeeds)){
          $verify=true;
        }
        break;
      case "new":
        if($class=="Sophomore"&&(!$specialNeeds)){
          $verify=true;
        }
        break;
      case "lower_west":
        if(($class=="Junior"||$class=="Senior")&&(!$specialNeeds)){
          $verify=true;
        }
        break;
      case "upper_west":
        if(($class=="Junior"||$class=="Senior")&&(!$specialNeeds)){
          $verify=true;
        }
        break;
      case "fulton":
        if(($class=="Junior"||$class=="Senior")&&(!$specialNeeds)){
          $verify=true;
        }
        break;
      case "talmadge":
        if(($class=="Junior"||$class=="Senior")&&(!$specialNeeds)){
          $verify=true;
        }
        break;
      case "new_fulton":
        if(($class=="Junior"||$class=="Senior")&&(!$specialNeeds)){
          $verify=true;
        }
        break;
    }
    if($verify){
      echo "Your room selection is available with your given information.
      <form action=\"room_confirmation.php\" method=\"POST\">
        <input type = \"hidden\" name=\"residence\" value=\"" . $residence . "\">
        <input type = \"hidden\" name=\"gender\" value=\"" . $gender . "\">
        <input type = \"hidden\" name=\"class\" value=\"" . $class . "\">
        <input type = \"hidden\" name=\"special-needs\" value=\"" . $specialNeeds . "\">
        <input type = \"hidden\" name=\"laundry\" value=\"" . $laundry . "\">
        <input type = \"hidden\" name=\"kitchen\" value=\"" . $kitchen . "\">
        <input type = \"hidden\" name=\"cwid\" value=\"" . $_POST["cwid"] . "\">
        <input type = \"hidden\" name=\"lname\" value=\"" . $_POST["lname"] . "\">
        <input type = \"hidden\" name=\"fname\" value=\"" . $_POST["fname"] . "\">
        <input type =\"submit\" value = \"Submit\">
      </form>";
    } else{
      echo "Please redo your selection";
      $tclass = true;
      $tspecialNeeds = true;
      $tkitchen = true;
      switch($residence){
        case "Leo":
          $tclass = ($class=="Freshman");
          $tspecialNeeds = (!$specialNeeds);
          break;
        case "Champagnat":
          $tclass = ($class=="Freshman");
          $tspecialNeeds = (!$specialNeeds);
          break;
        case "Marian":
          $tclass = ($class=="Freshman");
          $tspecialNeeds = (!$specialNeeds);
          $tkitchen = (!$kitchen);
          break;
        case "Sheahan":
          $tclass = ($class=="Freshman");
          $tspecialNeeds = (!$specialNeeds);
          break;
        case "midrise":
          $tclass = ($class=="Sophomore");
          $tspecialNeeds = (!$specialNeeds);
          $tkitchen = (!$kitchen);
          break;
        case "foy":
          $tclass = ($class=="Sophomore");
          $tspecialNeeds = (!$specialNeeds);
          break;
        case "gartland":
          $tclass = ($class=="Sophomore");
          $tspecialNeeds = (!$specialNeeds);
          break;
        case "new":
          $tclass = ($class=="Sophomore");
          $tspecialNeeds = (!$specialNeeds);
          break;
        case "lower_west":
          $tclass = ($class=="Junior"||$class=="Senior");
          $tspecialNeeds = (!$specialNeeds);
          break;
        case "upper_west":
          $tclass = ($class=="Junior"||$class=="Senior");
          $tspecialNeeds = (!$specialNeeds);
          break;
        case "fulton":
          $tclass = ($class=="Junior"||$class=="Senior");
          $tspecialNeeds = (!$specialNeeds);
          break;
        case "talmadge":
          $tclass = ($class=="Junior"||$class=="Senior");
          $tspecialNeeds = (!$specialNeeds);
          break;
        case "new_fulton":
          $tclass = ($class=="Junior"||$class=="Senior");
          $tspecialNeeds = (!$specialNeeds);
          break;
      }
      echo "<br>";
      //Change the $residence from the temp name to the actual full name:
       switch ($residence){
        case "Leo":
          $residence = "Leo Hall";
          break;
        case "Champagnat":
          $residence = "Champagnat Hall";
          break;
        case "Marian":
          $residence = "Marian Hall";
          break;
        case "Sheahan":
          $residence = "Shehan Hall";
          break;
        case "midrise":
          $residence = "Midrise Hall";
          break;
        case "foy":
          $residence = "Foy Townhouses";
          break;
        case "gartland":
          $residence = "Gartland Commons";
          break;
        case "new":
          $residence = "New Townhouses";
          break;
        case "lower_west":
          $residence = "Lower West Cedar St Townhouses";
          break;
        case "upper_west":
          $residence = "Upper West Cedar St Townhouses";
          break;
        case "fulton":
          $residence = "Fulton St Townhouses";
          break;
        case "talmadge":
          $residence = "Talmadge Court";
          break;
        case "new_fulton":
          $residence = "New Fulton Townhouses";
          break;
  }
      echo ($tclass?"": "Your class " . $class . " is invalid for " . $residence . "<br>");
      echo ($tspecialNeeds?"": "Special-needs is invalid for " . $residence . "<br>");
      echo ($tkitchen?"": "Kitchen is invalid for " . $residence . "<br>");
      echo "<a href=\"index.php\">Select preference again</a>";
    }
  } else{
    $choices=array();
    if ($class){
      echo "Your available residence choices:
    <br>";
      switch($class){
        case "Freshman":
          ($kitchen ? $choices=array("Leo"=>"Leo Hall", "Champagnat"=>"Champagnat Hall", "Sheahan"
              =>"Sheahan Hall"):$choices=array("Leo"=>"Leo Hall", "Champagnat"=>"Champagnat Hall", 
              "Sheahan"=>"Sheahan Hall", "Marian"=>"Marian Hall"));
          break;
        case "Sophomore":
          ($kitchen ? $choices=array("foy"=>"Foy Townhouses", "gartland"=>"Gartland Commons", "new"
              =>"New Townhouses"):$choices=array("midrise"=>"Midrise Hall", "foy"=>
              "Foy Townhouses", "gartland"=>"Gartland Commons", "new"=>"New Townhouses"));
          break;
        case "Junior":
        case "Senior":
          $choices=array("lower_west"=>"Lower West", "upper_west"=>"Upper West", "fulton"=>
              "Fulton Street", "talmadge"=>"Talmadge Court", "new_fulton"=>"New Fulton Townhouses");
          break;
      }
      echo "   <form action=\"room_confirmation.php\" method=\"POST\">
      <select name = \"residence\">";
      foreach($choices as $k=>$v){
        echo "        <option value=\"".$k."\">".$v."</option>";
      }
      echo "      </select>
      <input type = \"hidden\" name=\"gender\" value=\"" . $gender . "\">
      <input type = \"hidden\" name=\"class\" value=\"" . $class . "\">
      <input type = \"hidden\" name=\"special-needs\" value=\"" . $specialNeeds . "\">
      <input type = \"hidden\" name=\"laundry\" value=\"" . $laundry . "\">
      <input type = \"hidden\" name=\"kitchen\" value=\"" . $kitchen . "\">
      <input type = \"hidden\" name=\"cwid\" value=\"" . $_POST["cwid"] . "\">
      <input type = \"hidden\" name=\"lname\" value=\"" . $_POST["lname"] . "\">
      <input type = \"hidden\" name=\"fname\" value=\"" . $_POST["fname"] . "\">
      <input type =\"submit\" value = \"Submit\">
    </form>";
    }else{
      echo "Please select a class:
    <br>
    <form action=\"room_selection.php\" method=\"POST\">
      <input type = \"radio\" name=\"class\" value = \"Freshman\"> Freshman<br>
      <input type = \"radio\" name=\"class\" value = \"Sophomore\"> Sophomore<br>
      <input type = \"radio\" name=\"class\" value = \"Junior\"> Junior<br>
      <input type = \"radio\" name=\"class\" value = \"Senior\"> Senior<br>
      <br>
      <input type = \"hidden\" name=\"gender\" value=\"" . $gender . "\">
      <input type = \"hidden\" name=\"special-needs\" value=\"" . $specialNeeds . "\">
      <input type = \"hidden\" name=\"laundry\" value=\"" . $laundry . "\">
      <input type = \"hidden\" name=\"kitchen\" value=\"" . $kitchen . "\">
      <input type = \"hidden\" name=\"cwid\" value=\"" . $_POST["cwid"] . "\">
      <input type = \"hidden\" name=\"lname\" value=\"" . $_POST["lname"] . "\">
      <input type = \"hidden\" name=\"fname\" value=\"" . $_POST["fname"] . "\">
      <input type = \"submit\" value = \"Submit\">
    </form>";
    }
  }
  echo "
  </body>
</html>";
  ?>