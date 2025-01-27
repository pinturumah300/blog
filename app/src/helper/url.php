<?php
function getCurrentUrl()
{
    // Tentukan apakah menggunakan HTTPS
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? "https" : "http";
    // Kombinasikan untuk membentuk URL lengkap
    $url = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    return $url;
}
