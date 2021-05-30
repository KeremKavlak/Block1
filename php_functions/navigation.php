<?php function nav() {
 $strings = array(
    "Home" => "/", // the slash will redirect to index.php
    "Login/Register" => "login.php",
    "Leanderboard" => "leaderboard.php",  
    "Game" => "game.php",
);

        echo "<div id=\"top_menu\">";
            echo "<nav>";
    foreach ($strings as $string => $url){
            echo "<a href=\"$url\">$string</a>";
} 
        echo "</div>";
echo "</nav>";
    } 
nav();
?>
