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
        .no-news-message {
            text-align: center;
            padding: 100px 20px;
        }

        .no-news-message img {
            max-width: 250px;
            margin-bottom: 20px;
        }

        .no-news-message h4 {
            margin-bottom: 10px;
            font-weight: 600;
        }

        .no-news-message p {
            color: #777;
        }

        .custom-pagination {
            margin: 30px 0;
            gap: 8px;
        }

        .pagination-btn {
            border: none;
            padding: 8px 14px;
            background-color: #f0f0f0;
            color: #333;
            font-size: 14px;
            border-radius: 4px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .pagination-btn:hover {
            background-color: #d0d0d0;
        }

        .pagination-btn.active {
            background-color: var(--fistudy-base);
            color: #fff;
            font-weight: 600;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
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
                    <h2 data-key="news">News</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="/index" data-key="home">Home</a></li>
                            <li><span>//</span></li>
                            <li data-key="news">News</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <section class="news-section">
            <div class="container">
                <div id="newsContainer" class="row"></div>
                <div id="paginationControls" class="text-center mt-4"></div>
            </div>
        </section>

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
            let currentPage = 1;
            const limit = 4;

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

            function fetchNews(page) {
                const language = getLanguage();
                fetch(`https://api.demoview.ch/summer-festival/api/news?page=${page}&limit=${limit}&status=active&langugae=${language}`)
                    .then(res => res.json())
                    .then(result => {
                        const newsContainer = document.getElementById("newsContainer");
                        const paginationControls = document.getElementById("paginationControls");

                        newsContainer.innerHTML = ""; // Clear previous news
                        paginationControls.innerHTML = ""; // Clear pagination buttons

                        if (!result?.data?.data || result.data.data.length === 0) {
                            newsContainer.innerHTML = `
                                <div class="no-news-message col-12 text-center">
                                    <h4 data-key="no_news_header">No News Available</h4>
                                    <p data-key="no_news_para">Check back later for the latest updates and announcements from Thaalam Summer Festival!</p>
                                </div>
                            `;
                            return;
                        }


                        result.data.data.forEach(item => {
                            const newsItem = document.createElement("div");
                            newsItem.className = "col-lg-6 col-md-6 col-sm-12";

                            const publishedDate = item.published ?
                                new Date(item.published).toLocaleDateString("en-US", {
                                    year: "numeric",
                                    month: "long",
                                    day: "numeric",
                                }) :
                                "Coming Soon";

                            newsItem.innerHTML = `
                            <div class="news-item d-flex align-items-center mbl-drt-col">
                                <img src="${item.image ? 'https://api.demoview.ch/summer-festival/api/' + item.image.replace(/\\/g, "/") : 'assets/img/common/news/default.jpg'}" alt="${item.title}" class="news-image">
                                <div class="news-content">
                                    <h3 class="news-title">${item.title}</h3>
                                    <p class="news-meta">
                                        <span class="news-time">${publishedDate}</span> | 
                                        <span class="news-location">${item.category || 'Thaalam'}</span>
                                    </p>
                                    <p class="news-description">${item.description.slice(0, 120)}...</p>
                                    <a href="/news-details?id=${item.id}" class="news-read-more">Read More</a>
                                </div>
                            </div>
                        `;
                            newsContainer.appendChild(newsItem);
                        });

                        // Build Pagination Buttons
                        const totalPages = result?.data?.pagination?.totalPages;
                        if (totalPages > 1) {
                            const paginationWrapper = document.createElement("div");
                            paginationWrapper.className = "custom-pagination d-flex justify-content-center align-items-center flex-wrap";

                            for (let i = 1; i <= totalPages; i++) {
                                const button = document.createElement("button");
                                button.textContent = i;
                                button.className = `pagination-btn ${i === page ? 'active' : ''}`;
                                button.addEventListener("click", () => {
                                    currentPage = i;
                                    fetchNews(currentPage);
                                    window.scrollTo({
                                        top: 0,
                                        behavior: "smooth"
                                    }); // Optional: scroll to top on page change
                                });
                                paginationWrapper.appendChild(button);
                            }

                            paginationControls.appendChild(paginationWrapper);
                        }

                    })
                    .catch(err => {
                        console.error("Error fetching news:", err);
                    });
            }

            // Initial fetch
            fetchNews(currentPage);
        });
    </script>

</body>

</html>