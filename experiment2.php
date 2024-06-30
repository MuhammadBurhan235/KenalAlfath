<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kenal Al-Fath</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background-color: #C04545;
            background-image:
                repeating-linear-gradient(
                    to right, transparent 0 100px,
                    #25283b22 100px 101px
                ),
                repeating-linear-gradient(
                    to bottom, transparent 0 100px,
                    #25283b22 100px 101px
                );
        }
    </style>
    <link rel="stylesheet" href="experiment2.css">
</head>
<body>
    <div class="banner" id="banner1">
        <div class="slider" id="slider1" style="--quantity: 10">
            <div class="item" style="--position: 1"><a href="masul"><img src="images/mas_ul.png" alt=""></a><div class="card blink"></div></div>
            <div class="item" style="--position: 2"><a href="sekjen"><img src="images/sekjen.png" alt=""></a><div class="card"></div></div>
            <div class="item" style="--position: 3"><a href="mo"><img src="images/mo.png" alt=""></a><div class="card"></div></div>
            <div class="item" style="--position: 4"><a href="korwat"><img src="images/korwat.png" alt=""></a><div class="card"></div></div>
            <div class="item" style="--position: 5"><a href="bend1"><img src="images/bendahara1.png" alt=""></a><div class="card"></div></div>
            <div class="item" style="--position: 6"><a href="kdrp"><img src="images/kdrp.png" alt=""></a><div class="card"></div></div>
            <div class="item" style="--position: 7"><a href="sekre"><img src="images/sekre.png" alt=""></a><div class="card"></div></div>
            <div class="item" style="--position: 8"><a href="mki"><img src="images/medkominfo.png" alt=""></a><div class="card"></div></div>
            <div class="item" style="--position: 9"><a href="syiar"><img src="images/syiar.png" alt=""></a><div class="card"></div></div>
            <div class="item" style="--position: 10"><a href="psdm"><img src="images/psdm.png" alt=""></a><div class="card"></div></div>
        </div>
        <div class="content">
            <h1 data-content="PUSAT">
                DEPARTEMEN
            </h1>
        </div>
        <div class="ppp">
            <button onclick="toggleAnimation('slider1')"><i class="fas fa-pause"></i></button>
        </div>
    </div>
    <div class="banner" id="banner2">
        <div class="slider" id="slider2" style="--quantity: 5">
            <div class="item" style="--position: 1"><a href="masul"><img src="images/mas_ul.png" alt=""></a><div class="card blink"></div></div>
            <div class="item" style="--position: 2"><a href="sekjen"><img src="images/sekjen.png" alt=""></a><div class="card"></div></div>
            <div class="item" style="--position: 3"><a href="mo"><img src="images/mo.png" alt=""></a><div class="card"></div></div>
            <div class="item" style="--position: 4"><a href="korwat"><img src="images/korwat.png" alt=""></a><div class="card"></div></div>
            <div class="item" style="--position: 5"><a href="bend1"><img src="images/bendahara1.png" alt=""></a><div class="card"></div></div>
        </div>
        <div class="content">
            <h1 data-content="AWARD">
                KADER
            </h1>
        </div>
        <div class="ppp">
            <button onclick="toggleAnimation('slider2')"><i class="fas fa-pause"></i></button>
        </div>
    </div>
    <div class="banner" id="banner3">
        <div class="slider" id="slider3" style="--quantity: 10">
            <div class="item" style="--position: 1"><a href="masul"><img src="images/mas_ul.png" alt=""></a><div class="card blink"></div></div>
            <div class="item" style="--position: 2"><a href="sekjen"><img src="images/sekjen.png" alt=""></a><div class="card"></div></div>
            <div class="item" style="--position: 3"><a href="mo"><img src="images/mo.png" alt=""></a><div class="card"></div></div>
            <div class="item" style="--position: 4"><a href="korwat"><img src="images/korwat.png" alt=""></a><div class="card"></div></div>
            <div class="item" style="--position: 5"><a href="bend1"><img src="images/bendahara1.png" alt=""></a><div class="card"></div></div>
            <div class="item" style="--position: 6"><a href="kdrp"><img src="images/kdrp.png" alt=""></a><div class="card"></div></div>
            <div class="item" style="--position: 7"><a href="sekre"><img src="images/sekre.png" alt=""></a><div class="card"></div></div>
            <div class="item" style="--position: 8"><a href="mki"><img src="images/medkominfo.png" alt=""></a><div class="card"></div></div>
            <div class="item" style="--position: 9"><a href="syiar"><img src="images/syiar.png" alt=""></a><div class="card"></div></div>
            <div class="item" style="--position: 10"><a href="psdm"><img src="images/psdm.png" alt=""></a><div class="card"></div></div>
        </div>
        <div class="content">
            <h1 data-content="BIG EVENT">
                DAYS TO
            </h1>
        </div>
        <div class="ppp">
            <button onclick="toggleAnimation('slider3')"><i class="fas fa-pause"></i></button>
        </div>
    </div>
    <div class="banner" id="banner4">
        <div class="content">
            <h1 data-content="AL-FATH">
                DEFINISI
            </h1>
        </div>
    </div>
    <div class="modal" id="myModal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="modal-body">
                <div class="modal-image">
                    <img src="" alt="">
                </div>
                <div class="modal-card">
                    <!-- Isi konten card di sini -->
                </div>
            </div>
        </div>
    </div>
    <div class="navigation">
        <button onclick="scrollToBanner('banner1')">Departemen Pusat</button>
        <button onclick="scrollToBanner('banner2')">Kader Award</button>
        <button onclick="scrollToBanner('banner3')">Days to Big Event</button>
        <button onclick="scrollToBanner('banner4')">Definisi Al-Fath</button>
    </div>
    <script>
        function scrollToBanner(bannerId) {
            const bannerElement = document.getElementById(bannerId);
            if (bannerElement) {
                bannerElement.scrollIntoView({ behavior: 'smooth' });
            }
        }

        function toggleAnimation(sliderId) {
            var slider = document.getElementById(sliderId);
            var toggleButton = document.querySelector(`button[onclick="toggleAnimation('${sliderId}')"]`);

            if (slider.style.animationPlayState === 'paused') {
                slider.style.animationPlayState = 'running';
                toggleButton.className = 'fas fa-pause';
            } else {
                slider.style.animationPlayState = 'paused';
                toggleButton.className = 'fas fa-play';
            }
        }

        document.addEventListener("DOMContentLoaded", function() {
            const sliders = document.querySelectorAll('.slider');

            sliders.forEach(slider => {
                const quantity = parseInt(slider.style.getPropertyValue('--quantity'));
                const items = slider.querySelectorAll('.item');

                // Set transform style for each item based on quantity
                items.forEach(item => {
                    const position = parseInt(item.style.getPropertyValue('--position'));
                    const angle = (position - 1) * (360 / quantity);

                    if (quantity === 5) {
                        item.style.transform = `rotateY(${angle}deg) translateZ(30vw)`;
                    } else if (quantity === 10) {
                        item.style.transform = `rotateY(${angle}deg) translateZ(50vw)`;
                    }
                });

                // Set @keyframes autoRun based on quantity
            });
        });

        var modal = document.getElementById("myModal");

        var span = document.getElementsByClassName("close")[0];

        // Dapatkan elemen gambar dan card di dalam modal
        var modalImage = modal.querySelector(".modal-image img");
        var modalCard = modal.querySelector(".modal-card");

        // Dapatkan semua elemen card
        var cards = document.querySelectorAll(".item .card");

        // Tambahkan event listener untuk setiap card
        cards.forEach(function(card, index) {
            card.addEventListener("click", function() {
                modal.style.display = "flex"; // Tampilkan modal dengan flex
                // Isi modal dengan konten yang sesuai, misalnya berdasarkan href atau gambar di card
                var imgSrc = card.parentNode.querySelector("img").src;
                var cardContent = card.parentNode.querySelector(".card").innerHTML;

                // Tampilkan gambar dan konten card di modal
                modalImage.src = imgSrc;
                modalCard.innerHTML = cardContent;
            });
        });

        // Ketika pengguna mengklik tombol tutup (x), tutup modal
        span.onclick = function() {
            modal.style.display = "none";
        };

        // Ketika pengguna mengklik di luar modal, tutup modal
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        };
    </script>
</body>
</html>