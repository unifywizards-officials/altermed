@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-11 mx-auto">

            {{-- Page Title --}}
            <div class="card mb-4 shadow-sm">
                <div class="card-header text-white" style="background-color:#00cde5;">
                    <h4 class="mb-0">Contact Details</h4>
                </div>
            </div>

            {{-- Form --}}
            <form action="{{ route('admin.contact_details.update', $contact->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- Banner Section --}}
                <div class="card mb-4 shadow-sm">
                    <div class="card-header"><h5 class="mb-0">Contact Banner</h5></div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Banner Title</label>
                            <input type="text" name="banner_title" class="form-control"
                                   value="{{ old('banner_title', $contact->banner_title) }}" placeholder="Enter Banner Title">
                            @error('banner_title') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Banner Image</label>
                            <input type="file" name="banner_image" class="form-control">
                            @if(!empty($contact->banner_image))
                                <div class="mt-2">
                                    <img src="{{ asset('storage/'.$contact->banner_image) }}" 
                                         alt="Banner" class="img-thumbnail" style="max-height:150px;">
                                </div>
                            @endif
                            @error('banner_image') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                </div>

                {{-- Basic --}}
                <div class="card mb-4 shadow-sm">
                    <div class="card-header"><h5 class="mb-0">Basic Details</h5></div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Heading</label>
                            <input type="text" name="heading" class="form-control" 
                                   value="{{ old('heading', $contact->heading) }}" required>
                            @error('heading') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="3">{{ old('description', $contact->description) }}</textarea>
                            @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                </div>

                {{-- Contact Details (Fixed 4, with separate icons) --}}
                <div class="card mb-4 shadow-sm">
                    <div class="card-header"><h5 class="mb-0">Contact Details</h5></div>
                    <div class="card-body">
                        @php
                            $details = old('contact_details', $contact->contact_details ?? []);
                        @endphp

                        {{-- Phone 1 --}}
                        <div class="row g-2 mb-2">
                            <div class="col-md-2"><label>Phone 1 Icon</label>
                                <input type="text" name="contact_details[phone1_icon]" class="form-control" 
                                       value="{{ $details['phone1_icon'] ?? '' }}" placeholder="Icon (e.g. fa fa-phone)">
                            </div>
                            <div class="col-md-10"><label>Phone 1</label>
                                <input type="text" name="contact_details[phone1]" class="form-control" 
                                       value="{{ $details['phone1'] ?? '' }}" placeholder="Phone 1">
                            </div>
                        </div>

                        {{-- Phone 2 --}}
                        <div class="row g-2 mb-2">
                            <div class="col-md-2"><label>Phone 2 Icon</label>
                                <input type="text" name="contact_details[phone2_icon]" class="form-control" 
                                       value="{{ $details['phone2_icon'] ?? '' }}" placeholder="Icon (e.g. fa fa-phone)">
                            </div>
                            <div class="col-md-10"><label>Phone 2</label>
                                <input type="text" name="contact_details[phone2]" class="form-control" 
                                       value="{{ $details['phone2'] ?? '' }}" placeholder="Phone 2">
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="row g-2 mb-2">
                            <div class="col-md-2"><label>Email Icon</label>
                                <input type="text" name="contact_details[email_icon]" class="form-control" 
                                       value="{{ $details['email_icon'] ?? '' }}" placeholder="Icon (e.g. fa fa-envelope)">
                            </div>
                            <div class="col-md-10"><label>Email</label>
                                <input type="email" name="contact_details[email]" class="form-control" 
                                       value="{{ $details['email'] ?? '' }}" placeholder="Email">
                            </div>
                        </div>

                        {{-- Office Address --}}
                        <div class="row g-2">
                            <div class="col-md-2"><label>Address Icon</label>
                                <input type="text" name="contact_details[address_icon]" class="form-control" 
                                       value="{{ $details['address_icon'] ?? '' }}" placeholder="Icon (e.g. fa fa-map-marker)">
                            </div>
                            <div class="col-md-10"><label>Office Address</label>
                                <input type="text" name="contact_details[office_address]" class="form-control" 
                                       value="{{ $details['office_address'] ?? '' }}" placeholder="Office Address">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Contact CTA --}}
                <div class="card mb-4 shadow-sm">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Contact CTA</h5>
                        <!-- <button type="button" class="btn btn-sm btn-success" id="addCta">+ Add CTA</button> -->
                    </div>
                    <div class="card-body" id="cta-wrapper">
                        @php 
                            $ctas = old('contact_cta', $contact->contact_cta ?? []); 
                        @endphp

                        {{-- Permanent CTA (index 0) --}}
                        <div class="row g-2 mb-3">
                            <div class="col-md-3">
                                <label>Icon</label>
                                <input type="text" name="contact_cta[0][icon]" class="form-control" 
                                       value="{{ $ctas[0]['icon'] ?? '' }}" placeholder="Icon">
                            </div>
                            <div class="col-md-3">
                                <label>Heading</label>
                                <input type="text" name="contact_cta[0][heading]" class="form-control" 
                                       value="{{ $ctas[0]['heading'] ?? '' }}" placeholder="Heading">
                            </div>
                            <div class="col-md-3">
                                <label>Button Text</label>
                                <input type="text" name="contact_cta[0][button_text]" class="form-control" 
                                       value="{{ $ctas[0]['button_text'] ?? '' }}" placeholder="Button Text">
                            </div>
                            <div class="col-md-3">
                                <label>Button URL</label>
                                <input type="url" name="contact_cta[0][button_url]" class="form-control" 
                                       value="{{ $ctas[0]['button_url'] ?? '' }}" placeholder="https://...">
                            </div>
                        </div>

                        {{-- Existing saved CTAs --}}
                        @if(!empty($ctas) && count($ctas) > 1)
                            @foreach($ctas as $i => $cta)
                                @if($i > 0)
                                <div class="row g-2 mb-3 cta-item">
                                    <div class="col-md-3">
                                        <label>Icon</label>
                                        <input type="text" name="contact_cta[{{ $i }}][icon]" class="form-control" 
                                               value="{{ $cta['icon'] ?? '' }}" placeholder="Icon">
                                    </div>
                                    <div class="col-md-3">
                                        <label>Heading</label>
                                        <input type="text" name="contact_cta[{{ $i }}][heading]" class="form-control" 
                                               value="{{ $cta['heading'] ?? '' }}" placeholder="Heading">
                                    </div>
                                    <div class="col-md-3">
                                        <label>Button Text</label>
                                        <input type="text" name="contact_cta[{{ $i }}][button_text]" class="form-control" 
                                               value="{{ $cta['button_text'] ?? '' }}" placeholder="Button Text">
                                    </div>
                                    <div class="col-md-3">
                                        <label>Button URL</label>
                                        <div class="input-group">
                                            <input type="url" name="contact_cta[{{ $i }}][button_url]" class="form-control" 
                                                   value="{{ $cta['button_url'] ?? '' }}" placeholder="https://...">
                                            <button type="button" class="btn btn-danger removeCta">X</button>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>

            
                {{-- SEO & Map Section --}}
                <div class="card mb-4 shadow-sm">
                    <div class="card-header"><h5 class="mb-0">SEO & Map</h5></div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Google Map URL</label>
                            <input type="url" name="map_url" class="form-control"
                                   value="{{ old('map_url', $contact->map_url) }}" placeholder="Paste Google Map Embed URL">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Meta Title</label>
                            <input type="text" name="meta_title" class="form-control"
                                   value="{{ old('meta_title', $contact->meta_title) }}" placeholder="SEO Meta Title">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Meta Keywords</label>
                            <input type="text" name="meta_keywords" class="form-control"
                                   value="{{ old('meta_keywords', $contact->meta_keywords) }}" placeholder="Comma separated keywords">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Meta Description</label>
                            <textarea name="meta_description" class="form-control" rows="3" placeholder="SEO Meta Description">{{ old('meta_description', $contact->meta_description) }}</textarea>
                        </div>
                    </div>
                </div>

                    {{-- Extra Icons --}}
                <div class="card mb-4 shadow-sm">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Settings Icon</h5>
                        <button type="button" class="btn btn-sm btn-success" id="addIcon">+ Add Icon</button>
                    </div>
                    <div class="card-body" id="icons-wrapper">
                        @php 
                            $icons = old('extra_icons', $contact->extra_icons ?? []); 
                        @endphp

                        @if(!empty($icons))
                            @foreach($icons as $i => $icon)
                                <div class="row g-2 mb-2 icon-item">
                                    <div class="col-md-5">
                                        <input type="text" name="extra_icons[{{ $i }}][icon]" class="form-control" value="{{ $icon['icon'] ?? '' }}" placeholder="Icon (e.g. fa fa-star)">
                                    </div>
                                    <div class="col-md-5">
                                        <input type="url" name="extra_icons[{{ $i }}][url]" class="form-control" value="{{ $icon['url'] ?? '' }}" placeholder="https://...">
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-danger removeIcon">X</button>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

                {{-- Submit --}}
                <div class="text-end mb-5">
                    <button type="submit" class="btn btn-primary px-4" style="background-color: #2b2b5e;border-color: #2b2b5e;">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Templates --}}
<template id="cta-template">
    <div class="row g-2 mb-3 cta-item">
        <div class="col-md-3">
            <label>Icon</label>
            <input type="text" name="contact_cta[__INDEX__][icon]" class="form-control" placeholder="Icon">
        </div>
        <div class="col-md-3">
            <label>Heading</label>
            <input type="text" name="contact_cta[__INDEX__][heading]" class="form-control" placeholder="Heading">
        </div>
        <div class="col-md-3">
            <label>Button Text</label>
            <input type="text" name="contact_cta[__INDEX__][button_text]" class="form-control" placeholder="Button Text">
        </div>
        <div class="col-md-3">
            <label>Button URL</label>
            <div class="input-group">
                <input type="url" name="contact_cta[__INDEX__][button_url]" class="form-control" placeholder="https://...">
                <button type="button" class="btn btn-danger removeCta">X</button>
            </div>
        </div>
    </div>
</template>

<template id="icon-template">
    <div class="row g-2 mb-2 icon-item">
        <div class="col-md-5">
            <input type="text" name="extra_icons[__INDEX__][icon]" class="form-control" placeholder="Icon (e.g. fa fa-star)">
        </div>
        <div class="col-md-5">
            <input type="url" name="extra_icons[__INDEX__][url]" class="form-control" placeholder="https://...">
        </div>
        <div class="col-md-2">
            <button type="button" class="btn btn-danger removeIcon">X</button>
        </div>
    </div>
</template>
@endsection

@push('scripts')
<script>
    let ctaIndex = {{ !empty($ctas) ? count($ctas) : 1 }};
    let iconIndex = {{ !empty($icons) ? count($icons) : 0 }};

    // Add CTA
    document.getElementById('addCta').addEventListener('click', function () {
        let template = document.getElementById('cta-template').innerHTML;
        template = template.replace(/__INDEX__/g, ctaIndex);
        document.getElementById('cta-wrapper').insertAdjacentHTML('beforeend', template);
        ctaIndex++;
    });

    // Add Icon
    document.getElementById('addIcon').addEventListener('click', function () {
        let template = document.getElementById('icon-template').innerHTML;
        template = template.replace(/__INDEX__/g, iconIndex);
        document.getElementById('icons-wrapper').insertAdjacentHTML('beforeend', template);
        iconIndex++;
    });

    // Remove CTA / Icon
    document.addEventListener('click', function (e) {
        if (e.target.classList.contains('removeCta')) {
            e.target.closest('.cta-item').remove();
        }
        if (e.target.classList.contains('removeIcon')) {
            e.target.closest('.icon-item').remove();
        }
    });
</script>
@endpush
