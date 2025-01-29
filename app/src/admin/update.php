<?php

ob_start();
include(__DIR__ . "/../model/tcontent.php");
$post = getContentById($_GET['id']);
reopenConnection();
if ($post->num_rows > 0) {
    updateContent($_GET['id'],      mysqli_real_escape_string($conn, $_POST['title']), $_POST['body']);
    header("Location: /admin/index.php");
    exit();
} else {
    ?>
    <div class="jumbotron">
        <h1>Data Tidak ditemukan</h1>
        <p>Maaf, halaman yang Anda request tidak ditemukan.</p>
    </div>
<?php
}

$title = "Halaman Admin";
// Tangkap output dalam buffer ke dalam variabel
$page_content = ob_get_clean();

// Sertakan layout utama
include 'admin_layout.php';
?>


<script>
    $(document).ready(function () {
        $('.summernote').summernote();
    });
</script>