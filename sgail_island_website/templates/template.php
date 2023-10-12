<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" type="text/css" href="../public/lcss/lstyle.css" media="screen and (max-width: 1000px)">
    <?= $head ?? '' ?>
    <title>Sgail-Island</title>
</head>
<body>
<?php include_once 'navbar/navbar.php' ?>
    <div id="containerBox">
        <?= $content ?? '' ?>
    </div>
<?php include_once 'footer/footer.php' ?>
</body>
</html>