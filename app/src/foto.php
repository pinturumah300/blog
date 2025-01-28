<?php
ob_start();
?>

<?php
include './banner.php';
require_once './model/tcontent.php';
$content = getAllContent();
?>


<div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
  <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button"
    aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
    <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
      <use href="#circle-half"></use>
    </svg>
    <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
  </button>
  <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
    <li>
      <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light"
        aria-pressed="false">
        <svg class="bi me-2 opacity-50" width="1em" height="1em">
          <use href="#sun-fill"></use>
        </svg>
        Light
        <svg class="bi ms-auto d-none" width="1em" height="1em">
          <use href="#check2"></use>
        </svg>
      </button>
    </li>
    <li>
      <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
        aria-pressed="false">
        <svg class="bi me-2 opacity-50" width="1em" height="1em">
          <use href="#moon-stars-fill"></use>
        </svg>
        Dark
        <svg class="bi ms-auto d-none" width="1em" height="1em">
          <use href="#check2"></use>
        </svg>
      </button>
    </li>
    <li>
      <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto"
        aria-pressed="true">
        <svg class="bi me-2 opacity-50" width="1em" height="1em">
          <use href="#circle-half"></use>
        </svg>
        Auto
        <svg class="bi ms-auto d-none" width="1em" height="1em">
          <use href="#check2"></use>
        </svg>
      </button>
    </li>
  </ul>
</div>


<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
  <symbol id="aperture" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
    stroke-width="2" viewBox="0 0 24 24">
    <circle cx="12" cy="12" r="10" />
    <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94" />
  </symbol>
  <symbol id="cart" viewBox="0 0 16 16">
    <path
      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
  </symbol>
  <symbol id="chevron-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd"
      d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
  </symbol>
</svg>


<div class="row mb-2">
  <div class="col-md-6">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <div class="col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 text-primary-emphasis">Foto Saya 1</strong>
        <h3 class="mb-0">Bradley</h3>
        <div class="mb-1 text-body-secondary">Hari ini</div>
        <p class="card-text mb-auto">Di sebelah kanan merupakan foto saya sekarang</p>
        <a href="foto.php" class="icon-link gap-1 icon-link-hover stretched-link">
          Continue reading
          <svg class="bi">
            <use xlink:href="#chevron-right" />
          </svg>
        </a>
      </div>
      <div class="col-auto d-none d-lg-block">
        <img src="/img/riyan.jpeg" class="bd-placeholder-img" width="200" height="250"
          xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
          preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#55595c" /></img>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <div class="col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 text-success-emphasis">Foto Saya 2</strong>
        <h3 class="mb-0">Bradley</h3>
        <div class="mb-1 text-body-secondary">Hari ini</div>
        <p class="mb-auto">Di sebelah kanan merupakan foto saya juga</p>
        <a href="foto.php" class="icon-link gap-1 icon-link-hover stretched-link">
          Continue reading
          <svg class="bi">
            <use xlink:href="#chevron-right" />
          </svg>
        </a>
      </div>
      <div class="col-auto d-none d-lg-block">
        <img src="/img/rock.jpeg" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
          role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#55595c" /></img>
      </div>
    </div>
  </div>
</div>

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
    <div class="position-sticky" style="top: 2rem;">
      <div class="p-4 mb-3 bg-body-tertiary rounded">
        <h4 class="fst-italic">About</h4>
        <p class="mb-0">Disini kalian bisa melihat beberapa artikel yang saya tulis tentang diri saya sendiri</p>
      </div>

      <div>
        <h4 class="fst-italic">Recent posts</h4>
        <ul class="list-unstyled">
          <li>
            <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
              href="#">
              <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#777" />
              </svg>
              <div class="col-lg-8">
                <h6 class="mb-0">Example blog post title</h6>
                <small class="text-body-secondary">January 15, 2024</small>
              </div>
            </a>
          </li>
          <li>
            <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
              href="#">
              <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#777" />
              </svg>
              <div class="col-lg-8">
                <h6 class="mb-0">This is another blog post title</h6>
                <small class="text-body-secondary">January 14, 2024</small>
              </div>
            </a>
          </li>
          <li>
            <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
              href="#">
              <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#777" />
              </svg>
              <div class="col-lg-8">
                <h6 class="mb-0">Longer blog post title: This one has multiple lines!</h6>
                <small class="text-body-secondary">January 13, 2024</small>
              </div>
            </a>
          </li>
        </ul>
      </div>

      <div class="p-4">
        <h4 class="fst-italic">Archives</h4>
        <ol class="list-unstyled mb-0">
          <li><a href="#">March 2021</a></li>
          <li><a href="#">February 2021</a></li>
          <li><a href="#">January 2021</a></li>
          <li><a href="#">December 2020</a></li>
          <li><a href="#">November 2020</a></li>
          <li><a href="#">October 2020</a></li>
          <li><a href="#">September 2020</a></li>
          <li><a href="#">August 2020</a></li>
          <li><a href="#">July 2020</a></li>
          <li><a href="#">June 2020</a></li>
          <li><a href="#">May 2020</a></li>
          <li><a href="#">April 2020</a></li>
        </ol>
      </div>

      <div class="p-4">
        <h4 class="fst-italic">Elsewhere</h4>
        <ol class="list-unstyled">
          <li><a href="#">GitHub</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Facebook</a></li>
        </ol>
      </div>
    </div>
  </div>
</div>

<footer class="py-5 text-center text-body-secondary bg-body-tertiary">
  <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a
      href="https://twitter.com/mdo">@mdo</a>.</p>
  <p class="mb-0">
    <a href="#">Back to top</a>
  </p>
</footer>
<script src="js/bootstrap.bundle.min.js"></script>
<?php
$title = "Foto Saya";
// Tangkap output dalam buffer ke dalam variabel
$content = ob_get_clean();

// Sertakan layout utama
include 'layout.php';
?>