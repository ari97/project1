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
  
  echo "First name: ", $fname. "<br>";
  echo "Last name: ", $lname, "<br>";
  echo "CWID: ", $cwid, "<br>";
  echo "Hall Selection: ", $hallSelection, "<br>";
  echo "Gender: ", $gender, "<br>";
  echo "Class: ", $class, "<br>";
  echo "Special-needs: ", ($specialNeeds?"True": "False"), "<br>";// this wont work it will output "1" or "" need to change to print out true and false
  echo "Laundry: ", ($laundry?"True": "False"), "<br>";// this wont work it will output "1" or "" need to change to print out true and false
  echo "Kitchen: ", ($kitchen?"True": "False"), "<br>";// this wont work it will output "1" or "" need to change to print out true and false
?>
</html>