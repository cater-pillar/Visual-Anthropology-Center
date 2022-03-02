<!DOCTYPE html>
<head>
    <title><?php echo $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type= 'image/png' href="assets/general/logoOko.png">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/nav.css">
    <?php if (isset($programs_page)) : ?>
    <link rel="stylesheet" href="css/programs.css">
    <?php endif ; ?>
    <link rel="stylesheet" href="css/map.css">
</head>
<body>
<header>
    <?php require './php/nav.php' ?>
</header>
<segment>
    <div class='intro'>
    <div class='container'>
        <h2><?php echo $header2 ?></h2>
    </div>
</div>
</segment>
<segment>
    <div class='separator'>
    </div>
</segment>
