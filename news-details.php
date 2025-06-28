<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>News - Thaalam Summer Festival </title>

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

    <style>
        .preserve-format {
            white-space: pre-line;
        }
    </style>

</head>

<body class="custom-cursor">
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
                    <h2>News Details</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="/index">Home</a></li>
                            <li><span>//</span></li>
                            <li><a href="/news">News</a></li>
                            <li><span>//</span></li>
                            <li>News Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->
        <!--News Details Start-->
        <section class="event-details">
            <div class="container">
                <div class="event-details__top">
                    <div class="event-details__top-img">
                        <img src="assets/img/common/event-img.jpg" alt="News Image">
                    </div>
                </div>
                <div class="event-details__content-box">
                    <div class="row">
                        <div class="col-xl-8 col-lg-7">
                            <div class="event-details__content-left">
                                <h3 class="event-details__content-title">Loading...</h3>
                                <div class="event-details__content-text-1 preserve-format">
                                    <!-- Detailed HTML content will be injected here -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="event-details__sidebar">
                                <h3 class="event-details__sidebar-title">News Information</h3>
                                <ul class="list-unstyled event-details__list">
                                    <li>
                                        <div class="event-details__list-left">
                                            <div class="event-details__list-icon"><span class="icon-calendar"></span></div>
                                            <p class="event-details__list-text">Published:</p>
                                        </div>
                                        <div class="event-details__list-right">
                                            <p>—</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="event-details__list-left">
                                            <div class="event-details__list-icon"><span class="icon-user-plus"></span></div>
                                            <p class="event-details__list-text">Author:</p>
                                        </div>
                                        <div class="event-details__list-right">
                                            <p>—</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--News Details End-->

        <!--Related News Start-->
        <section class="related-event">
            <div class="container">
                <div class="related-event__inner">
                    <h3 class="related-event__title">Related News</h3>
                    <div class="related-event__carousel owl-theme owl-carousel" id="relatedNewsContainer">
                    </div>
                </div>
            </div>
        </section>
        <!--Related News End-->


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
        document.addEventListener("DOMContentLoaded", () => {
            const params = new URLSearchParams(window.location.search);
            const id = params.get("id");

            if (!id) {
                document.querySelector(".event-details__content-title").textContent = "News not found";
                return;
            }

            fetch(`https://api.demoview.ch/summer-festival/api/news/${id}`)
                .then(res => res.json())
                .then(data => {
                    const news = data.news; // correct: use data.data based on your API structure

                    if (!news) {
                        document.querySelector(".event-details__content-title").textContent = "News not found";
                        return;
                    }

                    // Update main image
                    const topImg = document.querySelector(".event-details__top-img img");
                    if (topImg) {
                        topImg.src = news.image ?
                            `https://api.demoview.ch/summer-festival/api/${news.image.replace(/\\/g, "/")}` :
                            "assets/img/common/event-img.jpg";
                        topImg.alt = news.title;
                    }

                    // Title
                    document.querySelector(".event-details__content-title").textContent = news.title;

                    // Published date
                    const formattedDate = news.published ?
                        new Date(news.published).toLocaleDateString("en-US", {
                            year: "numeric",
                            month: "long",
                            day: "numeric",
                        }) :
                        "Coming Soon";

                    const infoValues = document.querySelectorAll(".event-details__list-right p");
                    if (infoValues.length >= 2) {
                        infoValues[0].textContent = formattedDate;
                        infoValues[1].textContent = news.author || "Thaalam News Desk";
                    }

                    // Description HTML content
                    document.querySelector(".event-details__content-text-1").innerHTML = news.description;
                    fetchRelatedNews(news.category, news.author, news.id)
                })
                .catch(err => {
                    console.error("Error loading news details:", err);
                    document.querySelector(".event-details__content-title").textContent = "Error loading content";
                });
        });

        function fetchRelatedNews(author, category, excludeId) {
            fetch(`https://api.demoview.ch/summer-festival/api/news?author=${author}&exclude=${excludeId}&limit=3`)
                .then(res => res.json())
                .then(result => {
                    const relatedContainer = document.getElementById("relatedNewsContainer");

                    if (!relatedContainer) {
                        console.error("Related news container not found in DOM");
                        return;
                    }

                    relatedContainer.innerHTML = ""; // clear existing

                    if (!result.data?.data || result.data.data.length === 0) {
                        relatedContainer.innerHTML = "<p>No related news found.</p>";
                        return;
                    }

                    let allItemsHtml = "";

                    result.data.data.forEach(item => {
                        const publishedDate = item.published ?
                            new Date(item.published).toLocaleDateString("en-US", {
                                year: "numeric",
                                month: "short",
                                day: "numeric",
                            }) :
                            "Coming Soon";

                        const dateParts = publishedDate.split(" ");
                        const dateHtml =
                            dateParts.length === 3 ?
                            `<p>${dateParts[1]}</p><span>${dateParts[0]}</span>` :
                            `<p>--</p><span>--</span>`;

                        const itemHtml = `
          <div class="item">
            <div class="event-one__single">
              <div class="event-one__img">
                <img src="${item.image ? 'https://api.demoview.ch/summer-festival/api/' + item.image.replace(/\\/g, "/") : 'assets/img/common/event-img.jpg'}" alt="">
                <div class="event-one__date">
                  ${dateHtml}
                </div>
              </div>
              <div class="event-one__content">
                <h4 class="event-one__title"><a href="/news-details?id=${item.id}">${item.title}</a></h4>
                <div class="event-one__location">
                  <div class="event-one__location-icon">
                    <span class="icon-catagory"></span>
                  </div>
                  <p class="event-one__loation-text">${item.category}</p>
                </div>
                <div class="event-one__btn-box">
                  <a href="/news-details?id=${item.id}" class="thm-btn"><span class="icon-angles-right"></span>Read More</a>
                </div>
              </div>
            </div>
          </div>
        `;

                        allItemsHtml += itemHtml;
                    });

                    relatedContainer.innerHTML = allItemsHtml;

                    if ($(".related-event__carousel").hasClass("owl-loaded")) {
                        $(".related-event__carousel").trigger("destroy.owl.carousel").removeClass("owl-loaded");
                        $(".related-event__carousel").find(".owl-stage-outer").children().unwrap();
                    }

                    // Now initialize Owl Carousel **once**
                    $(".related-event__carousel").owlCarousel({
                        loop: true,
                        margin: 30,
                        nav: false,
                        dots: false,
                        autoplay: true,
                        smartSpeed: 700,
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
                .catch(err => {
                    console.error("Related news fetch error:", err);
                });
        }
    </script>

</body>

</html>