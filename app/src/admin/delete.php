<?php

ob_start();
include(__DIR__ . "/../model/tcontent.php");
$post = getContentById($_GET['id']);
reopenConnection();
if ($post->num_rows > 0) {
    deleteContent($_GET['id']);
    header("Location: /admin/index.php");
    exit();
} else {
    ?>
    <div class="jumbotron">
        <h1>Data Tidak ditemukan</h1>
        <p>Kembali ke <a href="/admin/index.php">halaman admin</a></p>
    </div>
<?php
}

$title = "Halaman Admin";
// Tangkap output dalam buffer ke dalam variabel
$page_content = ob_get_clean();

// Sertakan layout utama
include 'admin_layout.php';
?>
