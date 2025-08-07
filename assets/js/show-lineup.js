
document.addEventListener("DOMContentLoaded", () => {
    fetchLineupTabs();
});

async function fetchLineupTabs() {
    try {
        const response = await fetch(`https://api.demoview.ch/summer-festival/api/showlineup?language=${language}`);
        const result = await response.json();

        const tabTitles = document.querySelector(".tab-titles");
        const tabContent = document.querySelector(".tab-content");

        tabTitles.innerHTML = "";
        tabContent.innerHTML = "";

        result.data?.data?.sort((a, b) => new Date(a.date) - new Date(b.date));

        result.data?.data?.forEach((lineup, index) => {
            const dateString = formatDateDisplay(lineup.date);

            // Create tab title
            const li = document.createElement("li");
            li.setAttribute("data-tab", `tab${index + 1}`);
            li.setAttribute("data-date", lineup.date);
            if (index === 0) li.classList.add("active");
            li.innerHTML = `<i class="fas fa-calendar-day"></i> ${dateString}`;
            tabTitles.appendChild(li);

            // Create empty tab content with loading placeholder
            const tabDiv = document.createElement("div");
            tabDiv.classList.add("tab");
            tabDiv.id = `tab${index + 1}`;
            if (index === 0) tabDiv.classList.add("active");
            tabDiv.innerHTML = `
                <div class="loading-placeholder">
                    <i class="fas fa-spinner fa-spin"></i> Loading...
                </div>
            `;
            tabContent.appendChild(tabDiv);
        });

        // Tickets tab
        bindTabSwitch();

        if (result.data.data.length > 0) {
            fetchShowLineupByDate(result.data.data[0].date, 1);
        }

    } catch (error) {
        console.error("Error fetching lineups:", error);
    }
}

function formatDateForApi(dateString) {
    const parts = dateString.split("-");
    return `${parts[2]}-${parts[1]}-${parts[0]}`;
}

function bindTabSwitch() {
    document.querySelectorAll(".tab-titles li").forEach(tab => {
        tab.addEventListener("click", () => {
            document.querySelectorAll(".tab-titles li").forEach(t => t.classList.remove("active"));
            tab.classList.add("active");
            const tabId = tab.getAttribute("data-tab");
            document.querySelectorAll(".tab").forEach(t => t.classList.remove("active"));
            document.getElementById(tabId).classList.add("active");

            const tabText = tab.textContent.trim();
            if (/^\d{2}-\d{2}-\d{4}$/.test(tabText)) {
                const apiDate = formatDateForApi(tabText);
                const tabNumber = tabId.replace("tab", "");
                setTimeout(() => {
                    fetchShowLineupByDate(apiDate, tabNumber);
                }, 0);
            }
        });
    });
}

function formatDateDisplay(dateStr) {
    const d = new Date(dateStr);
    const day = String(d.getDate()).padStart(2, '0');
    const month = String(d.getMonth() + 1).padStart(2, '0');
    const year = d.getFullYear();
    return `${day}-${month}-${year}`;
}

const lineupCache = {};

async function fetchShowLineupByDate(date, tabNumber) {
    if (lineupCache[date]) {
        renderLineup(lineupCache[date], tabNumber);
        return;
    }

    try {
        const response = await fetch(`https://api.demoview.ch/summer-festival/api/showlineup/by-date?date=${date}`);
        const data = await response.json();
        lineupCache[date] = data;
        renderLineup(data, tabNumber);
    } catch (error) {
        console.error(error);
    }
}

function renderLineup(data, tabNumber) {
    const tabDiv = document.getElementById(`tab${tabNumber}`);

    if (!data?.data?.shows || data.data.shows.length === 0) {
        tabDiv.innerHTML = `
            <div class="coming-soon-container">
                <h1 data-key="coming_soon">Coming Soon ...</h1>
            </div>
        `;
        return;
    }

    tabDiv.innerHTML = `
        <h3>Event Details</h3>
        <table class="event-table">
            <thead>
                <tr>
                    <th><i class="fas fa-clock"></i> Time</th>
                    <th><i class="fas fa-music"></i> Event</th>
                    <th><i class="fas fa-map-marker-alt"></i> Location</th>
                </tr>
            </thead>
            <tbody id="eventDetailsTableBody${tabNumber}"></tbody>
        </table>
        <h3>Artists</h3>
        <div id="artistsCarousel${tabNumber}" class="artists artists-carousel owl-carousel"></div>
        <div class="text-center">
            <button class="thm-btn thm-btn-2 hover-state"><i class="fas fa-ticket-alt"></i> Book Now</button>
        </div>
    `;

    const tableBody = document.getElementById(`eventDetailsTableBody${tabNumber}`);
    const artistsCarousel = document.getElementById(`artistsCarousel${tabNumber}`);

    tableBody.innerHTML = "";
    artistsCarousel.innerHTML = "";
    let totalArtists = 0;

    data?.data?.shows.forEach(show => {
        const row = document.createElement("tr");
        row.innerHTML = `
            <td>${show.time}</td>
            <td>${show.title} <span class="desc">${show.description}</span></td>
            <td>${show.location}</td>
        `;
        tableBody.appendChild(row);

        totalArtists += show.artists.length;

        show.artists.forEach(artist => {
            const card = document.createElement("div");
            card.className = "artist-card";
            card.innerHTML = `
                <img src="https://api.demoview.ch/summer-festival/api/${artist.image}" alt="${artist.name}">
                <div class="artist-name">${artist.name}</div>
                <div class="genre">${artist.role}</div>
                <div class="social">
                    ${artist?.facebook_url ? `<a href="${artist.facebook_url}" target="_blank"><i class="fab fa-facebook-f"></i></a>` : ""}
                    ${artist?.instagram_url ? `<a href="${artist.instagram_url}" target="_blank"><i class="fab fa-instagram"></i></a>` : ""}
                    ${artist?.website_url ? `<a href="${artist.website_url}" target="_blank"><i class="fas fa-globe pe-2"></i></a>` : ""}
                    ${artist?.other_url ? `<a href="${artist.other_url}" target="_blank"><i class="fab fa-soundcloud"></i></a>` : ""}
                </div>
            `;
            artistsCarousel.appendChild(card);
        });
    });

    // initArtistCarousel(`#artistsCarousel${tabNumber}`);

    requestAnimationFrame(() => {
        const carouselElement = document.querySelector(`#artistsCarousel${tabNumber}`);
        if (!carouselElement) return;

        const cards = carouselElement.querySelectorAll(".artist-card");
        const cardCount = cards.length;

        $(carouselElement).trigger('destroy.owl.carousel');
        carouselElement.classList.remove("owl-carousel", "owl-loaded", "owl-drag");
        carouselElement.classList.remove("single-artist-center");

        const clone = carouselElement.cloneNode(true);
        clone.style.cssText = `
        position: absolute;
        visibility: hidden;
        height: auto;
        width: auto;
        white-space: nowrap;
    `;
        document.body.appendChild(clone);

        const contentWidth = clone.scrollWidth;
        const containerWidth = carouselElement.clientWidth;
        clone.remove();

        if (contentWidth > containerWidth && cardCount > 1) {
            carouselElement.classList.add("owl-carousel");
            initArtistCarousel(`#artistsCarousel${tabNumber}`, cardCount);
        } else {
            carouselElement.classList.add("single-artist-center");
        }
    });



}

function initArtistCarousel(selector, itemCount) {
    const $carousel = $(selector);

    let visibleItems = 6;
    const width = window.innerWidth;

    if (width < 600) {
        visibleItems = 2;
    } else if (width < 1000) {
        visibleItems = 3;
    }

    const enableLoop = itemCount > visibleItems;

    $carousel.owlCarousel({
        loop: enableLoop,
        margin: 20,
        nav: false,
        dots: false,
        autoplay: enableLoop,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        navText: [
            '<i class="fas fa-chevron-left"></i>',
            '<i class="fas fa-chevron-right"></i>'
        ],
        responsive: {
            0: {
                items: 2
            },
            768: {
                items: 3
            },
            992: {
                items: 4
            },
            1200: {
                items: 6
            }
        }

    });
}
