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
            echo "true";
        } else{
            echo "false";
        }
        
    ?>
</html>