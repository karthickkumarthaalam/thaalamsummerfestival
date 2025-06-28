<footer class="site-footer">
  <div class="site-footer__shape-bg" style="background-image: url(assets/images/shapes/site-footer-shape-bg.png);"></div>

  <div class="site-footer__top">
    <div class="container">
      <div class="site-footer__top-inner">
        <div class="row d-flex align-items-start flex-wrap">

          <!-- Location -->
          <div class="col-xl-3 col-lg-3 col-md-4 mb-4">
            <div class="site-footer__links">
              <h4 class="site-footer__title" data-key="location">Location</h4>
              <ul class="site-footer__links-list list-unstyled">
                <li>
                  <a href="javascript:;" style="display: flex; align-items: flex-start; gap: 8px">
                    <span class="icon-location"></span>
                    <div>
                      <span id="footerAddressLine1" style="font-size: 18px;"></span>,<br>
                      <span id="footerAddressLine2" style="font-size: 18px;"></span>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <!-- Contact Us -->
          <div class="col-xl-4 col-lg-6 col-md-8 mb-4">
            <div class="site-footer__links">
              <div class="row">
                <div class="col-md-6 col-xs-12">
                  <h6 class="site-footer__title">Hot Line</h6>
                  <ul class="site-footer__links-list list-unstyled" id="enquiryContactList"></ul>
                </div>
                <div class="col-md-6 col-xs-12 mt-2">
                  <h6 class="site-footer__title">Whatsapp</h6>
                  <ul class="site-footer__links-list list-unstyled" id="marketingContactList"></ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Useful Links -->
          <div class="col-xl-2 col-lg-3 col-md-6 mb-4">
            <div class="site-footer__links">
              <h4 class="site-footer__title" data-key="useful_links">Useful Links</h4>
              <ul class="site-footer__links-list list-unstyled">
                <li><a href="/privacy-policy" data-key="privacy_policy"><span class="icon-plus"></span> Privacy & Policy</a></li>
                <li><a href="/privacy-policy" data-key="terms_and_conditions"><span class="icon-plus"></span> Terms & Conditions</a></li>
              </ul>
            </div>
          </div>

          <!-- Social Icons -->
          <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
            <div class="site-footer__social-box">
              <h4 class="site-footer__title" data-key="follow_us">Follow Us:</h4>
              <div class="site-footer__social-box-inner d-flex gap-2 mt-2">
                <a href="#" target="_blank" id="linkedinUrl"><span class="fab fa-linkedin-in"></span></a>
                <a href="#" target="_blank" id="tiktokUrl"><svg fill="#fff" width="16px" height="16px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="#fff">
                    <path d="M19.589 6.686a4.793 4.793 0 0 1-3.77-4.245V2h-3.445v13.672a2.896 2.896 0 0 1-5.201 1.743l-.002-.001.002.001a2.895 2.895 0 0 1 3.183-4.51v-3.5a6.329 6.329 0 0 0-5.394 10.692 6.33 6.33 0 0 0 10.857-4.424V8.687a8.182 8.182 0 0 0 4.773 1.526V6.79a4.831 4.831 0 0 1-1.003-.104z"></path>
                  </svg>
                </a>
                <a href="#" target="_blank" id="facebookUrl"><span class="fab fa-facebook-f"></span></a>
                <a href="#" target="_blank" id="instagramUrl"><span class="fab fa-instagram"></span></a>
                <a href="#" target="_blank" id="twitterUrl">
                  <svg fill="#fff" width="16px" height="16px" viewBox="0 0 1200 1227" xmlns="http://www.w3.org/2000/svg" stroke="#fff">
                    <path d="M1124 0L694 530l480 697H876L594 826 244 1227H0l452-498L0 0h328l250 360L876 0zM852 1103h133L365 124 224 124 852 1103z" />
                  </svg>
                </a>
                <a href="#" target="_blank" id="spotifyUrl"><span class="fab fa-spotify"></span></a>

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Bottom Footer -->
  <div class="site-footer__bottom">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="site-footer__bottom-inner text-center">
            <p class="site-footer__copyright-text">
              Copyright © 2025 <a href="https://thaalam.ch" target="_blank" rel="noopener">Thaalam media Gmbh</a>. All Rights Reserved.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<script>
  function fetchContactInfo() {
    fetch("https://api.demoview.ch/summer-festival/api/contactus")
      .then(response => response.json())
      .then(result => {
        const data = result.data;
        // Address
        const addressParts = data.address.split(',');
        document.getElementById('footerAddressLine1').textContent = addressParts[0];
        document.getElementById('footerAddressLine2').textContent = addressParts.slice(1).join(',').trim();

        // Enquiry and Marketing sections
        const enquiryList = document.getElementById('enquiryContactList');
        const marketingList = document.getElementById('marketingContactList');
        enquiryList.innerHTML = '';
        marketingList.innerHTML = '';

        const enquiryHeading = enquiryList.closest('.col-md-6').querySelector('h6');
        const marketingHeading = marketingList.closest('.col-md-6').querySelector('h6');

        let hasEnquiryContent = false;
        let hasMarketingContent = false;

        // Enquiry numbers
        if (data.enquiry_mobile_numbers.length > 0 && data.enquiry_mobile_numbers[0] !== "") {
          data.enquiry_mobile_numbers.forEach(number => {
            const li = document.createElement('li');
            li.innerHTML = `<a href="tel:${number}"><span class="icon-phone"></span> +41 ${number}</a>`;
            enquiryList.appendChild(li);
          });
          hasEnquiryContent = true;
        }

        // Enquiry email
        if (data.event_enquiry_email) {
          const li = document.createElement('li');
          li.innerHTML = `<a href="mailto:${data.event_enquiry_email}"><span class="icon-envelope"></span> ${data.event_enquiry_email}</a>`;
          enquiryList.appendChild(li);
          hasEnquiryContent = true;
        }

        // Marketing numbers
        if (data.marketing_mobile_numbers.length > 0 && data.marketing_mobile_numbers[0] !== "") {
          data.marketing_mobile_numbers.forEach(number => {
            const li = document.createElement('li');
            li.innerHTML = `<a href="tel:${number}"><span class="icon-phone"></span> ${number}</a>`;
            marketingList.appendChild(li);
          });
          hasMarketingContent = true;
        }

        // Marketing email
        if (data.marketing_email) {
          const li = document.createElement('li');
          li.innerHTML = `<a href="mailto:${data.marketing_email}"><span class="icon-envelope"></span> ${data.marketing_email}</a>`;
          marketingList.appendChild(li);
          hasMarketingContent = true;
        }

        // Hide headings if no content
        if (!hasEnquiryContent) {
          enquiryHeading.style.display = 'none';
        }
        if (!hasMarketingContent) {
          marketingHeading.style.display = 'none';
        }

        // Social links
        const socialLinks = [{
            id: 'linkedinUrl',
            url: data.linkedIn_url
          },
          {
            id: 'tiktokUrl',
            url: data.tiktok_url
          },
          {
            id: 'facebookUrl',
            url: data.facebook_url
          },
          {
            id: 'instagramUrl',
            url: data.instagram_url
          },
          {
            id: 'twitterUrl',
            url: data.twitter_url
          },
          {
            id: 'spotifyUrl',
            url: data.spotify_url
          }
        ];

        socialLinks.forEach(link => {
          const element = document.getElementById(link.id);
          if (link.url) {
            element.href = link.url;
          } else {
            element.style.display = 'none';
          }
        });


      })
      .catch(error => {
        console.error('Error fetching contact info:', error);
      });
  }

  fetchContactInfo();
</script>