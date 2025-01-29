<?php
ob_start();
?>

<?php
include './banner.php';
require_once './model/tcontent.php';
$content = getContentBySlug('sekolah-saya');
reopenConnection();
$sample = getContentBySlug('sekolah-baru');
reopenConnection();
$sidebar = getContentBySlug('side-bar');
?>








<main class="container">

<?php
    if ($sample->num_rows > 0) {
        while ($row = $sample->fetch_assoc()) {
            echo $row['body'];
        }
    }
    ?>


  <div class="row g-5">
    <div class="col-md-8">
    <?php
    if ($content->num_rows > 0) {
        while ($row = $content->fetch_assoc()) {
            echo $row['body'];
        }
    }
    ?>
    </div>

    <div class="col-md-4">
    <?php
    if ($sidebar->num_rows > 0) {
        while ($row = $sidebar->fetch_assoc()) {
            echo $row['body'];
        }
    }
    ?>
    </div>
  </div>

</main>



<?php
$title = "Tentang Sekolah Saya";
// Tangkap output dalam buffer ke dalam variabel
$content = ob_get_clean();

// Sertakan layout utama
include 'layout.php';
?>