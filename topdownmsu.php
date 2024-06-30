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
                background-image: url('images/topdownmsu.png'); 
                background-size: cover;
                background-position: center;
                transition: filter 0.3s;
            }
            .small-image-container {
                position: absolute;
                transition: z-index 0.3s;
                display: inline-block;
            }

            .small-image {
                transition: filter 0.3s ease-in-out;
                z-index: 0; 
            }
            .small-image.hovered {
                filter: drop-shadow(0 0 10px rgba(255, 255, 255, 0.8));
                position: relative;
                z-index: 1; /* Atur z-index lebih tinggi dari .full-image */
            }

            .small-image-container:hover .tooltip {
                visibility: visible;
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

        @keyframes blink {
            0%, 100% { opacity: 0; }
            50% { opacity: 1; }
        }    

        .hover-pin.blink {
    animation: blink 1.5s infinite;
    opacity: 0; /* Mulai dengan opacity 0 */
}

.hover-pin:hover {
    animation: none; /* Hentikan animasi saat di-hover */
    opacity: 1; /* Tetapkan opacity ke 1 saat di-hover */
}

        .hover-pin {
            position: absolute;
            width: auto; /* Mengikuti panjang teks */
            height: auto;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.5);
            z-index: 2;
            top: 50%;
            left: 50%;
            cursor: pointer;
            padding: 0.4vw;
            text-align: center;
        }

        @keyframes blink {
    0% { opacity: 1; }
    50% { opacity: 0; }
    100% { opacity: 1; }
}

.hover-pin:hover {
    animation: none; /* Hentikan animasi saat di-hover */
    opacity: 1; /* Tetapkan opacity ke 1 saat di-hover */
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

    <div class="small-image-container" style="bottom: -7vw; right: 0vw;">
        <img src="images/depanmsu.png" alt="Small Image 1" class="small-image" style="width: 62vw; height: auto;">
        <span class="hover-pin blink" data-url="/experiment.php" style="left: 27vw;">Depan</span>
    </div>
    <div class="small-image-container" style="top: -5vw; right: 0vw;">
        <img src="images/kananmsu.png" alt="Small Image 3" class="small-image" style="width: 70vw; height: auto;">
        <span class="hover-pin" data-popup="restoran" style="left: 13vw;">Kanan</span>
    </div>
    <div class="small-image-container" style="bottom: -5vw; left: 0vw;">
        <img src="images/kirimsu.png" alt="Small Image 3" class="small-image" style="width: 49vw; height: auto;">
        <span class="hover-pin" data-popup="restoran" style="left: 33vw;">Kiri</span>
    </div>
    <div class="small-image-container" style="top: -5vw; left: 0vw;">
        <img src="images/vipmsu.png" alt="Small Image 3" class="small-image" style="width: 37vw; height: auto;">
        <span class="hover-pin" data-popup="restoran"style="left: 27vw;">VIP</span>
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
            document.querySelectorAll('.hover-pin.blink').forEach(pin => {
                pin.addEventListener('click', function() {
                    const url = this.dataset.url;
                    if (url) {
                        window.location.href = url;
                    }
                });
            });

            document.querySelectorAll('.hover-pin').forEach(image => {
                image.addEventListener('mouseenter', function() {
                    this.closest('.small-image-container').querySelector('.small-image').classList.add('hovered'); 
                });

                image.addEventListener('mouseleave', function() {
                    this.closest('.small-image-container').querySelector('.small-image').classList.remove('hovered');
                });

                image.addEventListener('click', function() {
                    document.querySelector('.full-image').classList.add('blur');
                    document.getElementById(this.dataset.popup).style.display = 'flex';
                });
            });

            document.querySelectorAll('.hover-pin').forEach(image => {
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
