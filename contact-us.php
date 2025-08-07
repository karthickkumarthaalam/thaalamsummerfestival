<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Thaalam Summer Festival | Support & Inquiries</title>
    <meta name="description" content="Get in touch with Thaalam Summer Festival organizers for ticket inquiries, vendor opportunities, and general festival information.">
    <meta name="keywords" content="Thaalam Summer Festival contact, festival support, ticket help, vendor registration, press inquiries, customer service">
    <meta name="author" content="Thaalam Summer Festival Team">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Social Media Meta Tags -->
    <meta property="og:title" content="Contact Thaalam Summer Festival | Support & Inquiries">
    <meta property="og:description" content="Reach out to Thaalam Summer Festival organizers for ticket support, vendor opportunities, and festival information.">
    <meta property="og:image" content="https://thaalamsummerfestival.com/assets/img/logo/thalam-logo.png">
    <meta property="og:url" content="https://thaalamsummerfestival.com/contact-us">
    <meta property="og:type" content="website">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Contact Thaalam Summer Festival | Support & Inquiries">
    <meta name="twitter:description" content="Need help? Contact Thaalam Summer Festival team for ticket support, vendor opportunities and festival questions.">
    <meta name="twitter:image" content="https://thaalamsummerfestival.com/assets/img/logo/thalam-logo.png">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://thaalamsummerfestival.com/contact-us">

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

    <!-- Head Css -->
    <?php include 'php/css.php'; ?>
    <link rel='stylesheet' href='https://static.zohocdn.com/backstage/v1.0/styles/ticket-widget/v1.3/register-widget.min.css'>


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

        <!-- Main Header Start -->
        <?php include 'php/header.php'; ?>
        <!-- Main Header End -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="container">
                <div class="page-header__inner">
                    <h2 data-key="contact_us"></h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="/index" data-key="home">Home</a></li>
                            <li><span>//</span></li>
                            <li data-key="contact_us"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Contact Two Start-->
        <section class="contact-two">
            <div class="container">
                <ul class="row list-unstyled">

                    <!-- Address -->
                    <li class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="contact-two__single">
                            <div class="contact-two__icon">
                                <i class="fa fa-location"></i>
                            </div>
                            <h3 class="contact-two__title" data-key="contact_us_page.title_address">Venue Address</h3>
                            <div id="contactAddress" style="text-align: center;">

                            </div>
                        </div>
                    </li>

                    <!-- Phone Numbers -->
                    <li class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="200ms">
                        <div class="contact-two__single">
                            <div class="contact-two__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <h3 class="contact-two__title" data-key="contact_us_page.title_phone">Contact Number</h3>
                            <div id="contactNumbers"></div>
                        </div>
                    </li>

                    <!-- Emails -->
                    <li class="col-xl-4 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="300ms">
                        <div class="contact-two__single">
                            <div class="contact-two__icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <h3 class="contact-two__title" data-key="contact_us_page.title_email">Email Address</h3>
                            <div id="contactEmails"></div>
                        </div>
                    </li>

                </ul>
            </div>
        </section>
        <style>
            .tabs-buttons {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 10px;
                margin-bottom: 2rem;
            }

            .tab-btn {
                padding: 12px 24px;
                border: none;
                border-radius: 30px;
                background-color: #f0f0f0;
                color: #555;
                font-size: 16px;
                font-weight: 600;
                cursor: pointer;
                transition: all 0.3s ease;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                position: relative;
                overflow: hidden;
            }

            .tab-btn:hover {
                background-color: #e0e0e0;
                transform: translateY(-2px);
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            }

            .tab-btn.active {
                background-color: #0DCADF;
                color: white;
                box-shadow: 0 4px 12px rgba(74, 107, 255, 0.3);
            }

            .tab-btn.active:hover {
                background-color: #0DCADF;
                transform: translateY(-2px);
            }

            .tab-btn:after {
                content: "";
                position: absolute;
                top: 50%;
                left: 50%;
                width: 5px;
                height: 5px;
                background: rgba(255, 255, 255, 0.5);
                opacity: 0;
                border-radius: 100%;
                transform: scale(1, 1) translate(-50%);
                transform-origin: 50% 50%;
            }

            .tab-btn:focus:not(:active)::after {
                animation: ripple 0.6s ease-out;
            }

            @keyframes ripple {
                0% {
                    transform: scale(0, 0);
                    opacity: 0.5;
                }

                100% {
                    transform: scale(20, 20);
                    opacity: 0;
                }
            }
        </style>
        <!--Contact Two End-->

        <!--Contact Three Start-->
        <section class="contact-three">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8">
                        <div class="contact-three__right">

                            <!-- Title + Tagline -->
                            <div class="section-title-two text-center sec-title-animation animation-style1">
                                <!-- <div class="section-title-two__tagline-box">
                                    <div class="section-title-two__tagline-shape">
                                        <img src="assets/img/home/rock.png" alt="">
                                    </div>
                                    <span class="section-title-two__tagline" data-key="contact_form.tagline">Get in Touch</span>
                                </div>
                                <h2 class="section-title-two__title" data-key="contact_form.title">
                                    We’re Here to Help and Ready to Hear from You
                                </h2> -->
                            </div>

                            <!-- Tab Toggle Buttons -->
                            <div class="tabs-buttons text-center mb-5">
                                <!-- <button class="tab-btn active" data-target="#preRegistration" data-key="contact_form.pre-registration">Pre-Registration</button> -->
                                <button class="tab-btn active" data-target="#ticketEnquiry" data-key="contact_form.ticket_enquiry">Ticket Enquiry</button>
                                <button class="tab-btn" data-target="#stallEnquiry" data-key="contact_form.stall_enquiry">Stall Enquiry</button>
                            </div>

                            <!-- Forms -->
                            <div class="tab-content">

                                <!-- Pre-Registration Form -->
                                <div id="preRegistration" class="tab-pane">
                                    <form class="contact-three__form wow fadeInUp" data-wow-delay="100ms" method="post" novalidate>
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6">
                                                <h4 class="contact-three__input-title" data-key="contact_form.full_name">Full Name *</h4>
                                                <div class="contact-three__input-box">
                                                    <input type="text" name="name" placeholder="John Doe" data-key-placeholder="contact_form.placeholder_name" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <h4 class="contact-three__input-title" data-key="contact_form.country">Country *</h4>
                                                <div class="contact-three__input-box custom-dropdown" id="countryDropdown">
                                                    <div class="dropdown-selected">Select Country</div>
                                                    <div class="dropdown-options" style="display: none;">
                                                        <input type="text" id="countrySearchInput" placeholder="Type to search..." style="margin: 8px 12px; padding: 10px 14px; border: 1px solid #ddd; border-radius: 6px; width: calc(100% - 24px);" />

                                                    </div>
                                                    <input type="hidden" name="country" id="countryInput" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <h4 class="contact-three__input-title" data-key="contact_form.email_address">Email Address *</h4>
                                                <div class="contact-three__input-box">
                                                    <input type="email" name="email" placeholder="john@example.com" data-key-placeholder="contact_form.placeholder_email" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <h4 class="contact-three__input-title" data-key="contact_form.phone_number">Phone Number *</h4>
                                                <div class="contact-three__input-box">
                                                    <input type="text" name="phone" placeholder="+41 79 288 22 71" data-key-placeholder="contact_form.placeholder_phone" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6" id="otpInputWrapper" style="display:none;">
                                                <h4 class="contact-three__input-title" data-key="contact_form.enter_otp">Enter OTP *</h4>
                                                <div class="contact-three__input-box">
                                                    <input type="text" name="otp" placeholder="Enter OTP" data-key-placeholder="contact_form.placeholder_otp">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="contact-three__btn-box" id="sendOtpWrapper">
                                                    <button type="button" class="thm-btn-two contact-three__btn" id="sendOtpBtn">
                                                        <span style="margin-right: 16px;" data-key="contact_form.otp_btn">Send OTP</span><i class="icon-angles-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="contact-three__btn-box" id="submitBtnWrapper" style="display:none;">
                                                    <button type="submit" class="thm-btn-two contact-three__btn">
                                                        <span style="margin-right: 16px;" data-key="contact_form.complete_registration">Complete Registration</span><i class="icon-angles-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div style="margin-left: 12px;">
                                                <a href="javascript:void(0)" class="view-benefits-link" onclick="openBenefitsPopup()" data-key="pre_reg.view_benefits">View Benefits</a>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="result"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <!-- Ticket Enquiry Form -->
                                <div id="ticketEnquiry" class="tab-pane active">
                                    <form class="contact-three__form wow fadeInUp" data-wow-delay="100ms" method="post" novalidate>
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6">
                                                <h4 class="contact-three__input-title" data-key="contact_form.full_name">Full Name *</h4>
                                                <div class="contact-three__input-box">
                                                    <input type="text" name="name" placeholder="John Doe" data-key-placeholder="contact_form.placeholder_name" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <h4 class="contact-three__input-title" data-key="contact_form.phone_number">Phone Number *</h4>
                                                <div class="contact-three__input-box">
                                                    <input type="text" name="phone" placeholder="+41 79 288 22 71" data-key-placeholder="contact_form.placeholder_phone" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <h4 class="contact-three__input-title" data-key="contact_form.email_address">Email Address *</h4>
                                                <div class="contact-three__input-box">
                                                    <input type="email" name="email" placeholder="john@example.com" data-key-placeholder="contact_form.placeholder_email" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <h4 class="contact-three__input-title" data-key="contact_form.ticket_id">Ticket Id *</h4>
                                                <div class="contact-three__input-box">
                                                    <input type="text" name="subject" placeholder="Enter your ticket Id" data-key-placeholder="contact_form.placeholder_ticket" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <h4 class="contact-three__input-title" data-key="contact_form.message">Message *</h4>
                                                <div class="contact-three__input-box text-message-box">
                                                    <textarea name="message" placeholder="Write Your Message" data-key-placeholder="contact_form.placeholder_message"></textarea>
                                                </div>
                                                <div class="contact-three__btn-box">
                                                    <button type="submit" class="thm-btn-two contact-three__btn">
                                                        <span style="margin-right: 16px;" data-key="contact_form.submit">Submit</span><i class="icon-angles-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="result"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <!-- Stall Enquiry Form -->
                                <div id="stallEnquiry" class="tab-pane">
                                    <form class="contact-three__form wow fadeInUp" data-wow-delay="100ms" method="post" novalidate>
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6">
                                                <h4 class="contact-three__input-title" data-key="contact_form.shop_name">Shop Name *</h4>
                                                <div class="contact-three__input-box">
                                                    <input type="text" name="shop_name" placeholder="Your Shop Name" data-key-placeholder="contact_form.placeholder_shop_name" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <h4 class="contact-three__input-title" data-key="contact_form.contact_person">Contact Person *</h4>
                                                <div class="contact-three__input-box">
                                                    <input type="text" name="person_name" placeholder="John Doe" data-key-placeholder="contact_form.placeholder_name" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <h4 class="contact-three__input-title" data-key="contact_form.email_address">Email Address *</h4>
                                                <div class="contact-three__input-box">
                                                    <input type="email" name="email" placeholder="shop@example.com" data-key-placeholder="contact_form.placeholder_email" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <h4 class="contact-three__input-title" data-key="contact_form.phone_number">Phone Number *</h4>
                                                <div class="contact-three__input-box">
                                                    <input type="text" name="phone" placeholder="+41 79 288 22 71" data-key-placeholder="contact_form.placeholder_phone" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <h4 class="contact-three__input-title" data-key="contact_form.category">Category *</h4>
                                                <div class="contact-three__input-box">
                                                    <input type="text" name="category" placeholder="Food / Handicraft / Accessories" data-key-placeholder="contact_form.placeholder_category" required>
                                                </div>
                                                <div class="contact-three__btn-box">
                                                    <button type="submit" class="thm-btn-two contact-three__btn">
                                                        <span style="margin-right: 16px;" data-key="contact_form.submit">Submit</span><i class="icon-angles-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="result"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div><!-- /tab-content -->

                        </div><!-- /contact-three__right -->
                    </div>
                </div>
            </div>
        </section>

        <div id="benefitsPopup" class="benefits-popup-overlay" style="display:none;">
            <div class="benefits-popup-content">
                <h2 data-key="pre_reg.title">Pre-Registration Benefits</h2>
                <span class="close-benefits" onclick="closeBenefitsPopup()">&times;</span>
                <div id="benefitsContent">
                    <div class="pre-reg-info">
                        <div class="pre-reg-section">
                            <h4 data-key="pre_reg.dont_miss">Don’t Miss Out!</h4>
                            <p data-key="pre_reg.exclusive_perks">Exclusive for Pre-Registered customers</p>
                            <p data-key="pre_reg.exclusive_perks_2">Get exclusive perks before anyone else.</p>
                        </div>

                        <div class="pre-reg-section">
                            <h4 data-key="pre_reg.be_first">Be the First</h4>
                            <p data-key="pre_reg.be_first_topic">Pre-registrants get early access to:</p>
                            <ul class="pre-reg-list">
                                <li data-key="pre_reg.early_bird">Early bird sales</li>
                                <li data-key="pre_reg.vip_tickets">VIP tickets</li>
                                <li data-key="pre_reg.shuttle_services">Shuttle services</li>
                            </ul>
                        </div>

                        <div class="pre-reg-section">
                            <h4 data-key="pre_reg.members_only">Members-Only Access</h4>
                            <p data-key="pre_reg.members_only_text">Only registered emails will receive private links for claiming pre-reg perks.</p>
                        </div>

                        <div class="pre-reg-section">
                            <h4 data-key="pre_reg.meet_greet">Meet & Greet Opportunities</h4>
                            <p data-key="pre_reg.meet_greet_text">Meet special guests after our main event. Limited spots — only for pre-registered users.</p>
                        </div>

                        <div class="pre-reg-section">
                            <h4 data-key="pre_reg.priority_booking">Priority Booking</h4>
                            <p data-key="pre_reg.priority_booking_text">Skip the line when ticket bookings go live. First come, first served — you get in first!</p>
                        </div>

                        <div class="pre-reg-section">
                            <h4 data-key="pre_reg.deadline">Deadline: June 25th</h4>
                            <p data-key="pre_reg.deadline_text">Pre-register now to unlock all benefits!</p>
                        </div>

                        <div class="pre-reg-footer" data-key="pre_reg.grab_tickets">
                            Grab your Tickets at <a href="https://www.thaalamsummerfestival.com" target="_blank">www.Thaalamsummerfestival.com</a>
                        </div>
                        <p class="pre-reg__terms" data-key="pre_reg.terms_and_conditions">Terms and Conditions applied</p>
                    </div>
                </div>
            </div>
        </div>


        <!--Contact Three End-->

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
    <script>
        function openBenefitsPopup() {
            const preRegContent = document.querySelector('.pre-reg-info').cloneNode(true);
            document.getElementById('benefitsContent').innerHTML = '';
            document.getElementById('benefitsContent').appendChild(preRegContent);

            document.getElementById('benefitsPopup').style.display = 'flex';
        }

        function closeBenefitsPopup() {
            document.getElementById('benefitsPopup').style.display = 'none';
        }

        const countries = [{
                name: "Albania",
                code: "+355"
            },
            {
                name: "Andorra",
                code: "+376"
            },
            {
                name: "Armenia",
                code: "+374"
            },
            {
                name: "Austria",
                code: "+43"
            },
            {
                name: "Azerbaijan",
                code: "+994"
            },
            {
                name: "Belarus",
                code: "+375"
            },
            {
                name: "Belgium",
                code: "+32"
            },
            {
                name: "Bosnia and Herzegovina",
                code: "+387"
            },
            {
                name: "Bulgaria",
                code: "+359"
            },
            {
                name: "Croatia",
                code: "+385"
            },
            {
                name: "Cyprus",
                code: "+357"
            },
            {
                name: "Czech Republic",
                code: "+420"
            },
            {
                name: "Denmark",
                code: "+45"
            },
            {
                name: "Estonia",
                code: "+372"
            },
            {
                name: "Finland",
                code: "+358"
            },
            {
                name: "France",
                code: "+33"
            },
            {
                name: "Georgia",
                code: "+995"
            },
            {
                name: "Germany",
                code: "+49"
            },
            {
                name: "Greece",
                code: "+30"
            },
            {
                name: "Hungary",
                code: "+36"
            },
            {
                name: "Iceland",
                code: "+354"
            },
            {
                name: "Ireland",
                code: "+353"
            },
            {
                name: "Italy",
                code: "+39"
            },
            {
                name: "Kazakhstan",
                code: "+7"
            },
            {
                name: "Kosovo",
                code: "+383"
            },
            {
                name: "Latvia",
                code: "+371"
            },
            {
                name: "Liechtenstein",
                code: "+423"
            },
            {
                name: "Lithuania",
                code: "+370"
            },
            {
                name: "Luxembourg",
                code: "+352"
            },
            {
                name: "Malta",
                code: "+356"
            },
            {
                name: "Moldova",
                code: "+373"
            },
            {
                name: "Monaco",
                code: "+377"
            },
            {
                name: "Montenegro",
                code: "+382"
            },
            {
                name: "Netherlands",
                code: "+31"
            },
            {
                name: "North Macedonia",
                code: "+389"
            },
            {
                name: "Norway",
                code: "+47"
            },
            {
                name: "Poland",
                code: "+48"
            },
            {
                name: "Portugal",
                code: "+351"
            },
            {
                name: "Romania",
                code: "+40"
            },
            {
                name: "Russia",
                code: "+7"
            },
            {
                name: "San Marino",
                code: "+378"
            },
            {
                name: "Serbia",
                code: "+381"
            },
            {
                name: "Slovakia",
                code: "+421"
            },
            {
                name: "Slovenia",
                code: "+386"
            },
            {
                name: "Spain",
                code: "+34"
            },
            {
                name: "Sweden",
                code: "+46"
            },
            {
                name: "Switzerland",
                code: "+41"
            },
            {
                name: "Turkey",
                code: "+90"
            },
            {
                name: "Ukraine",
                code: "+380"
            },
            {
                name: "United Kingdom",
                code: "+44"
            },
            {
                name: "Vatican City",
                code: "+379"
            }
        ];

        const handleTickeEnquiry = (formData) => {
            return fetch("https://api.demoview.ch/summer-festival/api/enquiry", {
                method: "POST",
                headers: {
                    'Content-Type': "application/json"
                },
                body: JSON.stringify(formData)
            })
        }

        const handleStallEnquiry = (formData) => {
            return fetch("https://api.demoview.ch/summer-festival/api/stall-enquiry", {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(formData)
            })
        }


        const handlePreRegistration = (formData) => {
            return fetch("https://api.demoview.ch/summer-festival/api/pre-registration/verify-and-register", {
                method: "POST",
                headers: {
                    'Content-Type': "application/json"
                },
                body: JSON.stringify(formData)
            })
        }

        const customDropdown = () => {
            const dropdown = document.getElementById("countryDropdown");
            const selected = dropdown.querySelector(".dropdown-selected");
            const options = dropdown.querySelector(".dropdown-options");
            const hiddenInput = document.getElementById("countryInput");
            const phoneInput = document.querySelector("input[name='phone']");
            const searchInput = document.getElementById("countrySearchInput");

            selected.addEventListener("click", () => {
                options.style.display = options.style.display === "block" ? "none" : "block";
            });

            options.addEventListener("click", (e) => {
                if (e.target.classList.contains("dropdown-option")) {
                    const countryName = e.target.getAttribute("data-value");
                    const countryCode = e.target.getAttribute("data-code");

                    selected.textContent = countryName;
                    hiddenInput.value = countryName;
                    phoneInput.placeholder = `${countryCode} 79 288 22 71`;
                    phoneInput.value = countryCode + " ";
                    options.style.display = "none";
                }
            });

            document.addEventListener("click", (event) => {
                if (!dropdown.contains(event.target)) {
                    options.style.display = "none";
                }
            });

            searchInput.addEventListener("input", () => {
                const filterValue = searchInput.value.toLowerCase();
                let matchFound = false;

                const optionElements = options.querySelectorAll(".dropdown-option");
                optionElements.forEach(option => {
                    const countryName = option.getAttribute("data-value").toLowerCase();
                    if (countryName.includes(filterValue)) {
                        option.style.display = "block";
                        if (countryName === filterValue) {
                            const countryCode = option.getAttribute("data-code");
                            selected.textContent = option.getAttribute("data-value");
                            hiddenInput.value = option.getAttribute("data-value");
                            phoneInput.placeholder = `${countryCode}-79 288 22 71`;
                            phoneInput.value = countryCode + " ";
                            options.style.display = "none";
                            matchFound = true;
                        }
                    } else {
                        option.style.display = "none";
                    }
                });

                if (!matchFound) {
                    options.style.display = "block";
                }
            });
        };

        const handleSendOtp = async (form) => {
            const formData = {};
            const inputs = form.querySelectorAll("input, textarea, select");
            const resultDiv = form.querySelector(".result") || document.querySelector(".result");

            for (let input of inputs) {
                if (input.name && input.name !== "otp") {
                    let value = input.value.trim();

                    if (!value) {
                        resultDiv.innerHTML = `<div class="alert alert-danger" style="margin-top: 20px;">${input.name} is required</div>`;
                        return;
                    }
                    if (input.name === "phone") {
                        const phoneRegex = /^\+\d{1,4}(\s?\d+)+$/;
                        if (!phoneRegex.test(value)) {
                            resultDiv.innerHTML = `<div class="alert alert-danger" style="margin-top: 20px;">Invalid phone number format. Use: +CountryCode 123456 (no alphabets or symbols)</div>`;
                            return;
                        }
                    }

                    formData[input.name] = value;
                }
            }

            try {
                const response = await fetch("https://api.demoview.ch/summer-festival/api/pre-registration/send-otp", {
                    method: "POST",
                    headers: {
                        'Content-Type': "application/json"
                    },
                    body: JSON.stringify(formData)
                });

                const data = await response.json();

                if (data.status === "success") {
                    resultDiv.innerHTML = `<div class="alert alert-success" style="margin-top: 20px;">${data.message}</div>`;
                    document.getElementById("sendOtpWrapper").style.display = "none";
                    document.getElementById("otpInputWrapper").style.display = "block";
                    document.getElementById("submitBtnWrapper").style.display = "block";
                } else {
                    resultDiv.innerHTML = `<div class="alert alert-danger" style="margin-top: 20px;">${data.message}</div>`;
                }
            } catch (error) {
                resultDiv.innerHTML = `<div class="alert alert-danger" style="margin-top: 20px;">An error occurred. Please try again later.</div>`;
            } finally {
                setTimeout(() => {
                    resultDiv.innerHTML = "";
                }, 5000);
            }
        };


        const handleFormSubmit = async (form, endPointHandler) => {
            const formData = {};
            const inputs = form.querySelectorAll("input, textarea, select");
            const resultDiv = form.querySelector(".result") || document.querySelector(".result");

            const sendOtpWrapper = form.querySelector('#sendOtpWrapper') || null;
            const otpInputWrapper = form.querySelector('#otpInputWrapper') || null;
            const submiBtnWrapper = form.querySelector('#submitBtnWrapper') || null;

            for (let input of inputs) {
                if (input.name) {
                    let value = input.value.trim();

                    if (!value) {
                        resultDiv.innerHTML = `<div class="alert alert-danger" style="margin-top: 20px;">${input.name} is required</div>`;
                        return;
                    }

                    formData[input.name] = value;
                }
            }

            try {
                const response = await endPointHandler(formData);
                const data = await response.json();

                if (data.status === "success") {
                    resultDiv.innerHTML = `<div class="alert alert-success" style="margin-top: 20px;">${data.message}</div>`;
                    if (sendOtpWrapper) sendOtpWrapper.style.display = "block";
                    if (otpInputWrapper) otpInputWrapper.style.display = "none";
                    if (submiBtnWrapper) submiBtnWrapper.style.display = "none";
                    form.reset();
                    history.replaceState(null, null, window.location.href);
                } else {
                    resultDiv.innerHTML = `<div class="alert alert-danger" style="margin-top: 20px;">${data.message || "An error occurred. Please try again."}</div>`;
                }

            } catch (error) {
                resultDiv.innerHTML = `<div class="alert alert-danger" style="margin-top: 20px;">An error occurred. Please try again later.</div>`;
            } finally {
                setTimeout(() => {
                    resultDiv.innerHTML = "";
                }, 5000);
            }
        }

        document.addEventListener("DOMContentLoaded", () => {

            countries.forEach(country => {
                const option = document.createElement("div");
                option.classList.add("dropdown-option");
                option.setAttribute("data-value", country.name);
                option.setAttribute("data-code", country.code);
                option.textContent = country.name;
                document.querySelector("#countryDropdown .dropdown-options").appendChild(option);
            });


            const ticketForm = document.querySelector("#ticketEnquiry .contact-three__form");
            if (ticketForm) {
                ticketForm.addEventListener("submit", (e) => {
                    e.preventDefault();
                    handleFormSubmit(ticketForm, handleTickeEnquiry)
                })
            }

            const stallForm = document.querySelector('#stallEnquiry .contact-three__form');
            if (stallForm) {
                stallForm.addEventListener('submit', (e) => {
                    e.preventDefault();
                    handleFormSubmit(stallForm, handleStallEnquiry);
                });
            }

            const preRegForm = document.querySelector('#preRegistration .contact-three__form');
            if (preRegForm) {

                const sendOtpBtn = document.getElementById("sendOtpBtn");

                sendOtpBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    handleSendOtp(preRegForm);
                });

                preRegForm.addEventListener('submit', (e) => {
                    e.preventDefault();
                    handleFormSubmit(preRegForm, handlePreRegistration);
                });
            }

            const tabButtons = document.querySelectorAll('.tab-btn');
            const tabPanes = document.querySelectorAll('.tab-pane');

            tabButtons.forEach(button => {
                button.addEventListener('click', function() {
                    tabButtons.forEach(btn => btn.classList.remove('active'));
                    tabPanes.forEach(pane => pane.classList.remove('active'));

                    this.classList.add('active');

                    const targetPane = document.querySelector(this.dataset.target);
                    if (targetPane) {
                        targetPane.classList.add('active');

                        if (typeof WOW !== 'undefined') {
                            new WOW().init();
                        }
                    }
                });
            });
            let isContactInfoLoaded = false;

            function loadContactInfo() {

                if (isContactInfoLoaded) return;

                fetch("https://api.demoview.ch/summer-festival/api/contactus")
                    .then(response => response.json())
                    .then(result => {
                        const data = result.data;


                        const addressLines = data.address.split(',');
                        const addressElement = document.getElementById('contactAddress');
                        addressElement.innerHTML = `
                          <p>${addressLines[0]},</p>
                          <p>${addressLines.slice(1).join(',').trim()}</p>
                        `;

                        const contactNumbers = document.getElementById('contactNumbers');
                        const contactEmails = document.getElementById('contactEmails');

                        contactNumbers.innerHTML = '';
                        contactEmails.innerHTML = '';

                        if (data.enquiry_mobile_numbers.length > 0 && data.enquiry_mobile_numbers[0] !== "") {
                            data.enquiry_mobile_numbers.forEach(number => {
                                const p = document.createElement('p');
                                p.innerHTML = `<a href="tel:+41${number}">+41 ${number} (Hot Line)</a>`;
                                contactNumbers.appendChild(p);
                            });

                        }

                        if (data.marketing_mobile_numbers.length > 0 && data.marketing_mobile_numbers[0] !== "") {
                            data.marketing_mobile_numbers.forEach(number => {
                                const p = document.createElement('p');
                                p.innerHTML = `<a href="tel:+41${number}">${number} (Whatsapp)</a>`;
                                contactNumbers.appendChild(p);
                            });
                        }

                        if (data.event_enquiry_email) {
                            const p = document.createElement('p');
                            p.innerHTML = `<a href="mailto:${data.event_enquiry_email}">${data.event_enquiry_email} (Enquiry)</a>`;
                            contactEmails.appendChild(p);
                        }

                        if (data.marketing_email) {
                            const p = document.createElement('p');
                            p.innerHTML = `<a href="mailto:${data.marketing_email}">${data.marketing_email} (Marketing)</a>`;
                            contactEmails.appendChild(p);
                        }
                        isContactInfoLoaded = true;
                    })
                    .catch(error => console.error('Error fetching contact info:', error));
            }

            loadContactInfo();
            customDropdown();
        })
    </script>

</body>

</html>