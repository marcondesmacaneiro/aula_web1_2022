<?php
    session_start();

    if (isset($_GET['logout'])) {
        session_destroy();
        session_start();
    }

    if (isset($_GET['nome'])) {
        $_SESSION['nome'] = $_GET['nome'];
    }

    print_r($_SESSION);
    
?>