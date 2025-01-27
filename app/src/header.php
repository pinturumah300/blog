<header class="nav-scroller py-1 mb-3 border-bottom">
  <nav class="nav nav-underline justify-content-between">

    <?php

    $chome = $csekolah = $cabout = $cfoto = $cteman = "";
    if ($_SERVER['REQUEST_URI'] == "/") {
      $chome = "active";
    }
    if ($_SERVER['REQUEST_URI'] == "/sekolah.php") {
      $csekolah = "active";
    }
    if ($_SERVER['REQUEST_URI'] == "/about.php") {
      $cabout = "active";
    }
    if ($_SERVER['REQUEST_URI'] == "/foto.php") {
      $cfoto = "active";
    }
    if ($_SERVER['REQUEST_URI'] == "/teman.php") {
      $cteman = "active";
    }

    ?>
    <a class="nav-item nav-link link-body-emphasis <?php echo $chome; ?>" href="/"><i class="fas fa-home"></i> Home</a>
    <a class="nav-item nav-link link-body-emphasis <?php echo $csekolah; ?>" href="sekolah.php">Sekolah</a>
    <a class="nav-item nav-link link-body-emphasis <?php echo $cabout; ?>" href="about.php">Tentang Saya</a>
    <a class="nav-item nav-link link-body-emphasis <?php echo $cfoto; ?>" href="foto.php">Foto Saya</a>
    <a class="nav-item nav-link link-body-emphasis <?php echo $cteman; ?>" href="teman.php">Teman-teman Saya</a>
  </nav>
</header>