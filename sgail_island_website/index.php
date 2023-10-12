<?php
global $conn;
include_once "templates/controller.php";
session_start();
require_once('config/config.php');
$page = $_GET['p'] ?? null;

try {
    if ($page != null) {
        switch ($page) {
            case 'home':
                showPage('view/home.php');
                break;
            case 'arkSociety':
                showPage('view/arkSociety.php');
                break;
            case 'login':
                showPage('connexion/login.php');
                break;
            case 'register':
                showPage('connexion/register.php');
                break;
            case 'logout':
                showPage('connexion/logout.php');
                break;
            case 'booking':
                showPage('view/booking.php');
                break;
            case 'booking_gateway':
                showPage('view/booking_gateway.php');
                break;
            default:
                showPage('view/home.php');
                break;
        }
    } else {
        showPage('view/home.php');
    }
} catch (Exception $e) {
    echo 'Error';
    header('Location: /error');
}