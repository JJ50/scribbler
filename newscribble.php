<?php

    // configuration
    require("../includes/config.php"); 
    
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {    
         // validate input
         if (empty($_POST["scribble"]))
         {
             apologize("No Scribble entered!");
         }   
         
         // try to store scribble 
          query("INSERT INTO scribbles (id, scribbletext, datetime) VALUES (?, ?, NOW())", $_SESSION["id"], $_POST["scribble"]);

        // redirect to main page
        render("newscribble_form.php", ["title" => "Scribble Something!"]);

    }
 
    // render portfolio
    else
    {
    render("newscribble_form.php", ["title" => "Scribble Something!"]);
    }
?>
