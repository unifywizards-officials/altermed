  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('guest/assets/vendors/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('guest/assets/vendors/bootstrap-select/bootstrap-select.min.css') }}">
  <link rel="stylesheet" href="{{ asset('guest/assets/vendors/animate/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('guest/assets/vendors/fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('guest/assets/vendors/jquery-ui/jquery-ui.css') }}">
  <link rel="stylesheet" href="{{ asset('guest/assets/vendors/jarallax/jarallax.css') }}">
  <link rel="stylesheet" href="{{ asset('guest/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('guest/assets/vendors/nouislider/nouislider.min.css') }}">
  <link rel="stylesheet" href="{{ asset('guest/assets/vendors/nouislider/nouislider.pips.css') }}">
  <link rel="stylesheet" href="{{ asset('guest/assets/vendors/tiny-slider/tiny-slider.css') }}">
  <link rel="stylesheet" href="{{ asset('guest/assets/vendors/altermed-icons/style.css') }}">
  <link rel="stylesheet" href="{{ asset('guest/assets/vendors/owl-carousel/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('guest/assets/vendors/owl-carousel/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('guest/assets/vendors/ion.rangeSlider/ion.rangeSlider.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
           <!-- template styles -->
  <link rel="stylesheet" href="{{ asset('guest/assets/css/altermed.css?v=2.994') }}">
  <style>
      h2.sec-title__title.pbb-30.title-white {
    color: white;
  }
  
  h6.sec-title__tagline.title-white {
    color: #f5deb3;
}
.modins-btn-white{
    color: #fff;
}



@media (min-width: 1400px) {
    
    .container{
                max-width
: 1350px;
        
    }
    
    .main-slider-one__wrap {
     
    padding-top: 9em;
    padding-bottom: 9em;
  
}
 
    
}


@media (min-width: 1700px) {
    
    .container{
                max-width
: 1550px;
        
    }
 
    
}



@media (min-width: 800px) {
    .main-header__logo {
   padding: 15px 20px !important;
   }
    .altermed-header-logo {
    width: 11em;
}
}
.main-header {
    background-color: #ffffff;
}


.main-header__logo{
background-color:transparent;}


.main-slider-one__carousel.owl-carousel .owl-nav {
    left: auto;
    margin: auto 0;
    position: absolute;
    right: 2em;
    text-align: left;
    top: 50%;
    transform: translateY(-50%);
    max-width: 120px;
}

.main-slider-one__carousel.owl-carousel .owl-nav button{
    font-size: 17px;
    
}
.main-slider-one__carousel.owl-carousel .owl-nav button span{
    font-weight: 700;
}

.testimonials-one__bg{
    left: unset;
    right: 0;
    width: auto
    ;
}
.demo-one__card.shade-bg{
    background-color:#346cb5;
}




.msgbox-card {
  width: 100%;
  
  background: #fff;
  
  border-radius: 0.875rem;
  padding:0 1.5rem 1.5rem 1.5rem;
  -webkit-user-drag: none;
  font-family:
    ui-sans-serif,
    system-ui,
    -apple-system,
    BlinkMacSystemFont,
    Segoe UI,
    Roboto,
    Noto Sans,
    Ubuntu,
    Cantarell,
    Helvetica Neue,
    Arial,
    sans-serif,
    Apple Color Emoji,
    Segoe UI Emoji,
    Segoe UI Symbol,
    Noto Color emoji;
  overflow: hidden;
  --msgbox-delay: 150ms;
}

.msgbox-list {
  width: 100%;
}

.msgbox-item {
  width: 100%;
   
  border-radius: 0.5rem;
      padding: 0.6rem 0.8rem;
  display: flex;
  gap: 1rem;
  transform: scale(0);
  height: 0;
  box-shadow: 0px 2px 8px 4px rgba(0, 0, 0, 0.01);
  animation: msgbox-show 200ms forwards;
  transform-origin: top center;
  visibility: hidden;
  transition: all 0.2s ease-in-out;
  cursor: pointer;
}

.msgbox-item:hover {
  box-shadow: 0px 3px 16px 8px rgba(0, 0, 0, 0.07);
  transform: translateY(-2px) scale(1.1);
}

.msgbox-icon {
  background: #f6f6f6;
  width: 2.5rem;
  height: 2.5rem;
  min-width: 2.5rem;
  min-height: 2.5rem;
  border-radius: 1rem;
  color : #376db6;
  
}

.msgbox-item:nth-child(1) {
  animation-delay: calc(4 * var(--msgbox-delay));
}
.msgbox-item:nth-child(2) {
  animation-delay: calc(3 * var(--msgbox-delay));
}
.msgbox-item:nth-child(3) {
  animation-delay: calc(2 * var(--msgbox-delay));
}
.msgbox-item:nth-child(4) {
  animation-delay: var(--msgbox-delay);
}

 
 
.msgbox-info {
  display: flex;
  flex-direction: column;
  text-align: left;
}

.msgbox-header {
  display: flex;
  flex-direction: row;
  align-items: flex-end;
  line-height: 1;
  user-select: none;
  -webkit-user-select: none;
}

.msgbox-title {
  font-size: 1rem;
  font-weight: 600;
}

.msgbox-time {
  font-size: 0.875rem;
  color: #454545;
}

.msgbox-time::before {
  content: "•";
  margin: 0 0.25rem;
  font-size: 0.875rem;
  color: #454545;
}

.msgbox-content {
  margin-top: 0.5rem;
  line-height: 1;
  text-overflow: ellipsis;
  white-space: wrap;
  font-weight: 300;
}

@keyframes msgbox-show {
  0% {
    transform: scale(0);
    margin-bottom: 0;
    visibility: visible;
  }
  100% {
    transform: scale(1);
    height: 100%;
    margin-bottom: 1rem;
    visibility: visible;
  }
}

.text-left{
    text-align: left;
}


.msgbox-item-heading span {
    font-size: 20px;
    font-weight: 500;
    padding-left: 21px;
}

.msgbox-card .msgbox-item {
    margin-bottom: 8px !important;
        align-items: center;
    
}


/* Unique styles for successcard component */
/* From Uiverse.io by iconicchandu (Classnames Safeguarded) */
.successcard {
  --white: hsl(0, 0%, 100%);
  --black: hsl(240, 15%, 9%);
  --paragraph: hsl(0, 0%, 83%);
  --line: hsl(240, 9%, 17%);
  --primary: hsl(16.29deg 61.13% 51.57%);
text-align: left;
  position: relative;
  display: flex;
  flex-direction: column;
  gap: 1rem;
  padding: 1rem;
  width: 100%;
  background-color: hsla(240, 15%, 9%, 1);
  background-image: radial-gradient(
      at 88% 40%,
      hsla(240, 15%, 9%, 1) 0px,
      transparent 85%
    ),
    radial-gradient(at 49% 30%, hsla(240, 15%, 9%, 1) 0px, transparent 85%),
    radial-gradient(at 14% 26%, hsla(240, 15%, 9%, 1) 0px, transparent 85%),
    radial-gradient(at 0% 64%, hsl(189, 99%, 26%) 0px, transparent 85%),
    radial-gradient(at 41% 94%, hsl(189, 97%, 36%) 0px, transparent 85%),
    radial-gradient(at 100% 99%, hsl(188, 94%, 13%) 0px, transparent 85%);
  border-radius: 1rem;
  box-shadow: 0px -16px 24px 0px rgba(255, 255, 255, 0.25) inset;
}

.successcard .successcard__border {
  overflow: hidden;
  pointer-events: none;
  position: absolute;
  z-index: -10;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: calc(100% + 2px);
  height: calc(100% + 2px);
  background-image: linear-gradient(
    0deg,
    hsl(0, 0%, 100%) -50%,
    hsl(0, 0%, 40%) 100%
  );
  border-radius: 1rem;
}

.successcard .successcard__border::before {
  content: "";
  pointer-events: none;
  position: fixed;
  z-index: 200;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%), rotate(0deg);
  transform-origin: left;
  width: 200%;
  height: 10rem;
  background-image: linear-gradient(
    0deg,
    hsla(0, 0%, 100%, 0) 0%,
    hsl(189, 100%, 50%) 40%,
    hsl(189, 100%, 50%) 60%,
    hsla(0, 0%, 40%, 0) 100%
  );
  animation: successcard_rotate 8s linear infinite;
}

@keyframes successcard_rotate {
  to {
    transform: rotate(360deg);
  }
}

.successcard .successcard_title__container .successcard_title {
  font-size: 1.3rem;
  color: var(--white);
}

.successcard .successcard_title__container .successcard_paragraph {
  margin-top: 0.25rem;
  width: 65%;
  font-size: 0.9rem;
  color: var(--paragraph);
  margin-bottom: 0;
}

.successcard .successcard_line {
  width: 100%;
  height: 0.1rem;
  background-color: var(--line);
  border: none;
  margin: 0;
}

.main-menu .main-menu__list .successcard ul.successcard__list {
  display: block;
  flex-direction: column;
  gap: 0.5rem;
  
     
  position: relative;
    top: unset;
    left: unset;
    min-width: 100px;
    flex-direction: column;
    justify-content: flex-start;
    align-items: left;
    opacity: 1;
    visibility: visible;
    transform-origin: unset;
    transform: unset;
    transition: opacity 500ms 
ease, visibility 500ms 
ease, transform 700ms 
ease;
    z-index: 99;
    background-color: transparent;
    box-shadow:none;
    padding: initial;
    box-shadow: none;
  
  
  
  
  
  
  
  
  
  
  
}

.successcard .successcard__list .successcard__list_item {
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

.successcard .successcard__list .successcard__list_item .successcard_check {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 1rem;
  height: 1rem;
  background-color: var(--primary);
  border-radius: 50%;
}

.successcard .successcard__list .successcard__list_item .successcard_check .successcard_check_svg {
  width: 0.75rem;
  height: 0.75rem;
  fill: var(--black);
}

.successcard .successcard__list .successcard__list_item .successcard_list_text {
  font-size: 0.9rem;
  color: var(--white);
}

.successcard .successcard_button {
  cursor: pointer;
  padding: 0.5rem;
  width: 100%;
  background-image: linear-gradient(
    0deg,
    hsl(189, 92%, 58%),
    hsl(189, 99%, 26%) 100%
  );
  font-size: 0.75rem;
  color: var(--white);
  border: 0;
  border-radius: 9999px;
  box-shadow: inset 0 -2px 25px -4px var(--white);
}

.home-showcase__inner {
 
    padding: 20px 40px 21px;
}
.msgbox-icon i {
    font-size: 21px;
    line-height: 39px;
}
@media (min-width: 992px) {
    
    .msgbox-item-industry{
     flex: 0 0 auto;
        width: 50%;
}
}


 
.unique-text-gradient {
  background: #376db6;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.unique-glow {
  background: linear-gradient(to right, #198754, #0d6efd);
  filter: blur(12px);
  opacity: 0.25;
  z-index: 0;
}

.unique-pulse-dot {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background: #198754;
  display: inline-block;
  animation: unique-pulse 1.5s infinite;
}

@keyframes unique-pulse {
  0%, 100% { opacity: 1; }
  50% { opacity: 0.4; }
}

.unique-bar {
  height: 4px;
  background:   #376db6 ;
}

.unique-progress {
  background: linear-gradient(to right, #376db6, #d0613a);
  border: none;
}

.unique-btn {
  background: linear-gradient(to right, #376db6, #111b27);
  border: none;
  color: #fff;
}
.unique-btn:hover {
     color: white;
  opacity: 0.9;
  transform: scale(1.05);
  transition: all 0.3s ease;
 
}


header .max-w-1800{
   --bs-gutter-x: 1.5rem;
   margin-left: auto;
   margin-right: auto;
   max-width: 1800px;
}



/*hero section start*/








 @property --gradient-angle {
    inherits: false;
    initial-value: 0deg;
    syntax: "<angle>"
}

@keyframes rotation {
    0% {
        --gradient-angle: 0deg
    }

    to {
        --gradient-angle: 360deg
    }
}

.hero {
    overflow: visible;
    padding: 7rem 0 3.5rem;
    position: relative
}

@media(min-width: 768px) {
    .hero {
        margin-top:-5px;
        padding: 10rem 0 7rem
    }
}

@media(min-width: 1230px)and (min-height:769px) {
    .hero {
        align-items:center;
        display: flex;
        flex-direction: column;
        height: calc(100vh - 11rem);
        justify-content: space-around;
        padding: 0
    }
}

@media(min-width: 1230px)and (min-height:769px)and (max-width:769px) {
    .hero {
        display:block;
        padding: 10rem 0 15rem
    }
}

.hero--video {
    height: 100%;
    position: absolute;
    right: -45%;
    top: -18rem;
    width: 100vw;
    z-index: 0
}

@media(min-width: 768px) {
    .hero--video {
        right:0;
        width: 50vw
    }
}




@media(min-width: 1000px) and (max-width:1500px) {
    .hero {
        display:block;
        padding: 2rem 0 2rem
    }
     
}
@media(min-width: 1500px) and (max-width:1700px) {
    .hero {
        display:block;
        padding: 2.5rem 0 2.5rem
    }
     
}

@media(min-width: 992px) {
    .hero--video {
        left:50%;
        top: -11rem;
        width: 700px
    }
}

@media(min-width: 1230px) {
    .hero--video {
        left:50%;
        top: -11rem;
        width: 900px
    }
}

@media(min-width: 1380px) {
    .hero--video {
        left:40%;
        top: -11rem;
        width: 1200px
    }
}

@media(min-width: 1699px) {
    .hero--video {
        left:42%;
        top: -11rem
    }
}

.hero .row {
    justify-content: center
}

.hero .row .col-12 {
    text-align: center
}

.hero p {
    color: #545454
}

@media(min-width: 1380px) {
    .hero p {
        margin:0 auto;
        max-width: 750px
    }
}

.hero ul {
    align-items: center;
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
    justify-content: center;
    margin-top: 7rem
}

@media(min-width: 768px) {
    .hero ul {
        flex-flow:row nowrap;
        gap: 3.2rem;
        margin-top: 7rem
    }
}

@media(min-width: 992px) {
    .hero ul {
        gap:3rem;
        margin-top: 5rem
    }
}

@media(min-width: 1699px) {
    .hero ul {
        margin-top:7rem
    }
}

.hero ul li {
    align-items: center;
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin: 0 0 1rem;
    padding: 0
}

@media(min-width: 768px) {
    .hero ul li {
        flex-flow:row nowrap;
        margin: 0 0 1rem
    }

    .hero ul li:last-child {
        margin-left: 2rem
    }
}

.hero ul li:has(.wp-block-button) {
    justify-content: center;
    margin-top: 4rem;
    width: 100%
}

@media(min-width: 768px) {
    .hero ul li:has(.wp-block-button) {
        justify-content:normal;
        margin-top: 0;
        width: auto
    }
}

.hero ul li .icons-wrp {
    position: relative
}

.hero ul li span.icons {
    align-items: center;
    background: linear-gradient(90deg,#d8e6ff,rgba(216,230,255,0));
    border-radius: 50%;
    display: flex;
    font-family: Lexend;
    font-size: 18px;
    font-weight: 500;
    height: 60px;
    justify-content: center;
    letter-spacing: -.01em;
    line-height: 26px;
    position: static;
    width: 60px
}

.hero ul li span.icons-svg {
    display: block;
    position: absolute;
    right: 0;
    top: -12px
}

.hero ul li p {
    color: #000;
   
    font-size: 16px;
    font-weight: 500;
    letter-spacing: 0;
    line-height: 22px;
    margin-bottom: 0;
    text-align: left
}

.hero a.wp-block-button__link {
    box-shadow: 0 12px 32px 0 rgba(0,68,191,.4)!important
}

.hero--video{
    z-index: -1;
}

.hero h1{
    font-size: 4rem;
    font-weight: 400;
}

.hero-h1-style{
    font-weight: 600;
    font-style: italic;
}

@media(min-width: 1000px) and (max-width:1500px) {
    
    .hero h1 {
    font-size: 2.5rem;}
    .d-none-lg{
        display: none;
    }
    .hero ul li span.icons {
  
    font-size: 15px;
    
    height: 45px;
   
    width: 46px;}
        .hero ul {
       
        margin-top: 4rem;
    }
    .altermed-header-logo
 
 {
        width: 9em;
    }
    .main-menu .main-menu__list > li {
    padding-top: 26.25px;
    padding-bottom: 26.25px;
   
}
.topbar-one__social {
  
    padding: 6px 60px;
    
}
}
@media(min-width: 1500px) and (max-width:1700px) {
    
    .hero h1 {
    font-size: 3rem;}
    .d-none-lg{
        display: none;
    }
    .hero ul li span.icons {
  
    font-size: 15px;
    
    height: 50px;
   
    width: 50px;}
        .hero ul {
       
        margin-top: 4.5rem;
    }
}





.img-100px{
    width: 100px !important;
}




.client-carousel__one__item img{
    opacity: 1;
}

@media  (min-width : 1500px){
    .img-100px{
    width: 150px !important;
}
}

/*hero section end*/
 
 
 /*Services Section Start*/



.module.module--filled {
    margin: 0;
    padding: 5rem 0
}


.home-top-features__heading {
    margin-bottom: 5rem
}


.home-top-features__heading {
    margin-bottom: 5rem
}

.home-top-features__card {
    padding: 4rem 5rem;
    background: #d6c7ff;
    border-radius: .4rem;
    margin-bottom: 3rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
    flex: 1;
    gap: 3.5rem;
    position: relative
}

.home-top-features__card-title {
    margin-bottom: 1.5rem;
    position: relative
}

.home-top-features__card-title span {
    display: none
}

.home-top-features__card .ia-link-fake {
    position: absolute;
    text-indent: -9999px;
    z-index: 9;
    inset: 0
}

.home-top-features__card .ia-link-fake:hover+.ia-link:after {
    width: 0
}

.home-top-features__card-text {
    margin-bottom: 1.5rem;
        line-height: 1.1rem;
}

.home-top-features__card-link {
    text-decoration: underline
}

.home-top-features__card-link:hover {
    text-decoration: none
}

.home-top-features__card-image {
    text-align: center
}

.home-top-features__card.image-position-right,.home-top-features__card.image-position-left {
    flex-direction: row;
    align-items: center
}

.home-top-features__card.image-position-right .home-top-features__card-body,.home-top-features__card.image-position-left .home-top-features__card-body {
    flex: 1
}

.home-top-features__card.image-position-right .home-top-features__card-image,.home-top-features__card.image-position-left .home-top-features__card-image {
    width: 45%;
    text-align: center
}

.home-top-features__card.image-position-left {
    flex-direction: row-reverse
}

.home-top-features__card.image-position-top {
    flex-direction: column-reverse
}

.home-top-features__card--two_images {
    flex-direction: row;
    align-items: center
}

.home-top-features__card--two_images .home-top-features__card-body {
    flex: 1
}

.home-top-features__card--two_images .home-top-features__card-image {
    width: 45%;
    text-align: center
}

.home-top-features__card--logos_carousel {
    flex-direction: column-reverse;
    gap: 7rem
}

.home-top-features__card--logos_carousel .home-top-features__card-carousel {
    margin: 0 -5rem;
    padding-top: 1rem
}

.home-top-features__card-carousel-logo {
    width: 28rem;
    height: 20rem;
    border-radius: 1.5rem;
    margin: 0 2rem;
    position: relative
}

.home-top-features__card-carousel-logo:before,.home-top-features__card-carousel-logo:after {
    content: "";
    width: .8rem;
    height: .8rem;
    background: #02515a;
    border-radius: 50%;
    top: 50%;
    margin-top: -.4rem;
    left: -1.6rem;
    position: absolute
}

.home-top-features__card-carousel-logo:after {
    left: auto;
    right: -1.6rem
}

.home-top-features__card-carousel-logo img {
    max-height: 6.4rem;
    max-width: 71%
}

.home-top-features .ia-row.reverse {
    flex-direction: row-reverse
}

.home-top-features .ia-col .home-top-features__card:last-child {
    margin-bottom: 0
}

.home-top-features__products {
    margin: 6rem -1.5rem 0;
    flex-wrap: wrap;
    align-items: normal;
    justify-content: flex-start
}

.home-top-features__products a {
    width: calc(20% - 3rem);
    margin: 0 1.5rem;
    display: flex;
    align-items: center;
    justify-content: center
}

.home-top-features .ia-row .ia-col:first-child .home-top-features__card:nth-child(2n) {
    background: #e0ffa8
}

.home-top-features .ia-row .ia-col:nth-child(2) .home-top-features__card:nth-child(1) {
    background: #b8e1ff
}


@media (max-width: 1310px) {
    .home-top-features__card {
        padding:3rem 4rem
    }

    .home-top-features__card-title {
        font-size: 3rem
    }
}

@media (max-width: 1023px) {
    .home-top-features .ia-row {
        margin-bottom:3rem
    }

    .home-top-features__heading {
        margin-bottom: 2.3rem
    }

    .home-top-features__products {
        margin-bottom: -3rem
    }

    .home-top-features__products a {
        width: calc(50% - 3rem);
        margin-bottom: 3rem
    }

    .home-top-features__products a:nth-child(3) {
        width: calc(100% - 3rem)
    }

    .home-top-features__card {
        padding: 2rem;
        flex-direction: column !important
    }

    .home-top-features__card.image-position-right .home-top-features__card-body,.home-top-features__card.image-position-left .home-top-features__card-body {
        width: 100%
    }

    .home-top-features__card-image {
        width: 100% !important
    }

    .home-top-features__card-image img {
        max-height: 35rem;
        max-width: 50rem;
        width: auto;
        height: auto
    }

    .home-top-features__card-title {
        font-size: 2.6rem
    }

    .home-top-features__card-text {
        font-size: 1.4rem;
        line-height: 1.4;
        margin-bottom: 1rem
    }

    .home-top-features .ia-col+.ia-col {
        margin-top: 3rem
    }
}

@media (max-width: 767px) {
    .home-top-features__products {
        margin-bottom:-1rem;
        margin-left: -.5rem;
        margin-right: -.5rem
    }

    .home-top-features__products a {
        width: calc(100% - 1rem);
        margin: 0 .5rem 1rem
    }

    .home-top-features__products a:nth-child(3) {
        width: calc(100% - 1rem)
    }

    .home-top-features .ia-col+.ia-col {
        margin-top: 1rem
    }

    .home-top-features__card {
        padding: 1.7rem 2.9rem;
        margin-bottom: 1rem;
        gap: 5rem;
        flex-direction: column !important
    }

    .home-top-features__card.active {
        padding: 2.9rem 3rem 1.8rem
    }

    .home-top-features__card-image {
        width: 100% !important
    }

    .home-top-features__card-title {
        font-size: 1.8rem;
        position: relative;
        padding-right: 3.4rem;
        margin-bottom: 0;
        padding-top: 1px
    }

    .home-top-features__card-title span {
        display: block;
        position: absolute;
        top: 50%;
        transform: translate(0,-50%);
        right: 0
    }

    .home-top-features__card-body {
        width: 100%
    }

    .home-top-features__card-text-wrapper {
        padding-top: 1.2rem
    }

    .home-top-features__card-text-wrapper,.home-top-features__card-image {
        display: none
    }

    .home-top-features__card.active .home-top-features__card-title .icon-plus {
        opacity: 0
    }

    .home-top-features__card.active .home-top-features__card-text-wrapper,.home-top-features__card.active .home-top-features__card-image {
        display: block
    }

    .home-top-features__card.active .home-top-features__card-image {
        max-width: 90%;
        margin: 0 auto
    }

    .home-top-features__card.active .home-top-features__card-image img {
        max-width: 100%
    }
}
.service-card-payroll-image{
    width: 100%;
    height: auto;
}
.home-top-features .row .col:first-child .home-top-features__card:nth-child(2n) {
    background: #e0ffa8
}

.home-top-features .row .col:nth-child(2) .home-top-features__card:nth-child(1) {
    background: #b8e1ff
}

/*====================================================*/

/*Counter section start*/
.about {
    padding: 7rem 0;
    position: relative;
    background: #f7f7f7;
}

.about:before {
    background: #d9d9d9;
    bottom: 0;
    content: "";
    display: block;
    height: 1px;
    left: 50%;
    position: absolute;
  
    width: calc(100% - 4rem)
}

@media(min-width: 768px) {
    .about:before {
        display:none
    }
}

@media(min-width: 992px) {
    .about {
        padding:120px 0px
    }
}

@media(min-width: 1380px) {
    .about {
        padding:120px 0px
    }
}

@media(min-width: 1699px) {
    .about {
        padding:120px 0px
    }
}

@media(min-width: 1380px) {
    .about .col-12 {
        padding:0
    }
}

.about--content {
    display: flex;
    flex-wrap: wrap;
    gap: 3rem 1.5rem;
    justify-content: space-between;
    width: 100%
}

@media(min-width: 768px) {
    .about--content {
        gap:3rem 1.5rem;
        justify-content: normal;
        width: 100%
    }
}

@media(min-width: 1199px) {
    .about--content {
        gap:5rem 2rem
    }
}

@media(min-width: 1380px) {
    .about--content {
        width:calc(100% + 30px)
    }
}

@media(min-width: 1699px) {
    .about--content {
        gap:7rem 3rem
    }
}

.about--content-title {
    flex: 0 0 calc(100% - 1.5rem);
    max-width: calc(100% - 1.5rem)
}

@media(min-width: 992px) {
    .about--content-title {
        flex:0 0 calc(50% - 1.5rem);
        max-width: calc(50% - 1.5rem)
    }
}

@media(min-width: 1699px) {
    .about--content-title {
        flex:0 0 calc(50% - 3rem);
        max-width: calc(50% - 3rem)
    }
}

.about--content-title h2 {
    margin-bottom: 5rem;
    text-align: center
}

@media(min-width: 992px) {
    .about--content-title h2 {
        text-align:unset
    }
}

@media(min-width: 1199px) {
    .about--content-title h2 {
        margin-bottom:0
    }
}

.about--content-card {
    background: #f7f7f7;
    border-radius: 15px;
    flex: 0 0 calc(50% - 7.5px);
    max-width: calc(50% - 7.5px);
    transition: all .3s linear
}

@media(min-width: 576px) {
    .about--content-card {
        flex:0 0 calc(50% - 1.5rem);
        max-width: calc(50% - 1.5rem)
    }
}

@media(min-width: 768px) {
    .about--content-card {
        flex:0 0 calc(33.33333% - 1.5rem);
        max-width: calc(33.33333% - 1.5rem)
    }
}

@media(min-width: 992px) {
    .about--content-card {
        flex:0 0 calc(25% - 1.5rem);
        max-width: calc(25% - 1.5rem);
         
    }
}

@media(min-width: 1699px) {
    .about--content-card {
        flex:0 0 calc(25% - 3rem);
        max-width: calc(25% - 3rem);
         
    }
}

@media(min-width: 768px) {
    .about--content-card:hover {
        transition:all .3s linear
    }

    .about--content-card:hover .about--content-card-item img {
        top: -4rem;
        transition: all .3s linear
    }
}

.about--content-card-item {
    padding: 7.5rem 1.5rem 1.5rem;
    position: relative
}

@media(min-width: 768px) {
    .about--content-card-item {
        padding:10rem 1.5rem 1.5rem
    }
}

@media(min-width: 1199px) {
    .about--content-card-item {
        padding:15rem 3rem 3rem
    }
}

@media(min-width: 1699px) {
    .about--content-card-item {
        padding:16rem 3rem 3rem
    }
}

.about--content-card-item p {
    color: #545454;
    display: block;
    margin-bottom: 0!important
}

.about--content-card-item p.sub-heading {
    color: #000
}

.about--content-card-item p.small {
    color: #545454
}

.about--content-card-item-title {
    display: flex;
    flex-flow: column nowrap;
    gap: 2rem;
    margin-bottom: 1rem
}

@media(min-width: 992px) {
    .about--content-card-item-title {
        align-items:center;
        flex-direction: row
    }
}

.about--content-card-item-title .body {
  color: #000;
    font-weight: 500;
    font-size: 1.2em;
    line-height: 1.2em;
}

.about--content-card-item-title * {
    margin-bottom: 0
}

.about--content-card-item img {
    height: 7rem;
    left: 3rem;
    position: absolute;
    top: -2rem;
    transition: all .3s linear;
    width: 7rem
}

@media(min-width: 768px) {
    .about--content-card-item img {
        height:9rem;
        width: 9rem
    }
}

@media(min-width: 992px) {
    .about--content-card-item img {
        opacity:1;
         
    }
}

@media(min-width: 1199px) {
    .about--content-card-item img {
        height:12rem;
        width: 12rem
    }
}

.about--bottom {
    align-items: center;
    display: flex;
    flex-flow: column nowrap;
    gap: 2rem;
    justify-content: space-between;
    width: 100%
}

@media(min-width: 768px) {
    .about--bottom {
        flex-direction:row
    }
}

@media(min-width: 992px) {
    .about--bottom {
        gap:5rem
    }
}

.about--bottom-row {
    flex-wrap: nowrap;
    margin-top: 3rem
}

@media(min-width: 992px) {
    .about--bottom-row {
        margin-top:5rem
    }
}

@media(min-width: 1699px) {
    .about--bottom-row {
        margin-top:7rem
    }
}

.about--bottom--left {
    background: #f7f7f7;
    border-radius: 1.5rem;
    flex: 0 0 100%;
    max-width: 100%;
    padding: 2rem
}

@media(min-width: 768px) {
    .about--bottom--left {
        flex:0 0 50%;
        max-width: 50%
    }
}

@media(min-width: 1230px) {
    .about--bottom--left {
        flex:0 0 calc(50% + 3rem);
        max-width: calc(50% + 3rem)
    }
}

@media(min-width: 1199px) {
    .about--bottom--left {
        padding:3rem
    }
}

.about--bottom--left p {
    color: #545454;
    margin-bottom: 0
}

.about--bottom-content {
    flex: 0 0 100%;
    max-width: 100%
}

@media(min-width: 768px) {
    .about--bottom-content {
        flex:0 0 50%;
        max-width: 50%
    }
}

@media(min-width: 1230px) {
    .about--bottom-content {
        flex:0 0 40%;
        max-width: 40%
    }
}

.about--bottom-content p {
    color: #545454;
    margin-bottom: 0
}

.about--bottom-content p b {
    color: #000
}

.about--bottom-content .wp-block-button {
    margin-top: 32px
}

.about--bottom-img {
    display: flex;
    width: 100%
}

.about--bottom-img img {
    border: 2px solid #fff;
    border-radius: 3rem;
    display: inline-flex;
    flex: 0 0 6rem;
    height: 5rem;
    max-width: 5rem;
    -o-object-fit: cover;
    object-fit: cover;
    overflow: hidden;
    width: 100%
}

.about--bottom-img img:nth-child(n+2) {
    margin-left: -2rem
}

.about--bottom-text {
    align-items: center;
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
    margin-bottom: 1rem
}

@media(min-width: 1230px) {
    .about--bottom-text {
        flex-flow:row nowrap;
        gap: 2rem
    }
}

.about--bottom-text .sub-heading {
    color: #000;
    font-weight: 500
}

@media(min-width: 992px) {
    .about--bottom-text .sub-heading {
        white-space:nowrap
    }
}

.about--bottom-text h3,.about--bottom-text p {
    margin-bottom: 0
}

.counter-heading{
    font-size: 5em;
    font-weight: 300;
}

.counter-heading-style{
    font-weight: 600;
    font-style: italic;
} 

/*===================================================*/
/*footer css start*/ 
.padding-vertical.footer-top {
    padding-top: 6.75rem;
    padding-bottom: 6.75rem;
}
.padding-vertical.footer-bottom {
    padding-top: 3.9375rem;
    padding-bottom: 1.5rem;
}
.section_footer-top {
  z-index: 0;
  background-color:  #f2f3f9;
  border-radius: 1.5rem 1.5rem 0 0;
}

.footer_top-component {
  color: var(--_primitives---colors--black);
  text-align: center;
  flex-flow: column;
  justify-content: center;
  align-items: center;
  width: 100%;
  max-width: 50.6rem;
  margin-left: auto;
  margin-right: auto;
  display: flex;
}

.section_footer-bottom {
  background-color: var(--_primitives---colors--white);
  color: var(--_primitives---colors--black);
}

.footer-bottom_top-wrapper {
  justify-content: space-between;
  display: flex;
}

.footer-bottom_logo-wrapper {
  aspect-ratio: 100.05 / 28.33;
  width: 100%;
  max-width: 6.25313rem;
}

.footer-bottom_left-wrapper {
  grid-column-gap: 10.125rem;
  flex: 0 auto;
  justify-content: flex-start;
  align-items: flex-start;
  width: 100%;
  max-width: 75.3rem;
  display: flex;
}

.footer-bottom_left-wrapper.d {
  grid-column-gap: 16.3rem;
}

.footer-bottom_links-wrapper {
  grid-column-gap: 9.375rem;
  justify-content: flex-start;
  align-items: flex-start;
  width: 100%;
  display: flex;
}

.footer-bottom_links-column {
  flex-flow: column;
  display: flex;
}

.footer-bottom_links-list {
  grid-column-gap: .6875rem;
  grid-row-gap: .6875rem;
  flex-flow: column;
  margin-top: 0;
  margin-bottom: 0;
  padding-left: 0;
  list-style-type: none;
  display: flex;
}

.footer-bottom_links-list-item {
  margin-top: 0;
  margin-bottom: 0;
  padding-left: 0;
  line-height: 1;
}

.footer-bottom_links-list-item.is-mobile-landscape {
  display: none;
}

.text-style-footer-link {
  opacity: .75;
  font-size: .9rem;
  color: black;
  line-height: 1rem;
  font-weight: 400;
  
}

.text-style-footer-link.is-mobile-landscape {
  display: none;
}

.footer-bottom_socials-wrapper {
  grid-column-gap: 1.015rem;
  grid-row-gap: 1.015rem;
  justify-content: flex-end;
  align-items: center;
  margin-top: auto;
  margin-left: auto;
  display: flex;
}

.footer-bottom_socials-item {
  aspect-ratio: 17 / 16;
  flex-flow: column;
  justify-content: center;
  align-items: center;
  width: 100%;
  max-width: 1.0625rem;
  display: flex;
}

.footer-bottom_socials-item.is-youtube {
  aspect-ratio: 19 / 16;
  max-width: 1.1875rem;
}

.footer-bottom_socials-item.is-instagram {
  aspect-ratio: 15 / 16;
  max-width: .9375rem;
}

.icon-embed {
  flex-flow: column;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
  display: flex;
}

.spacer-26 {
  padding-top: 1.625rem;
  padding-right: 0;
}

.footer-bottom_bottom-wrapper {
  justify-content: space-between;
  display: flex;
}

.footer-bottom_bottom-wrapper.show-mobile-landscape {
  display: none;
}

.footer-bottom_legals-text {
  opacity: .875;
  font-size: .9rem;
  line-height: 1;
  color: #376db6;
}

.footer-bottom_copyright-wrapper {
  margin-right: 1.6875rem;
}

.footer-bottom_terms-wrapper {
  grid-column-gap: 1.375rem;
  grid-row-gap: 1.375rem;
  justify-content: flex-start;
  align-items: center;
  margin-right: 0;
  display: flex;
}

.footer-bottom_bottom-left {
  justify-content: flex-start;
  align-items: center;
  display: flex;
}

.footer-bottom_bottom-left.show-mobile-landscape {
  display: none;
}

.footer-bottom_bottom-right {
  justify-content: flex-end;
  align-items: center;
  display: flex;
}

.footer-bottom_div-line {
  opacity: .75;
  background-color: #c8c8c8;
  width: 100%;
  height: .0625rem;
}

.navbar_dropdown-icon-wrapper {
  aspect-ratio: 40.61 / 41.46;
  flex: none;
  width: 100%;
  max-width: 2.53813rem;
}

.navbar_dropdown-paragraph-wrapper {
  max-width: 14.5rem;
}

.footer_footer-wrapper {
  z-index: 1;
  position: sticky;
  bottom: 0;
}

.footer_footer-wrapper:where(.w-variant-9bb42eb3-fd0b-6660-205b-a5077947b253) {
  position: relative;
}


.text-style-eyebrow {
   
    font-size: .95rem;
    font-weight: 500;
    line-height: 1;
}
.spacer-16 {
    padding-top: 1rem;
}
.text-wrap-balance {
    text-wrap: balance;
}
.text-color-dark-grey {
    color: #75779d;;
}
.spacer-17 {
    padding-top: 1.0625rem;
}
.footer_p-wrapper {
    width: 100%;
    max-width: none;
}
.text-wrap-pretty {
    text-wrap: pretty;
}
.text-size-medium {
    font-size: 1.125rem;
    line-height: 1.44;
}
.spacer-22 {
    padding-top: 1.375rem;
}
.button-group {
    grid-column-gap: 1rem;
    grid-row-gap: 1rem;
    flex-wrap: wrap;
    align-items: center;
    display: flex
;
}
.button.is-primary{
       border: 1px solid #396ab3;
    background-color: #376db6;
    
    color: #fff;
        text-align: center;
    border-radius: .625rem;
    padding: .625rem 1.25rem;
    font-weight: 500;
    line-height: 1.2;
    text-decoration: none;
    transition: border-color .6s 
cubic-bezier(.165, .84, .44, 1), background-color .6s 
cubic-bezier(.165, .84, .44, 1), color .6s 
cubic-bezier(.165, .84, .44, 1);
}

h2.upper-footer-heading{
    font-size: 3em;
}

.text-color-purple-2 {
    color: var(--altermed-primary);
}
.spacer-32 {
    padding-top: 2rem;
}
.w-list-unstyled {
    
    list-style: none;
}
.footer-bottom_logo-wrapper img{
    width: 10rem;
}
section.section_footer-bottom {
    background: #f2f3f9;
}

 .bottom-footer-radius{
    border-radius: 50px;
    background: white;
}

/*mobile -nav responsive*/



@media screen and (max-width: 1479px) {
.footer-bottom_links-wrapper {
    grid-column-gap: 4.375rem;}}

@media (max-width:900px) {
    .msgbox-card {
        padding: 0;
    }
    .msgbox-item{
        padding: 0;
    }
    .msgbox-content{
        display: none;
    }
    .msgbox-item-heading span{
        font-size: 17px;
    }
    .msgbox-icon {
    background: #f6f6f6;
    width: 2rem;
    height: 2rem;
    min-width: 2rem;
    min-height: 2rem;
    border-radius: 1rem;
    color: #376db6;
}
.msgbox-icon i {
    font-size: 17px;
    line-height: 30px;
}
.mobile-nav__contact li a {
    color: #000000;
     
}
.hero h1 {
    font-size: 2rem;
    font-weight: 400;
}
.hero ul{
        margin-top: 3rem;
        gap: 1.5rem;
}
.counter-heading{
    font-size: 2.2rem;
}
.about--content {
 
    gap: 3rem 0.5rem;
}
    .padding-vertical.footer-bottom {
        padding-top: 2.95313rem;
    }
        .footer-bottom_top-wrapper {
        grid-column-gap: 2rem;
        grid-row-gap: 2rem;
        flex-flow: column;
    }
        .footer-bottom_left-wrapper {
        grid-column-gap: 3rem;
        grid-row-gap: 3rem;
        flex-flow: column;
        justify-content: space-between;
        align-items: center;
                max-width: none;
    }
        .footer-bottom_socials-wrapper {
        grid-column-gap: 2rem;
        grid-row-gap: 2rem;
        justify-content: center;
        align-items: center;
                margin-left: 0;
    }
        .footer-bottom_links-column {
        width: 100%;
        max-width: 40%;
    }
        .footer-bottom_links-column.is-right {
        text-align: right;
        justify-content: flex-start;
        align-items: flex-end;
    }
}


@media screen and (max-width: 767px) {
        .footer-bottom_links-wrapper {
        grid-row-gap: 2rem;
        grid-template-rows: auto auto;
        grid-template-columns: 1fr 1fr;
        grid-auto-columns: 1fr;
        justify-content: space-between;
        align-items: flex-start;
        display: flex
;
        flex-wrap: wrap;
    }
    .footer-bottom_links-column {
        width: 100%;
        max-width: 41%;
    }
        .footer-bottom_links-column.is-right {
        text-align: right;
    }
    
        .footer-bottom_bottom-wrapper {
        grid-column-gap: 2rem;
        grid-row-gap: 2rem;
        flex-flow: column;
        grid-template-rows: auto;
        grid-template-columns: 1fr;
        grid-auto-columns: 1fr;
        justify-content: space-between;
        align-items: center;
    }
    
    
        .footer-bottom_bottom-wrapper.show-mobile-landscape{
        display: flex;
    }
    
        .footer-bottom_bottom-left {
        grid-column-gap: 1rem;
        grid-row-gap: 1rem;
        flex-flow: column;
        justify-content: center;
        align-items: center;
        width: 100%;
    }
        .collection-list-wrapper-3 {
        text-align: center;
    }
        .footer-bottom_bottom-right {
        text-align: center;
        justify-content: center;
        align-items: center;
    }
        .footer-bottom_copyright-wrapper {
        text-align: center;
        margin-right: 0;
    }
        .footer-bottom_terms-wrapper {
        grid-column-gap: 0rem;
        grid-row-gap: 0rem;
        justify-content: center;
        align-items: center;
        width: 100%;
    }
    .collection-item-2 {
        justify-content: flex-start;
        align-items: center;
        display: flex
;
    }
    .collection-item-2 {
        line-height: 1;
    }   
        .footer-bottom_legals-div-text {
        opacity: .55;
        padding-left: 1rem;
        padding-right: 1rem;
    }
        .hide-mobile-landscape {
        display: none !important;
    }
    .footer-bottom_legals-text {
    opacity: .875;
    font-size: .67rem;}
    h2.upper-footer-heading {
    font-size: 2em;
}
.hero ul li span.icons {
 
    font-size: 16px;
   
    height: 45px;
    
   
    width: 45px;
}
.hero ul li p {
    color: #000;
    font-size: 13px;
   
    
}
.hero {
    overflow: visible;
    padding: 4rem 0 3.5rem;
    position: relative;
}
}

@media screen and (max-width: 479px) {
    .footer-bottom_links-wrapper {
        grid-column-gap: 1rem;
        grid-row-gap: 1rem;
    }
        .footer-bottom_links-column {
        margin-bottom: 1.5rem;
    }
    .text-style-footer-link {
    opacity: .75;
    font-size: .75rem;}
    .about--content-card-item-title .body
 
 {
   
    font-size: 1em;
    line-height: 1.1em;
}
   .about--content-card-item p {
       font-size: .78em;
    line-height: 1.5em;
   }
}

.about--content-card {
    background: #ffffff;
    
}

.border-right-nav{
    border-right: 1px solid #dedede;
}
@media(min-width: 1000px) and (max-width:1500px) {
    .counter-heading {
    font-size: 3.5em;}
    
        .about--content-card-item {
        padding: 12rem 2rem 2rem;
    }
    .about--bottom-img img {
 
    height: 4rem;
    max-width: 4rem;
    
    
}
    .about--content-card-item img {
        height: 9rem;
        width: 9rem;
    }
    .about--content-card-item-title .body {
 
    font-size: 1.05em;
    
    }
}


@media(min-width: 1700px) 
{
    .hero ul li span.icons {
 
    font-size: 22px;
    font-weight: 500;
    height: 70px;
   
    width: 70px;
}
}
  </style>