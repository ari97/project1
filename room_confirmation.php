
  <?php
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
  
  
  //Change the $residence from the temp name to actual name:
  
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
  
  echo "First name: ", $fname. "\n<br>\n";
  echo "Last name: ", $lname, "\n<br>\n";
  echo "CWID: ", $cwid, "\n<br>\n";
  echo "Hall Selection: ", $residence, "\n<br>\n";
  echo "Gender: ", $gender, "\n<br>\n";
  echo "Class: ", $class, "\n<br>\n";
  echo "Special-needs: ", ($specialNeeds?"True": "False"), "\n<br>\n";
  echo "Laundry: ", ($laundry?"True": "False"), "\n<br>\n";
  echo "Kitchen: ", ($kitchen?"True": "False"), "\n<br>\n";
  
  echo"
  </body>
</html>";
  ?>