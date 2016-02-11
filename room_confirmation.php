<html>
  <head>
    <title>
      Room Confirmation
    </title>
  </head>
  <?php
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $cwid = $_POST["cwid"];
  $hallSelection = $_POST["hallSelection"];
  $gender = $_POST["gender"];
  $class = $_POST["class"];
  $specialNeeds = $_POST["special-needs"]; 
  $laundry = $_POST["laundry"];
  $kitchen = $_POST["kitchen"];
  
  echo "First name: ", $fname. "\n<br>\n";
  echo "Last name: ", $lname, "\n<br>\n";
  echo "CWID: ", $cwid, "\n<br>\n";
  echo "Hall Selection: ", $hallSelection, "\n<br>\n";
  echo "Gender: ", $gender, "\n<br>\n";
  echo "Class: ", $class, "\n<br>\n";
  echo "Special-needs: ", ($specialNeeds?"True": "False"), "\n<br>\n";
  echo "Laundry: ", ($laundry?"True": "False"), "\n<br>\n";
  echo "Kitchen: ", ($kitchen?"True": "False"), "\n<br>\n";
  ?>
</html>