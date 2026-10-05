@extends('layouts.guest.master')
@section('title',$contact->meta_title)
@section('description',$contact->meta_description)
@section('og_image', asset($contact->banner_image))
@section('page_level_style')

@section('content')

  <section class="page-header">
    <div class="page-header__bg"
         style="background-image:url('{{ asset('storage/' .$contact->banner_image) }}')"></div>
    <div class="container">
        <h2 class="page-header__title">{{ $contact->banner_title ?? 'Get in Touch' }}</h2>
        <ul class="altermed-breadcrumb list-unstyled">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><span>Contact</span></li>
        </ul>
    </div>
  </section>

  <section class="contact-one pt-100">
    <div class="container">
        <div class="contact-one__inner">
            <div class="row">
                <div class="col-xl-6">
                    <div class="contact-one__content pb-100">
                        <div class="sec-title">
                            <h6 class="sec-title__tagline">Contact with us</h6>
                            <h3 class="sec-title__title">{{ $contact->heading ?? '' }}</h3>
                        </div>

                        <p class="contact-one__text">
                            {{ $contact->description ?? '' }}
                        </p>

                        <ul class="list-unstyled contact-one__info">
                            <li class="contact-one__info__item">
                                <div class="contact-one__info__icon">
                                    {!! $contactDetails['phone_icon'] ?? '<i class="icon-phone-call"></i>' !!}
                                </div>
                                <div class="contact-one__info__content">
                                    <p class="contact-one__info__text">Call expert</p>
                                    <h4 class="contact-one__info__title">
                                        <a href="tel:{{ $contactDetails['phone1'] ?? '' }}">
                                            {{ $contactDetails['phone1'] ?? '' }}
                                        </a>
                                    </h4>
                              
                                </div>
                            </li>
                            <li class="contact-one__info__item">
                                <div class="contact-one__info__icon">
                                    {!! $contactDetails['email_icon'] ?? '<i class="icon-message"></i>' !!}
                                </div>
                                <div class="contact-one__info__content">
                                    <p class="contact-one__info__text">Write email</p>
                                    <h4 class="contact-one__info__title">
                                        <a href="mailto:{{ $contactDetails['email'] ?? '' }}">
                                            {{ $contactDetails['email'] ?? '' }}
                                        </a>
                                    </h4>
                                </div>
                            </li>
                            <li class="contact-one__info__item">
                                <div class="contact-one__info__icon">
                                    {!! $contactDetails['address_icon'] ?? '<i class="icon-placeholder"></i>' !!}
                                </div>
                                <div class="contact-one__info__content">
                                    <p class="contact-one__info__text">Visit office</p>
                                    <h4 class="contact-one__info__title">
                                        <a href="#">{{ $contactDetails['office_address'] ?? '' }}</a>
                                    </h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="contact-one__form__box">
                        <form action="{{ route('contact.store') }}" method="POST" class="contact-one__form" id="contact-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="contact-one__input">
                                        <input type="text" placeholder="Your Name" name="name" required id="contact-name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-one__input">
                                        <input type="email" placeholder="Email Address" name="email" required id="contact-email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-one__input">
                                        <input type="text" placeholder="Phone" name="phone" id="contact-phone">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-one__input">
                                        <input type="text" placeholder="Subject" name="subject" id="contact-subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="contact-one__input">
                                        <textarea name="message" placeholder="Write message" required id="contact-message"></textarea>
                                    </div>
                                    <div class="contact-one__btn">
                                        <button type="submit" class="altermed-btn contact-one__btn" id="contact-submit-btn">
                                            <span class="btn-text">Send a Message</span>
                                            <span class="btn-loader" style="display: none;">
                                                <i class="fas fa-spinner fa-spin"></i> Sending...
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!-- Contact Form Response -->
                        <div id="contact-response" style="display: none;"></div>

                        <!-- @if(session('success'))
                            <div class="alert alert-success mt-3">{{ session('success') }}</div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger mt-3">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $err)
                                        <li>{{ $err }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif -->
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- CTA Section --}}
    @if(!empty($contactCta))
        @foreach($contactCta as $cta)
            <div class="contact-one__banner">
                <div class="container">
                    <div class="contact-one__banner-inner">
                        <div class="shape-1">
                            <img src="{{ asset('guest/assets/images/shapes/contact-banner-shape-1.png') }}" alt="shape-1">
                        </div>
                        <div class="shape-2">
                            <img src="{{ asset('guest/assets/images/shapes/contact-banner-shape-2.png') }}" alt="shape-2">
                        </div>
                        <h3 class="contact-one__banner-title">
                            <span>{!! $cta['icon'] ?? '' !!}</span>
                            {{ $cta['heading'] ?? '' }}
                        </h3>
                        <a class="altermed-btn contact-banner-btn" href="{{ $cta['button_url'] ?? '#' }}">
                            {{ $cta['button_text'] ?? 'Get a Free Quote' }} <em></em>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
  </section>

  {{-- Map --}}
  <section class="contact-map">
    <div class="container-fluid">
        <div class="google-map google-map__contact">
            <iframe title="template google map"
                src="{{ $contact->map_url ?? '' }}"
                class="map__contact" allowfullscreen></iframe>
        </div>
    </div>
  </section>

@endsection

@endsection

@section('page_level_style')
<style>
/* Contact Form Loader Styles */
.contact-one__btn .btn-text,
.contact-one__btn .btn-loader {
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.contact-one__btn .btn-loader {
    color: #fff;
}

.contact-one__btn:disabled {
    opacity: 0.7;
    cursor: not-allowed;
}

.contact-one__form input:disabled,
.contact-one__form textarea:disabled {
    opacity: 0.6;
    cursor: not-allowed;
    background-color: #f8f9fa;
}

#contact-response .alert {
    margin-top: 20px;
    border-radius: 5px;
    padding: 15px;
}

#contact-response .alert-success {
    background-color: #d4edda;
    border-color: #c3e6cb;
    color: #155724;
}

#contact-response .alert-danger {
    background-color: #f8d7da;
    border-color: #f5c6cb;
    color: #721c24;
}

#contact-response .fa-check-circle,
#contact-response .fa-exclamation-triangle {
    margin-right: 8px;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .contact-one__btn .btn-text,
    .contact-one__btn .btn-loader {
        font-size: 14px;
    }
}
</style>
@endsection

@section('page_level_script')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contact-form');
    const submitBtn = document.getElementById('contact-submit-btn');
    const btnText = submitBtn.querySelector('.btn-text');
    const btnLoader = submitBtn.querySelector('.btn-loader');
    const responseDiv = document.getElementById('contact-response');

    // Form inputs
    const nameInput = document.getElementById('contact-name');
    const emailInput = document.getElementById('contact-email');
    const phoneInput = document.getElementById('contact-phone');
    const subjectInput = document.getElementById('contact-subject');
    const messageInput = document.getElementById('contact-message');

    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);

            // Add CSRF token
            const csrfToken = document.querySelector('meta[name="csrf-token"]');
            if (csrfToken) {
                formData.append('_token', csrfToken.getAttribute('content'));
            }

            // Show loading state
            submitBtn.disabled = true;
            btnText.style.display = 'none';
            btnLoader.style.display = 'inline-flex';

            // Disable all form inputs
            nameInput.disabled = true;
            emailInput.disabled = true;
            phoneInput.disabled = true;
            subjectInput.disabled = true;
            messageInput.disabled = true;

            // Clear previous response
            responseDiv.style.display = 'none';
            responseDiv.innerHTML = '';

            // Send AJAX request
            console.log('Sending form data...');
            fetch(this.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                redirect: 'manual' // Prevent automatic redirect following
            })
            .then(response => {
                console.log('Response received:', response);
                console.log('Response status:', response.status);
                console.log('Response type:', response.type);
            .then(response => {
                if (response.type === 'opaqueredirect') {
                    // This is a redirect response (success case)
                    // Laravel redirects back with success message
                    window.location.reload(); // Reload page to show success message
                    return;
                }

                if (response.ok) {
                    // Success response
                    return response.text();
                } else {
                    // Error response
                    throw new Error('Server error: ' + response.status);
                }
            })
            .then(response => {
                console.log('Processing response...');
                console.log('Response OK:', response.ok);
                console.log('Response status:', response.status);

                // Handle different response types
                const contentType = response.headers.get('content-type');
                console.log('Content-Type:', contentType);

                if (contentType && contentType.includes('application/json')) {
                    console.log('Processing JSON response');
                    return response.json().then(data => {
                        console.log('JSON data:', data);
                        if (data.result === 'success') {
                            responseDiv.style.display = 'block';
                            responseDiv.innerHTML = '<div class="alert alert-success"><i class="fas fa-check-circle"></i> ' + data.msg + '</div>';
                            contactForm.reset();
                        } else {
                            responseDiv.style.display = 'block';
                            responseDiv.innerHTML = '<div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i> ' + data.msg + '</div>';
                        }
                    });
                } else {
                    console.log('Processing HTML/text response');
                    // Handle HTML response (redirect or error page)
                    return response.text().then(text => {
                        console.log('HTML response text:', text.substring(0, 200) + '...');
                        if (response.ok) {
                            // Success response
                            responseDiv.style.display = 'block';
                            responseDiv.innerHTML = '<div class="alert alert-success"><i class="fas fa-check-circle"></i> Message sent successfully!</div>';
                            contactForm.reset();
                        } else {
                            // Error response
                            responseDiv.style.display = 'block';
                            responseDiv.innerHTML = '<div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i> An error occurred. Please try again.</div>';
                        }
                    });
                }
            })
            .catch(error => {
                // Handle network errors
                responseDiv.style.display = 'block';
                responseDiv.innerHTML = '<div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i> Network error. Please check your connection and try again.</div>';
                console.error('Contact form error:', error);
            })
            .finally(() => {
                // Re-enable form elements
                submitBtn.disabled = false;
                btnText.style.display = 'inline-flex';
                btnLoader.style.display = 'none';

                nameInput.disabled = false;
                emailInput.disabled = false;
                phoneInput.disabled = false;
                subjectInput.disabled = false;
                messageInput.disabled = false;
            });
        });
    }
});
</script>
@endsection
