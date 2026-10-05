@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 mx-auto">

            {{-- Page Title --}}
            <div class="card mb-4 shadow-sm">
                <div class="card-header text-white" style="background-color:#00cde5;" >
                    <h4 class="mb-0">About Altermed RCM Section</h4>
                </div>
            </div>

            {{-- Form --}}
            <form action="{{ route('admin.about_altermed_rcm.crmupdate', $about_altermed_rcm->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

         

                {{-- Images --}}
                <div class="card mb-4 shadow-sm">
                    <div class="card-header"><h5 class="mb-0">Images</h5></div>
                    <div class="card-body row">
                        <div class="col-md-6 mb-3">
                            <label>Image One</label>
                            <input type="file" name="image_one" class="form-control">
                            @if($about_altermed_rcm->image_one)
                                <img src="{{ asset('storage/'.$about_altermed_rcm->image_one) }}" width="120" class="mt-2 rounded">
                            @endif
                        </div>

                         <div class="col-md-6 mb-3">
                            <label>Image Two</label>
                            <input type="file" name="image_two" class="form-control">
                            @if($about_altermed_rcm->image_two)
                                <img src="{{ asset('storage/'.$about_altermed_rcm->image_two) }}" width="120" class="mt-2 rounded">
                            @endif
                        </div>
                    </div>
                </div>

                   {{-- Experience --}}
                <div class="card mb-4 shadow-sm">
                    <div class="card-header"><h5 class="mb-0">Experience</h5></div>
                    <div class="card-body row">
                        <div class="col-md-6 mb-3">
                            <label>Experience Years</label>
                            <input type="number" name="experience_years" class="form-control"
                                   value="{{ old('experience_years', $about_altermed_rcm->experience_years) }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Experience Text</label>
                            <input type="text" name="experience_text" class="form-control"
                                   value="{{ old('experience_text', $about_altermed_rcm->experience_text) }}">
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
                                   value="{{ old('title', is_string($about_altermed_rcm->title) ? $about_altermed_rcm->title : '') }}">
                        </div>
                        <div class="mb-3">
                            <label>Description</label>
                            <textarea name="description" class="form-control" rows="3">{{ old('description', is_string($about_altermed_rcm->description) ? $about_altermed_rcm->description : '') }}</textarea>
                        </div>

                        {{-- Appendable List Items --}}
                        <div class="mb-3">
                            <label>List Items</label>
                            <div id="list-items-wrapper">
                                @if(!empty($about_altermed_rcm->list_items))
                                    @foreach($about_altermed_rcm->list_items as $item)
                                        <div class="row g-2 align-items-end mb-2 list-item">
                                            <div class="col-4">
                                                <input type="text" name="list_items[icon][]" class="form-control" placeholder="Icon class" value="{{ is_array($item) ? (is_string($item['icon'] ?? null) ? $item['icon'] : '') : (is_string($item) ? $item : '') }}">
                                            </div>
                                            <div class="col-4">
                                                <input type="text" name="list_items[title][]" class="form-control" placeholder="Title" value="{{ is_array($item) ? (is_string($item['title'] ?? null) ? $item['title'] : '') : (is_string($item) ? $item : '') }}">
                                            </div>
                                            <div class="col-4">
                                                <input type="text" name="list_items[description][]" class="form-control" placeholder="Description" value="{{ is_array($item) ? (is_string($item['description'] ?? null) ? $item['description'] : '') : '' }}">
                                            </div>
                                            <!-- <div class="col-md-1">
                                                <button type="button" class="btn btn-danger remove-item">X</button>
                                            </div> -->
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <!-- <button type="button" class="btn btn-sm btn-outline-primary mt-2" id="add-item">+ Add Item</button> -->
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
                                   value="{{ old('button_text', is_string($about_altermed_rcm->button_text) ? $about_altermed_rcm->button_text : '') }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Button Link</label>
                            <input type="text" name="button_link" class="form-control"
                                   value="{{ old('button_link', is_string($about_altermed_rcm->button_link) ? $about_altermed_rcm->button_link : '') }}">
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
        <div class="col-4">
            <input type="text" name="list_items[icon][]" class="form-control" placeholder="Icon class">
        </div>
        <div class="col-4">
            <input type="text" name="list_items[title][]" class="form-control" placeholder="Title">
        </div>
        <div class="col-4">
            <input type="text" name="list_items[description][]" class="form-control" placeholder="Description">
        </div>
    `;
    wrapper.appendChild(div);
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
