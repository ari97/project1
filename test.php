
<?php
session_start();
$pagecount = $_SESSIONT["pagecount"];
echo "<!--".$pagecount."-->";
if($pagecount==0) {
  echo "
<html>
    <head>
      <title>Room Selection Form</title>
    </head>
  <body>
    <form action=\"index.php\" method=\"POST\">
      First name: <input type=\"text\" name=\"fname\"><br>
      Last name: <input type = \"text\" name = \"lname\"><br>
      CWID: <input type = \"text\" name = \"cwid\"><br>
      <input type = \"radio\" name=\"gender\" value = \"male\"> Male<br>
      <input type = \"radio\" name=\"gender\" value = \"female\"> Female<br>
      <input type = \"radio\" name=\"gender\" value = \"other\"> Other<br>
      <br>
      <input type = \"radio\" name=\"class\" value = \"Freshman\"> Freshman<br>
      <input type = \"radio\" name=\"class\" value = \"Sophomore\"> Sophomore<br>
      <input type = \"radio\" name=\"class\" value = \"Junior\"> Junior<br>
      <input type = \"radio\" name=\"class\" value = \"Senior\"> Senior<br>
      <br>
      <select name = \"residence\">
        <option selected disabled hidden value=''>Select a Residence Hall</option>
        <option value=\"Leo\">Leo Hall</option>
        <option value=\"Champagnat\">Champagnat Hall</option>
        <option value=\"Marian\">Marian Hall</option>
        <option value=\"Sheahan\">Sheahan Hall</option>
        <option value=\"midrise\">Midrise Hall</option>
        <option value=\"foy\">Foy Townhouses</option>
        <option value=\"gartland\">Gartland Commons</option>
        <option value=\"new\">New Townhouses</option>
        <option value=\"lower_west\">Lower West Cedar St Townhouses</option>
        <option value=\"upper_west\">Upper West Cedar St Townhouses</option>
        <option value=\"fulton\">Fulton Street Townhouses</option>
        <option value=\"talmadge\">Talmadge Court</option>
        <option value=\"new_fulton\">New Fulton Townhouses</option>
      </select>
      <br>
      <input type=\"checkbox\" name=\"special-needs\" value=\"true\">Special Needs<br>
      <input type=\"checkbox\" name=\"laundry\" value=\"true\">Laundry on Premise<br>
      <input type=\"checkbox\" name=\"kitchen\" value=\"true\">Fully Equipped Kitchen<br>
      <input type = \"hidden\" name=\"pagecount\" value=\"" . 1 . "\">
      <input type =\"submit\" value = \"Submit\">
    </form>
  </body>
</html>";
} elseif($pagecount==1){  
  echo "<html>
  <head>
    <title>Room Selection Results</title>
  </head>
  <body>"; 
  $_SESSION["fname"] = $_POST["fname"];
  $_SESSION["lname"] = $_POST["lname"];
  $_SESSION["cwid"] = $_POST["cwid"];
  $_SESSION["gender"] = $_POST["gender"];
  $_SESSION["class"] = $_POST["class"];
  $_SESSION["residence"] = $_POST["residence"];
  $_SESSION["gender"] = $_POST["gender"];
  $_SESSION["specialNeeds"] = $_POST["special-needs"];
  $_SESSION["laundry"] = $_POST["laundry"];
  $_SESSION["kitchen"] = $_POST["kitchen"];
  
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
      $_SESSION["pagecount"]=2;
      header('Location: test.php');
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
      echo "   <form action=\"index.php\" method=\"POST\">
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
      <input type = \"hidden\" name=\"pagecount\" value=\"" . 2 . "\">
      <input type =\"submit\" value = \"Submit\">
    </form>";
    }else{
      echo "Please select a class:
    <br>
    <form action=\"index.php\" method=\"POST\">
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
      <input type = \"hidden\" name=\"pagecount\" value=\"" . 1 . "\">
      <input type = \"submit\" value = \"Submit\">
    </form>";
    }
  }
  echo "
  </body>
</html>";
} else if($pagecount==2){
  echo "<html>
  <head>
    <title>Room Confirmation</title>
  </head>
  <body>"; 
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $cwid = $_POST["cwid"];
  $residence = $_POST["residence"];
  $gender = $_POST["gender"];
  $class = $_POST["class"];
  $specialNeeds = $_POST["special-needs"]; 
  $laundry = $_POST["laundry"];
  $kitchen = $_POST["kitchen"];
  
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
  
  echo "    First name: ", $fname. "
    <br>
    Last name: ", $lname, "
    <br>
    CWID: ", $cwid, "
    <br>
    Hall Selection: ", $residence, "
    <br>
    Gender: ", $gender, "
    <br>
    Class: ", $class, "
    <br>
    Special-needs: ", ($specialNeeds?"True": "False"), "
    <br>
    Laundry: ", ($laundry?"True": "False"), "
    <br>
    Kitchen: ", ($kitchen?"True": "False"), "
    <br>
  </body>
</html>";
}
?>

