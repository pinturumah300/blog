<?php

ob_start();
include (__DIR__ . "/../model/tcontent.php");
$contents = getAllContent();

if ($contents->num_rows > 0) {
  ?>
  <table class="table table-striped table-hover">
      <thead>
      <tr>
          <th scope="col" style="width: 4%">No</th>
          <th scope="col">Judul</th>
          <th scope="col" style="width: 20%">Slug</th>
          <th scope="col" style="width: 15%">Tanggal</th>
          <th scope="col" style="width: 16%">Action</th>
      </tr>
      </thead>
      <tbody>
       <?php 
       $i = 1;
      while ($row = $contents->fetch_assoc()) {
          ?>
          <tr>
              <th scope="row"><?php echo $i;?></th>
              <td><?php echo $row['title']; ?></td>
              <td><?php echo $row['slug']; ?></td>
              <td><?php echo $row['created']; ?></td>
              <td>
                  <a href="/admin/edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                  <a href="/admin/delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</a>
              </td>
          </tr>
          <?php
          $i++;
      }
      ?>
      </tbody>
  </table>
<?php 
} else {
  ?>
  <div class="jumbotron">No content found</div>
  <?php 
}

$title = "Halaman Admin";
// Tangkap output dalam buffer ke dalam variabel
$page_content = ob_get_clean();


// Sertakan layout utama
include 'admin_layout.php';
?>