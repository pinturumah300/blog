<?php
ob_start();
?>

<?php
include './banner.php';
require_once './model/tcontent.php';
$content = getContentBySlug('foto-saya');
?>
<?php
    if ($content->num_rows > 0) {
        while ($row = $content->fetch_assoc()) {
            echo $row['body'];
        }
    }
    ?>
<?php
$title = "Foto Saya";
// Tangkap output dalam buffer ke dalam variabel
$content = ob_get_clean();

// Sertakan layout utama
include 'layout.php';
?>