<html>
  <head>
    <title>Room Selection Results</title>
  </head>
  <?php
  $hallSelection = isset($_POST["residence"]);
  $gender = $_POST["gender"];
  $class = $_POST["class"];
  $specialNeeds = isset($_POST["special-needs"]);
  $laundry = isset($_POST["laundry"]);
  $kitchen = isset($_POST["kitchen"]);
  
  if($hallSelection){
    $verify=false;
    switch($hallSelection){
      case "leo":
        if($class=="freshman"&&(!$specialNeeds)&&(!$kitchen)){
          $verify=true;
        }
        break;
      case "champagnat":
        if($class=="freshman"&&(!$specialNeeds)&&(!$kitchen)){
          $verify=true;
        }
        break;
      case "marian":
        if($class=="freshman"&&(!$specialNeeds)&&(!$kitchen)){
          $verify=true;
        }
        break;
      case "sheahan":
        if($class=="freshman"&&(!$specialNeeds)&&(!$kitchen)){
          $verify=true;
        }
        break;
      case "midrise":
        if($class=="sophmore"&&(!$specialNeeds)&&(!$kitchen)){
          $verify=true;
        }
        break;
      case "foy":
        if($class=="sophmore"&&(!$specialNeeds)){
          $verify=true;
        }
        break;
      case "gartland":
        if($class=="sophmore"&&(!$specialNeeds)){
          $verify=true;
        }
        break;
      case "new":
        if($class=="sophmore"&&(!$specialNeeds)){
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
      echo "You did it!";
      ?>
      <form method="get" action="room_confirmation.php">
        <input type = "hidden" name="hallSelection" value="<?php echo $hallSelection;?>">
        <input type = "hidden" name="gender" value="<?php echo $gender; ?>">
        <input type = "hidden" name="class" value="<?php echo $class; ?>">
        <input type = "hidden" name="special-needs" value="<?php echo $specialNeeds; ?>">
        <input type = "hidden" name="laundry" value="<? echo $laundry ?>">
        <input type = "hidden" name="kitchen" value="<?php echo $kitchen; ?>">
        <input type = "hidden" name="cwid" value="<?php $_POST["cwid"]; ?>">
        <input type = "hidden" name="lname" value="<?php $_POST["lname"]; ?>">
        <input type = "hidden" name="fname" value="<?php $_POST["fname"]; ?>">
        <input type ="submit" value = "Submit">
      </form>
      <?php
    } else{
      echo "Please redo your selection";
      echo "<a href=\"index.php\">Select preference again</a>";
    }
  } else{
    echo "false";
  }
  
  ?>
</html>