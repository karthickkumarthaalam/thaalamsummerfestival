<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Show Lineup - Thaalam Summer Festival</title>

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
    <link rel="stylesheet" href="assets/css/module-css/show-lineup.css">
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
                    <h2 data-key="show_lineup">Show Lineup</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="/index" data-key="home">Home</a></li>
                            <li><span>//</span></li>
                            <li data-key="show_lineup">Show Lineup</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <section class="show-lineup-tabs">
            <div class="container">
                <div class="tabs">
                    <ul class="tab-titles">
                    </ul>
                    <div class="tab-content">
                    </div>
                </div>
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
    <script src="assets/js/show-lineup.js"></script>

</body>

</html>