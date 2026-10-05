<div class="topbar-one">
  <div
    class="topbar-one__bg"
    style="background-image: url('{{ asset('guest/assets/images/pattern/header-top-pattern.png') }}');"
  ></div>
  <div class="container">
    <div class="topbar-one__inner">
      <ul class="list-unstyled topbar-one__info">
        <li class="topbar-one__info__item">
          <i class="fas fa-map-marker-alt"></i>
          <a class="color-white"
            >{{ $globalContactDetails['office_address'] ?? '' }}</a
          >
        </li>
        <li class="topbar-one__info__item">
          <i class="fas fa-envelope"></i>
          <a href="mailto:info@altermedrcm.com"
            >{{ $globalContactDetails['email'] ?? '' }}</a
          >
        </li>
      </ul>
      <!-- /.list-unstyled topbar-one__info -->
      <div class="topbar-one__right">
        <div class="topbar-one__social">
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
        <!-- /.topbar-one__social -->
      </div>
      <!-- /.topbar-one__right -->
    </div>
    <!-- /.topbar-one__inner -->
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /.topbar-one -->
@php $headerFooter = App\Models\HeaderFooter::first(); @endphp
<header class="main-header sticky-header sticky-header--normal">
  <div class="container-fluid max-w-1800">
       
    <div class="main-header__inner ">
         
      <div class="main-header__logo">
        <a href="{{('/')}}">
          <img
            src="{{ $headerFooter && $headerFooter->header_logo ? asset('storage/' . $headerFooter->header_logo) : asset('guest/assets/images/logo-altermed-1.png') }}"
            alt="altermed HTML"
            class="altermed-header-logo"
          />
        </a>
      </div>
      <!-- /.main-header__logo -->
      <div class="main-header__nav__wrapper">
        <nav class="main-header__nav main-menu">
          <ul class="main-menu__list">
            <li
              class="megamenu {{ request()->routeIs('home') ? 'active current' : '' }}"
            >
              <a href="{{ route('home') }}">Home</a>
            </li>
            <li class="dropdown megamenu  ">
              <a href="#"> Credentialing</a>
              <ul>
                <li>
                  <section class="home-showcase">
                    <div class="container-fluid">
                      <div class="home-showcase__inner">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 mobile-d-none border-right-nav">
                            <div class="demo-one__card">
                              <!-- From Uiverse.io by iconicchandu (Classnames Safeguarded) -->
                              <div class=" my-4">
  <div class="card border-0   position-relative">
    <!-- Glow effect -->
    

    <div class="card-body bg-white rounded-4 position-relative" style="z-index:1;">
      <!-- Header -->
      <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
          <h5 class="fw-bold unique-text-gradient m-0">Premium Analytics</h5>
          <small class="text-muted">Enterprise Dashboard</small>
        </div>
        <div class="d-flex align-items-center px-3 py-1 rounded-pill bg-success bg-opacity-10">
          <span class="unique-pulse-dot me-2"></span>
          <span class="text-success fw-medium small">Active</span>
        </div>
      </div>

      <!-- Stats Grid -->
      <div class="row g-3 mb-4">
        <div class="col-4">
          <div class="p-3 rounded bg-light position-relative">
            <div>
              <span class="h4 fw-bold text-success">98%</span><br>
              <small class="text-muted">Accuracy</small>
            </div>
            <div class="unique-bar position-absolute bottom-0 start-0 w-100"></div>
          </div>
        </div>
        <div class="col-4">
          <div class="p-3 rounded bg-light position-relative">
            <div>
              <span class="h4 fw-bold text-primary">3.2k+</span><br>
              <small class="text-muted">Network</small>
            </div>
            <div class="unique-bar position-absolute bottom-0 start-0 w-100"></div>
          </div>
        </div>
        <div class="col-4">
          <div class="p-3 rounded bg-light position-relative">
            <div>
              <span class="h4 fw-bold text-success">+45%</span><br>
              <small class="text-muted">Growth</small>
            </div>
            <div class="unique-bar position-absolute bottom-0 start-0 w-100"></div>
          </div>
        </div>
      </div>

      <!-- Progress bar -->
      <div class="mb-4">
        <div class="d-flex justify-content-between small text-muted mb-1">
          <span>Enhanced Performance</span>
          <span>78%</span>
        </div>
        <div class="progress rounded-pill" style="height:8px;">
          <div class="progress-bar unique-progress" role="progressbar" style="width:78%;"></div>
        </div>
      </div>

      <!-- Footer -->
      <div class="d-flex justify-content-end align-items-center">
        
        <button class="btn unique-btn px-4 fw-medium">
          View Details
        </button>
      </div>
    </div>
  </div>
</div>
                            </div>
                            <!-- /.demo-one__card -->
                          </div>
                          <div class="col-md-8 col-lg-8">
                                  <div class="msgbox-item-heading text-left">
                                    <span>Get Credentialed</span>
                                  </div>
                            <div class="demo-one__card ">
                              <div class="msgbox-card">
                                <div class="msgbox-list row">
                                  <div class="msgbox-item msgbox-item-industry col-lg-6 ">
                                    <div class="msgbox-icon">
                                      <i class="fa-solid fa-check-double"></i>
                                    </div>
                                    <div class="msgbox-info">
                                      <div class="msgbox-header">
                                        <div class="msgbox-title">
                                         CredentialStream
                                        </div>
                                      </div>
                                      <div class="msgbox-content">
                                      Designed to support both acute and no...
                                      </div>
                                    </div>
                                  </div>
                                  <div class="msgbox-item msgbox-item-industry col-lg-6">
                                    <div class="msgbox-icon">
                                      <i class="fa-solid fa-check-double"></i>
                                    </div>
                                    <div class="msgbox-info">
                                      <div class="msgbox-header">
                                        <div class="msgbox-title">
                                          CredentialStream Hub
                                        </div>
                                      </div>
                                      <div class="msgbox-content">
                                       Connect directly to key credentialing data via an alwa...
                                      </div>
                                    </div>
                                  </div> 
                                  <div class="msgbox-item msgbox-item-industry col-lg-6">
                                    <div class="msgbox-icon">
                                      <i class="fa-solid fa-check-double"></i>
                                    </div>
                                    <div class="msgbox-info">
                                      <div class="msgbox-header">
                                        <div class="msgbox-title">
                                         Network by HealthStream
                                        </div>
                                      </div>
                                      <div class="msgbox-content">
                                        Boost efficiency, reduce claims error...
                                      </div>
                                    </div>
                                  </div>
                                  <div class="msgbox-item msgbox-item-industry col-lg-6">
                                    <div class="msgbox-icon">
                                      <i class="fa-solid fa-check-double"></i>
                                    </div>
                                    <div class="msgbox-info">
                                      <div class="msgbox-header">
                                        <div class="msgbox-title">
                                         HealthStream CVO
                                        </div>
                                      </div>
                                      <div class="msgbox-content">
                                        Save time, improve data accuracy, and ensu...
                                      </div>
                                    </div>
                                  </div>
                                  <div class="msgbox-item msgbox-item-industry col-lg-6">
                                    <div class="msgbox-icon">
                                      <i class="fa-solid fa-check-double"></i>
                                    </div>
                                    <div class="msgbox-info">
                                      <div class="msgbox-header">
                                        <div class="msgbox-title">
                                         CredentialStream for Groups
                                        </div>
                                      </div>
                                      <div class="msgbox-content">
                                        Manage provider data and improve administrat...
                                      </div>
                                    </div>
                                  </div>
                                  <div class="msgbox-item msgbox-item-industry col-lg-6">
                                    <div class="msgbox-icon">
                                      <i class="fa-solid fa-check-double"></i>
                                    </div>
                                    <div class="msgbox-info">
                                      <div class="msgbox-header">
                                        <div class="msgbox-title">
                                        Provider Validate
                                        </div>
                                      </div>
                                      <div class="msgbox-content">
                                        Verify referring providers at the speed of mod...
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- /.col-md-6 col-lg-3 -->
                          
                          <!-- /.col-md-6 col-lg-3 -->
                        </div>
                        <!-- /.row -->
                      </div>
                      <!-- /.home-showcase__inner -->
                    </div>
                    <!-- /.container -->
                  </section>
                </li>
              </ul>
            </li>
            
            <li
              class="{{ request()->routeIs('service') ? 'active current' : '' }} dropdown megamenu "
            >
              <a href="{{ route('service') }}">Services</a>
              <ul>
                <li>
                  <section class="home-showcase">
                    <div class="container-fluid">
                      <div class="home-showcase__inner">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="demo-one__card">
                              <div class="msgbox-card">
                                <div class="msgbox-list">
                                  <div class="msgbox-item-heading text-left">
                                    <span>Billing services</span>
                                  </div>

                                  <div class="msgbox-item">
                                    <div class="msgbox-icon">
                                      <i class="fa-solid fa-check-double"></i>
                                    </div>
                                    <div class="msgbox-info">
                                      <div class="msgbox-header">
                                        <div class="msgbox-title">
                                        <a href="https://altermed.unifysocialcraft.com/service/medical-coding-and-billing#active"> Medical Coding and Billing</a>
                                        </div>
                                      </div>
                                      <div class="msgbox-content">
                                        Centralize provider data to ensure comp
                                      </div>
                                    </div>
                                  </div>
                                  <div class="msgbox-item">
                                    <div class="msgbox-icon">
                                      <i class="fa-solid fa-check-double"></i>
                                    </div>
                                    <div class="msgbox-info">
                                      <div class="msgbox-header">
                                        <div class="msgbox-title">
                                      <a href="https://altermed.unifysocialcraft.com/service/physician-billing-servies#active">     Physician Billing Services</a>
                                        </div>
                                      </div>
                                      <div class="msgbox-content">
                                        Continuously track provider sanctions,
                                        exclusi...
                                      </div>
                                    </div>
                                  </div>

                                  <div class="msgbox-item">
                                    <div class="msgbox-icon">
                                      <i class="fa-solid fa-check-double"></i>
                                    </div>
                                    <div class="msgbox-info">
                                      <div class="msgbox-header">
                                        <div class="msgbox-title">
                                         <a href="https://altermed.unifysocialcraft.com/service/denial-management-services#active">    Denial Management services</a>
                                        </div>
                                      </div>
                                      <div class="msgbox-content">
                                        Get the best Denial Management services
                                        from ex...
                                      </div>
                                    </div>
                                  </div>
                                  <div class="msgbox-item">
                                    <div class="msgbox-icon">
                                      <i class="fa-solid fa-check-double"></i>
                                    </div>
                                    <div class="msgbox-info">
                                      <div class="msgbox-header">
                                        <div class="msgbox-title">
                                          DME/POS Services
                                        </div>
                                      </div>
                                      <div class="msgbox-content">
                                        The Best DME Billing Services for
                                        Enhanced Revenu...
                                      </div>
                                    </div>
                                  </div>
                                  <div class="msgbox-item">
                                    <div class="msgbox-icon">
                                      <i class="fa-solid fa-check-double"></i>
                                    </div>
                                    <div class="msgbox-info">
                                      <div class="msgbox-header">
                                        <div class="msgbox-title">
                                          Physician Billing Services
                                        </div>
                                      </div>
                                      <div class="msgbox-content">
                                        Get Tailored Physician Medical Billing
                                        Services...
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /.demo-one__card -->
                          </div>
                          <!-- /.col-md-6 col-lg-3 -->
                          <div class="col-md-6 col-lg-4">
                            <div class="demo-one__card">
                              <div class="msgbox-card">
                                <div class="msgbox-list">
                                  <div class="msgbox-item-heading text-left">
                                    <span>Get Credentialed</span>
                                  </div>
                                   
                                  <div class="msgbox-item">
                                    <div class="msgbox-icon">
                                      <i class="fa-solid fa-check-double"></i>
                                    </div>
                                    <div class="msgbox-info">
                                      <div class="msgbox-header">
                                        <div class="msgbox-title">
                                          CVO Credentialing
                                        </div>
                                      </div>
                                      <div class="msgbox-content">
                                        Streamline credentialing to NCQA and TJC
                                        standards from PSV to committee
                                        management.
                                      </div>
                                    </div>
                                  </div>
                                  <div class="msgbox-item">
                                    <div class="msgbox-icon">
                                      <i class="fa-solid fa-check-double"></i>
                                    </div>
                                    <div class="msgbox-info">
                                      <div class="msgbox-header">
                                        <div class="msgbox-title">
                                          Privileging
                                        </div>
                                      </div>
                                      <div class="msgbox-content">
                                        Accelerate privileging with automated
                                        workflows and seamless hospital
                                        coordination.
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /.demo-one__card -->
                          </div>
                          <!-- /.col-md-6 col-lg-3 -->
                          <div class="col-md-6 col-lg-4 mobile-d-none">
                            <div class="demo-one__card">
                              <!-- From Uiverse.io by iconicchandu (Classnames Safeguarded) -->
                              <div class="successcard">
                                <div class="successcard__border"></div>
                                <div class="successcard_title__container">
                                  <span class="successcard_title"
                                    >Keys to Success</span
                                  >
                                  <p class="successcard_paragraph" style="line-height:18px">
                                  Credentialing That Works the First Time, Get approved faster and with less stress.
                                  </p>
                                </div>
                                <hr class="successcard_line" />
                                <ul class="successcard__list">
                                  <li class="successcard__list_item">
                                    <span class="successcard_check">
                                      <svg
                                        class="successcard_check_svg"
                                        fill="currentColor"
                                        viewBox="0 0 16 16"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path
                                          clip-rule="evenodd"
                                          d="M12.416 3.376a.75.75 0 0 1 .208 1.04l-5 7.5a.75.75 0 0 1-1.154.114l-3-3a.75.75 0 0 1 1.06-1.06l2.353 2.353 4.493-6.74a.75.75 0 0 1 1.04-.207Z"
                                          fill-rule="evenodd"
                                        ></path>
                                      </svg>
                                    </span>
                                    <span class="successcard_list_text"
                                      >Clean, accurate applications</span
                                    >
                                  </li>
                                  <li class="successcard__list_item">
                                    <span class="successcard_check">
                                      <svg
                                        class="successcard_check_svg"
                                        fill="currentColor"
                                        viewBox="0 0 16 16"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path
                                          clip-rule="evenodd"
                                          d="M12.416 3.376a.75.75 0 0 1 .208 1.04l-5 7.5a.75.75 0 0 1-1.154.114l-3-3a.75.75 0 0 1 1.06-1.06l2.353 2.353 4.493-6.74a.75.75 0 0 1 1.04-.207Z"
                                          fill-rule="evenodd"
                                        ></path>
                                      </svg>
                                    </span>
                                    <span class="successcard_list_text"
                                      >End-to-end payer management</span
                                    >
                                  </li>
                                  <li class="successcard__list_item">
                                    <span class="successcard_check">
                                      <svg
                                        class="successcard_check_svg"
                                        fill="currentColor"
                                        viewBox="0 0 16 16"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path
                                          clip-rule="evenodd"
                                          d="M12.416 3.376a.75.75 0 0 1 .208 1.04l-5 7.5a.75.75 0 0 1-1.154.114l-3-3a.75.75 0 0 1 1.06-1.06l2.353 2.353 4.493-6.74a.75.75 0 0 1 1.04-.207Z"
                                          fill-rule="evenodd"
                                        ></path>
                                      </svg>
                                    </span>
                                    <span class="successcard_list_text"
                                      >Faster provider onboarding</span
                                    >
                                  </li>
                                  <li class="successcard__list_item">
                                    <span class="successcard_check">
                                      <svg
                                        class="successcard_check_svg"
                                        fill="currentColor"
                                        viewBox="0 0 16 16"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path
                                          clip-rule="evenodd"
                                          d="M12.416 3.376a.75.75 0 0 1 .208 1.04l-5 7.5a.75.75 0 0 1-1.154.114l-3-3a.75.75 0 0 1 1.06-1.06l2.353 2.353 4.493-6.74a.75.75 0 0 1 1.04-.207Z"
                                          fill-rule="evenodd"
                                        ></path>
                                      </svg>
                                    </span>
                                    <span class="successcard_list_text"
                                      >No missed deadlines</span
                                    >
                                  </li>
                                  <li class="successcard__list_item">
                                    <span class="successcard_check">
                                      <svg
                                        class="successcard_check_svg"
                                        fill="currentColor"
                                        viewBox="0 0 16 16"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path
                                          clip-rule="evenodd"
                                          d="M12.416 3.376a.75.75 0 0 1 .208 1.04l-5 7.5a.75.75 0 0 1-1.154.114l-3-3a.75.75 0 0 1 1.06-1.06l2.353 2.353 4.493-6.74a.75.75 0 0 1 1.04-.207Z"
                                          fill-rule="evenodd"
                                        ></path>
                                      </svg>
                                    </span>
                                    <span class="successcard_list_text"
                                      >Full transparency, always</span
                                    >
                                  </li>
                                </ul>
                                <button class="successcard_button">
                                 Get Your Quote Today
                                </button>
                              </div>
                            </div>
                            <!-- /.demo-one__card -->
                          </div>
                          <!-- /.col-md-6 col-lg-3 -->
                        </div>
                        <!-- /.row -->
                      </div>
                      <!-- /.home-showcase__inner -->
                    </div>
                    <!-- /.container -->
                  </section>
                </li>
              </ul>
            </li>
            <li class="dropdown megamenu  ">
              <a href="#">Who we Serve</a>
              <ul>
                <li>
                  <section class="home-showcase">
                    <div class="container-fluid">
                      <div class="home-showcase__inner">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 mobile-d-none border-right-nav">
                            <div class="demo-one__card">
                              <!-- From Uiverse.io by iconicchandu (Classnames Safeguarded) -->
                              <div class=" my-4">
  <div class="card border-0   position-relative">
    <!-- Glow effect -->
    

    <div class="card-body bg-white rounded-4 position-relative" style="z-index:1;">
      <!-- Header -->
      <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
          <h5 class="fw-bold unique-text-gradient m-0">Premium Analytics</h5>
          <small class="text-muted">Enterprise Dashboard</small>
        </div>
        <div class="d-flex align-items-center px-3 py-1 rounded-pill bg-success bg-opacity-10">
          <span class="unique-pulse-dot me-2"></span>
          <span class="text-success fw-medium small">Active</span>
        </div>
      </div>

      <!-- Stats Grid -->
      <div class="row g-3 mb-4 ">
        <div class="col-4">
          <div class="p-3 rounded bg-light position-relative">
            <div>
              <span class="h4 fw-bold text-success">98%</span><br>
              <small class="text-muted">Accuracy</small>
            </div>
            <div class="unique-bar position-absolute bottom-0 start-0 w-100"></div>
          </div>
        </div>
        <div class="col-4">
          <div class="p-3 rounded bg-light position-relative">
            <div>
              <span class="h4 fw-bold text-primary">3.2k+</span><br>
              <small class="text-muted">Network</small>
            </div>
            <div class="unique-bar position-absolute bottom-0 start-0 w-100"></div>
          </div>
        </div>
        <div class="col-4">
          <div class="p-3 rounded bg-light position-relative">
            <div>
              <span class="h4 fw-bold text-success">+45%</span><br>
              <small class="text-muted">Growth</small>
            </div>
            <div class="unique-bar position-absolute bottom-0 start-0 w-100"></div>
          </div>
        </div>
      </div>

      <!-- Progress bar -->
      <div class="mb-4">
        <div class="d-flex justify-content-between small text-muted mb-1">
          <span>Enhanced Performance</span>
          <span>78%</span>
        </div>
        <div class="progress rounded-pill" style="height:8px;">
          <div class="progress-bar unique-progress" role="progressbar" style="width:78%;"></div>
        </div>
      </div>

      <!-- Footer -->
      <div class="d-flex justify-content-end align-items-center">
        
        <button class="btn unique-btn px-4 fw-medium">
          View Details
        </button>
      </div>
    </div>
  </div>
</div>
                            </div>
                            <!-- /.demo-one__card -->
                          </div>
                          <div class="col-md-8 col-lg-8">
                                  <div class="msgbox-item-heading text-left">
                                    <span>Industries We Serve</span>
                                  </div>
                            <div class="demo-one__card ">
                              <div class="msgbox-card">
                                <div class="msgbox-list row">
                                  <div class="msgbox-item msgbox-item-industry col-lg-6 ">
                                    <div class="msgbox-icon">
                                      <i class="fa-solid fa-check-double"></i>
                                    </div>
                                    <div class="msgbox-info">
                                      <div class="msgbox-header">
                                        <div class="msgbox-title">
                                         Provider groups

                                        </div>
                                      </div>
                                      <div class="msgbox-content">
                                        Accelerate time-to-revenue with end-to-end enrollment and credentialing automation.
                                      </div>
                                    </div>
                                  </div>
                                  <div class="msgbox-item msgbox-item-industry col-lg-6">
                                    <div class="msgbox-icon">
                                      <i class="fa-solid fa-check-double"></i>
                                    </div>
                                    <div class="msgbox-info">
                                      <div class="msgbox-header">
                                        <div class="msgbox-title">
                                         Payers

                                        </div>
                                      </div>
                                      <div class="msgbox-content">
                                       Manage your provider networks with lower costs, better satisfaction, and higher quality.
                                      </div>
                                    </div>
                                  </div> 
                                  <div class="msgbox-item msgbox-item-industry col-lg-6">
                                    <div class="msgbox-icon">
                                      <i class="fa-solid fa-check-double"></i>
                                    </div>
                                    <div class="msgbox-info">
                                      <div class="msgbox-header">
                                        <div class="msgbox-title">
                                         Health systems

                                        </div>
                                      </div>
                                      <div class="msgbox-content">
                                       Accelerate onboaring and improve satisfaction with end-to-end credentialing and enrol...
                                      </div>
                                    </div>
                                  </div>
                                  <div class="msgbox-item msgbox-item-industry col-lg-6">
                                    <div class="msgbox-icon">
                                      <i class="fa-solid fa-check-double"></i>
                                    </div>
                                    <div class="msgbox-info">
                                      <div class="msgbox-header">
                                        <div class="msgbox-title">
                                         RCM organizations

                                        </div>
                                      </div>
                                      <div class="msgbox-content">
                                        
                                        Support your clients and get them get them credentialed and in-network fast.
                                      </div>
                                    </div>
                                  </div>
                                  <div class="msgbox-item msgbox-item-industry col-lg-6">
                                    <div class="msgbox-icon">
                                      <i class="fa-solid fa-check-double"></i>
                                    </div>
                                    <div class="msgbox-info">
                                      <div class="msgbox-header">
                                        <div class="msgbox-title">
                                        Digital health
                                        </div>
                                      </div>
                                      <div class="msgbox-content">
                                       
Scale your network faster with automated licensing, credentialing, a...
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- /.col-md-6 col-lg-3 -->
                          
                          <!-- /.col-md-6 col-lg-3 -->
                        </div>
                        <!-- /.row -->
                      </div>
                      <!-- /.home-showcase__inner -->
                    </div>
                    <!-- /.container -->
                  </section>
                </li>
              </ul>
            </li>
            <li
              class="{{ request()->routeIs('about-us') ? 'active current' : '' }}"
            >
              <a href="{{ route('about-us') }}">About</a>
            </li>
            <li
              class="{{ request()->routeIs('front.blogs') ? 'active current' : '' }}"
            >
              <a href="{{ route('front.blogs') }}">Blogs</a>
            </li>
            <!--
                    <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                        <a href="{{ route('contact') }}">Contact</a>
                    </li>
                    -->
          </ul>
        </nav>

        <!-- /.main-header__nav -->
        <div class="main-header__right">
          <div class="mobile-nav__btn mobile-nav__toggler">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <!-- /.mobile-nav__toggler -->
          <a href="#" class="search-toggler main-header__search">
            <i class="icon-magnifying-glass" aria-hidden="true"></i>
            <span class="sr-only">Search</span>
          </a>
          <!-- /.search-toggler -->
          <a class="main-header__cart">
            <i class="icon-shopping-cart" aria-hidden="true"></i>
            <span class="sr-only">Search</span> </a
          ><!-- /.search-toggler -->
          <a href="{{('/contact')}}" class="altermed-btn main-header__btn">
            Contact Us
            <em></em> </a
          ><!-- /.thm-btn main-header__btn -->
          <!--<a href="tel:+92(003)68-0900" class="main-header__call">-->
          <!--   <i class="icon-calling"></i>-->
          <!--   <span>Call experts <br>-->
          <!--      <b>{{ $globalContactDetails['phone2'] ?? '' }}</b></span>-->
          <!--</a> -->
        </div>
        <!-- /.main-header__right -->
      </div>
    </div></div>
    <!-- /.main-header__inner -->
 
  <!-- /.container-fluid -->
</header>
