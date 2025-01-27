<?php
include_once("./helper/url.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To My Blog | Bradley</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <script src="js/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <?php
        include "./header.php";
        ?>
    </div>

    <section class="main container">
        <?php
        //include "./content.php";
        echo $content;
        ?>
    </section>

    <footer class="bg-dark text-light py-4">
        <?php
        include "./footer.php";
        ?>
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>