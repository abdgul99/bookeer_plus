{{-- <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="https://cdn.tailwindcss.com"></script> --}}
<style>
    /* html {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;

        background: #ece9e6;
        background-image: linear-gradient(to top, #fbc2eb 0%, #a6c1ee 100%);
    } */


    /* html body {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        font-family: 'Quicksand', sans-serif;
        overflow-x: hidden;
        position: relative;
        top: -2.5rem;
    } */

    /* html body .heading {
        text-align: center;
        color: #2e5266;
        margin-bottom: 3rem;
    } */

    /* html body .heading h1 {
        margin-bottom: 0;
    }

    html body .heading h6 {
        margin: 0;
    }

    html body .heading p {
        margin: 0;
    }

    html body .heading a {
        color: #2e5266;
        display: inline-block;
    }

    html body .heading a .fab {
        margin-right: 0.5rem;
        font-size: 1.5rem;
        padding: 0.5rem;
        margin-top: 0.5rem;
    } */

    .card-carousel {
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    .card-carousel .my-card {
        min-width: 20rem;
        width: 20rem%;
        position: relative;
        z-index: 1;
        -webkit-transform: scale(0.6) translateY(-2rem);
        transform: scale(0.6) translateY(-2rem);
        opacity: 0;
        cursor: pointer;
        pointer-events: none;
        /* background: #2e5266; */
        /* background: linear-gradient(to top, #2e5266, #6e8898); */
        transition: 1s;
    }

    .card-carousel .my-card:after {
        content: '';
        position: absolute;
        height: 2px;
        width: 100%;
        border-radius: 100%;
        /* background-color: rgba(0, 0, 0, 0.3); */
        bottom: -5rem;
        -webkit-filter: blur(4px);
        filter: blur(4px);
    }

    .card-carousel .my-card:nth-child(0):before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);
        font-size: 3rem;
        font-weight: 300;
        color: #fff;
    }

    .card-carousel .my-card:nth-child(1):before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);
        font-size: 3rem;
        font-weight: 300;
        color: #fff;
    }

    .card-carousel .my-card:nth-child(2):before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);
        font-size: 3rem;
        font-weight: 300;
        color: #fff;
    }

    .card-carousel .my-card:nth-child(3):before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);
        font-size: 3rem;
        font-weight: 300;
        color: #fff;
    }

    .card-carousel .my-card:nth-child(4):before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);
        font-size: 3rem;
        font-weight: 300;
        color: #fff;
    }

    .card-carousel .my-card:nth-child(5):before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);
        font-size: 3rem;
        font-weight: 300;
        color: #fff;
    }


    .card-carousel .my-card.active {
        max-width: 20rem;
        min-width: 16rem;
        top: -176px;
        width: 20rem;
        z-index: 3;
        -webkit-transform: scale(1) translateY(0) translateX(0);
        transform: scale(1.4) translateY(0) translateX(0);
        height: 20px;
        opacity: 1;
        pointer-events: auto;
        transition: 1s;
    }

    .card-carousel .my-card.prev,
    .card-carousel .my-card.next {
        z-index: 2;
        -webkit-transform: scale(0.8) translateY(-1rem) translateX(0);
        transform: scale(0.8) translateY(-1rem) translateX(0);
        opacity: 0.6;
        pointer-events: auto;
        transition: 1s;
    }
</style>


<div class="mt-52">


    <div class="card-carousel">
        <div class="my-card"><img src="{{ asset('assets/slider_img_1.png') }}" alt=""></div>
        <div class="my-card"><img src="{{ asset('assets/slider_img_2.png') }}" alt=""></div>
        <div class="my-card"><img src="{{ asset('assets/slider_img_3.png') }}" alt=""></div>
        <div class="my-card"><img src="{{ asset('assets/slider_img_2.png') }}" alt=""></div>
        <div class="my-card"><img src="{{ asset('assets/slider_img_3.png') }}" alt=""></div>

    </div>
</div>





<script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous">
</script>
<script>
    $num = $('.my-card').length;
    $even = $num / 2;
    $odd = ($num + 1) / 2;

    if ($num % 2 == 0) {
        $('.my-card:nth-child(' + $even + ')').addClass('active');
        $('.my-card:nth-child(' + $even + ')').prev().addClass('prev');
        $('.my-card:nth-child(' + $even + ')').next().addClass('next');
    } else {
        $('.my-card:nth-child(' + $odd + ')').addClass('active');
        $('.my-card:nth-child(' + $odd + ')').prev().addClass('prev');
        $('.my-card:nth-child(' + $odd + ')').next().addClass('next');
    }

    $('.my-card').click(function() {
        $slide = $('.active').width();

        if ($(this).hasClass('next')) {
            $('.card-carousel').stop(false, true).animate({
                left: '-=' + $slide
            });
        } else if ($(this).hasClass('prev')) {
            $('.card-carousel').stop(false, true).animate({
                left: '+=' + $slide
            });
        }

        $(this).removeClass('prev next');
        $(this).siblings().removeClass('prev active next');

        $(this).addClass('active');
        $(this).prev().addClass('prev');
        $(this).next().addClass('next');
    });


    // Keyboard nav
    $('html body').keydown(function(e) {
        if (e.keyCode == 37) { // left
            $('.active').prev().trigger('click');
        } else if (e.keyCode == 39) { // right
            $('.active').next().trigger('click');
        }
    });
</script>
