@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 mx-auto">

            {{-- Page Title --}}
            <div class="card mb-4 shadow-sm">
                <div class="card-header text-white" style="background-color:#00cde5;" >
                    <h4 class="mb-0">About Section Commitment</h4>
                </div>
            </div>

            {{-- Form --}}
            <form action="{{ route('admin.about_section_commitment.update', $about_section_commitment->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- Images --}}
                <div class="card mb-4 shadow-sm">
                    <div class="card-header"><h5 class="mb-0">Images</h5></div>
                    <div class="card-body row">
                        <div class="col-md-6 mb-3">
                            <label>Image One</label>
                            <input type="file" name="image_one" class="form-control">
                            @if($about_section_commitment->image_one)
                                <img src="{{ asset('storage/'.$about_section_commitment->image_one) }}" width="120" class="mt-2 rounded">
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Image Two</label>
                            <input type="file" name="image_two" class="form-control">
                            @if($about_section_commitment->image_two)
                                <img src="{{ asset('storage/'.$about_section_commitment->image_two) }}" width="120" class="mt-2 rounded">
                            @endif
                        </div>
                     
                    </div>
                </div>

                {{-- Experience --}}
             

                {{-- Content --}}
                <div class="card mb-4 shadow-sm">
                    <div class="card-header"><h5 class="mb-0">Content</h5></div>
                    <div class="card-body">
                   
                        <div class="mb-3">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control"
                                   value="{{ old('title', $about_section_commitment->title) }}">
                        </div>
                        <div class="mb-3">
                            <label>Description</label>
                            <textarea name="description" class="form-control" rows="3">{{ old('description', $about_section_commitment->description) }}</textarea>
                        </div>

                        {{-- ✅ Appendable List Items --}}
                        <div class="mb-3">
                            <label>List Items</label>
                            <div id="list-items-wrapper">
                                @if(!empty($about_section_commitment->list_items))
                                    @foreach($about_section_commitment->list_items as $item)
                                        <div class="input-group mb-2">
                                            <input type="text" name="list_items[]" class="form-control" value="{{ $item }}">
                                            <button type="button" class="btn btn-danger remove-item">X</button>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <button type="button" class="btn btn-sm btn-outline-primary mt-2" id="add-item">+ Add Item</button>
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
    let div = document.createElement('div');
    div.classList.add('input-group', 'mb-2');
    div.innerHTML = `
        <input type="text" name="list_items[]" class="form-control" placeholder="Enter item">
        <button type="button" class="btn btn-danger remove-item">X</button>
    `;
    wrapper.appendChild(div);
});

document.addEventListener('click', function(e) {
    if (e.target.classList.contains('remove-item')) {
        e.target.closest('.input-group').remove();
    }
});

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
