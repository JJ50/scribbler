<!DOCTYPE html>

<html>

    <head>


        <link href="/css/styles.css" type="text/css" rel="stylesheet"/>
        
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
