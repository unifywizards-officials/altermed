 <div class="topbar-one">
         <div class="topbar-one__bg" style="background-image: url('{{ asset('guest/assets/images/pattern/header-top-pattern.png') }}');"></div>
         <div class="container-fluid">
            <div class="topbar-one__inner">
               <ul class="list-unstyled topbar-one__info">
                  <li class="topbar-one__info__item">
                     <i class="fas fa-map-marker-alt"></i>
                     <a href="#">25 Merwit CT, Pennsauken, New Jersey 08109</a>
                  </li>
                  <li class="topbar-one__info__item">
                     <i class="fas fa-envelope"></i>
                     <a href="mailto:info@altermedrcm.com">info@altermedrcm.com</a>
                  </li>
               </ul>
               <!-- /.list-unstyled topbar-one__info -->
               <div class="topbar-one__right">
                  <ul class="topbar-one__menu">
                     <!-- <li><a href="#">Make a Claim</a></li>-->
                    <li><a href="#">FAQs</a></li>
                     <li><a href="#">About</a></li> 
                  </ul>
                  <div class="topbar-one__social">
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
      <header class="main-header sticky-header sticky-header--normal">
         <div class="container-fluid">
            <div class="main-header__inner">
               <div class="main-header__logo">
                  <a href="#">
                     <img src="{{ asset('guest/assets/images/logo-altermed-1.png') }}" alt="altermed HTML"  class="altermed-header-logo">
                  </a>
               </div>
               <!-- /.main-header__logo -->
               <div class="main-header__nav__wrapper">
                  <nav class="main-header__nav main-menu">
                     <ul class="main-menu__list">
                        <li class="dropdown megamenu">
                           <a href="{{ route('home') }}">Home</a>
                           <!-- <ul>
                              <li>
                                 <section class="home-showcase">
                                    <div class="container">
                                       <div class="home-showcase__inner">
                                          <div class="row">
                                             <div class="col-md-6 col-lg-3">
                                                <div class="demo-one__card">
                                                   <div class="demo-one__image">
                                                      <img src="{{ asset('guest/assets/images/home-showcase/home-showcase-1.jpg') }}" alt="">
                                                      <div class="demo-one__btns">
                                                         <a href="#" class="altermed-btn demo-one__btn">
                                                            <span>Multi Page</span> <em></em>
                                                         </a>
                                                         <a href="index-one-page.html" class="altermed-btn demo-one__btn">
                                                            <span>One Page</span> <em></em>
                                                         </a>
                                                      </div>
                                                      
                                                   </div>
                                              
                                                   <div class="demo-one__content">
                                                      <h3 class="demo-one__title">
                                                         <a href="#">Home Page 01</a>
                                                      </h3>
                                                     
                                                   </div>
                                                   
                                                </div>
                                               
                                             </div>
                                             
                                             <div class="col-md-6 col-lg-3">
                                                <div class="demo-one__card">
                                                   <div class="demo-one__image">
                                                      <img src="{{ asset('guest/assets/images/home-showcase/home-showcase-2.jpg') }}" alt="">
                                                      <div class="demo-one__btns">
                                                         <a href="index-2.html" class="altermed-btn demo-one__btn">
                                                            <span>Multi Page</span> <em></em>
                                                         </a>
                                                         <a href="index-2-one-page.html" class="altermed-btn demo-one__btn">
                                                            <span>One Page</span> <em></em>
                                                         </a>
                                                      </div>
                                                      
                                                   </div>
                                                 
                                                   <div class="demo-one__content">
                                                      <h3 class="demo-one__title">
                                                         <a href="index-2.html">Home Page 02</a>
                                                      </h3>
                                                     
                                                   </div>
                                                   
                                                </div>
                                               
                                             </div>
                                             
                                             <div class="col-md-6 col-lg-3">
                                                <div class="demo-one__card">
                                                   <div class="demo-one__image">
                                                      <img src="{{ asset('guest/assets/images/home-showcase/home-showcase-3.jpg') }}" alt="">
                                                      <div class="demo-one__btns">
                                                         <a href="index-3.html" class="altermed-btn demo-one__btn">
                                                            <span>Multi Page</span> <em></em>
                                                         </a>
                                                         <a href="index-3-one-page.html" class="altermed-btn demo-one__btn">
                                                            <span>One Page</span> <em></em>
                                                         </a>
                                                      </div>
                                                      
                                                   </div>

                                                   <div class="demo-one__content">
                                                      <h3 class="demo-one__title">
                                                         <a href="index-3.html">Home Page 03</a>
                                                      </h3>
                                                     
                                                   </div>
                                                   
                                                </div>
                                               
                                             </div>
                                             
                                             <div class="col-md-6 col-lg-3">
                                                <div class="demo-one__card">
                                                   <div class="demo-one__image">
                                                      <img src="{{ asset('guest/assets/images/home-showcase/home-showcase-4.jpg') }}" alt="">
                                                      <div class="demo-one__btns">
                                                         <a href="index-boxed.html" class="altermed-btn demo-one__btn">
                                                            <span>View Page</span> <em></em>
                                                         </a>
                                                      </div>
                                                      
                                                   </div>
                                    
                                                   <div class="demo-one__content">
                                                      <h3 class="demo-one__title">
                                                         <a href="index-boxed.html">Home Box</a>
                                                      </h3>
                                                     
                                                   </div>
                                                   
                                                </div>
                                               
                                             </div>
                                             
                                          </div>
                                       
                                       </div>
                                     
                                    </div>
                                  
                                 </section>
                              </li>
                           </ul> -->
                        </li>
                        <li>
                           <a href="{{ route('about-us') }}">About</a>
                        </li>
                        <li class="dropdown">
                           <a href="{{ route('service') }}">Services</a>
                           <!-- <ul>
                              <li><a href="team.html">Team</a></li>
                              <li><a href="team-carousel.html">Team Carousel</a></li>
                              <li><a href="reviews.html">Testimonal</a></li>
                              <li><a href="reviews-two.html">Testimonal Two</a></li>
                              <li><a href="reviews-carousel.html">Testimonal Carousel</a></li>
                              <li><a href="reviews-carousel-two.html">Testimonal Carousel Two</a></li>
                              <li><a href="faq.html">FAQs</a></li>
                              <li><a href="login.html">Login</a></li>
                              <li><a href="404.html">404 Error</a></li>
                           </ul> -->
                        </li>
                        <!-- <li class="dropdown">
                           <a href="insurance.html">Insurance</a>
                           <ul>
                              <li><a href="insurance.html">Insurance</a></li>
                              <li><a href="insurance-two.html">Insurance two</a></li>
                              <li><a href="insurance-carousel.html">Insurance carousel</a></li>
                              <li><a href="insurance-carousel-two.html">Insurance carousel two</a></li>
                              <li><a href="car-insurance.html">Car insurance</a></li>
                              <li><a href="life-insurance.html">Life insurance</a></li>
                              <li><a href="home-insurance.html">Home insurance</a></li>
                              <li><a href="health-insurance.html">Health insurance</a></li>
                              <li><a href="business-insurance.html">Business insurance</a></li>
                              <li><a href="fire-insurance.html">Fire insurance</a></li>
                              <li><a href="marriage-insurance.html">Marriage insurance</a></li>
                              <li><a href="travel-insurance.html">Travel insurance</a></li>
                           </ul>
                        </li>
                        <li class="dropdown">
                           <a href="portfolio.html">Portfolio</a>
                           <ul>
                              <li><a href="portfolio.html">Portfolio</a></li>
                              <li><a href="portfolio-carousel.html">Portfolio Carousel</a></li>
                              <li><a href="portfolio-details.html">Portfolio Details</a></li>
                           </ul>
                        </li> -->
                        <li class="dropdown">
                           <a href="#">Blogs</a>
                           <!-- <ul class="sub-menu">
                              <li class="dropdown">
                                 <a href="#">News grid</a>
                                 <ul class="sub-menu">
                                    <li><a href="blog-grid.html">No sidebar</a></li>
                                    <li><a href="blog-grid-left.html">Left sidebar</a></li>
                                    <li><a href="blog-grid-right.html">Right sidebar</a></li>
                                 </ul>
                              </li>
                              <li><a href="blog-carousel.html">News carousel</a></li>
                              <li class="dropdown">
                                 <a href="#">News details</a>
                                 <ul class="sub-menu">
                                    <li><a href="blog-details.html">No sidebar</a></li>
                                    <li><a href="blog-details-left.html">Left sidebar</a></li>
                                    <li><a href="blog-details-right.html">Right sidebar</a></li>
                                 </ul>
                              </li>
                           </ul> -->
                        </li>
                        <li>
                           <a href="{{ route('contact') }}">Contact</a>
                        </li>
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
                     </a><!-- /.search-toggler -->
                     <a href="cart.html" class="main-header__cart">
                        <i class="icon-shopping-cart" aria-hidden="true"></i>
                        <span class="sr-only">Search</span>
                     </a><!-- /.search-toggler -->
                     <a href="#" class="altermed-btn main-header__btn">
                        Get a Quote
                        <em></em>
                     </a><!-- /.thm-btn main-header__btn -->
                     <a href="tel:+92(003)68-0900" class="main-header__call">
                        <i class="icon-calling"></i>
                        <span>Call experts <br>
                           <b>+92 (003) 68-0900</b></span>
                     </a><!-- /.thm-btn main-header__btn -->
                  </div>
                  <!-- /.main-header__right -->
               </div>
            </div>
            <!-- /.main-header__inner -->
         </div>
         <!-- /.container-fluid -->
      </header>