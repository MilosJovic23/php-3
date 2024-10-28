<?php



    $siteTitle = "Postani Programer";
    $currentYear = date("Y");
    $footerTitle = "Copyright @ mojsajt ";


    $navItems = [
        [
            "name" => "Glavna",
            "url" => "/home.php"
        ],
        [
            "name" => "O nama",
            "url" => "/About.php"
        ],
        [
            "name" => "Kontakt",
            "url" => "/Contact.php"
        ]
    ];


?>

<!doctype html>

    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $siteTitle ?></title>
    </head>

    <body>
    <h1><?php echo $siteTitle ?></h1>
    <nav>
        <ul>
            <a href=<?php echo $navItems[0]["url"] ?> > <?php echo $navItems[0]["name"] ?></a>
            <a href=<?php echo $navItems[1]["url"] ?> > <?php echo $navItems[1]["name"] ?></a>
            <a href=<?php echo $navItems[2]["url"] ?> > <?php echo $navItems[2]["name"] ?></a>
        </ul>
    </nav>

    <footer>
        <p><?php echo $footerTitle.$currentYear ?></p>
    </footer>

    </body>

</html>

