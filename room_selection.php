<html>
  <head>
    <title>Room Selection Results</title>
  </head>
  <?php
  $hallSelection = $_POST["residence"];
  $gender = $_POST["gender"];
  $class = $_POST["class"];
  $specialNeeds = $_POST["special-needs"];
  $laundry = $_POST["laundry"];
  $kitchen = $_POST["kitchen"];
  
  if($hallSelection){
    $verify=false;
    switch($hallSelection){
      case "leo":
        if($class=="freshman"&&(!$specialNeeds)){
          $verify=true;
        }
        break;
      case "champagnat":
        if($class=="freshman"&&(!$specialNeeds)){
          $verify=true;
        }
        break;
      case "marian":
        if($class=="freshman"&&(!$specialNeeds)&&(!$kitchen)){
          $verify=true;
        }
        break;
      case "sheahan":
        if($class=="freshman"&&(!$specialNeeds)){
          $verify=true;
        }
        break;
      case "midrise":
        if($class=="sophomore"&&(!$specialNeeds)&&(!$kitchen)){
          $verify=true;
        }
        break;
      case "foy":
        if($class=="sophomore"&&(!$specialNeeds)){
          $verify=true;
        }
        break;
      case "gartland":
        if($class=="sophomore"&&(!$specialNeeds)){
          $verify=true;
        }
        break;
      case "new":
        if($class=="sophomore"&&(!$specialNeeds)){
          $verify=true;
        }
        break;
      case "lower_west":
        if(($class=="juniors"||$class=="seniors")&&(!$specialNeeds)){
          $verify=true;
        }
        break;
      case "upper_west":
        if(($class=="juniors"||$class=="seniors")&&(!$specialNeeds)){
          $verify=true;
        }
        break;
      case "fulton":
        if(($class=="juniors"||$class=="seniors")&&(!$specialNeeds)){
          $verify=true;
        }
        break;
      case "talmadge":
        if(($class=="juniors"||$class=="seniors")&&(!$specialNeeds)){
          $verify=true;
        }
        break;
      case "new_fulton":
        if(($class=="juniors"||$class=="seniors")&&(!$specialNeeds)){
          $verify=true;
        }
        break;
    }
    if($verify){
      echo "You did it!\n";
      echo "<form action=\"room_confirmation.php\" method=\"POST\">\n";
      echo "  <input type = \"hidden\" name=\"hallSelection\" value=\"" . $hallSelection . "\">\n";
      echo "  <input type = \"hidden\" name=\"gender\" value=\"" . $gender . "\">\n";
      echo "  <input type = \"hidden\" name=\"class\" value=\"" . $class . "\">\n";
      echo "  <input type = \"hidden\" name=\"special-needs\" value=\"" . $specialNeeds . "\">\n";
      echo "  <input type = \"hidden\" name=\"laundry\" value=\"" . $laundry . "\">\n";
      echo "  <input type = \"hidden\" name=\"kitchen\" value=\"" . $kitchen . "\">\n";
      echo "  <input type = \"hidden\" name=\"cwid\" value=\"" . $_POST["cwid"] . "\">\n";
      echo "  <input type = \"hidden\" name=\"lname\" value=\"" . $_POST["lname"] . "\">\n";
      echo "  <input type = \"hidden\" name=\"fname\" value=\"" . $_POST["fname"] . "\">\n";
      echo "  <input type =\"submit\" value = \"Submit\">\n";
      echo "</form>\n";

    } else{
      echo "Please redo your selection";
      $tclass = true;
      $tspecialNeeds = true;
      $tkitchen = true;
      
      switch($hallSelection){
        case "leo":
          $tclass = ($class=="freshman");
          $tspecialNeeds = (!$specialNeeds);
          break;
        case "champagnat":
          $tclass = ($class=="freshman");
          $tspecialNeeds = (!$specialNeeds);
          break;
        case "marian":
          $tclass = ($class=="freshman");
          $tspecialNeeds = (!$specialNeeds);
          $tkitchen = (!$kitchen);
          break;
        case "sheahan":
          $tclass = ($class=="freshman");
          $tspecialNeeds = (!$specialNeeds);
          break;
        case "midrise":
          $tclass = ($class=="sophomore");
          $tspecialNeeds = (!$specialNeeds);
          $tkitchen = (!$kitchen);
          break;
        case "foy":
          $tclass = ($class=="sophomore");
          $tspecialNeeds = (!$specialNeeds);
          break;
        case "gartland":
          $tclass = ($class=="sophomore");
          $tspecialNeeds = (!$specialNeeds);
          break;
        case "new":
          $tclass = ($class=="sophomore");
          $tspecialNeeds = (!$specialNeeds);
          break;
        case "lower_west":
          $tclass = ($class=="juniors"||$class=="seniors");
          $tspecialNeeds = (!$specialNeeds);
          break;
        case "upper_west":
          $tclass = ($class=="juniors"||$class=="seniors");
          $tspecialNeeds = (!$specialNeeds);
          break;
        case "fulton":
          $tclass = ($class=="juniors"||$class=="seniors");
          $tspecialNeeds = (!$specialNeeds);
          break;
        case "talmadge":
          $tclass = ($class=="juniors"||$class=="seniors");
          $tspecialNeeds = (!$specialNeeds);
          break;
        case "new_fulton":
          $tclass = ($class=="juniors"||$class=="seniors");
          $tspecialNeeds = (!$specialNeeds);
          break;
      }
      echo "<br>";
      echo ($tclass?"": "Your class " . $class . " is invalid for " . $hallSelection . "<br>");
      echo ($tspecialNeeds?"": "Special-needs is invalid for " . $hallSelection . "<br>");
      echo ($tkitchen?"": "Kitchen is invalid for " . $hallSelection . "<br>");
      
      echo "<a href=\"index.php\">Select preference again</a>";
      
    }
  } else{
    // each one of the choices should be a link that lets then chose that particular dorm.
    //basically make a slammer form jsut for their differnt options of residenve halls
    if ($class){
      echo "Your choices of residence could be ";
      switch($class){
        case "freshman":
          echo ($kitchen ? "Leo, Champagnat, and Sheahan halls":"Leo, Champagnat, Marian and Sheahan halls");
          break;
        case "sophomore":
          echo($kitchen ? "Foy Townhouses, Gartland Commons, and New Townhouses":"Midrise Hall, Foy Townhouses, Gartland Commons, and New Townhouses");
          break;
        case "junior":
        case "senior":
          echo("Talmadge Court, Lower West, Upper West, Fulton Street, and New Fulton Townhouses.");
          break;
      }
    }
  }
  ?>
</html>