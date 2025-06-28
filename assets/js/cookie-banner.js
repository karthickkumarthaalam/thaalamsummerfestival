window.onload = () => {
    console.log("showing cookiesssssssss");
    if (!localStorage.getItem("cookieConsent")) {
        const banner = document.createElement("div");
        banner.className = "cookie-banner";
        banner.innerHTML = `
      <p>🍪 We use cookies to improve your experience and collect analytics. By using this site, you agree to our use of cookies.</p>
      <button id="acceptCookies">Accept</button>
    `;
        document.body.appendChild(banner);

        document.getElementById("acceptCookies").onclick = () => {
            localStorage.setItem("cookieConsent", "accepted");
            banner.remove();
        };
    }
};

