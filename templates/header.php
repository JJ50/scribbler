<!DOCTYPE html>

<html>

    <head>

// note I have commented out all the css because it isn't working properly yet
        <!-- <link href="/css/styles.css" type="text/css" rel="stylesheet"/> -->
        <link href='http://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Capriola' rel='stylesheet' type='text/css'>
        
        <?php if (isset($title)): ?>
            <title>my Scribbler: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>my Scribbler</title>
        <?php endif ?>


    </head>

    <body>

        <div class="container">

            <div id="top" class="logo">
                    <a href="/">myScribbler</a>
            </div>

            <div id="middle">
