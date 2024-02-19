<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            margin: 0;
            font-family: "Roboto", sans-serif;
            font-size: 16px;
        }

        .cd__main {
            display: block !important;
            background: #4AC29A;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #BDFFF3, #4AC29A);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #BDFFF3, #4AC29A) !important;
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }

        h1 {
            text-align: center;
            margin-bottom: 1.5em;
        }

        h2 {
            text-align: center;
            color: #555;
            margin-bottom: 0;
        }

        .carousel {
            padding: 20px;
            perspective: 1000px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .carousel>* {
            flex: 0 0 auto;
        }

        .carousel figure {
            margin: 0;
            width: 60%;
            transform-style: preserve-3d;
            transition: transform 0.5s;
        }

        .carousel figure img {
            width: 100%;
            box-sizing: border-box;
            padding: 0 0px;
        }

        .carousel figure img:not(:first-of-type) {
            position: absolute;
            left: 0;
            top: 0;
        }

        .carousel nav {
            display: flex;
            justify-content: center;
            margin: 20px 0 0;
        }

        .carousel nav button {
            flex: 0 0 auto;
            margin: 0 5px;
            cursor: pointer;
            color: #333;
            background: none;
            border: 1px solid;
            letter-spacing: 1px;
            padding: 5px 10px;
        }
    </style>
</head>

<body>








    <div class="carousel" data-gap="20">
        <figure>
            <img src="{{ asset('assets/slider_img_1.png') }}" alt="">
            <img src="{{ asset('assets/slider_img_2.png') }}" alt="">
            <img src="{{ asset('assets/slider_img_3.png') }}" alt="">
            <img src="{{ asset('assets/slider_img_1.png') }}" alt="">
            <img src="{{ asset('assets/slider_img_2.png') }}" alt="">
            <img src="{{ asset('assets/slider_img_3.png') }}" alt="">
            <img src="{{ asset('assets/slider_img_2.png') }}" alt="">
            <img src="{{ asset('assets/slider_img_3.png') }}" alt="">


        </figure>
        <nav class="" style="display: none">
            <button class="nav prev" style="color:white">Prev</button>
            <button class="nav next" style="color:white">Next</button>
        </nav>
    </div>


    {{-- <script>
        window.addEventListener('load', () => {
            var
                carousels = document.querySelectorAll('.carousel');


            for (var i = 0; i < carousels.length; i++) {
                carousel(carousels[i]);
            }
        });

        function carousel(root) {
            var
                figure = root.querySelector('figure'),
                nav = root.querySelector('nav'),
                images = figure.children,
                n = images.length,
                gap = root.dataset.gap || 0,
                bfc = ('bfc' in root.dataset),

                theta = 2 * Math.PI / n,
                currImage = 0;


            setupCarousel(n, parseFloat(getComputedStyle(images[0]).width));
            window.addEventListener('resize', () => {
                setupCarousel(n, parseFloat(getComputedStyle(images[0]).width));
            });

            setupNavigation();

            function setupCarousel(n, s) {
                var
                    apothem = s / (2 * Math.tan(Math.PI / n));


                figure.style.transformOrigin = `50% 50% ${-apothem}px`;

                for (var i = 0; i < n; i++)
                    images[i].style.padding = `${gap}px`;
                for (i = 1; i < n; i++) {
                    images[i].style.transformOrigin = `50% 50% ${-apothem}px`;
                    images[i].style.transform = `rotateY(${i * theta}rad)`;
                }
                if (bfc)
                    for (i = 0; i < n; i++)
                        images[i].style.backfaceVisibility = 'hidden';

                rotateCarousel(currImage);
            }


            function setupNavigation() {
                nav.addEventListener('click', onClick, true);



                function onClick(e) {
                    e.stopPropagation();

                    var t = e.target;
                    if (t.tagName.toUpperCase() != 'BUTTON')
                        return;

                    if (t.classList.contains('next')) {
                        currImage++;
                    } else {
                        currImage--;
                    }

                    rotateCarousel(currImage);
                }

            }

            function rotateCarousel(imageIndex) {
                figure.style.transform = `rotateY(${imageIndex * -theta}rad)`;
            }

        }
    </script> --}}

    <script>
        window.addEventListener('load', () => {
            var carousels = document.querySelectorAll('.carousel');

            for (var i = 0; i < carousels.length; i++) {
                carousel(carousels[i]);
            }
        });

        function carousel(root) {
            var figure = root.querySelector('figure'),
                nav = root.querySelector('nav'),
                images = figure.children,
                n = images.length,
                gap = root.dataset.gap || 0,
                bfc = ('bfc' in root.dataset),
                theta = 2 * Math.PI / n,
                currImage = 0,
                intervalId; // Variable to store the interval ID for autoscroll

            setupCarousel(n, parseFloat(getComputedStyle(images[0]).width));
            window.addEventListener('resize', () => {
                setupCarousel(n, parseFloat(getComputedStyle(images[0]).width));
            });

            setupNavigation();

            // Start autoscroll when the carousel is loaded
            startAutoScroll();

            function setupCarousel(n, s) {
                var apothem = s / (2 * Math.tan(Math.PI / n));

                figure.style.transformOrigin = `50% 50% ${-apothem}px`;

                for (var i = 0; i < n; i++)
                    images[i].style.padding = `${gap}px`;
                for (i = 1; i < n; i++) {
                    images[i].style.transformOrigin = `50% 50% ${-apothem}px`;
                    images[i].style.transform = `rotateY(${i * theta}rad)`;
                }
                if (bfc)
                    for (i = 0; i < n; i++)
                        images[i].style.backfaceVisibility = 'hidden';

                rotateCarousel(currImage);
            }

            function setupNavigation() {
                nav.addEventListener('click', onClick, true);

                function onClick(e) {
                    e.stopPropagation();
                    var t = e.target;
                    if (t.tagName.toUpperCase() != 'BUTTON')
                        return;
                    if (t.classList.contains('next')) {
                        currImage++;
                    } else {
                        currImage--;
                    }
                    rotateCarousel(currImage);
                }
            }

            function rotateCarousel(imageIndex) {
                figure.style.transform = `rotateY(${imageIndex * -theta}rad)`;
            }

            // Function to start autoscroll
            function startAutoScroll() {
                intervalId = setInterval(() => {
                    currImage = (currImage + 1) % n;
                    rotateCarousel(currImage);
                }, 3000); // Adjust the interval (in milliseconds) as needed
            }

            // Function to stop autoscroll
            function stopAutoScroll() {
                clearInterval(intervalId);
            }

            // Pause autoscroll when hovering over the carousel
            root.addEventListener('mouseenter', stopAutoScroll);
            // Resume autoscroll when mouse leaves the carousel
            root.addEventListener('mouseleave', startAutoScroll);
        }
    </script>

</body>

</html>
