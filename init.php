<?php 

    if (empty($_SESSION['websites'])) {
        $_SESSION['websites'] = array();
    }
    
    if (empty($_SESSION['count'])) {
        $_SESSION['count'] = 0;
    }
    
?>