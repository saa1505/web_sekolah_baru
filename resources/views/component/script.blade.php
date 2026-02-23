<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        $(".testi-carousel").owlCarousel({
            items: 3,
            loop: true,
            margin: 20,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $(".testi-carousel").owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            dots: true,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    });
</script>
<script>
    var swiperGaleri = new Swiper(".galeriSwiper", {
        slidesPerView: 5, // Menampilkan 5 foto sekaligus
        spaceBetween: 15, // Jarak antar foto
        loop: true, // Bisa geser terus menerus
        autoplay: {
            delay: 3000, // Geser otomatis tiap 3 detik
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            320: {
                slidesPerView: 2
            }, // HP: Muncul 2 foto
            768: {
                slidesPerView: 3
            }, // Tablet: Muncul 3 foto
            1024: {
                slidesPerView: 5
            }, // Laptop: Muncul 5 foto
        },
    });
</script>
<script>
    function cekTempatTinggal() {
        var select = document.getElementById("tempat_tinggal");
        var inputContainer = document.getElementById("input_lainnya_container");
        var inputManual = document.getElementById("tempat_tinggal_lainnya");

        if (select.value === "Lainnya") {
            // Tampilkan kotak ketikan manual (seperti gambar ke-2)
            inputContainer.style.display = "block";
            inputManual.setAttribute("required", "required"); // Jadi wajib diisi
            inputManual.focus();
        } else {
            // Sembunyikan kembali (seperti gambar ke-1)
            inputContainer.style.display = "none";
            inputManual.removeAttribute("required");
            inputManual.value = ""; // Reset isinya
        }
    }
</script>

<script>
    function cekTempatTinggal() {
        var select = document.getElementById('tempat_tinggal');
        var container = document.getElementById('input_lainnya_container');
        if (select.value === 'Lainnya') {
            container.style.display = 'block';
        } else {
            container.style.display = 'none';
        }
    }
</script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
 /* public/js/spmb-script.js */
document.addEventListener('DOMContentLoaded', function() {
    AOS.init({
        duration: 1000,
        once: true,
        easing: 'ease-in-out',
    });
});
</script>
