@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 mx-auto">

            {{-- Page Title --}}
            <div class="card mb-4 shadow-sm">
                <div class="card-header text-white" style="background-color:#00cde5;" >
                    <h4 class="mb-0">About Section</h4>
                </div>
            </div>

            {{-- Form --}}
            <form action="{{ route('admin.about_section.update', $about_section->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- Images --}}
                <div class="card mb-4 shadow-sm">
                    <div class="card-header"><h5 class="mb-0">Images</h5></div>
                    <div class="card-body row">
                        <div class="col-md-6 mb-3">
                            <label>Image One</label>
                            <input type="file" name="image_one" class="form-control">
                            @if($about_section->image_one)
                                <img src="{{ asset('storage/'.$about_section->image_one) }}" width="120" class="mt-2 rounded">
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Image Two</label>
                            <input type="file" name="image_two" class="form-control">
                            @if($about_section->image_two)
                                <img src="{{ asset('storage/'.$about_section->image_two) }}" width="120" class="mt-2 rounded">
                            @endif
                        </div>
                        <!-- <div class="col-md-4 mb-3">
                            <label>Arrow Image</label>
                            <input type="file" name="arrow_image" class="form-control">
                            @if($about_section->arrow_image)
                                <img src="{{ asset('storage/'.$about_section->arrow_image) }}" width="120" class="mt-2 rounded">
                            @endif
                        </div> -->
                    </div>
                </div>

                {{-- Experience --}}
                <div class="card mb-4 shadow-sm">
                    <div class="card-header"><h5 class="mb-0">Experience</h5></div>
                    <div class="card-body row">
                        <div class="col-md-6 mb-3">
                            <label>Experience Years</label>
                            <input type="number" name="experience_years" class="form-control"
                                   value="{{ old('experience_years', $about_section->experience_years) }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Experience Text</label>
                            <input type="text" name="experience_text" class="form-control"
                                   value="{{ old('experience_text', $about_section->experience_text) }}">
                        </div>
                    </div>
                </div>

                {{-- Content --}}
                <div class="card mb-4 shadow-sm">
                    <div class="card-header"><h5 class="mb-0">Content</h5></div>
                    <div class="card-body">
                        <!-- <div class="mb-3">
                            <label>Tagline</label>
                            <input type="text" name="tagline" class="form-control"
                                   value="{{ old('tagline', $about_section->tagline) }}">
                        </div> -->
                        <div class="mb-3">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control"
                                   value="{{ old('title', $about_section->title) }}">
                        </div>
                        <div class="mb-3">
                            <label>Description</label>
                            <textarea name="description" class="form-control" rows="3">{{ old('description', $about_section->description) }}</textarea>
                        </div>

                        {{-- ✅ Appendable List Items --}}
                        <div class="mb-3">
                            <label>List Items</label>
                            <div id="list-items-wrapper">
                                @if(!empty($about_section->list_items))
                                    @foreach($about_section->list_items as $index => $item)
                                        <div class="card mb-3 p-3 border">
                                            <div class="row">
                                                <div class="col-md-5 mb-2">
                                                    <label>Icon</label>
                                                    <input type="text" name="list_items[icon][]" class="form-control" value="{{ is_array($item) ? ($item['icon'] ?? '') : $item }}" placeholder="Icon class">
                                                </div>
                                                <div class="col-md-5 mb-2" style="display: none;">
                                                    <label>Title</label>
                                                    <input type="text" name="list_items[title][]" class="form-control" value="{{ is_array($item) ? ($item['title'] ?? '') : '' }}" placeholder="Item title">
                                                </div>
                                                <div class="col-md-5 mb-2" style="display: none;">
                                                    <label>Description</label>
                                                    <input type="text" name="list_items[description][]" class="form-control" value="{{ is_array($item) ? ($item['description'] ?? '') : '' }}" placeholder="Item description">
                                                </div>
                                                <div class="col-md-5 mb-2">
                                                    <label>Image</label>
                                                    @if(is_array($item) && isset($item['image']) && $item['image'])
                                                        <div class="mb-2">
                                                            <img src="{{ asset('storage/' . $item['image']) }}" width="80" class="rounded border">
                                                        </div>
                                                    @endif
                                                    <input type="file" name="list_items_image_{{ $index }}" class="form-control">
                                                </div>
                                                <div class="col-md-2 mb-2 d-flex align-items-end">
                                                    <button type="button" class="btn btn-danger remove-item">X</button>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <button type="button" class="btn btn-sm btn-outline-primary mt-2" id="add-item">+ Add Item</button>
                        </div>
                    </div>
                </div>

                {{-- Button --}}
                <div class="card mb-4 shadow-sm">
                    <div class="card-header"><h5 class="mb-0">Button</h5></div>
                    <div class="card-body row">
                        <div class="col-md-6 mb-3">
                            <label>Button Text</label>
                            <input type="text" name="button_text" class="form-control"
                                   value="{{ old('button_text', $about_section->button_text) }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Button Link</label>
                            <input type="text" name="button_link" class="form-control"
                                   value="{{ old('button_link', $about_section->button_link) }}">
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

{{-- ✅ Scripts --}}
@push('scripts')
{{-- SweetAlert2 CDN --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.getElementById('add-item').addEventListener('click', function() {
    let wrapper = document.getElementById('list-items-wrapper');
    let itemCount = wrapper.children.length;
    let div = document.createElement('div');
    div.classList.add('card', 'mb-3', 'p-3', 'border');
    div.innerHTML = `
        <div class="row">
            <div class="col-md-5 mb-2">
                <label>Icon</label>
                <input type="text" name="list_items[icon][]" class="form-control" placeholder="Icon class">
            </div>
            <div class="col-md-5 mb-2" style="display: none;">
                <label>Title</label>
                <input type="text" name="list_items[title][]" class="form-control" placeholder="Item title">
            </div>
            <div class="col-md-5 mb-2" style="display: none;">
                <label>Description</label>
                <input type="text" name="list_items[description][]" class="form-control" placeholder="Item description">
            </div>
            <div class="col-md-5 mb-2">
                <label>Image</label>
                <input type="file" name="list_items_image_${itemCount}" class="form-control">
            </div>
            <div class="col-md-2 mb-2 d-flex align-items-end">
                <button type="button" class="btn btn-danger remove-item">X</button>
            </div>
        </div>
    `;
    wrapper.appendChild(div);
});

document.addEventListener('click', function(e) {
    if (e.target.classList.contains('remove-item')) {
        e.target.closest('.card').remove();
    }
});

// Removed removeImage function as cross button is no longer needed

// ✅ SweetAlert popup after update
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
