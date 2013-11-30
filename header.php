<!DOCTYPE html>

<html>

    <head>


        <link href="/css/styles.css" type="text/css" rel="stylesheet"/>
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

            <div id="top">
                <div class="site-header">
                    <a class="logo" href="/">myScribbler</a>
                </div>
            </div>

            <div id="middle">
