<?php
if (session_status() === PHP_SESSION_NONE) {
    // Startet die Session, bzw. stellt sie wieder her, falls vorhanden.
    session_start();
}


if (!isset($_SESSION['username'])) {
    header('Location: /index.html');
}
