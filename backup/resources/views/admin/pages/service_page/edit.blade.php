@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="mb-0">Edit Service Details</h1>
        <a href="{{ route('admin.service-pages.index') }}" class="btn btn-secondary"><i class='fas fa-arrow-left'></i> Back</a>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.service-pages.update', ['service_page' => $servicePage->slug]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

             <div class="row">
            <div class="col-md-12">
                <div class="form-group mb-3">
                    <label>Service Banner Image</label>
                    <input type="file" name="service_banner_image" class="form-control">
                    @if(!empty($servicePage->service_banner_image))
                        <div class="mt-2">
                            <img src="{{ Str::startsWith($servicePage->service_banner_image, ['http://', 'https://', '/']) ? $servicePage->service_banner_image : asset('storage/' . $servicePage->service_banner_image) }}" alt="Banner" style="max-height: 70px;">
                        </div>
                    @endif
                </div>
            </div>
            
                </div>    

                <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label>Title</label>
                    <input type="text" name="service_banner_title" value="{{ old('service_banner_title', $servicePage->service_banner_title) }}" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label>Slug</label>
                    <input type="text" name="slug" value="{{ old('slug', $servicePage->slug) }}" class="form-control" placeholder="auto from banner title if empty">
                </div>
            </div>
                </div>

           

                <div class="form-group mb-3">
                    <label>Banner Details</label>
                    <textarea name="service_banner_details" class="form-control" rows="3">{{ old('service_banner_details', $servicePage->service_banner_details) }}</textarea>
                </div>

                <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label>Service Title</label>
                    <input type="text" name="service_title" value="{{ old('service_title', $servicePage->service_title) }}" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label>Service Image</label>
                    <input type="file" name="service_image" class="form-control">
                    @if(!empty($servicePage->service_image))
                        <div class="mt-2">
                            <img src="{{ Str::startsWith($servicePage->service_image, ['http://', 'https://', '/']) ? $servicePage->service_image : asset('storage/' . $servicePage->service_image) }}" alt="Service" style="max-height: 70px;">
                        </div>
                    @endif
                </div>
            </div>
                </div>

                <div class="form-group mb-3">
                    <label>Service Description</label>
                    <textarea name="service_description" id="service_description" class="form-control summernote" rows="6">{{ old('service_description', $servicePage->service_description) }}</textarea>
                </div>
                <hr>

                <div class="col-md-12">
                <div class="form-group mb-3">
                    <label>Acquire Heading</label>
                    <input type="text" name="acquire_heading" value="{{ old('acquire_heading', $servicePage->acquire_heading) }}" class="form-control">
                </div>
            </div>

                <hr>
                <h5 class="mb-3">Acquire Titles</h5>
                <div id="acquire_title_group">
            @php $acquireTitles = old('acquire_title', $servicePage->acquire_title ?? []); @endphp
            @if(empty($acquireTitles))
                @php $acquireTitles = ['']; @endphp
            @endif
            @foreach($acquireTitles as $idx => $item)
                <div class="input-group mb-2">
                    <input type="text" name="acquire_title[]" value="{{ $item }}" class="form-control" placeholder="Acquire title">
                    <button type="button" class="btn btn-outline-danger remove-row">Remove</button>
                </div>
            @endforeach
                </div>
                <button type="button" class="btn btn-sm btn-outline-primary mb-3" data-append="#acquire_title_group" data-name="acquire_title[]">Add more</button>

                <hr>
                <h5 class="mb-3">Icons</h5>
                <div id="icon_group">
            @php
                $icons = old('icon', $servicePage->icon ?? []);
                $iconTitles = old('icon_title', $servicePage->icon_title ?? []);
                $iconHeadings = old('icon_heading', $servicePage->icon_heading ?? []);
                $maxCount = max(count($icons), count($iconTitles), count($iconHeadings));
                if($maxCount == 0) $maxCount = 1;
            @endphp
            @for($i = 0; $i < $maxCount; $i++)
                <div class="icon-item mb-3 p-3 border rounded">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" name="icon[]" value="{{ $icons[$i] ?? '' }}" class="form-control" placeholder="Icon class/name">
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="icon_title[]" value="{{ $iconTitles[$i] ?? '' }}" class="form-control" placeholder="Icon title">
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="icon_heading[]" value="{{ $iconHeadings[$i] ?? '' }}" class="form-control" placeholder="Icon heading">
                        </div>
                        <div class="col-md-1">
                            <button type="button" class="btn btn-outline-danger remove-icon-item">Remove</button>
                        </div>
                    </div>
                </div>
            @endfor
                </div>
                <button type="button" class="btn btn-sm btn-outline-primary mb-3" id="add-icon-item">Add Icon Item</button>

                <div class="form-group mb-3">
                    <label>Icons Description</label>
                    <textarea name="description" class="form-control" rows="3" placeholder="Description for all icons">{{ old('description', $servicePage->description ?? '') }}</textarea>
                </div>

                <hr>
                <h5 class="mb-3">FAQ</h5>
                <div id="faq_group">
            @php
                $faqTitles = old('faq_title', $servicePage->faq_title ?? []);
                $faqHeadings = old('faq_heading', $servicePage->faq_heading ?? []);
                $maxFaqCount = max(count($faqTitles), count($faqHeadings));
                if($maxFaqCount == 0) $maxFaqCount = 1;
            @endphp
            @for($i = 0; $i < $maxFaqCount; $i++)
                <div class="faq-item mb-3 p-3 border rounded">
                    <div class="row">
                        <div class="col-md-5">
                            <input type="text" name="faq_title[]" value="{{ $faqTitles[$i] ?? '' }}" class="form-control" placeholder="FAQ title">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="faq_heading[]" value="{{ $faqHeadings[$i] ?? '' }}" class="form-control" placeholder="FAQ heading">
                        </div>
                        <div class="col-md-1">
                            <button type="button" class="btn btn-outline-danger remove-faq-item">Remove</button>
                        </div>
                    </div>
                </div>
            @endfor
                </div>
                <button type="button" class="btn btn-sm btn-outline-primary mb-3" id="add-faq-item">Add FAQ Item</button>

                <hr>
                <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label>Why Choose Image</label>
                    <input type="file" name="image_why_choose" class="form-control">
                    @if(!empty($servicePage->image_why_choose))
                        <div class="mt-2">
                            <img src="{{ Str::startsWith($servicePage->image_why_choose, ['http://', 'https://', '/']) ? $servicePage->image_why_choose : asset('storage/' . $servicePage->image_why_choose) }}" alt="Why Choose" style="max-height: 70px;">
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label>Why Choose Title</label>
                    <input type="text" name="why_choose_title" value="{{ old('why_choose_title', $servicePage->why_choose_title) }}" class="form-control">
                </div>
            </div>
                </div>

                <div class="row">
            <div class="col-md-12">
                <div class="form-group mb-3">
                    <label>Why Choose Heading</label>
                    <input type="text" name="why_choose_heading" value="{{ old('why_choose_heading', $servicePage->why_choose_heading) }}" class="form-control">
                </div>
            </div>
            <!-- <div class="col-md-6">
                <div class="form-group mb-3">
                    <label>Icon Section Heading</label>
                    <input type="text" name="icon_heading_single" value="{{ old('icon_heading_single', $servicePage->icon_heading_single ?? '') }}" class="form-control" placeholder="Optional single heading for icon section">
                </div>
            </div> -->
                </div>

                <h6>Why Choose Items</h6>
                <div id="whychoos_name_group">
            @php $whychoos = old('whychoos_name', $servicePage->whychoos_name ?? []); @endphp
            @if(empty($whychoos))
                @php $whychoos = ['']; @endphp
            @endif
            @foreach($whychoos as $item)
                <div class="input-group mb-2">
                    <input type="text" name="whychoos_name[]" value="{{ $item }}" class="form-control" placeholder="Why choose item">
                    <button type="button" class="btn btn-outline-danger remove-row">Remove</button>
                </div>
            @endforeach
                </div>
                <button type="button" class="btn btn-sm btn-outline-primary mb-3" data-append="#whychoos_name_group" data-name="whychoos_name[]" style="    width: 100px;">Add item</button>

                <hr>
                <div class="row">
            <div class="col-md-4">
                <div class="form-group mb-3">
                    <label>Meta Title</label>
                    <input type="text" name="meta_title" value="{{ old('meta_title', $servicePage->meta_title) }}" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group mb-3">
                    <label>Meta Description</label>
                    <textarea name="meta_description" class="form-control" rows="2">{{ old('meta_description', $servicePage->meta_description) }}</textarea>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group mb-3">
                    <label>Meta Keywords</label>
                    <textarea name="meta_keywords" class="form-control" rows="2">{{ old('meta_keywords', $servicePage->meta_keywords) }}</textarea>
                </div>
            </div>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-success" style="background-color: #2b2b5e;border-color: #2b2b5e;">Update</button>
                    <a href="{{ route('admin.service-pages.index') }}" class="btn btn-light">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

@push('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet" />
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>
<script>
    document.addEventListener('click', function(e) {
        // Handle old data-append functionality for acquire titles and why choose items
        if (e.target && e.target.matches('[data-append]')) {
            const container = document.querySelector(e.target.getAttribute('data-append'));
            const name = e.target.getAttribute('data-name');
            if (container) {
                const wrapper = document.createElement('div');
                wrapper.className = 'input-group mb-2';
                const input = document.createElement('input');
                input.type = 'text';
                input.name = name;
                input.className = 'form-control';
                const btn = document.createElement('button');
                btn.type = 'button';
                btn.className = 'btn btn-outline-danger remove-row';
                btn.textContent = 'Remove';
                wrapper.appendChild(input);
                wrapper.appendChild(btn);
                container.appendChild(wrapper);
            }
        }

        // Handle icon items
        if (e.target && e.target.id === 'add-icon-item') {
            const container = document.getElementById('icon_group');
            if (container) {
                const wrapper = document.createElement('div');
                wrapper.className = 'icon-item mb-3 p-3 border rounded';
                wrapper.innerHTML = `
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" name="icon[]" class="form-control" placeholder="Icon class/name">
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="icon_title[]" class="form-control" placeholder="Icon title">
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="icon_heading[]" class="form-control" placeholder="Icon heading">
                        </div>
                        <div class="col-md-1">
                            <button type="button" class="btn btn-outline-danger remove-icon-item">Remove</button>
                        </div>
                    </div>
                `;
                container.appendChild(wrapper);
            }
        }

        // Handle FAQ items
        if (e.target && e.target.id === 'add-faq-item') {
            const container = document.getElementById('faq_group');
            if (container) {
                const wrapper = document.createElement('div');
                wrapper.className = 'faq-item mb-3 p-3 border rounded';
                wrapper.innerHTML = `
                    <div class="row">
                        <div class="col-md-5">
                            <input type="text" name="faq_title[]" class="form-control" placeholder="FAQ title">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="faq_heading[]" class="form-control" placeholder="FAQ heading">
                        </div>
                        <div class="col-md-1">
                            <button type="button" class="btn btn-outline-danger remove-faq-item">Remove</button>
                        </div>
                    </div>
                `;
                container.appendChild(wrapper);
            }
        }

        // Handle remove icon item
        if (e.target && e.target.classList.contains('remove-icon-item')) {
            const item = e.target.closest('.icon-item');
            if (item && item.parentElement.querySelectorAll('.icon-item').length > 1) {
                item.remove();
            } else if (item) {
                const inputs = item.querySelectorAll('input');
                inputs.forEach(input => input.value = '');
            }
        }

        // Handle remove FAQ item
        if (e.target && e.target.classList.contains('remove-faq-item')) {
            const item = e.target.closest('.faq-item');
            if (item && item.parentElement.querySelectorAll('.faq-item').length > 1) {
                item.remove();
            } else if (item) {
                const inputs = item.querySelectorAll('input');
                inputs.forEach(input => input.value = '');
            }
        }

        // Handle old remove-row functionality
        if (e.target && e.target.classList.contains('remove-row')) {
            const group = e.target.closest('.input-group');
            if (group && group.parentElement.querySelectorAll('.input-group').length > 1) {
                group.remove();
            } else if (group) {
                const input = group.querySelector('input, textarea');
                if (input) input.value = '';
            }
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        const el = document.querySelector('.summernote');
        if (el) {
            $('.summernote').summernote({
                placeholder: 'Write service description...',
                tabsize: 2,
                height: 260,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview']]
                ],
                callbacks: {
                    onImageUpload: function(files) {
                        const formData = new FormData();
                        formData.append('image', files[0]);
                        formData.append('_token', '{{ csrf_token() }}');
                        fetch("{{ route('admin.service-pages.upload-image') }}", {
                            method: 'POST',
                            body: formData
                        }).then(resp => resp.json()).then(data => {
                            if (data.url) {
                                $('.summernote').summernote('insertImage', data.url);
                            }
                        }).catch(() => {});
                    }
                }
            });
        }
    });
</script>
@endpush
@endsection
