<?php

session_start();

include 'init.php';
include 'form.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <title>Bookmark Manager - Vanguardia</title>

</head>

<body>
    <nav class="navbar fixed-top">
        <a class="navbar-brand " href="#">
            Bookmark <blue>
        </a>
        <form method="POST">
            <div>
                <input class="btn-deleteAll" type="submit" name="deleteAll" value="Clear All" formmethod="POST" />
            </div>
        </form>
    </nav>

    <?php include 'bookmark.php' ?>

    <?php include 'websites.php' ?>

    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>