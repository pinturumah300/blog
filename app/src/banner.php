<div class="container my-5">
    <div id="slideshow" class="position-relative">
        <!-- Slide 1 -->
        <div class="slide position-absolute w-100">
            <img src="/img/blue.png" class="w-100 h-100 object-fit-cover" alt="Foto 1">
            <div class="caption position-absolute bottom-0 start-0 bg-dark text-white p-3">
                Deskripsi Foto 1
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="slide position-absolute w-100">
            <img src="/img/star.png" class="w-100 h-100 object-fit-cover" alt="Foto 2">
            <div class="caption position-absolute bottom-0 start-0 bg-dark text-white p-3">
                Deskripsi Foto 2
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="slide position-absolute w-100">
            <img src="./img/set.png" class="w-100 h-100 object-fit-cover" alt="Foto 3">
            <div class="caption position-absolute bottom-0 start-0 bg-dark text-white p-3">
                Deskripsi Foto 3
            </div>
        </div>

        <!-- Tombol Navigasi -->
        <button class="prev position-absolute top-50 start-0 translate-middle-y btn btn-dark">
            &#10094;
        </button>
        <button class="next position-absolute top-50 end-0 translate-middle-y btn btn-dark">
            &#10095;
        </button>
    </div>
</div>

  <script>
$(document).ready(function(){
    let slideIndex = 0;
    const slides = $(".slide");

    function showSlides() {
        slides.hide();
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1; }
        $(slides[slideIndex - 1]).fadeIn(1000); // Fade-in animasi
    }

    // Menampilkan slide pertama
    showSlides();

    // Tombol Navigasi Kiri
    $(".prev").click(function(){
        slideIndex -= 2;  // Mundur 1 slide
        if (slideIndex < 0) { slideIndex = slides.length - 1; }
        showSlides();
    });

    // Tombol Navigasi Kanan
    $(".next").click(function(){
        showSlides();
    });

    // Set interval otomatis
    setInterval(showSlides, 5000);  // Ganti slide otomatis setiap 5 detik
});
    </script>