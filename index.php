<HTML>
  <head>
    <title>Room Selection Form</title>
  </head>
  <body>
    <form action="room_selection.php" method="POST">
      First name: <input type="text" name="fname"><br>
      Last name: <input type = "text" name = "lname"><br>
      CWID: <input type = "text" name = "cwid"><br>
      <input type = "radio" name="gender" value = "male"> Male<br>
      <input type = "radio" name="gender" value = "female"> Female<br>
      <input type = "radio" name="gender" value = "other"> Other<br>
      
      <input type = "radio" name="class" value = "freshman"> Freshman<br>
      <input type = "radio" name="class" value = "sophmore"> Sophmore<br>
      <input type = "radio" name="class" value = "junior"> Junior<br>
      <input type = "radio" name="class" value = "senior"> Senior<br>
      <select name = "residence">
        <option selected disabled hidden value=''>Select a Residence Hall</option>
        <option value="leo">Leo Hall</option>
        <option value="champagnat">Champagnat Hall</option>
        <option value="marian">Marian Hall</option>
        <option value="sheahan">Sheahan Hall</option>
        <option value="midrise">Midrise Hall</option>
        <option value="foy">Foy Townhouses</option>
        <option value="gartland">Gartland Commons</option>
        <option value="new">New Townhouses</option>
        <option value="lower_west">Lower West Cedar St Townhouses</option>
        <option value="upper_west">Upper West Cedar St Townhouses</option>
        <option value="fulton">Fulton Street Townhouses</option>
        <option value="talmadge">Talmadge Court</option>
        <option value="new_fulton">New Fulton Townhouses</option>
      </select>
      <br>
        
      <input type="checkbox" name="special-needs" value="true">Special Needs<br>
      <input type="checkbox" name="laundry" value="true">Laundry on Premise<br>
      <input type="checkbox" name="kitchen" value="true">Fully Equipped Kitchen<br>
      
      <input type ="submit" value = "Submit">
      </form>
    </body>
</HTML>