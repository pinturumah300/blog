<?php

ob_start();
include(__DIR__ . "/../model/tcontent.php");
$post = getContentById($_GET['id']);

if ($post->num_rows > 0) {
    while ($row = $post->fetch_assoc()) {
        ?>
        <form action="update.php?id=<?= $row['id'] ?>" method="post">
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="title" value="<?= $row['title'] ?>">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Isi</label>
            <textarea class="form-control summernote" id="body" name="body"><?= $row['body'] ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    <?php
    }
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