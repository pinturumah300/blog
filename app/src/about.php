<?php
ob_start();
?>
<?php
include './banner.php';
require_once './model/tcontent.php';
$content = getContentBySlug('tentang-saya');
?>
<h1>About Me</h1>
<?php
    if ($content->num_rows > 0) {
        while ($row = $content->fetch_assoc()) {
            echo $row['body'];
        }
    }
    ?>
<?php
$title = "Tentang Saya";
// Tangkap output dalam buffer ke dalam variabel
$content = ob_get_clean();

// Sertakan layout utama
include 'layout.php';
?>