<?php

if (session_status() === PHP_SESSION_NONE) {
    // Startet die Session, bzw. stellt sie wieder her, falls vorhanden.
    session_start();
}
session_unset();
session_destroy();

header('Location: /index.php');
