@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 mx-auto">

            {{-- Page Title --}}
            <div class="card mb-4 shadow-sm">
                <div class="card-header text-white" style="background-color:#00cde5;">
                    <h4 class="mb-0">Manage Testimonials</h4>
                </div>
            </div>

            {{-- Form --}}
            <form action="{{ route('admin.testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- Heading & Description --}}
                <div class="card mb-4 shadow-sm">
                    <div class="card-header"><h5 class="mb-0">Heading & Description</h5></div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label>Heading</label>
                            <input type="text" name="heading" class="form-control"
                                   value="{{ old('heading', $testimonial->heading) }}">
                        </div>
                        <div class="mb-3">
                            <label>Description</label>
                            <textarea name="description" class="form-control" rows="3">{{ old('description', $testimonial->description) }}</textarea>
                        </div>
                    </div>
                </div>

                {{-- Testimonials Items --}}
                <div class="card mb-4 shadow-sm">
                    <div class="card-header"><h5 class="mb-0">Testimonials Items</h5></div>
                    <div class="card-body">
                        <div id="testimonials-wrapper">
                            @if(!empty($testimonial->testimonials_items))
                                @foreach($testimonial->testimonials_items as $index => $item)
                                    <div class="row mb-3 border rounded p-3 align-items-end" data-index="{{ $index }}">
                                        <div class="col-md-3">
                                            <label>Name</label>
                                            <input type="text" name="testimonials_items[{{ $index }}][name]" class="form-control" value="{{ $item['name'] ?? '' }}">
                                        </div>
                                        <div class="col-md-3">
                                            <label>Designation</label>
                                            <input type="text" name="testimonials_items[{{ $index }}][designation]" class="form-control" value="{{ $item['designation'] ?? '' }}">
                                        </div>
                                        <div class="col-md-2">
                                            <label>Rating (1-5)</label>
                                            <select name="testimonials_items[{{ $index }}][rating]" class="form-control">
                                                @for($r = 1; $r <= 5; $r++)
                                                    <option value="{{ $r }}" {{ (isset($item['rating']) && $item['rating'] == $r) ? 'selected' : '' }}>{{ $r }} Star{{ $r > 1 ? 's' : '' }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Picture</label>
                                            <input type="file" name="testimonials_items[{{ $index }}][image]" class="form-control preview-input">
                                            {{-- ✅ Show already uploaded image --}}
                                            @if(!empty($item['image']))
                                                <img src="{{ asset('storage/'.$item['image']) }}" width="100" class="mt-2 img-preview rounded">
                                            @else
                                                <img src="" width="100" class="mt-2 img-preview rounded d-none">
                                            @endif
                                        </div>
                                        <div class="col-md-12">
                                            <label>Description</label>
                                            <textarea name="testimonials_items[{{ $index }}][message]" class="form-control" rows="2">{{ $item['message'] ?? '' }}</textarea>
                                        </div>
                                        <div class="col-md-1 text-center">
                                            <button type="button" class="btn btn-danger btn-sm remove-item" style="margin-top: 10px;margin-left: -29px;">X</button>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>

                        {{-- Add Button --}}
                        <button type="button" class="btn btn-sm btn-outline-primary mt-2" id="add-testimonials">+ Add Item</button>
                    </div>
                </div>

                {{-- Submit --}}
                <div class="text-end mb-5">
                    <button type="submit" class="btn btn-primary px-4" style="background-color: #2b2b5e;border-color: #2b2b5e;">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- ✅ Scripts --}}
@push('scripts')
<script>
document.getElementById('add-testimonials').addEventListener('click', function() {
    let wrapper = document.getElementById('testimonials-wrapper');
    let index = Date.now();

    let div = document.createElement('div');
    div.classList.add('row','mb-3','border','rounded','p-3','align-items-end');
    div.setAttribute('data-index', index);
    div.innerHTML = `
        <div class="col-md-3">
            <label>Client Name</label>
            <input type="text" name="testimonials_items[${index}][name]" class="form-control" placeholder="Enter name">
        </div>
        <div class="col-md-3">
            <label>Client Designation</label>
            <input type="text" name="testimonials_items[${index}][designation]" class="form-control" placeholder="Enter designation">
        </div>
        <div class="col-md-2">
            <label>Rating (1-5)</label>
            <select name="testimonials_items[${index}][rating]" class="form-control">
                <option value="1">1 Star</option>
                <option value="2">2 Stars</option>
                <option value="3">3 Stars</option>
                <option value="4">4 Stars</option>
                <option value="5" selected>5 Stars</option>
            </select>
        </div>
        <div class="col-md-4">
            <label>Client Image</label>
            <input type="file" name="testimonials_items[${index}][image]" class="form-control preview-input">
            <img src="" width="100" class="mt-2 img-preview rounded d-none">
        </div>
        <div class="col-md-12">
            <label>Message</label>
            <textarea name="testimonials_items[${index}][message]" class="form-control" rows="2" placeholder="Enter message"></textarea>
        </div>
        <div class="col-md-1 text-center">
            <button type="button" class="btn btn-danger btn-sm remove-item" style="margin-top: 10px; margin-left: -34px">X</button>
        </div>
    `;
    wrapper.appendChild(div);
});

// Remove row from DOM
document.addEventListener('click', function(e) {
    if (e.target.classList.contains('remove-item')) {
        let row = e.target.closest('.row');
        row.remove();
    }
});

// ✅ Live preview for uploaded image
document.addEventListener('change', function(e) {
    if (e.target.classList.contains('preview-input')) {
        let fileInput = e.target;
        let preview = fileInput.nextElementSibling;

        if (fileInput.files && fileInput.files[0]) {
            let reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('d-none');
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
});
</script>
@endpush
@endsection
