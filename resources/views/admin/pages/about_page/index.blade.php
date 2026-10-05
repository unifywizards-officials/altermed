@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 mx-auto">

            {{-- Page Title --}}
            <div class="card mb-4 shadow-sm">
                <div class="card-header text-white" style="background-color:#00cde5;" >
                    <h4 class="mb-0">About Page</h4>
                </div>
            </div>

            {{-- Form --}}
            <form action="{{ route('admin.about_page.update', $about_page->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- 🔹 Banner Section --}}
                <div class="card mb-4 shadow-sm">
                    <div class="card-header"><h5 class="mb-0">Banner Section</h5></div>
                    <div class="card-body row">
                        <div class="col-md-6 mb-3">
                            <label>Banner Image</label>
                            <input type="file" name="about_banner_image" class="form-control">
                            @if($about_page->about_banner_image)
                                <img src="{{ asset('storage/'.$about_page->about_banner_image) }}" width="150" class="mt-2 rounded">
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Banner Title</label>
                            <input type="text" name="about_title" class="form-control"
                                   value="{{ old('about_title', $about_page->about_title) }}">
                        </div>
                    </div>
                </div>

                {{-- Images --}}
                <div class="card mb-4 shadow-sm">
                    <div class="card-header"><h5 class="mb-0">Images</h5></div>
                    <div class="card-body row">
                        <div class="col-md-6 mb-3">
                            <label>Image One</label>
                            <input type="file" name="image_one" class="form-control">
                            @if($about_page->image_one)
                                <img src="{{ asset('storage/'.$about_page->image_one) }}" width="120" class="mt-2 rounded">
                            @endif
                        </div>
                    </div>
                </div>

                {{-- Content --}}
                <div class="card mb-4 shadow-sm">
                    <div class="card-header"><h5 class="mb-0">Content Section</h5></div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control"
                                   value="{{ old('title', $about_page->title) }}">
                        </div>
                        <div class="mb-3">
                            <label>Description</label>
                            <textarea name="description" class="form-control" rows="3">{{ old('description', $about_page->description) }}</textarea>
                        </div>

                        {{-- Appendable List Items --}}
                        <div class="mb-3">
                            <label>List Items</label>
                            <div id="list-items-wrapper">
                                @if(!empty($about_page->list_items))
                                    @foreach($about_page->list_items as $item)
                                        <div class="row g-2 align-items-end mb-2 list-item">
                                            <div class="col-md-4">
                                                <input type="text" name="list_items[icon][]" class="form-control" placeholder="Icon class" value="{{ is_array($item) ? ($item['icon'] ?? '') : '' }}">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" name="list_items[title][]" class="form-control" placeholder="Title" value="{{ is_array($item) ? ($item['title'] ?? '') : $item }}">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" name="list_items[description][]" class="form-control" placeholder="Description" value="{{ is_array($item) ? ($item['description'] ?? '') : '' }}">
                                            </div>
                                            <div class="col-md-1">
                                                <button type="button" class="btn btn-danger remove-item">X</button>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <button type="button" class="btn btn-sm btn-outline-primary mt-2" id="add-item">+ Add Item</button>
                        </div>
                    </div>
                </div>

                {{-- CTA Section --}}
                <div class="card mb-4 shadow-sm">
                    <div class="card-header"><h5 class="mb-0">About Page CTA</h5></div>
                    <div class="card-body">
                        <div id="cta-wrapper">
                            @if(!empty($about_page->about_page_cta))
                                @foreach($about_page->about_page_cta as $cta)
                                    <div class="row g-2 align-items-end mb-2 cta-item">
                                        <div class="col-md-3">
                                            <input type="text" name="cta[icon][]" class="form-control" placeholder="Icon class"
                                                   value="{{ $cta['icon'] ?? '' }}">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="cta[heading][]" class="form-control" placeholder="Heading"
                                                   value="{{ $cta['heading'] ?? '' }}">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="cta[button_text][]" class="form-control" placeholder="Button Text"
                                                   value="{{ $cta['button_text'] ?? '' }}">
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <input type="text" name="cta[button_link][]" class="form-control" placeholder="Button Link"
                                                       value="{{ $cta['button_link'] ?? '' }}">
                                                <!-- <button type="button" class="btn btn-danger remove-cta">X</button> -->
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <!-- <button type="button" class="btn btn-sm btn-outline-primary mt-2" id="add-cta">+ Add CTA</button> -->
                    </div>
                </div>

                {{-- Button --}}
                <div class="card mb-4 shadow-sm">
                    <div class="card-header"><h5 class="mb-0">Button</h5></div>
                    <div class="card-body row">
                        <div class="col-md-6 mb-3">
                            <label>Button Text</label>
                            <input type="text" name="button_text" class="form-control"
                                   value="{{ old('button_text', $about_page->button_text) }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Button Link</label>
                            <input type="text" name="button_link" class="form-control"
                                   value="{{ old('button_link', $about_page->button_link) }}">
                        </div>
                    </div>
                </div>

                {{-- Meta Details --}}
                <div class="card mb-4 shadow-sm">
                    <div class="card-header"><h5 class="mb-0">Meta Details</h5></div>
                    <div class="card-body row">
                        <div class="col-md-6 mb-3">
                            <label>Meta Title</label>
                            <input type="text" name="meta_title" class="form-control"
                                   value="{{ old('meta_title', $about_page->meta_title) }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Meta Keywords</label>
                            <input type="text" name="meta_keywords" class="form-control"
                                   value="{{ old('meta_keywords', $about_page->meta_keywords) }}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Meta Description</label>
                            <textarea name="meta_description" class="form-control">{{ old('meta_description', $about_page->meta_description) }}</textarea>
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

{{-- Scripts --}}
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.getElementById('add-item').addEventListener('click', function() {
    let wrapper = document.getElementById('list-items-wrapper');
    let div = document.createElement('div');
    div.classList.add('row', 'g-2', 'align-items-end', 'mb-2', 'list-item');
    div.innerHTML = `
        <div class="col-md-4">
            <input type="text" name="list_items[icon][]" class="form-control" placeholder="Icon class">
        </div>
        <div class="col-md-4">
            <input type="text" name="list_items[title][]" class="form-control" placeholder="Title">
        </div>
        <div class="col-md-3">
            <input type="text" name="list_items[description][]" class="form-control" placeholder="Description">
        </div>
        <div class="col-md-1">
            <button type="button" class="btn btn-danger remove-item">X</button>
        </div>
    `;
    wrapper.appendChild(div);
});

document.getElementById('add-cta').addEventListener('click', function() {
    let wrapper = document.getElementById('cta-wrapper');
    let div = document.createElement('div');
    div.classList.add('row', 'g-2', 'align-items-end', 'mb-2', 'cta-item');
    div.innerHTML = `
        <div class="col-md-3">
            <input type="text" name="cta[icon][]" class="form-control" placeholder="Icon class">
        </div>
        <div class="col-md-3">
            <input type="text" name="cta[heading][]" class="form-control" placeholder="Heading">
        </div>
        <div class="col-md-3">
            <input type="text" name="cta[button_text][]" class="form-control" placeholder="Button Text">
        </div>
        <div class="col-md-3">
            <div class="input-group">
                <input type="text" name="cta[button_link][]" class="form-control" placeholder="Button Link">
                <button type="button" class="btn btn-danger remove-cta">X</button>
            </div>
        </div>
    `;
    wrapper.appendChild(div);
});

document.addEventListener('click', function(e) {
    if (e.target.classList.contains('remove-item')) {
        e.target.closest('.list-item').remove();
    }
    if (e.target.classList.contains('remove-cta')) {
        e.target.closest('.cta-item').remove();
    }
});

// SweetAlert popup after update
@if(session('success'))
Swal.fire({
    icon: 'success',
    title: 'Success!',
    text: '{{ session('success') }}',
    confirmButtonColor: '#3085d6',
    confirmButtonText: 'OK'
});
@endif
</script>
@endpush
@endsection
