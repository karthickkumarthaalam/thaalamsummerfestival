<header class="main-header-two">
    <div class="main-menu__top">
        <div class="container">
            <div class="main-menu__top-inner">
                <div class="top-events-offers">
                    <marquee behavior="scroll" direction="left" class="marquee-style" id="offers-marquee">
                    </marquee>
                </div>
            </div>
        </div>
    </div>
    <style>
        .thm-btn.tickets-btn {
            background-color: var(--fistudy-black);
            color: var(--fistudy-white);
            padding: 11px 30px;
            border-radius: 50px;
            font-family: var(--fistudy-font);
            font-size: 16px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            border: 4px solid var(--fistudy-primary);
            transition: all 0.35s ease;
            display: inline-block;
            position: relative;
            overflow: hidden;
        }

        .thm-btn.tickets-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Mobile Responsive Styling */
        @media (max-width: 767px) {
            .thm-btn.tickets-btn {
                padding: 4px 12px;
                font-size: 10px;
                letter-spacing: 0.5px;
                border-radius: 40px;
                border: 2px solid var(--fistudy-primary);

            }

            .thm-btn.tickets-btn:hover {
                transform: translateY(-1px);
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }
        }
    </style>
    <nav class="main-menu main-menu-two">
        <div class="main-menu-two__wrapper">

            <div class="mobile-header d-md-none">
                <div>
                    <a href="/index">
                        <img src="assets/img/logo/thalam-logo.png" alt="Thaalam Logo" class="mobile-logo">
                    </a>
                </div>

                <div class="mobile-header-right">
                    <div class="language-selector">
                        <button class="btn btn-light dropdown-toggle d-flex align-items-center"
                            type="button" id="languageDropdown" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fas fa-globe pe-2"></i>
                            <span id="selected-lang">EN</span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                            <li><a class="dropdown-item" href="#">EN</a></li>
                            <li><a class="dropdown-item" href="#">DE</a></li>
                            <li><a class="dropdown-item" href="#">FR</a></li>
                        </ul>
                    </div>

                    <a href="/tickets" style="font-size: 28px; color: #000;"><i class='fas fa-ticket-alt'></i></a>
                    <a href="#" id="zbs-register-widget-btn-mobile" class="thm-btn tickets-btn" data-key="book_now"></a>
                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                </div>
            </div>

            <div class="search-bar-div">
                <div class="banner-one__category-search-box">
                    <div class="banner-one__category-search-inner">
                        <!-- <form class="banner-one__category-form d-none d-md-block">
                            <div class="banner-one__category-input">
                                <input type="search" placeholder="Find Your Events" data-key-placeholder="find_events">
                            </div>
                            <button type="submit" class="banner-one__category-btn"><span
                                    class="icon-search"></span></button>
                        </form> -->
                        <div class="language-selector d-none d-md-block">
                            <button class="btn btn-light dropdown-toggle d-flex align-items-center"
                                type="button" id="languageDropdown" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fas fa-globe pe-2"></i>
                                <span id="selected-lang">EN</span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                                <li><a class="dropdown-item" href="#">EN</a></li>
                                <li><a class="dropdown-item" href="#">DE</a></li>
                                <li><a class="dropdown-item" href="#">FR</a></li>
                            </ul>
                        </div>


                        <div class="main-menu-two__right ms-3 pe-3">
                            <div class="main-menu__btn-box-2">
                                <a href="/tickets" class="thm-btn tickets-btn" data-key="tickets">Tickets</a>
                                <a href="#" id="zbs-register-widget-btn-desktop" class="thm-btn tickets-btn" data-key="book_now"></a>
                            </div>
                            <a href="#" class="mobile-nav__toggler px-3"><i class="fa fa-bars"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="main-menu-two__wrapper-inner">
                    <div class="main-menu-two__left">
                        <div class="main-menu-two__logo d-none d-md-block">
                            <a href="/index"><img src="assets/img/logo/thalam-logo.png" alt=""></a>
                        </div>

                    </div>
                    <div class="main-menu-two__main-menu-box">
                        <!-- <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>  -->
                        <ul class="main-menu__list">

                            <li>
                                <a href="/index">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-home pe-2"></i>
                                        <p data-key="home">Home</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/about-us">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-info-circle pe-2"></i>
                                        <p data-key="about_us">About Us</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/show-lineup">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-calendar-alt pe-2"></i>
                                        <p data-key="show_lineup">Program lineup</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/news">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-newspaper pe-2"></i>
                                        <p data-key="news">News</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/info">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-info pe-2"></i>
                                        <p data-key="info">Info</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/contact-us">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-envelope pe-2"></i>
                                        <p data-key="contact_us">Contact Us</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="main-menu-two__right">

                            <div class="main-menu-two__support-box">
                                <p class="main-menu-two__support-text" data-key="reach_us"> <span class="icon-contact"></span> Reach
                                    Us
                                </p>
                                <h5 class="main-menu-two__support-number"><a href="tel:+41435053158">+41 43 505 31 58</a></h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </nav>
</header>

<div class="stricky-header stricked-menu main-menu main-menu-two">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

<script>
    const marquee = document.getElementById("offers-marquee");

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

    if (marquee) {
        fetch(`https://api.demoview.ch/summer-festival/api/top-event-offers?status=active&language=${language}`)
            .then(response => response.json())
            .then(result => {
                const offers = result.data.data;

                const emojies = ['🎤', '🏆', '🎉', '✨', '🎊'];
                let emojiIndex = 0;

                offers.forEach(offer => {
                    const link = document.createElement("a");
                    link.href = offer.redirect_url;
                    link.target = '_blank';
                    link.className = 'offer-item';

                    const emoji = emojies[emojiIndex % emojies.length];
                    emojiIndex++;

                    link.textContent = `${emoji} ${offer.title} ${emoji}`;

                    marquee.appendChild(link);

                });

                const newMarquee = marquee.cloneNode(true);
                marquee.parentNode.replaceChild(newMarquee, marquee);
            })
            .catch(error => console.error("Error fetching offers: ", error))
    }


    function initZohoWidget() {
        if (typeof window.ZBSCheckOutWidget !== 'undefined') {
            try {
                window.ZBSCheckOutWidget._createWidget({
                    eventUrl: "https://thaalamticket.zohobackstage.eu/embed/ThaalamSummerFestival/buyTickets",
                    modal: true,
                    clickableElements: ["#zbs-register-widget-btn-mobile",
                        "#zbs-register-widget-btn-desktop",
                        ".stricky-header #zbs-register-widget-btn-mobile",
                        ".stricky-header #zbs-register-widget-btn-desktop"
                    ],
                    ticketClassIdVsSelectorMap: {},
                    skipValidation: false,
                    widgetOptions: {
                        theme: {
                            primaryButton: {
                                backgroundColor: "#FF9800",
                                textColor: "#ffffff",
                                borderColor: "#FF9800",
                            },
                            eventHeader: {
                                backgroundColor: "#0DCADF",
                                textColor: "#ffffff",
                            },
                        },
                        visibilityOptions: {
                            showEventHeader: true,
                            showCheckoutProgress: true,
                            showBSBranding: false,
                            showEventDate: true,
                            showEventVenue: true,
                            ticketClassIds: [],
                        },
                        redirectUrl: "",
                        affiliate: "",
                        promoCode: "",
                        showFillInfo: false,
                        showRegisterModalWithInfoPage: false,
                        messageContents: {
                            "lbl.closed": "closed",
                            "lbl.yet.to.start": "yet to start",
                            "lbl.sales.ended": "sales ended",
                            "lbl.unavailable": "unavailable",
                            "lbl.sold.out": "sold out",
                            "lbl.open": "Book Your Tickets",
                        },
                    },
                    onOrderComplete: function(event) {},
                    onClose: function(event) {},
                });
            } catch (e) {
                setTimeout(initZohoWidget, 1000);
            }
        } else {
            setTimeout(initZohoWidget, 500);
        }
    }

    document.addEventListener("DOMContentLoaded", function() {
        initZohoWidget();
    });
</script>