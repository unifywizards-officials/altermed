@extends('layouts.guest.master')
@section('page_level_style')

 
 
 
 


@section('content')


  <section class="page-header">
                <div class="page-header__bg"></div>
                <!-- /.page-header__bg -->
                <div class="container">
                    <h2 class="page-header__title">Get in Touch</h2>
                    <ul class="altermed-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Contact</span></li>
                    </ul>
                    <!-- /.thm-breadcrumb list-unstyled -->
                </div>
                <!-- /.container -->
            </section>
            <!-- /.page-header -->
            <section class="contact-one pt-100">
                <div class="container">
                    <div class="contact-one__inner">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="contact-one__content pb-100">
                                    <div class="sec-title">
                                        <h6 class="sec-title__tagline">Contact
                                            with
                                            us
                                        </h6>
                                        <!-- /.sec-title__tagline -->
                                        <h3 class="sec-title__title">Have
                                            questions? Feel free to write
                                            us
                                        </h3>
                                        <!-- /.sec-title__title -->
                                    </div>
                                    <!-- /.sec-title -->
                                    <p class="contact-one__text">Whether you
                                        need support, have inquiries, or just
                                        want to share your thoughts, we’re only
                                        a message away. Our team will get back
                                        to you as quickly as possible.
                                    </p>
                                    <!-- /.contact-one__text -->
                                    <ul class="list-unstyled contact-one__info">
                                        <li class="contact-one__info__item">
                                            <div
                                                class="contact-one__info__icon">
                                                <i class="icon-phone-call"></i>
                                            </div>
                                            <!-- /.contact-one__info__icon -->
                                            <div
                                                class="contact-one__info__content">
                                                <p
                                                    class="contact-one__info__text">Call
                                                    expert
                                                </p>
                                                <!-- /.contact-one__info__text -->
                                                <h4
                                                    class="contact-one__info__title"><a
                                                        href="tel:+1 856-387-9220">
                                                        +1 856-387-9220</a>
                                                </h4>
                                                <!-- /.contact-one__info__title -->
                                            </div>
                                            <!-- /.contact-one__info__content -->
                                        </li>
                                        <li class="contact-one__info__item">
                                            <div
                                                class="contact-one__info__icon">
                                                <i class="icon-message"></i>
                                            </div>
                                            <!-- /.contact-one__info__icon -->
                                            <div
                                                class="contact-one__info__content">
                                                <p
                                                    class="contact-one__info__text">Write
                                                    email
                                                </p>
                                                <!-- /.contact-one__info__text -->
                                                <h4
                                                    class="contact-one__info__title"><a
                                                        href="mailto:info@altermedrcm.com">info@altermedrcm.com</a></h4>
                                                <!-- /.contact-one__info__title -->
                                            </div>
                                            <!-- /.contact-one__info__content -->
                                        </li>
                                        <li class="contact-one__info__item">
                                            <div
                                                class="contact-one__info__icon">
                                                <i class="icon-placeholder"></i>
                                            </div>
                                            <!-- /.contact-one__info__icon -->
                                            <div
                                                class="contact-one__info__content">
                                                <p
                                                    class="contact-one__info__text">Visit
                                                    office
                                                </p>
                                                <!-- /.contact-one__info__text -->
                                                <h4
                                                    class="contact-one__info__title"><a
                                                        href="#">25 Merwit CT,
                                                        Pennsauken, New Jersey
                                                        08109</a>
                                                </h4>
                                                <!-- /.contact-one__info__title -->
                                            </div>
                                            <!-- /.contact-one__info__content -->
                                        </li>
                                    </ul>
                                    <!-- /.list-unstyled -->
                                </div>
                                <!-- /.contact-one__content -->
                            </div>
                            <!-- /.col-xl-7 -->
                            <div class="col-xl-6">
                                <div class="contact-one__form__box">
                                    <form action="assets/inc/sendemail.php"
                                        class="contact-one__form contact-form-validated"
                                        novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="contact-one__input">
                                                    <input type="text"
                                                        placeholder="Your Name"
                                                        name="name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="contact-one__input">
                                                    <input type="email"
                                                        placeholder="Email Address"
                                                        name="email">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="contact-one__input">
                                                    <input type="email"
                                                        placeholder="Phone"
                                                        name="phone">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="contact-one__input">
                                                    <input type="text"
                                                        placeholder="Subject"
                                                        name="subject">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="contact-one__input">
                                                    <textarea name="message"
                                                        placeholder="Write message"></textarea>
                                                </div>
                                                <div class="contact-one__btn">
                                                    <button type="submit"
                                                        class="altermed-btn contact-one__btn">Send
                                                        a Message
                                                        <em></em></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="result"></div>
                                </div>
                            </div>
                            <!-- /.col-xl-5 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.contact-one__inner -->
                </div>
                <!-- /.container -->
                <div class="contact-one__banner">
                    <div class="container">
                        <div class="contact-one__banner-inner">
                            <div class="shape-1">
                                <img
                                    src="      {{ asset('guest/assets/images/shapes/contact-banner-shape-1.png') }}"
                                    alt="shape-1">
                            </div>
                            
                            <div class="shape-2">
                                <img
                                    src="  {{ asset('guest/assets/images/shapes/contact-banner-shape-2.png ') }}"
                                    alt="shape-1">
                            </div>
                            <h3 class="contact-one__banner-title"><span><i
                                        class="icon-family-1"></i></span>Need
                                insurance &
                                services consultation?
                            </h3>
                            <a class="altermed-btn contact-banner-btn"
                                href="contact.html">Get a Free Quote
                                <em></em></a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.contact-one -->
            <section class="contact-map">
                <div class="container-fluid">
                    <div class="google-map google-map__contact">
                        <iframe title="template google map"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6117.423131836724!2d-75.047175!3d39.947841!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6ca323872fef3%3A0x720f5e8b995d010f!2s25%20Merwit%20Ct%2C%20Merchantville%2C%20NJ%2008109%2C%20USA!5e0!3m2!1sen!2sin!4v1755781890444!5m2!1sen!2sin"
                            class="map__contact" allowfullscreen></iframe>
                    </div>
                    <!-- /.google-map -->
                </div>
                <!-- /.container-fluid -->
            </section>
 
 


@endsection




@endsection
@section('page_level_script')
@endsection