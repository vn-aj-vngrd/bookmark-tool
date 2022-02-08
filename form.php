<?php

$websites;

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $url = $_POST['url'];

    $websites = array(
        "id" => $_SESSION['count'],
        "name" => $name,
        "url" => $url,
    );

    $_SESSION['count'] += 1;
    $_SESSION['bookmarks'][] = $websites;
    // print_r($_SESSION['bookmarks']);
}

if (isset($_POST['delete'])) {
    if (count($_SESSION['bookmarks'])) {
        // echo $_POST['id'];
        unset($_SESSION['bookmarks'][$_POST['id']]);
        $_SESSION['count']--;
    }
    else {
        $_SESSION['count'] = 0;
    }
    
}

if (isset($_POST['deleteAll'])) {
    include 'destroy.php';
}

?>