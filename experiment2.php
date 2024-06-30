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
            <div class="item" style="--position: 1"><a href="masul"><img src="images/mas_ul.png" alt=""></a><div class="card"></div></div>
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
        <div class="slider" id="slider2" style="--quantity: 3">
            <div class="item" style="--position: 1"><a href="masul"><img src="images/mas_ul.png" alt=""></a><div class="card">Card Content</div></div>
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
            <div class="item" style="--position: 1"><a href="masul"><img src="images/mas_ul.png" alt=""></a><div class="card">Card Content</div></div>
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
    <div class="navigation">
        <button onclick="scrollToBanner('banner1')">Departemen Pusat</button>
        <button onclick="scrollToBanner('banner2')">Kader Award</button>
        <button onclick="scrollToBanner('banner3')">Days to Big Event</button>
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
    </script>
</body>
</html>