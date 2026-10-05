@php
    $headerFooter = App\Models\HeaderFooter::first();
    $billingServices = App\Models\ServicePage::where('service_type', 'Billing services')->where('is_active', 1)->latest()->take(3)->get();
    $credentialedServices = App\Models\ServicePage::where('service_type', 'Credentialed')->where('is_active', 1)->latest()->take(3)->get();
    $weServeServices = App\Models\ServicePage::where('service_type', 'We Serve')->where('is_active', 1)->latest()->take(3)->get();
    $footerTopSection = App\Models\FooterTopSection::first();
@endphp

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
<!--<div class="elfsight-app-9ab978ff-062c-4fbd-a620-56cf4b75f6c4" data-elfsight-app-lazy></div>-->
 

@if(Request::is('other-service'))
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
                  Fast & Reliable Licensing Solutions for  <br> <span
                      class="text-color-dark-grey is-display-block"
                      >Your Practice  </span
                    >
                  </h2>
                  <div class="spacer-17"></div>
                  <div class="footer_p-wrapper">
                    <div
                      class="text-size-medium text-color-black text-wrap-pretty"
                    >
                    Medical licensing can be time-consuming and overwhelming but not with AlterMed RCM. Our licensing services simplify the process, ensure compliance, and help your practice become operational without delays.  

                    </div>
                  </div>
                  <div class="spacer-22"></div>
                  <div class="button-group">
                    <a
                      href="/contact"
                      class="button is-primary is-platform-card-white w-button"
                      >Book an Appointment</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section> 

@else

 
@if($footerTopSection)
   <section class="section_footer-top">
          <div class="padding-global ">
            <div class="container  is-footer">
              <div class="padding-vertical footer-top">
                <div class="footer_top-component">
                  <div class="text-style-eyebrow text-color-purple-2">
                    {{ $footerTopSection->eyebrow_text ?? 'Get Started Today' }}
                  </div>
                  <div class="spacer-16"></div>
                  <h2 class="text-wrap-balance upper-footer-heading">
                  {{ $footerTopSection->main_title ?? 'Credentialing with a' }} <br> <span
                      class="text-color-dark-grey is-display-block"
                      >{{ $footerTopSection->main_title_highlight ?? 'Competitive Edge' }}</span
                    >
                  </h2>
                  <div class="spacer-17"></div>
                  <div class="footer_p-wrapper">
                    <div
                      class="text-size-medium text-color-black text-wrap-pretty"
                    >
                     {{ $footerTopSection->description ?? 'Our professional credential services are fast, accurate, and insurer-aligned, helping you avoid missed revenue.' }}

                    </div>
                  </div>
                  <div class="spacer-22"></div>
                  <div class="button-group">
                    <a
                      href="{{ $footerTopSection->button_url ?? '/contact' }}"
                      class="button is-primary is-platform-card-white w-button"
                      >{{ $footerTopSection->button_text ?? 'Book an Appointment' }}</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>
 
@endif
  
@endif

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
                            @foreach($weServeServices as $service)
                            <li class="footer-bottom_links-list-item">
                              <a
                                href="{{ route('service.show', $service->slug) }}"
                                class="text-style-footer-link"
                                >{{ $service->service_banner_title }}</a
                              >
                            </li>
                            @endforeach
                          </ul>
                        </div>
                        <div class="footer-bottom_links-column is-right">
                          <div class="text-style-eyebrow text-color-purple-2">
                           
                          Credentialing
                          </div>
                          <div class="spacer-16"></div>
                          <ul
                            role="list"
                            class="footer-bottom_links-list w-list-unstyled"
                          >
                            @foreach($credentialedServices as $service)
                            <li class="footer-bottom_links-list-item">
                              <a
                                href="{{ route('service.show', $service->slug) }}"
                                class="text-style-footer-link"
                                >{{ $service->service_banner_title }}</a
                              >
                            </li>
                            @endforeach
                          </ul>
                        </div>
                        <div class="footer-bottom_links-column">
                          <div class="text-style-eyebrow text-color-purple-2">
                           Services
                          </div>
                          <div class="spacer-16"></div>
                          <ul
                            role="list"
                            class="footer-bottom_links-list w-list-unstyled"
                          >
                            @foreach($billingServices as $service)
                            <li class="footer-bottom_links-list-item">
                              <a
                                href="{{ route('service.show', $service->slug) }}"
                                class="text-style-footer-link"
                                >{{ $service->service_banner_title }}</a
                              >
                            </li>
                            @endforeach
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
                              <a href="/blogs" class="text-style-footer-link"
                                >Blogs</a
                              >
                            </li>
                            <li class="footer-bottom_links-list-item">
                              <a
                                href="/about-us"
                                class="text-style-footer-link"
                                >About Us</a
                              >
                            </li>
                            <li class="footer-bottom_links-list-item">
                              <a
                                href="/contact"
                                class="text-style-footer-link"
                                >Contact Us</a
                              >
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    
                    
                    <div class="footer-bottom_socials-wrapper">
                 @if(!empty($globalExtraIcons)) @foreach($globalExtraIcons as $icon)
          <a href="{{ $icon['url'] }}" target="_blank" rel="noopener">
            {!! str_replace('fa ', 'fab ', $icon['icon']) !!}
            <span class="sr-only">
              {{ ucfirst(str_replace('www.', '', parse_url($icon['url'],
              PHP_URL_HOST))) }}
            </span>
          </a>
          @endforeach @else {{-- Fallback agar DB empty ho --}}
          <a href="https://twitter.com">
            <i class="fab fa-twitter" aria-hidden="true"></i>
            <span class="sr-only">Twitter</span>
          </a>
          <a href="https://facebook.com">
            <i class="fab fa-facebook" aria-hidden="true"></i>
            <span class="sr-only">Facebook</span>
          </a>
          <a href="https://pinterest.com">
            <i class="fab fa-pinterest-p" aria-hidden="true"></i>
            <span class="sr-only">Pinterest</span>
          </a>
          <a href="https://instagram.com">
            <i class="fab fa-instagram" aria-hidden="true"></i>
            <span class="sr-only">Instagram</span>
          </a>
          @endif
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
                              href="{{('/terms')}}"
                              class="footer-bottom_legals-text w-condition-invisible w-dyn-bind-empty"
                            ></a
                            ><a
                              href="{{('/terms')}}"
                              class="footer-bottom_legals-text"
                              >Terms of Use</a
                            >
                          </div>
                          <div role="listitem" class="w-dyn-item">
                            <a
                              href="{{('/security')}}"
                              class="footer-bottom_legals-text"
                              >Security Policy</a
                            > 
                          </div>
                          <div role="listitem" class="w-dyn-item">
                            <a
                              href="{{'/privacy-policy'}}"
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
                              href="{{('/terms')}}"
                              class="footer-bottom_legals-text"
                              >Terms of Use</a
                            ><a
                              href="{{('/terms')}}"
                              class="footer-bottom_legals-text w-condition-invisible w-dyn-bind-empty"
                            ></a>
                            <div class="footer-bottom_legals-div-text">|</div>
                          </div>
                          <div
                            role="listitem"
                            class="collection-item-2 w-dyn-item"
                          >
                            <a
                              href="{{('/security')}}"
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
                              href="{{'/privacy-policy'}}"
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