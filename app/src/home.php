<?php
ob_start();
?>
<!-- 
 <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
    <div class="col-lg-6 px-0">
        <h1 class="display-4 fst-italic">Selamat datang di blog milik saya</h1>
        <p class="lead my-3">Bagian ini menampilkan beberapa artikel yang saya tulis.</p>
        <p class="lead mb-0"><a href="#" class="text-body-emphasis fw-bold">Continue reading...</a></p>
    </div>
</div> 
-->

<?php
include './banner.php';
require_once './model/tcontent.php';
$home = getContentBySlug('home');
reopenConnection();
$sidebar = getContentBySlug('side-bar');
reopenConnection();
$sample = getContentBySlug('sample-blog-post');
?>

<?php
    if ($home->num_rows > 0) {
        while ($row = $home->fetch_assoc()) {
            echo $row['body'];
        }
    }
    ?>


<div class="row g-5">


    <div class="col-md-8">
    <?php
    if ($sample->num_rows > 0) {
        while ($row = $sample->fetch_assoc()) {
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
<?php
$title = "Selamat datang kedalam blog saya";
// Tangkap output dalam buffer ke dalam variabel
$content = ob_get_clean();

// Sertakan layout utama
include 'layout.php';
?>