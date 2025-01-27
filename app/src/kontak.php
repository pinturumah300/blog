<?php
ob_start();
?>
<?php
include './banner.php';
?>
<h1>My Contacts</h1>
<div class="col-12 mb-3">
    <h5 class="text">Berikut merupakan kontak atau social media yang saya miliki</h5>
    <a href="https://facebook.com" target="_blank" class="btn btn-outline-dark btn-sm me-2">
        <i class="fab fa-facebook"></i> Facebook
    </a>
    <a href="https://instagram.com" target="_blank" class="btn btn-outline-dark btn-sm me-2">
        <i class="fab fa-instagram"></i> Instagram
    </a>
    <a href="https://wa.me/6285795854587" target="_blank" class="btn btn-outline-dark btn-sm me-2">
        <i class="fab fa-whatsapp"></i> Whatsapp
    </a>
    <a href="mailto:aheeben@gmail.com" target="_blank" class="btn btn-outline-dark btn-sm me-2">
        <i class="fas fa-envelope"></i> E-mail
    </a>
    <a href="https://tiktok.com/@aheeben" target="_blank" class="btn btn-outline-dark btn-sm me-2">
        <i class="fab fa-tiktok"></i> TikTok
    </a>
</div>
<?php
$title = "My Contacts";
// Tangkap output dalam buffer ke dalam variabel
$content = ob_get_clean();

// Sertakan layout utama
include 'layout.php';
?>