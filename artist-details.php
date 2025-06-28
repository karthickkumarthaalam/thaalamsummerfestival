<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist - Thaalam Summer festival</title>

    <!-- Google tag (gtag.js) -->
    <script src="https://static.zohocdn.com/backstage/v1.0/javascript/ticket-widget/v1.3/register-widget.min.js" defer></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-R8MGX2H3KC"></script>
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
    <!-- Preloader Section -->
    <?php include 'php/preloader.php'; ?>

    <div class="page-wrapper">

        <!-- Main Header Start -->
        <?php include 'php/header.php'; ?>
        <!-- Main Header End -->

        <section class="page-header">
            <div class="container">
                <div class="page-header__inner">
                    <h2>Artist Details</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="/index">Home</a></li>
                            <li><span>//</span></li>
                            <li>Artist Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-three py-5">
            <div class="about-three__shape-2 rotate-me"></div>
            <div class="about-three__shape-3 text-rotate-box"></div>
            <div class="about-three__shape-4 float-bob-y"></div>
            <div class="container">
                <div id="artist-details" class="artist-details-wrapper">

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

    <script>
        function getArtistIdFromUrl() {
            const params = new URLSearchParams(window.location.search);
            return params.get("id");
        }

        function fetchArtistDetails() {
            const artistId = getArtistIdFromUrl();
            if (!artistId) return;

            fetch(`https://api.demoview.ch/summer-festival/api/artist/${artistId}`)
                .then(res => res.json())
                .then(result => {
                    const artist = result.artist;
                    const container = document.getElementById("artist-details");

                    container.innerHTML = `
                          <div class="artist-details-wrapper">
                            <div class="wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="about-three__img-one">
                              <img src="https://api.demoview.ch/summer-festival/api/${artist?.image}" alt="${artist.artist_name}" />
                            </div>  
                            </div>
                            <div class="artist-info">
                              <div class="section-title-two text-left" >
                                <div class="wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                                    <h1>${artist.artist_name}</h1>
                                    <p><strong>Role:</strong> ${artist.role}</p>
                                </div>
                                <p class="about-three__text-1 wow slideInRight" data-wow-delay="200ms"
                                data-wow-duration="2700ms">${artist.description}</p>
                              </div>
                              <div class="artist-social  wow slideInRight" data-wow-delay="200ms" data-wow-duration="2500ms">
                                ${artist.facebook_url ? `<a href="${artist.facebook_url}" target="_blank"><i class="fab fa-facebook-f"></i></a>` : ""}
                                ${artist.instagram_url ? `<a href="${artist.instagram_url}" target="_blank"><i class="fab fa-instagram"></i></a>` : ""}
                                ${artist.linkedin_url ? `<a href="${artist.linkedin_url}" target="_blank"><i class="fab fa-linkedin-in"></i></a>` : ""}
                                ${artist.pinterest_url ? `<a href="${artist.pinterest_url}" target="_blank"><i class="fab fa-pinterest-p"></i></a>` : ""}
                              </div>
                            </div>
                          </div>
                        `;
                    new WOW().init();
                })
        }

        fetchArtistDetails();
    </script>
</body>

</html>