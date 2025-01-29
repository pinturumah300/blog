<?php
ob_start();
?>
<?php
include './banner.php';
require_once './model/tcontent.php';
$slug = $_GET['slug'];
$content = getContentBySlug($slug);
?>
<?php
    if ($content->num_rows > 0) {
        while ($row = $content->fetch_assoc()) {
            ?>
            <h1><?php echo $row['title']; ?></h1>
            <?php
            echo $row['body'];
            $title = $row['title'];
        }
    }
    ?>
<?php

// Tangkap output dalam buffer ke dalam variabel
$content = ob_get_clean();

// Sertakan layout utama
include 'layout.php';
?>