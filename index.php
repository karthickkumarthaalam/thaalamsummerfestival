<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Thaalam Summer Festival</title>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-R8MGX2H3KC"></script>
    <script src="https://static.zohocdn.com/backstage/v1.0/javascript/ticket-widget/v1.3/register-widget.min.js" defer></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-R8MGX2H3KC');
    </script>

    <!-- Head Css -->
    <?php include 'php/css.php'; ?>
    <link rel='stylesheet' href='https://static.zohocdn.com/backstage/v1.0/styles/ticket-widget/v1.3/register-widget.min.css'>

</head>

<body class="custom-cursor">
    <!-- Preloader Secton -->
    <?php include 'php/preloader.php'; ?>
    <!-- Preloader Secton End -->

    <div class="page-wrapper">

        <!-- Main Header Start -->
        <?php include 'php/header.php'; ?>
        <!-- Main Header End -->

        <!-- Main Slider Start -->
        <section class="main-slider" style="z-index:1;">
            <div class="main-slider__carousel owl-carousel owl-theme" id="banner-slider">
            </div>
        </section>
        <!--Main Slider Start -->
        <!-- <section class="brand-carousel">
            <div class="carousel-wrapper">
                <button class="carousel-arrow left-arrow" aria-label="Previous">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="#333">
                        <path d="M15 18l-6-6 6-6" />
                    </svg>
                </button>

                <div class="carousel-container">
                    <div class="carousel-track">
                        <div class="carousel-item">
                            <img src="assets/img/home/event-logo/001.png" alt="Brand Logo" width="100" height="100">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/home/event-logo/002.png" alt="Brand Logo" width="100" height="100">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/home/event-logo/003.png" alt="Brand Logo" width="100" height="100">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/home/event-logo/004.png" alt="Brand Logo" width="100" height="100">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/home/event-logo/005.png" alt="Brand Logo" width="100" height="100">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/home/event-logo/006.png" alt="Brand Logo" width="100" height="100">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/home/event-logo/007.png" alt="Brand Logo" width="100" height="100">
                        </div>
                    </div>
                </div>

                <button class="carousel-arrow right-arrow" aria-label="Next">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="#333">
                        <path d="M9 6l6 6-6 6" />
                    </svg>
                </button>
            </div>
        </section> -->

        <!--Event Countdown Section Start-->
        <section class="event-countdown position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" style="display: flex; align-items: center; justify-content: center;">
                        <div class="event-countdown__inner">
                            <div class="event-countdown__content">
                                <h2 class="event-countdown__title wow fadeInUp" data-wow-delay="300ms" data-key="yuvan_event_title"><img
                                        src="assets/img/home/rock.png" alt=""> Upcoming Festiaval:
                                    <span>Thaalam Festival Reloaded: Night Vibes</span>
                                </h2>
                                <p class="event-countdown__text wow fadeInUp" data-wow-delay="500ms" data-key="yuvan_event_desc">🎤 Don't miss the
                                    electrifying performance by Yuvan on
                                    <strong>29 Aug 2025</strong> at <strong>07:15 PM</strong>!
                                </p>
                            </div>
                            <div class="event-countdown__timer">
                                <div class="countdown-box wow fadeInUp" data-wow-delay="700ms">
                                    <div class="icon">📆</div>
                                    <span class="countdown-number" id="days">00</span>
                                    <span class="countdown-label" data-key="countdown.days">Days</span>
                                </div>
                                <div class="countdown-box wow fadeInUp" data-wow-delay="900ms">
                                    <div class="icon">⏰</div>
                                    <span class="countdown-number" id="hours">00</span>
                                    <span class="countdown-label" data-key="countdown.hours">Hours</span>
                                </div>
                                <div class="countdown-box wow fadeInUp" data-wow-delay="1100ms">
                                    <div class="icon">🕒</div>
                                    <span class="countdown-number" id="minutes">00</span>
                                    <span class="countdown-label" data-key="countdown.minutes">Minutes</span>
                                </div>
                                <div class="countdown-box wow fadeInUp" data-wow-delay="1300ms">
                                    <div class="icon">⏳</div>
                                    <span class="countdown-number" id="seconds">00</span>
                                    <span class="countdown-label" data-key="countdown.seconds">Seconds</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="doodle-gif mbl-v-h">
                    <img src="assets/img/vector-gif/Video1.gif" alt="Doodle Animation">
                </div>
            </div>
        </section>

        <!--Event Countdown Section End-->

        <!--Team Two Start -->
        <section class="team-two position-relative">
            <div class="team-two__shape-1 float-bob-y mbl-v-h">
                <img src="assets/images/shapes/team-two-shape-1.png" alt="">
            </div>
            <div class="team-two__shape-2 float-bob-x mbl-v-h">
                <img src="assets/images/shapes/team-two-shape-2.png" alt="">
            </div>
            <div class="doodle-gif2 mbl-v-h">
                <img src="assets/img/vector-gif/vid3.1.gif" alt="Doodle Animation">
            </div>
            <div class="container">
                <div class="section-title-two text-left sec-title-animation animation-style2">
                    <div class="section-title-two__tagline-box">
                        <div class="section-title-two__tagline-shape wow fadeInUp" data-wow-delay="300ms">
                            <img src="assets/img/home/rock.png" alt="">
                        </div>
                        <span class="section-title-two__tagline wow fadeInUp" data-wow-delay="400ms" data-key="explore_artist">Explore
                            Artists</span>
                    </div>
                    <h2 class="section-title-two__title title-animation wow fadeInUp" data-wow-delay="600ms" data-key="discover_stars">Discover
                        the <br>
                        Stars Lighting Up <span>Our Stage</span>
                    </h2>
                </div>
                <div class="team-two__carousel owl-theme owl-carousel" id="artist-slider">
                </div>
            </div>
        </section>
        <!--Team Two End -->
        <section class="trailer-section">
            <div class="section-title-three text-center sec-title-animation animation-style2">
                <p class="section-title-two__title title-animation wow fadeInRight" data-wow-delay="100ms" data-key="trailer-title">Echoes of the Crowd </p>
                <p class="trailer-sub__title title-animation wow  fadeInLeft" data-wow-delay="100ms" data-key="trailer-content">Catch the standout performances and unforgettable scenes from this year’s festival.<br> Watch now on YouTube and feel the vibe all over again!</p>
            </div>
            <div class="video-frame-wrapper wow slideInUp" data-wow-delay="100ms" data-wow-duration="2500ms">
                <iframe width="65%" height="540" class="wow " data-wow-delay="1200ms"
                    src="https://www.youtube.com/embed/fg8azfXkqaU"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </section>



        <!--Newsletter Two Start -->
        <!-- <?php include 'php/cta.php'; ?> -->
        <!--Newsletter Two End -->

        <!--Counter Two Start -->
        <section class="counter-two position-relative" style="background: url(/assets/img/home/background.jpg) no-repeat center center / cover;">
            <div class="section-title-two text-center sec-title-animation animation-style2">
                <p class="section-title-two__title title-animation wow fadeInUp" data-wow-delay="400ms" data-key="media_partner">Media
                    <span>Partner</span>
                </p>
            </div>
            <div style="display:flex; align-items: center; justify-content: center; height:20vh">
                <h1 data-key="coming_soon">Coming Soon ...</h1>
            </div>
            <!-- <div class="counter-two__wrap">
                <ul class="list-unstyled counter-two__list marquee_mode">
                    <li>
                        <img src="assets/img/home/slide/sponsor/Image-11.png" alt="">
                    </li>
                    <li>
                        <img src="assets/img/home/slide/sponsor/Image-12.png" alt="">
                    </li>
                    <li>
                        <img src="assets/img/home/slide/sponsor/Image-13.png" alt="">
                    </li>
                    <li>
                        <img src="assets/img/home/slide/sponsor/Image-14.png" alt="">
                    </li>
                    <li>
                        <img src="assets/img/home/slide/sponsor/Image15.png" alt="">
                    </li>
                </ul>
            </div> -->
            <div class="doodle-gif3 mbl-v-h">
                <img src="assets/img/vector-gif/Video2.gif" alt="Doodle Animation">
            </div>
        </section>
        <!--Counter Two End -->

        <div class="modal fade" id="lineupModal" tabindex="-1" aria-labelledby="lineupModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="lineupModalLabel"><i class="fas fa-calendar-day"></i> Event Lineup</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <section class="show-lineup-tabs">
                            <div class="container">
                                <div class="tabs">
                                    <ul class="tab-titles"></ul>
                                    <div class="tab-content"></div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <!--Site Footer Start-->
        <?php include 'php/footer.php'; ?>
        <!--Site Footer End-->

    </div><!-- /.page-wrapper -->


    <!-- Mobile Nav Section -->
    <?php include 'php/mobile-nav.php'; ?>
    <!-- Mobile Nav Section End -->

    <!-- Scripts Links -->
    <?php include 'php/script.php'; ?>

    <!-- Scripts Links End -->
    <script src="assets/js/show-lineup.js"></script>
    <script>
        window.$zoho = window.$zoho || {};
        $zoho.salesiq = $zoho.salesiq || {
            ready: function() {}
        }
    </script>
    <!-- <script id="zsiqscript" src="https://salesiq.zohopublic.in/widget?wc=siq02187e97dbb4c2cdac6e9635cee9876fd40ed44c6918afd4adda090828b2a340" defer></script> -->
    <script>
        // Define keyframes dynamically
        document.addEventListener('DOMContentLoaded', () => {
            const track = document.querySelector('.carousel-track');
            const items = document.querySelectorAll('.carousel-item');
            const leftArrow = document.querySelector('.left-arrow');
            const rightArrow = document.querySelector('.right-arrow');

            const itemWidth = items[0].offsetWidth + parseInt(getComputedStyle(items[0]).marginRight) * 2;
            let currentPosition = 0;

            // Clone items for seamless looping
            items.forEach(item => {
                const clone = item.cloneNode(true);
                track.appendChild(clone);
            });

            const totalItems = document.querySelectorAll('.carousel-item').length;

            function moveSlider(direction) {
                if (direction === 'next') {
                    currentPosition++;
                    if (currentPosition >= totalItems / 2 + 1) {
                        track.style.transition = 'none';
                        currentPosition = 1;
                        track.style.transform = `translateX(-${currentPosition * itemWidth}px)`;
                        track.offsetHeight;
                        track.style.transition = 'transform 0.6s ease';
                    } else {
                        track.style.transform = `translateX(-${currentPosition * itemWidth}px)`;
                    }
                }

                if (direction === 'prev') {
                    currentPosition--;
                    if (currentPosition < 0) {
                        // Instantly jump to duplicated end without visible transition
                        track.style.transition = 'none';
                        currentPosition = totalItems / 2 - 1;
                        track.style.transform = `translateX(-${currentPosition * itemWidth}px)`;
                        track.offsetHeight;
                        track.style.transition = 'transform 0.6s ease';
                    } else {
                        track.style.transform = `translateX(-${currentPosition * itemWidth}px)`;
                    }
                }
            }

            rightArrow.addEventListener('click', () => {
                moveSlider('next');
            });

            leftArrow.addEventListener('click', () => {
                moveSlider('prev');
            });

            // Recalculate widths on resize
            window.addEventListener('resize', () => {
                const newItemWidth = items[0].offsetWidth + parseInt(getComputedStyle(items[0]).marginRight) * 2;
                if (newItemWidth !== itemWidth) {
                    currentPosition = 0;
                    track.style.transition = 'none';
                    track.style.transform = `translateX(0)`;
                }
            });
        });


        const bannerSlider = document.getElementById("banner-slider");
        const artistSlider = document.getElementById("artist-slider");

        function getLanguage() {
            const selectedLanguage = localStorage.getItem("selectedLang") || "EN"
            let language;
            switch (selectedLanguage) {
                case "EN":
                    language = "English"
                    break;
                case "DE":
                    language = "German"
                    break;
                case "FR":
                    language = "French"
                    break;
                case "TA":
                    language = "Tamil"
                    break;
                default:
                    language = "English"
                    break;
            }
            return language;
        }

        function loadBanners() {
            const language = getLanguage();
            fetch(`https://api.demoview.ch/summer-festival/api/banner?language=${language}`)
                .then(response => response.json())
                .then(result => {
                    const banners = result.data.data;
                    banners.forEach(banner => {
                        if (banner.status === "active") {
                            const item = document.createElement("div");
                            item.className = "item";

                            const imageUrl = `https://api.demoview.ch/summer-festival/api/${banner.image}`;

                            item.innerHTML = `
                              <div class="main-slider__bg">
                                    <img src="${imageUrl}" alt="${banner.title}" class="main-slider__img">
                              </div>
                             <div class="container">
                                <div class="main-slider__content">
                                   <h2 class="main-slider__title">${banner.title}</h2>
                                </div>
                            </div>
                        `;

                            bannerSlider.appendChild(item);
                        }
                    })

                    if ($(".main-slider__carousel").hasClass("owl-loaded")) {
                        $(".main-slider__carousel").trigger("destroy.owl.carousel").removeClass("owl-loaded owl-hidden").find(".owl-stage-outer").children().unwrap();
                    }

                    $(".main-slider__carousel").owlCarousel({
                        loop: true,
                        margin: 0,
                        nav: false,
                        items: 1,
                        autoplay: true,
                        autoplayTimeout: 5000,
                        animateOut: 'fadeOut',
                        animateIn: 'fadeIn'
                    });
                })
                .catch(error => console.error("Error fetching banners: ", error));
        }

        window.loadBanners = loadBanners;

        loadBanners();

        function fetchArtist() {
            const language = getLanguage();
            fetch(`https://api.demoview.ch/summer-festival/api/artist?status=active&language=${language}`)
                .then(response => response.json())
                .then(result => {
                    const aritstList = result?.data?.data;
                    artistSlider.innerHTML = "";
                    aritstList.forEach(artist => {
                        const nameParts = artist.artist_name.split(" ");
                        const firstName = nameParts[0];
                        const restName = nameParts.length > 1 ? nameParts.slice(1).join(" ") : "";

                        const artistItem = document.createElement("div");
                        artistItem.className = "item";

                        artistItem.innerHTML = `
                            <div class="team-two__single">
                                <div class="team-two__img-1">    
                                    <img src="https://api.demoview.ch/summer-festival/api/${artist?.image}" alt="${artist?.artist_name}" />
                                </div>
                                <div class="team-two__arrow">
                                    <a href="/artist-details?id=${artist.id}" target="_blank"><span class="icon-circle-left"></span></a>
                                </div>
                                <div class="team-two__content">
                                    <p class="team-two__sub-title"></p>
                                    <h3 class="team-two__name">
                                     
                                    </h3>
                                </div>
                                <div class="team-two__social-box">
                                    <div class="team-two__plus">
                                        <i><span class="icon-plus"></span></i>
                                    </div>
                                    <div class="team-two__social-list">
                                        ${artist?.linkedin_url ? `<a href="${artist?.linkedin_url}" target="_blank"><i class="fab fa-linkedin-in"></i></a>` : ''}
                                        ${artist?.pinterest_url ? `<a href="${artist?.pinterest_url}" target="_blank"><i class="fab fa-pinterest-p"></i></a>` : ''}
                                        ${artist?.facebook_url ? `<a href="${artist?.facebook_url}" target="_blank"><i class="fab fa-facebook-f"></i></a>` : ''}
                                        ${artist?.instagram_url ? `<a href="${artist?.instagram_url}" target="_blank"><i class="fab fa-instagram"></i></a>` : ''}
                                    </div>
                                </div>
                            </div>
                    `;
                        artistSlider.appendChild(artistItem);
                    });

                    if ($("#artist-slider").hasClass("owl-loaded")) {
                        $("#artist-slider").trigger('destroy.owl.carousel');
                        $("#artist-slider").html(artistSlider.innerHTML);
                    }

                    $("#artist-slider").owlCarousel({
                        loop: true,
                        margin: 30,
                        nav: true,
                        dots: false,
                        autoplay: true,
                        navText: [
                            '<span class="custom-prev-arrow"><i class="fas icon-arrow-left-up"></i></span>',
                            '<span class="custom-next-arrow"><i class="fas icon-arrow-up-right-2"></i></span>'
                        ],
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
                })
        }

        fetchArtist();

        const eventDate = new Date("August 29, 2025 19:15:00").getTime();

        const countdownInterval = setInterval(() => {
            const now = new Date().getTime();
            const timeLeft = eventDate - now;

            if (timeLeft < 0) {
                clearInterval(countdownInterval);
                document.querySelector(".event-countdown__timer").innerHTML = "<p>🎉 Event Started!</p>";
                return;
            }

            const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

            document.getElementById("days").textContent = days.toString().padStart(2, "0");
            document.getElementById("hours").textContent = hours.toString().padStart(2, "0");
            document.getElementById("minutes").textContent = minutes.toString().padStart(2, "0");
            document.getElementById("seconds").textContent = seconds.toString().padStart(2, "0");
        }, 1000);
    </script>
</body>

</html>