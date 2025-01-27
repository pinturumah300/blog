<?php
ob_start();
?>
<?php
include './banner.php';
?>
<h1>About Me</h1>
<p>Halo! Saya seorang blogger yang suka berbagi tentang teknologi, perjalanan, dan kehidupan.</p>
<?php
// Tangkap output dalam buffer ke dalam variabel
$content = ob_get_clean();

// Sertakan layout utama
include 'layout.php';
?>