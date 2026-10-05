@php $headerFooter = App\Models\HeaderFooter::first(); @endphp

{{-- Flash Messages for Newsletter --}}
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show newsletter-alert" role="alert" style="position: fixed; top: 20px; right: 20px; z-index: 9999; max-width: 400px;">
        <i class="fas fa-check-circle"></i> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show newsletter-alert" role="alert" style="position: fixed; top: 20px; right: 20px; z-index: 9999; max-width: 400px;">
        <i class="fas fa-exclamation-triangle"></i> {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if($errors->has('EMAIL'))
    <div class="alert alert-danger alert-dismissible fade show newsletter-alert" role="alert" style="position: fixed; top: 20px; right: 20px; z-index: 9999; max-width: 400px;">
        <i class="fas fa-exclamation-triangle"></i> {{ $errors->first('EMAIL') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<script src="https://elfsightcdn.com/platform.js" async></script>
<div class="elfsight-app-9ab978ff-062c-4fbd-a620-56cf4b75f6c4" data-elfsight-app-lazy></div>

   <section class="section_footer-top">
          <div class="padding-global ">
            <div class="container  is-footer">
              <div class="padding-vertical footer-top">
                <div class="footer_top-component">
                  <div class="text-style-eyebrow text-color-purple-2">
                    Get Started Today
                  </div>
                  <div class="spacer-16"></div>
                  <h2 class="text-wrap-balance upper-footer-heading">
                  Credentialing with a <br> <span
                      class="text-color-dark-grey is-display-block"
                      > Competitive Edge</span
                    >
                  </h2>
                  <div class="spacer-17"></div>
                  <div class="footer_p-wrapper">
                    <div
                      class="text-size-medium text-color-black text-wrap-pretty"
                    >
                     Our professional credential services are fast, accurate, and insurer-aligned, helping you avoid missed revenue. 

                    </div>
                  </div>
                  <div class="spacer-22"></div>
                  <div class="button-group">
                    <a
                      href="/contact-us"
                      class="button is-primary is-platform-card-white w-button"
                      >Book an Appointment</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section_footer-bottom">
          <div class="padding-global bottom-footer-radius">
            <div class="container  is-footer">
              <div class="padding-vertical footer-bottom">
                <div class="footer-bottom_component">
                  <div class="footer-bottom_top-wrapper">
                    <div class="footer-bottom_left-wrapper">
                      <a
                        href="/"
                        aria-current="page"
                        class="footer-bottom_logo-wrapper w-inline-block w--current"
                        ><img
                          src=" https://altermed.unifysocialcraft.com/storage/logos/mYbrX0ZjtY91fIZzOX6WYQ0qwn3SzHIpX88UCFdR.png"
                          loading="lazy"
                          alt="Altermed Homepage"
                      /></a>
                      <div class="footer-bottom_links-wrapper">
                        <div class="footer-bottom_links-column">
                          <div class="text-style-eyebrow text-color-purple-2">
                           Who we serve
                          </div>
                          <div class="spacer-16"></div>
                          <ul
                            role="list"
                            class="footer-bottom_links-list w-list-unstyled"
                          >
                            <li class="footer-bottom_links-list-item">
                              <a
                                href="/platform#stream-composer"
                                class="text-style-footer-link"
                                >Provider Group</a
                              >
                            </li>
                            <li class="footer-bottom_links-list-item">
                              <a
                                href="/platform#demand-marketplace"
                                class="text-style-footer-link"
                                >Payer</a
                              >
                            </li>
                            <li class="footer-bottom_links-list-item">
                              <a href="/demos" class="text-style-footer-link"
                                >Health Systems</a
                              >
                            </li>
                            <li class="footer-bottom_links-list-item">
                              <a href="/demos" class="text-style-footer-link"
                                >RCM organizations</a
                              >
                            </li>
                          </ul>
                        </div>
                        <div class="footer-bottom_links-column is-right">
                          <div class="text-style-eyebrow text-color-purple-2">
                            Solutions
                          </div>
                          <div class="spacer-16"></div>
                          <ul
                            role="list"
                            class="footer-bottom_links-list w-list-unstyled"
                          >
                            <li class="footer-bottom_links-list-item">
                              <a
                                href="/solutions/for-brands"
                                class="text-style-footer-link"
                                >Credentialing</a
                              >
                            </li>
                            <li class="footer-bottom_links-list-item">
                              <a
                                href="/solutions/for-dtc"
                                class="text-style-footer-link"
                                >RCM</a
                              >
                            </li>
                            <li class="footer-bottom_links-list-item">
                              <a
                                href="/solutions/for-fast-channels"
                                class="text-style-footer-link"
                                >Medical Billing Services</a
                              >
                            </li>
                            <li class="footer-bottom_links-list-item">
                              <a
                                href="/solutions/for-fast-channels"
                                class="text-style-footer-link"
                                >Physician Billing Services</a
                              >
                            </li>
                          </ul>
                        </div>
                        <div class="footer-bottom_links-column">
                          <div class="text-style-eyebrow text-color-purple-2">
                            Resources
                          </div>
                          <div class="spacer-16"></div>
                          <ul
                            role="list"
                            class="footer-bottom_links-list w-list-unstyled"
                          >
                            <li
                              class="footer-bottom_links-list-item hide-mobile-landscape"
                            >
                              <a
                                href="/blog?4_0_category_equal=Articles"
                                class="text-style-footer-link"
                                >Articles</a
                              >
                            </li>
                            <li
                              class="footer-bottom_links-list-item is-mobile-landscape"
                            >
                              <a
                                href="/blog?4_1_category_equal=Articles"
                                class="text-style-footer-link"
                                >Articles</a
                              >
                            </li>
                            <li
                              class="footer-bottom_links-list-item hide-mobile-landscape"
                            >
                              <a
                                href="/blog?4_0_category_equal=Case+Studies"
                                class="text-style-footer-link"
                                >Case Studies</a
                              >
                            </li>
                            <li
                              class="footer-bottom_links-list-item is-mobile-landscape"
                            >
                              <a
                                href="/blog?4_1_category_equal=Case+Studies"
                                class="text-style-footer-link"
                                >Case Studies</a
                              >
                            </li>
                            <li
                              class="footer-bottom_links-list-item hide-mobile-landscape"
                            >
                              <a href="/press" class="text-style-footer-link"
                                >Press</a
                              >
                            </li>
                            <li
                              class="footer-bottom_links-list-item is-mobile-landscape"
                            >
                              <a href="/press" class="text-style-footer-link"
                                >Press</a
                              >
                            </li>
                          </ul>
                        </div>
                        <div class="footer-bottom_links-column is-right">
                          <div class="text-style-eyebrow text-color-purple-2">
                            Company
                          </div>
                          <div class="spacer-16"></div>
                          <ul
                            role="list"
                            class="footer-bottom_links-list w-list-unstyled"
                          >
                            <li class="footer-bottom_links-list-item">
                              <a href="/careers" class="text-style-footer-link"
                                >Careers</a
                              >
                            </li>
                            <li class="footer-bottom_links-list-item">
                              <a
                                href="/contact-us"
                                class="text-style-footer-link"
                                >About Us</a
                              >
                            </li>
                            <li class="footer-bottom_links-list-item">
                              <a
                                href="/contact-us"
                                class="text-style-footer-link"
                                >Contact Us</a
                              >
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="footer-bottom_socials-wrapper">
                      <a
                        aria-label="Facebook Profile Opens In A New Tab"
                        href=" "
                        target="_blank"
                        class="footer-bottom_socials-item w-inline-block"
                        ><div class="icon-embed w-embed">
                          <svg
                            width="100%"
                            height="100%"
                            viewBox="0 0 17 17"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M16.2353 8.91176C16.2353 13.0657 13.096 16.4903 9.10064 16.9977V11.4168H11.2886L11.7325 8.91176H9.10064V8.05561C9.10064 6.72381 9.608 6.21645 10.9398 6.21645C11.352 6.21645 11.6691 6.24816 11.8594 6.24816V4.02849C11.5106 3.90165 10.6227 3.80653 10.1153 3.80653C7.38833 3.80653 6.15165 5.10662 6.15165 7.86535V8.91176H4.47105V11.4168H6.15165V16.8074C2.60018 15.9196 0 12.7169 0 8.91176C0 4.44072 3.61489 0.794117 8.11765 0.794117C12.5887 0.794117 16.2353 4.44072 16.2353 8.91176Z"
                              fill="currentColor"
                            />
                          </svg></div></a
                      ><a
                        aria-label="X Profile Opens In A New Tab"
                        href=" "
                        target="_blank"
                        class="footer-bottom_socials-item w-inline-block"
                        ><div class="icon-embed w-embed">
                          <svg
                            width="100%"
                            height="100%"
                            viewBox="0 0 15 14"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M11.5704 0.316176H13.79L8.90677 5.92877L14.6779 13.5074H10.1751L6.62368 8.90947L2.59656 13.5074H0.345186L5.57726 7.54596L0.0598001 0.316176H4.6894L7.86035 4.53355L11.5704 0.316176ZM10.7776 12.1756H12.0143L4.0235 1.58456H2.69169L10.7776 12.1756Z"
                              fill="currentColor"
                            />
                          </svg></div></a
                      ><a
                        aria-label="YouTube Channel Opens In A New Tab"
                        href=" "
                        target="_blank"
                        class="footer-bottom_socials-item is-youtube w-inline-block"
                        ><div class="icon-embed w-embed">
                          <svg
                            width="100%"
                            height="100%"
                            viewBox="0 0 19 13"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M17.8791 2.75781C18.2596 4.08961 18.2596 6.94347 18.2596 6.94347C18.2596 6.94347 18.2596 9.76562 17.8791 11.1291C17.6889 11.8902 17.0864 12.4609 16.3571 12.6512C14.9936 13 9.60293 13 9.60293 13C9.60293 13 4.1806 13 2.81709 12.6512C2.08777 12.4609 1.48529 11.8902 1.29503 11.1291C0.914515 9.76562 0.914515 6.94347 0.914515 6.94347C0.914515 6.94347 0.914515 4.08961 1.29503 2.75781C1.48529 1.99678 2.08777 1.3943 2.81709 1.20404C4.1806 0.823529 9.60293 0.823529 9.60293 0.823529C9.60293 0.823529 14.9936 0.823529 16.3571 1.20404C17.0864 1.3943 17.6889 1.99678 17.8791 2.75781ZM7.8272 9.51195L12.33 6.94347L7.8272 4.375V9.51195Z"
                              fill="currentColor"
                            />
                          </svg></div></a
                      ><a
                        aria-label="Instagram Profile Opens In A New Tab"
                        href=" /"
                        target="_blank"
                        class="footer-bottom_socials-item is-instagram w-inline-block"
                        ><div class="icon-embed w-embed">
                          <svg
                            width="100%"
                            height="100%"
                            viewBox="0 0 15 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M7.80887 4.26517C9.80658 4.26517 11.4555 5.91406 11.4555 7.91176C11.4555 9.94118 9.80658 11.5584 7.80887 11.5584C5.77946 11.5584 4.16227 9.94118 4.16227 7.91176C4.16227 5.91406 5.77946 4.26517 7.80887 4.26517ZM7.80887 10.29C9.10897 10.29 10.1554 9.24357 10.1554 7.91176C10.1554 6.61167 9.10897 5.56526 7.80887 5.56526C6.47707 5.56526 5.43066 6.61167 5.43066 7.91176C5.43066 9.24357 6.50878 10.29 7.80887 10.29ZM12.4385 4.13833C12.4385 3.66268 12.058 3.28217 11.5823 3.28217C11.1067 3.28217 10.7262 3.66268 10.7262 4.13833C10.7262 4.61397 11.1067 4.99449 11.5823 4.99449C12.058 4.99449 12.4385 4.61397 12.4385 4.13833ZM14.8484 4.99449C14.9118 6.16774 14.9118 9.6875 14.8484 10.8608C14.785 12.0023 14.5313 12.9853 13.7069 13.8415C12.8824 14.6659 11.8677 14.9196 10.7262 14.983C9.5529 15.0464 6.03314 15.0464 4.85988 14.983C3.71834 14.9196 2.73534 14.6659 1.87919 13.8415C1.05474 12.9853 0.801061 12.0023 0.737642 10.8608C0.674223 9.6875 0.674223 6.16774 0.737642 4.99449C0.801061 3.85294 1.05474 2.83824 1.87919 2.01379C2.73534 1.18934 3.71834 0.935662 4.85988 0.872242C6.03314 0.808823 9.5529 0.808823 10.7262 0.872242C11.8677 0.935662 12.8824 1.18934 13.7069 2.01379C14.5313 2.83824 14.785 3.85294 14.8484 4.99449ZM13.3263 12.0974C13.7069 11.1778 13.6117 8.95818 13.6117 7.91176C13.6117 6.89706 13.7069 4.67739 13.3263 3.7261C13.0727 3.12362 12.597 2.61627 11.9945 2.3943C11.0432 2.01379 8.82358 2.10892 7.80887 2.10892C6.76246 2.10892 4.54279 2.01379 3.62321 2.3943C2.98902 2.64798 2.51338 3.12362 2.2597 3.7261C1.87919 4.67739 1.97431 6.89706 1.97431 7.91176C1.97431 8.95818 1.87919 11.1778 2.2597 12.0974C2.51338 12.7316 2.98902 13.2073 3.62321 13.4609C4.54279 13.8415 6.76246 13.7463 7.80887 13.7463C8.82358 13.7463 11.0432 13.8415 11.9945 13.4609C12.597 13.2073 13.1044 12.7316 13.3263 12.0974Z"
                              fill="currentColor"
                            />
                          </svg></div
                      ></a>
                    </div>
                  </div>
                  <div class="spacer-32"></div>
                  <div class="footer-bottom_div-line"></div>
                  <div class="spacer-20"></div>
                  <div
                    class="footer-bottom_bottom-wrapper hide-mobile-landscape"
                  >
                    <div class="footer-bottom_bottom-left">
                      <div class="footer-bottom_copyright-wrapper">
                        <div class="footer-bottom_legals-text">
                          © <span class="footer-year">2025</span> Altermed. All
                          rights reserved.
                        </div>
                      </div>
                      <div class="w-dyn-list">
                        <div
                          role="list"
                          class="footer-bottom_terms-wrapper w-dyn-items"
                        >
                          <div role="listitem" class="w-dyn-item">
                            <a
                              href="/terms/terms-of-use"
                              class="footer-bottom_legals-text w-condition-invisible w-dyn-bind-empty"
                            ></a
                            ><a
                              href="/terms/terms-of-use"
                              class="footer-bottom_legals-text"
                              >Terms of Use</a
                            >
                          </div>
                          <div role="listitem" class="w-dyn-item">
                            <a
                              href="/terms/security-policy"
                              class="footer-bottom_legals-text"
                              >Security Policy</a
                            > 
                          </div>
                          <div role="listitem" class="w-dyn-item">
                            <a
                              href="/terms/privacy-policy"
                              class="footer-bottom_legals-text"
                              >Privacy Policy</a
                            > 
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="footer-bottom_bottom-right">
                      <div class="footer-bottom_legals-text">
                        Site by
                        <a href="#" target="_blank"
                          >Altermed</a>.
                      </div>
                    </div>
                  </div>
                  <div
                    class="footer-bottom_bottom-wrapper show-mobile-landscape"
                  >
                    <div class="footer-bottom_bottom-left">
                      <div class="collection-list-wrapper-3 w-dyn-list">
                        <div
                          role="list"
                          class="footer-bottom_terms-wrapper w-dyn-items"
                        >
                          <div
                            role="listitem"
                            class="collection-item-2 w-dyn-item"
                          >
                            <a
                              href="/terms/terms-of-use"
                              class="footer-bottom_legals-text"
                              >Terms of Use</a
                            ><a
                              href="/terms/terms-of-use"
                              class="footer-bottom_legals-text w-condition-invisible w-dyn-bind-empty"
                            ></a>
                            <div class="footer-bottom_legals-div-text">|</div>
                          </div>
                          <div
                            role="listitem"
                            class="collection-item-2 w-dyn-item"
                          >
                            <a
                              href="/terms/security-policy"
                              class="footer-bottom_legals-text w-condition-invisible"
                              >Security Policy</a
                            > 
                            <div class="footer-bottom_legals-div-text">|</div>
                          </div>
                          <div
                            role="listitem"
                            class="collection-item-2 w-dyn-item"
                          >
                            <a
                              href="/terms/privacy-policy"
                              class="footer-bottom_legals-text w-condition-invisible"
                              >Privacy Policy</a
                            > 
                            <div
                              class="footer-bottom_legals-div-text w-condition-invisible"
                            >
                              |
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="footer-bottom_bottom-right">
                        <div class="footer-bottom_legals-text">
                          Site by
                          <a href=" " target="_blank"
                            >Altermed</a
                          >.
                        </div>
                      </div>
                      <div class="footer-bottom_copyright-wrapper">
                        <div class="footer-bottom_legals-text">
                          © 2025 Altermed. All rights reserved.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

      <!-- /.main-footer -->
   </div>

   <!-- Newsletter Styles -->
   <style>
   /* Newsletter Loading Overlay */
   .newsletter-loading-overlay {
       position: fixed;
       top: 0;
       left: 0;
       width: 100%;
       height: 100%;
       background-color: rgba(0, 0, 0, 0.7);
       z-index: 9999;
       display: flex;
       justify-content: center;
       align-items: center;
   }

   .newsletter-loading-content {
       background: white;
       padding: 30px;
       border-radius: 10px;
       text-align: center;
       box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
       max-width: 400px;
       width: 90%;
   }

   .newsletter-spinner {
       font-size: 48px;
       color: #00cde5;
       margin-bottom: 20px;
   }

   .newsletter-spinner .fa-spinner {
       animation: fa-spin 1s linear infinite;
   }

   .newsletter-loading-text {
       color: #333;
       font-size: 16px;
       line-height: 1.4;
   }

   .newsletter-loading-text strong {
       display: block;
       margin-bottom: 5px;
       color: #00cde5;
   }

   /* Newsletter Success Modal */
   .newsletter-modal {
       position: fixed;
       top: 0;
       left: 0;
       width: 100%;
       height: 100%;
       background-color: rgba(0, 0, 0, 0.7);
       z-index: 10000;
       display: flex;
       justify-content: center;
       align-items: center;
   }

   .newsletter-modal-content {
       background: white;
       border-radius: 10px;
       width: 90%;
       max-width: 500px;
       box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
       animation: modalFadeIn 0.3s ease-out;
   }

   @keyframes modalFadeIn {
       from {
           opacity: 0;
           transform: scale(0.9);
       }
       to {
           opacity: 1;
           transform: scale(1);
       }
   }

   .newsletter-modal-header {
       padding: 20px 30px;
       border-bottom: 1px solid #eee;
       display: flex;
       justify-content: space-between;
       align-items: center;
   }

   .newsletter-modal-header h3 {
       margin: 0;
       color: #28a745;
       font-size: 24px;
   }

   .newsletter-modal-header .text-success {
       color: #28a745 !important;
   }

   .newsletter-modal-close {
       font-size: 28px;
       font-weight: bold;
       color: #aaa;
       cursor: pointer;
       transition: color 0.3s;
   }

   .newsletter-modal-close:hover {
       color: #000;
   }

   .newsletter-modal-body {
       padding: 30px;
       text-align: center;
   }

   .newsletter-modal-body p {
       margin: 0;
       font-size: 16px;
       line-height: 1.5;
       color: #333;
   }

   /* Form disabled state */
   .newsletter-form input:disabled,
   .newsletter-form button:disabled {
       opacity: 0.6;
       cursor: not-allowed;
   }

   /* Responsive design */
   @media (max-width: 768px) {
       .newsletter-loading-content,
       .newsletter-modal-content {
           margin: 20px;
           padding: 20px;
       }

       .newsletter-modal-header {
           padding: 15px 20px;
       }

       .newsletter-modal-body {
           padding: 20px;
       }
   }
   .eapps-instagram-feed.es-widget{
   position: relative;    bottom: -41px;    z-index: 1;
}
.section_footer-top{
     z-index: 2;
      position: relative; 
}
   </style>

   <!-- Newsletter JavaScript -->
   <script>
   document.addEventListener('DOMContentLoaded', function() {
       const newsletterForm = document.getElementById('newsletter-form');
       const loadingOverlay = document.getElementById('newsletter-loading-overlay');
       const successModal = document.getElementById('newsletter-success-modal');
       const modalClose = document.getElementById('newsletter-modal-close');
       const newsletterEmail = document.getElementById('newsletter-email');
       const newsletterSubmit = document.getElementById('newsletter-submit');

       if (newsletterForm) {
           newsletterForm.addEventListener('submit', function(e) {
               e.preventDefault();

               const formData = new FormData(this);

               // Add CSRF token
               const csrfToken = document.querySelector('meta[name="csrf-token"]');
               if (csrfToken) {
                   formData.append('_token', csrfToken.getAttribute('content'));
               }

               // Show loading overlay
               loadingOverlay.style.display = 'flex';

               // Disable form elements
               newsletterEmail.disabled = true;
               newsletterSubmit.disabled = true;
               newsletterSubmit.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';

               // Send AJAX request
               fetch(this.action, {
                   method: 'POST',
                   body: formData,
                   headers: {
                       'X-Requested-With': 'XMLHttpRequest'
                   }
               })
               .then(response => response.json())
               .then(data => {
                   // Hide loading overlay
                   loadingOverlay.style.display = 'none';

                   if (data.result === 'success') {
                       // Show success modal
                       document.getElementById('newsletter-modal-message').textContent = data.msg;
                       successModal.style.display = 'flex';

                       // Reset form
                       newsletterForm.reset();
                   } else {
                       // Show error message
                       alert('Error: ' + data.msg);
                   }
               })
               .catch(error => {
                   // Hide loading overlay
                   loadingOverlay.style.display = 'none';

                   // Show error message
                   alert('An error occurred. Please try again.');
                   console.error('Newsletter subscription error:', error);
               })
               .finally(() => {
                   // Re-enable form elements
                   newsletterEmail.disabled = false;
                   newsletterSubmit.disabled = false;
                   newsletterSubmit.innerHTML = '<i class="fas fa-paper-plane"></i>';
               });
           });
       }

       // Close modal when clicking the close button
       if (modalClose) {
           modalClose.addEventListener('click', function() {
               successModal.style.display = 'none';
           });
       }

       // Close modal when clicking outside
       if (successModal) {
           successModal.addEventListener('click', function(e) {
               if (e.target === successModal) {
                   successModal.style.display = 'none';
               }
           });
       }

       // Close modal on Escape key
       document.addEventListener('keydown', function(e) {
           if (e.key === 'Escape' && successModal.style.display === 'flex') {
               successModal.style.display = 'none';
           }
       });
   });
   </script>