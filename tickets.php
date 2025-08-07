<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thaalam Summer Festival - Tickets</title>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KLC938NV');
    </script>
    <!-- End Google Tag Manager -->

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

    <?php include 'php/css.php' ?>
    <link rel='stylesheet' href='https://static.zohocdn.com/backstage/v1.0/styles/ticket-widget/v1.3/register-widget.min.css'>
    <style>
        /* Ticket Section Styles */

        .tickets-section {
            padding: 50px 20px;
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        /* Tabs */
        .ticket-tabs {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 18px;
            margin-bottom: 50px;
        }

        .ticket-tab {
            padding: 16px 34px;
            background: #181818;
            color: #fff;
            border-radius: 40px;
            font-weight: 800;
            cursor: pointer;
            font-size: 20px;
            letter-spacing: 1.2px;
            border: 2px solid #2a2a2a;
            text-transform: uppercase;
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
            transition: background 0.3s ease;
        }

        .ticket-tab.active {
            background: linear-gradient(135deg, #f60001, #ff3d00);
            border: 3px solid #ffffff;
            color: #fff;
            box-shadow: 0 0 16px rgba(255, 61, 0, 0.8);
        }

        /* Ticket Tab Content */
        .ticket-tab-content {
            display: none;
        }

        .ticket-tab-content.active {
            display: block;
        }

        /* Ticket Row Styles */
        .ticket-row {
            padding: 40px 36px;
            border-radius: 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            box-shadow: 0 16px 50px rgba(0, 0, 0, 0.25);
            margin-bottom: 30px;
            transition: all 0.35s ease;
            position: relative;
            overflow: hidden;
        }

        .ticket-row::after {
            content: '';
            position: absolute;
            top: -60%;
            left: -60%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle at center, rgba(255, 255, 255, 0.05) 0%, transparent 70%);
            opacity: 0;
            transition: opacity 0.5s ease;
            pointer-events: none;
        }

        .ticket-row:hover {
            transform: translateY(-3px) scale(1.015);
            box-shadow: 0 22px 70px rgba(0, 0, 0, 0.35);
        }

        .ticket-row:hover::after {
            opacity: 1;
        }

        .ticket-info {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .day-date-container {
            display: flex;
            gap: 18px;
            align-items: center;
        }

        .day-label {
            padding: 12px 28px;
            border-radius: 50px;
            font-weight: 900;
            font-size: 24px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .date-label {
            font-size: 22px;
            font-weight: 800;
            color: #fff;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
        }

        .price-container {
            display: flex;
            gap: 34px;
            flex-wrap: wrap;
            align-items: center;
        }

        .price {
            font-size: 34px;
            font-weight: 900;
            text-shadow: 0 1px 6px rgba(0, 0, 0, 0.5);
            color: #fff;
        }

        .price small {
            display: block;
            font-size: 18px;
            font-weight: 700;
            opacity: 0.9;
        }

        /* Color Schemes */

        .day-pass-bg {
            background: linear-gradient(135deg, #0099ff, #00c6ff);
            color: #fff;
            border: 3px solid #00c6ff;
        }

        .day-pass-bg .day-label {
            background: #fff;
            color: #0099ff;
        }

        .threedays-bg {
            background: linear-gradient(135deg, #ff6f00, #ff9e00);
            color: #fff;
            border: 3px solid #ff9e00;
        }

        .threedays-bg .day-label {
            background: #fff;
            color: #ff6f00;
        }

        .vip-bg {
            background: linear-gradient(135deg, #2e003e, #8500b3);
            border: 3px solid #f8e45c;
            box-shadow: 0 0 50px rgba(248, 228, 92, 0.6);
            color: #f8e45c;
        }

        .vip-bg .day-label {
            background: #f8e45c;
            color: #2e003e;
            font-size: 24px;
            font-weight: 900;
            padding: 12px 26px;
            letter-spacing: 1px;
        }

        .vip-bg .price {
            color: #ffffff;
            font-size: 34px;
            text-shadow: 0 0 14px rgba(255, 255, 255, 0.8);
        }

        .vip-bg .price small {
            color: #f8e45c;
        }

        .ticket-tab-content {
            display: none;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.4s ease, transform 0.4s ease;
        }

        .ticket-tab-content.active {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }

        /* Mobile Responsive */

        @media (max-width: 768px) {
            .ticket-tabs {
                flex-direction: column;
                gap: 14px;
            }

            .ticket-tab {
                width: 100%;
                text-align: center;
                font-size: 18px;
            }

            .ticket-row {
                flex-direction: column;
                align-items: flex-start;
                gap: 24px;
                padding: 30px 20px;
            }

            .price-container {
                flex-direction: row;
                justify-content: flex-start;
                gap: 20px;
                width: 100%;
                flex-wrap: wrap;
            }

            .price {
                font-size: 26px;
            }

            .day-label {
                font-size: 22px;
            }

            .date-label {
                font-size: 20px;
            }
        }

        .book-now-btn {
            padding: 16px 34px;
            background: #181818;
            color: #fff;
            border-radius: 40px;
            font-weight: 800;
            cursor: pointer;
            font-size: 20px;
            letter-spacing: 1.2px;
            border: 2px solid #2a2a2a;
            text-transform: uppercase;
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
            transition: background 0.3s ease;
        }

        /* .book-now-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        } */
    </style>
</head>

<body class="custom-cursor">

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KLC938NV"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager -->

    <!-- Preloader Secton -->
    <?php include 'php/preloader.php'; ?>
    <!-- Preloader Secton End -->


    <div class="page-wrapper">

        <?php include 'php/header.php'; ?>

        <section class="page-header">
            <div class="container">
                <div class="page-header__inner">
                    <h2 data-key="tickets_title">Tickets</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="/index" data-key="home">Home</a></li>
                            <li><span>//</span></li>
                            <li data-key="tickets_title">Tickets</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="ticket-section" style="background: url(/assets/img/home/background.jpg) no-repeat center center / cover;">
            <div class="container tickets-section">

                <div class="ticket-tabs">
                    <button class="ticket-tab active" data-tab="allDays" data-key="all_days">All Days</button>
                    <button class="ticket-tab" data-tab="earlyBird" data-key="early_bird">Early Bird Tickets</button>
                    <button class="ticket-tab" data-tab="normalTickets" data-key="normal_tickets">Normal Tickets</button>
                    <button class="ticket-tab" data-tab="vipTickets" data-key="vip_tickets">VIP Tickets</button>
                    <button id="zbs-register-widget-btn" class="ticket-tab book-now-btn">Book Now</button>
                </div>

                <div id="allDays" class="ticket-tab-content active">

                    <!-- 3 Days Pass -->
                    <div class="ticket-row threedays-bg">
                        <div class="ticket-info">
                            <div class="day-date-container">
                                <span class="day-label">3 Days Pass</span>
                            </div>
                        </div>
                        <div class="price-container">
                            <div class="price">CHF 279.00 <small>Early Bird</small></div>
                            <div class="price">CHF 379.00 <small>Normal</small></div>
                        </div>
                    </div>

                    <!-- Day 1 -->
                    <div class="ticket-row day-pass-bg">
                        <div class="ticket-info">
                            <div class="day-date-container">
                                <span class="day-label">Day 1 Pass</span>
                                <span class="date-label">29/08/2025</span>
                            </div>
                        </div>
                        <div class="price-container">
                            <div class="price">CHF 129.00 <small>Early Bird</small></div>
                            <div class="price">CHF 159.00 <small>Normal</small></div>
                        </div>
                    </div>

                    <!-- Day 2 -->
                    <div class="ticket-row day-pass-bg">
                        <div class="ticket-info">
                            <div class="day-date-container">
                                <span class="day-label">Day 2 Pass</span>
                                <span class="date-label">30/08/2025</span>
                            </div>
                        </div>
                        <div class="price-container">
                            <div class="price">CHF 149.00 <small>Early Bird</small></div>
                            <div class="price">CHF 179.00 <small>Normal</small></div>
                        </div>
                    </div>

                    <!-- Day 3 -->
                    <div class="ticket-row day-pass-bg">
                        <div class="ticket-info">
                            <div class="day-date-container">
                                <span class="day-label">Day 3 Pass</span>
                                <span class="date-label">31/08/2025</span>
                            </div>
                        </div>
                        <div class="price-container">
                            <div class="price">CHF 139.00 <small>Early Bird</small></div>
                            <div class="price">CHF 169.00 <small>Normal</small></div>
                        </div>
                    </div>

                    <!-- VIP 3 Days -->
                    <div class="ticket-row vip-bg">
                        <div class="ticket-info">
                            <div class="day-date-container">
                                <span class="day-label">VIP 3 Days</span>
                            </div>
                        </div>
                        <div class="price-container">
                            <div class="price">CHF 679.00 <small>Early Bird</small></div>
                            <div class="price">CHF 779.00 <small>Normal</small></div>
                        </div>
                    </div>

                    <!-- Any Day VIP -->
                    <div class="ticket-row vip-bg">
                        <div class="ticket-info">
                            <div class="day-date-container">
                                <span class="day-label">Any Day VIP</span>
                            </div>
                        </div>
                        <div class="price-container">
                            <div class="price">CHF 279.00 <small>Early Bird</small></div>
                            <div class="price">CHF 329.00 <small>Normal</small></div>
                        </div>
                    </div>

                </div>

                <div id="earlyBird" class="ticket-tab-content">


                    <!-- 3 Days Pass -->
                    <div class="ticket-row threedays-bg">
                        <div class="ticket-info">
                            <div class="day-date-container">
                                <span class="day-label">3 Days Pass</span>
                            </div>
                        </div>
                        <div class="price-container">
                            <div class="price">CHF 279.00 <small>Early Bird</small></div>
                        </div>
                    </div>

                    <!-- Day 1 -->
                    <div class="ticket-row day-pass-bg">
                        <div class="ticket-info">
                            <div class="day-date-container">
                                <span class="day-label">Day 1 Pass</span>
                                <span class="date-label">29/08/2025</span>
                            </div>
                        </div>
                        <div class="price-container">
                            <div class="price">CHF 129.00 <small>Early Bird</small></div>
                        </div>
                    </div>

                    <!-- Day 2 -->
                    <div class="ticket-row day-pass-bg">
                        <div class="ticket-info">
                            <div class="day-date-container">
                                <span class="day-label">Day 2 Pass</span>
                                <span class="date-label">30/08/2025</span>
                            </div>
                        </div>
                        <div class="price-container">
                            <div class="price">CHF 149.00 <small>Early Bird</small></div>
                        </div>
                    </div>

                    <!-- Day 3 -->
                    <div class="ticket-row day-pass-bg">
                        <div class="ticket-info">
                            <div class="day-date-container">
                                <span class="day-label">Day 3 Pass</span>
                                <span class="date-label">31/08/2025</span>
                            </div>
                        </div>
                        <div class="price-container">
                            <div class="price">CHF 139.00 <small>Early Bird</small></div>
                        </div>
                    </div>

                    <!-- VIP 3 Days -->
                    <div class="ticket-row vip-bg">
                        <div class="ticket-info">
                            <div class="day-date-container">
                                <span class="day-label">VIP 3 Days</span>
                            </div>
                        </div>
                        <div class="price-container">
                            <div class="price">CHF 679.00 <small>Early Bird</small></div>
                        </div>
                    </div>

                    <!-- Any Day VIP -->
                    <div class="ticket-row vip-bg">
                        <div class="ticket-info">
                            <div class="day-date-container">
                                <span class="day-label">Any Day VIP</span>
                            </div>
                        </div>
                        <div class="price-container">
                            <div class="price">CHF 279.00 <small>Early Bird</small></div>
                        </div>
                    </div>

                </div>

                <div id="normalTickets" class="ticket-tab-content">

                    <!-- 3 Days Pass -->
                    <div class="ticket-row threedays-bg">
                        <div class="ticket-info">
                            <div class="day-date-container">
                                <span class="day-label">3 Days Pass</span>
                            </div>
                        </div>
                        <div class="price-container">
                            <div class="price">CHF 379.00 <small>Normal</small></div>
                        </div>
                    </div>

                    <!-- Day 1 -->
                    <div class="ticket-row day-pass-bg">
                        <div class="ticket-info">
                            <div class="day-date-container">
                                <span class="day-label">Day 1 Pass</span>
                                <span class="date-label">29/08/2025</span>
                            </div>
                        </div>
                        <div class="price-container">
                            <div class="price">CHF 159.00 <small>Normal</small></div>
                        </div>
                    </div>

                    <!-- Day 2 -->
                    <div class="ticket-row day-pass-bg">
                        <div class="ticket-info">
                            <div class="day-date-container">
                                <span class="day-label">Day 2 Pass</span>
                                <span class="date-label">30/08/2025</span>
                            </div>
                        </div>
                        <div class="price-container">
                            <div class="price">CHF 179.00 <small>Normal</small></div>
                        </div>
                    </div>

                    <!-- Day 3 -->
                    <div class="ticket-row day-pass-bg">
                        <div class="ticket-info">
                            <div class="day-date-container">
                                <span class="day-label">Day 3 Pass</span>
                                <span class="date-label">31/08/2025</span>
                            </div>
                        </div>
                        <div class="price-container">
                            <div class="price">CHF 169.00 <small>Normal</small></div>
                        </div>
                    </div>

                    <!-- VIP 3 Days -->
                    <div class="ticket-row vip-bg">
                        <div class="ticket-info">
                            <div class="day-date-container">
                                <span class="day-label">VIP 3 Days</span>
                            </div>
                        </div>
                        <div class="price-container">
                            <div class="price">CHF 779.00 <small>Normal</small></div>
                        </div>
                    </div>

                    <!-- Any Day VIP -->
                    <div class="ticket-row vip-bg">
                        <div class="ticket-info">
                            <div class="day-date-container">
                                <span class="day-label">Any Day VIP</span>
                            </div>
                        </div>
                        <div class="price-container">
                            <div class="price">CHF 329.00 <small>Normal</small></div>
                        </div>
                    </div>

                </div>

                <div id="vipTickets" class="ticket-tab-content">

                    <!-- VIP 3 Days -->
                    <div class="ticket-row vip-bg">
                        <div class="ticket-info">
                            <div class="day-date-container">
                                <span class="day-label">VIP 3 Days</span>
                            </div>
                        </div>
                        <div class="price-container">
                            <div class="price">CHF 679.00 <small>Early Bird</small></div>
                            <div class="price">CHF 779.00 <small>Normal</small></div>
                        </div>
                    </div>

                    <!-- Any Day VIP -->
                    <div class="ticket-row vip-bg">
                        <div class="ticket-info">
                            <div class="day-date-container">
                                <span class="day-label">Any Day VIP</span>
                            </div>
                        </div>
                        <div class="price-container">
                            <div class="price">CHF 279.00 <small>Early Bird</small></div>
                            <div class="price">CHF 329.00 <small>Normal</small></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!--Site Footer Start-->
        <?php include 'php/footer.php'; ?>
        <!--Site Footer End-->


    </div>

    <!-- Mobile Nav Section -->
    <?php include 'php/mobile-nav.php'; ?>
    <!-- Mobile Nav Section End -->

    <!-- Scripts Links -->
    <?php include 'php/script.php'; ?>
    <!-- Scripts Links End -->
    <!-- Load Zoho Widget JS -->

    <script>
        function initZohoWidget() {
            if (typeof window.ZBSCheckOutWidget !== 'undefined') {
                try {
                    window.ZBSCheckOutWidget._createWidget({
                        eventUrl: "https://thaalamticket.zohobackstage.eu/embed/ThaalamSummerFestival/buyTickets",
                        modal: true,
                        clickableElements: ["#zbs-register-widget-btn",
                            "#zbs-register-widget-btn-mobile",
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
            const tabButtons = document.querySelectorAll(".ticket-tab");
            const tabContents = document.querySelectorAll(".ticket-tab-content");

            tabButtons.forEach((button) => {
                button.addEventListener("click", () => {
                    const target = button.getAttribute("data-tab");
                    if (!target) return;

                    tabButtons.forEach((btn) => btn.classList.remove("active"));
                    button.classList.add("active");

                    tabContents.forEach((content) => {
                        content.classList.remove("active");
                        content.style.display = "none";
                    });

                    const targetContent = document.getElementById(target);
                    if (targetContent) {
                        targetContent.style.display = "block";
                        void targetContent.offsetWidth;
                        targetContent.classList.add("active");
                    }
                });
            });

            initZohoWidget();
        });
    </script>

</body>

</html>