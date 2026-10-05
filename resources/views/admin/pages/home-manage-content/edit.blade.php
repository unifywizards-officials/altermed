@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-11 mx-auto">

            {{-- Page Title --}}
            <div class="card mb-4 shadow-sm">
                <div class="card-header text-white" style="background-color:#00cde5;">
                    <h4 class="mb-0">Home Content Management</h4>
                </div>
            </div>

            {{-- Form --}}
            <form action="{{ route('admin.home-manage-content.update', $homeManageContent->id) }}" method="POST">
                @csrf
                @method('PUT')

                {{-- Service Section --}}
                <div class="card mb-4 shadow-sm">
                    <div class="card-header"><h5 class="mb-0">Service Section</h5></div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Service Heading</label>
                            <input type="text" name="home_service_heading" class="form-control"
                                   value="{{ old('home_service_heading', $homeManageContent->home_service_heading) }}" placeholder="Enter Service Heading">
                            @error('home_service_heading') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Service Description</label>
                            <textarea name="home_service_description" class="form-control" rows="3">{{ old('home_service_description', $homeManageContent->home_service_description) }}</textarea>
                            @error('home_service_description') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                </div>

                {{-- Why Choose Section --}}
                <div class="card mb-4 shadow-sm">
                    <div class="card-header"><h5 class="mb-0">Why Choose Section</h5></div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Why Choose H1</label>
                            <input type="text" name="home_why_choose_h1" class="form-control"
                                   value="{{ old('home_why_choose_h1', $homeManageContent->home_why_choose_h1) }}" placeholder="Enter H1 Heading">
                            @error('home_why_choose_h1') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Why Choose H2</label>
                            <input type="text" name="home_why_choose_h2" class="form-control"
                                   value="{{ old('home_why_choose_h2', $homeManageContent->home_why_choose_h2) }}" placeholder="Enter H2 Heading">
                            @error('home_why_choose_h2') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                </div>

                {{-- Client Section --}}
                <div class="card mb-4 shadow-sm">
                    <div class="card-header"><h5 class="mb-0">Client Section</h5></div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Client Heading</label>
                            <input type="text" name="home_client_heading" class="form-control"
                                   value="{{ old('home_client_heading', $homeManageContent->home_client_heading) }}" placeholder="Enter Client Heading">
                            @error('home_client_heading') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                </div>

                {{-- Different Section --}}
                <div class="card mb-4 shadow-sm">
                    <div class="card-header"><h5 class="mb-0">Different Section</h5></div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Different Heading</label>
                            <input type="text" name="home_different_heading" class="form-control"
                                   value="{{ old('home_different_heading', $homeManageContent->home_different_heading) }}" placeholder="Enter Different Heading">
                            @error('home_different_heading') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                </div>

                {{-- CTA Section --}}
                <div class="card mb-4 shadow-sm">
                    <div class="card-header"><h5 class="mb-0">Home CTA</h5></div>
                    <div class="card-body">
                        <div id="cta-container">
                            @php
                                $ctas = old('home_cta', $homeManageContent->home_cta ?? []);
                                if (!is_array($ctas)) {
                                    $ctas = [$ctas];
                                }
                            @endphp
                            @foreach($ctas as $index => $cta)
                                <div class="cta-item border p-3 mb-3" data-index="{{ $index }}">
                                    <h6>CTA {{ $index + 1 }}</h6>
                                    <div class="mb-3">
                                        <label class="form-label">CTA Title</label>
                                        <input type="text" name="home_cta[{{ $index }}][title]" class="form-control"
                                               value="{{ is_array($cta) ? ($cta['title'] ?? '') : $cta }}" placeholder="Enter CTA Title">
                                        @error('home_cta.'.$index.'.title') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Button Text</label>
                                        <input type="text" name="home_cta[{{ $index }}][button_text]" class="form-control"
                                               value="{{ is_array($cta) ? ($cta['button_text'] ?? '') : '' }}" placeholder="Enter Button Text">
                                        @error('home_cta.'.$index.'.button_text') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Button URL</label>
                                        <input type="url" name="home_cta[{{ $index }}][button_url]" class="form-control"
                                               value="{{ is_array($cta) ? ($cta['button_url'] ?? '') : '' }}" placeholder="Enter Button URL">
                                        @error('home_cta.'.$index.'.button_url') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    <!-- <button type="button" class="btn btn-danger btn-sm remove-cta" {{ count($ctas) == 1 ? 'disabled' : '' }}>Remove</button> -->
                                </div>
                            @endforeach
                        </div>
                        <!-- <button type="button" class="btn btn-success btn-sm" id="add-cta">Add CTA</button> -->
                    </div>
                </div>

                {{-- SEO Section --}}
                <div class="card mb-4 shadow-sm">
                    <div class="card-header"><h5 class="mb-0">SEO Settings</h5></div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Meta Title</label>
                            <input type="text" name="home_meta_title" class="form-control"
                                   value="{{ old('home_meta_title', $homeManageContent->home_meta_title) }}" placeholder="SEO Meta Title">
                            @error('home_meta_title') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Meta Description</label>
                            <textarea name="home_meta_description" class="form-control" rows="3" placeholder="SEO Meta Description">{{ old('home_meta_description', $homeManageContent->home_meta_description) }}</textarea>
                            @error('home_meta_description') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Meta Keywords</label>
                            <input type="text" name="home_meta_keywords" class="form-control"
                                   value="{{ old('home_meta_keywords', $homeManageContent->home_meta_keywords) }}" placeholder="Comma separated keywords">
                            @error('home_meta_keywords') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
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

<script>
let ctaIndex = @json(count($ctas));

document.getElementById('add-cta').addEventListener('click', function() {
    const container = document.getElementById('cta-container');
    const newItem = document.createElement('div');
    newItem.className = 'cta-item border p-3 mb-3';
    newItem.setAttribute('data-index', ctaIndex);
    newItem.innerHTML = `
        <h6>CTA ${ctaIndex + 1}</h6>
        <div class="mb-3">
            <label class="form-label">CTA Title</label>
            <input type="text" name="home_cta[${ctaIndex}][title]" class="form-control" placeholder="Enter CTA Title">
        </div>
        <div class="mb-3">
            <label class="form-label">Button Text</label>
            <input type="text" name="home_cta[${ctaIndex}][button_text]" class="form-control" placeholder="Enter Button Text">
        </div>
        <div class="mb-3">
            <label class="form-label">Button URL</label>
            <input type="url" name="home_cta[${ctaIndex}][button_url]" class="form-control" placeholder="Enter Button URL">
        </div>
        <button type="button" class="btn btn-danger btn-sm remove-cta">Remove</button>
    `;
    container.appendChild(newItem);
    ctaIndex++;
    updateRemoveButtons();
});

document.addEventListener('click', function(e) {
    if (e.target.classList.contains('remove-cta')) {
        e.target.closest('.cta-item').remove();
        updateRemoveButtons();
    }
});

function updateRemoveButtons() {
    const items = document.querySelectorAll('.cta-item');
    items.forEach(item => {
        const removeBtn = item.querySelector('.remove-cta');
        removeBtn.disabled = items.length === 1;
    });
}
</script>

@endsection