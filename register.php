<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate inputs
        if (empty($_POST["username"]))
        {
            apologize("Please provide a username.");
        }
        else if (strlen($_POST["username"]) > 25)
        {
            apologize("Username cannot exceed 25 characters.");   
        }    
        }
        else if (empty($_POST["password"]))
        {
            apologize("Please provide a password.");
        }
        else if (empty($_POST["confirmation"]) || $_POST["password"] != $_POST["confirmation"])
        {
            apologize("Passwords do not match.");
        }
        else if (strlen($_POST["password"]) > 25 || strlen($_POST["password"]) < 5)
        {
            apologize("Password length must be between 5 and 25 characters.");   
        } 
        // try to register user
        $results = query("INSERT INTO users (username, hash) VALUES(?, ?)",
            $_POST["username"], crypt($_POST["password"])
        );
        if ($results === false)
        {
            apologize("That username appears to be taken.");
        }

        // get new user's ID
        $rows = query("SELECT LAST_INSERT_ID() AS id");
        if ($rows === false)
        {
            apologize("Can't find your ID.");
        }
        $id = $rows[0]["id"];

        // log user in
        $_SESSION["id"] = $id;

        // redirect to portfolio
        redirect("/");
    }
    else
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

?>
