<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rabbits</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="../src/scripts/header.js" type="text/javascript" ></script>
    <link rel="stylesheet" href="/dist/styles/main.bundle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
</head>
<body onload="onLoad()" onresize="onLoad()">
    <header class="header" id="header">
        <a href="../index.php"><h1 class="header__title txt-1">Breeder Rabbits</h1></a>
        <nav class="header__nav">
            <ul class="header__nav_ul">
                <a class="header__nav_item" href="../rabbits.php"><li class="header__nav_li">Rabbits</li></a>
                <a class="header__nav_item" href="../breeding.php"><li class="header__nav_li">Breeding</li></a>
                <a class="header__nav_item" href="../food.php"><li class="header__nav_li">Foods & Diet</li></a>
                <a class="header__nav_item" href="../contact-us.php"><li class="header__nav_li">Contact Us</li></a>
            </ul>
        </nav>
        <a href="javascript:void(0);" class="header__nav_icon" onclick="clickIcon()">
            <i class="header__nav_icon_item fa fa-bars"></i>
        </a>
    </header>