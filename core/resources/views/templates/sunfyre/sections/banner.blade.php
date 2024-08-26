@php
    $bannerContent = getContent('banner.content', true);
    $bannerElement = getContent('banner.element', orderById: true);
@endphp
<style>
    .banner-thumb {
        overflow: hidden;
        position: relative;
    }

    .animated-image {
        width: 100%;
        height: auto;
        transition: transform 0.5s ease-in-out;
    }

    .banner-thumb:hover .animated-image {
        transform: scale(1.1); /* Zoom in */
    }

    .zoom-in-out-box {
        margin: 15%;
        animation: up-down-move 4s ease-in-out infinite; /* Slower and smoother animation */
        position: relative;
    }

    @keyframes up-down-move {
        0% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10%); /* Move up slightly */
        }
        100% {
            transform: translateY(0);
        }
    }

    /* Fade-in animation for the left-side box */
    .fade-in-left {
        opacity: 0; /* Start invisible */
        animation: fadeInLeft 3s ease-in forwards; /* Apply animation */
    }

    /* Keyframes for fade-in effect */
    @keyframes fadeInLeft {
        0% {
            opacity: 0; /* Start invisible */
            transform: translateX(-200px); /* Optional: Start slightly off-screen for a slide effect */
        }
        100% {
            opacity: 1; /* End fully visible */
            transform: translateX(0); /* End at original position */
        }
    }

    /* Initial style for .game-item */
    .game-item {
        transition: transform 0.3s ease; /* Smooth transition for the zoom effect */
    }

    /* Hover effect for .game-item */
    .game-item:hover {
        transform: scale(0.95); /* Slightly zoom out (5% smaller) */
    }
</style>


<section class="banner-section bg-img" data-background-image="{{ getImage('assets/images/frontend/banner/' . @$bannerContent->data_values->background_image, '1920x800') }}">
    <div class="container">
        <div class="row align-items-center g-3">
        <div class="col-lg-6 order-lg-1 order-2 fade-in-left">
        <div class="banner-content-slider">
                    <div class="banner-content-slider__inner">
                        @foreach ($bannerElement as $banner)
                            <div class="banner-slider-item">
                                <div class="banner-slider-item__wrapper">
                                    <div class="banner-content">
                                        <!-- <h1 class="banner-content__title">{{ __(@$banner->data_values->title) }}</h1>
                                        <p class="banner-content__desc">{{ __(@$banner->data_values->subtitle) }}</p> -->
                                        <h1 class="banner-content__title">Betting</h1>
                                        <p class="banner-content__desc">Unlock a universe of top-tier casino games and exclusive off-market adventures.</p>
                                        <div class="banner-content__button">
                                            <a href="{{ url(@$banner->data_values->button_url) }}" class="btn btn--gradient">{{ __(@$banner->data_values->button_name) }}</a>
                                        </div>
                                    </div>
                                    <div class="banner-image">
                                        <!-- <img src="{{ getImage('assets/images/frontend/banner/' . @$banner->data_values->image, '185x215') }}" alt="@lang('image')"> -->
                                        <div class="banner-image">
                                       <img src="assets/images/frontend/banner/1721638267.png" alt="@lang('image')">
                                            </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-2 order-1">
                <div class="zoom-in-out-box">
                    <img src="{{ getImage('assets/images/frontend/banner/' . @$bannerContent->data_values->image, '670x675') }}" alt="@lang('image')">
                </div>
            </div>
        </div>
    </div>
</section>
