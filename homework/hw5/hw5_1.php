<?php 
    echo "<form method='GET'>";
    echo "<p><label for='emailLabel'>E-mail: </label><input type='email' id='emailLabel' required></p>";
    echo "<p><input type='checkbox' name='chB' id='chB'><label for='chB'>Subscribe</label></p>";
    echo "<p><input type='submit' name='submit' value='send'></p>";
    echo "</form>";
    if(isset($_GET["submit"]) && $_GET["chB"] == "on") echo "Welcome!";
?>