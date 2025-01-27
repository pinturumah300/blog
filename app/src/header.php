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
    if ($_SERVER['REQUEST_URI'] == "/kontak.php") {
      $ckontak = "active";
    }

    ?>
    <a class="nav-item nav-link link-body-emphasis <?php echo $chome; ?>" href="/"><i class="fas fa-home"></i> Home</a>
    <a class="nav-item nav-link link-body-emphasis <?php echo $csekolah; ?>" href="sekolah.php"><i class="fas fa-school"></i>&nbsp;Sekolah</a>
    <a class="nav-item nav-link link-body-emphasis <?php echo $cabout; ?>" href="about.php"><i class="fas fa-user"></i>&nbsp;Tentang Saya</a>
    <a class="nav-item nav-link link-body-emphasis <?php echo $cfoto; ?>" href="foto.php"><i class="fas fa-images"></i>&nbsp;Foto Saya</a>
    <a class="nav-item nav-link link-body-emphasis <?php echo $cteman; ?>" href="teman.php"><i class="fas fa-users"></i>&nbsp;Teman-teman Saya</a>
    <a class="nav-item nav-link link-body-emphasis <?php echo $ckontak; ?>" href="kontak.php"><i class="fas fa-phone"></i>&nbsp;Kontak Saya</a>
  </nav>
</header>