<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>BurhanIntPic</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
        }
        .full-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('images/home.png'); 
            background-size: cover;
            background-position: center;
            transition: filter 0.3s;
        }
        .small-image-container {
            position: absolute;
        }
        .small-image {
            cursor: pointer;
            transition: filter 0.3s ease-in-out;
        }
        .tooltip {
            visibility: hidden;
            width: 120px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 5px;
            padding: 5px;
            position: absolute;
            z-index: 1;
            top: -5px;
            left: 50%;
            transform: translateX(-50%);
        }
        .small-image-container:hover .tooltip {
            visibility: visible;
        }
        .small-image:hover {
            filter: drop-shadow(0 0 10px rgba(255, 255, 255, 0.8));
        }
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 2;
            justify-content: center;
            align-items: center;
        }
        .popup-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            position: relative;
        }
        .popup-content p {
            margin: 0;
        }
        .popup-close {
            margin-top: 10px;
            cursor: pointer;
            color: #000;
            font-weight: bold;
        }
        .blur {
            filter: blur(5px);
        }
        .slideshow-container {
            position: relative;
            width: 100%;
            max-width: 500px;
            margin: auto;
        }
        .slides {
            display: none;
        }
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: black;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }
        .prev:hover, .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
        }
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }
        .card {
            background-color: #f1f1f1;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            flex: 1 1 calc(33.333% - 20px);
            box-sizing: border-box;
            text-align: center;
        }
        @media (max-width: 768px) {
            .small-image {
                width: 10vw;
                height: auto;
            }
            .tooltip {
                width: 100px;
                padding: 3px;
            }
        }
        @media (max-width: 480px) {
            .small-image {
                width: 10vw;
                height: auto;
            }
            .tooltip {
                width: 80px;
                padding: 2px;
            }
        }
    </style>
</head>
<body>
    <div class="full-image"></div>
    
    <div class="small-image-container" style="bottom: -5vw; left: 35vw;">
        <img src="images/mobil.png" alt="Small Image 1" class="small-image" data-popup="mobil" style="width: 42vw; height: auto;">
    </div>
    <div class="small-image-container" style="top: -5vw; left: 0vw;">
        <img src="images/restoran.png" alt="Small Image 3" class="small-image" data-popup="restoran" style="width: 86vw; height: auto;">
    </div>

    <div class="popup" id="mobil">
        <div class="popup-content" style="background-color: transparent;">
            <div class="card-container">
                <div class="card"><img src="images/woman.png" style="width:30%"></div>
                <div class="card"><img src="images/man.png" style="width:30%"></div>
                <div class="card"><img src="images/woman.png" style="width:30%"></div>
                <div class="card"><img src="images/man.png" style="width:30%"></div>
                <div class="card"><img src="images/woman.png" style="width:30%"></div>
                <div class="card"><img src="images/man.png" style="width:30%"></div>
                <div class="card"><img src="images/woman.png" style="width:30%"></div>
                <div class="card"><img src="images/man.png" style="width:30%"></div>
                <div class="card"><img src="images/woman.png" style="width:30%"></div>
            </div>
            <span class="popup-close" data-popup-close="mobil" style="color: white">Close</span>
        </div>
    </div>
    <div class="popup" id="restoran">
        <a class="prev" style="left: 0px">&#10094;</a>
        <div class="popup-content">
            <div class="slideshow-container">
                <div class="slides">
                    <img src="images/slide1.png" style="width:100%">
                </div>
                <div class="slides">
                    <img src="images/slide2.webp" style="width:100%">
                </div>
                <div class="slides">
                    <img src="images/slide3.webp" style="width:100%">
                </div>
            </div>
            <span class="popup-close" data-popup-close="restoran">Close</span>
        </div>
        <a class="next" style="right: 0px">&#10095;</a>
    </div>

    <script>
        document.querySelectorAll('.small-image').forEach(image => {
            image.addEventListener('click', function() {
                document.querySelector('.full-image').classList.add('blur');
                document.getElementById(this.dataset.popup).style.display = 'flex';
            });
        });

        document.querySelectorAll('.popup-close').forEach(closeButton => {
            closeButton.addEventListener('click', function() {
                document.getElementById(this.dataset.popupClose).style.display = 'none';
                document.querySelector('.full-image').classList.remove('blur');
            });
        });

        let slideIndex = 0;
        showSlides(slideIndex);

        function showSlides(n) {
            let i;
            let slides = document.querySelectorAll('#restoran .slides');
            if (n >= slides.length) { slideIndex = 0; }
            if (n < 0) { slideIndex = slides.length - 1; }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex].style.display = "block";
        }

        document.querySelector('#restoran .prev').addEventListener('click', function() {
            showSlides(slideIndex -= 1);
        });

        document.querySelector('#restoran .next').addEventListener('click', function() {
            showSlides(slideIndex += 1);
        });
    </script>
</body>
</html>
