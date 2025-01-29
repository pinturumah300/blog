<?php

ob_start();
include(__DIR__ . "/../model/tcontent.php");

?>

<form action="save.php" method="post">
    <div class="mb-3">
        <label for="judul" class="form-label">Judul</label>
        <input type="text" class="form-control" id="judul" name="title">
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Isi</label>
        <textarea class="form-control summernote" id="body" name="body"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
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