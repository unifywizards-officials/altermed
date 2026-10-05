@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-11 mx-auto">

            {{-- Page Title --}}
            <div class="card mb-4 shadow-sm">
                <div class="card-header text-white" style="background-color:#00cde5;">
                    <h4 class="mb-0">Header & Footer Management</h4>
                </div>
            </div>

            {{-- Form --}}
            <form action="{{ route('admin.header-footer.update', $headerFooter->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- Header Logo --}}
                <div class="card mb-4 shadow-sm">
                    <div class="card-header"><h5 class="mb-0">Header Logo</h5></div>
                    <div class="card-body">
                        @if($headerFooter->header_logo)
                            <div class="mb-3">
                                <img src="{{ asset('storage/' . $headerFooter->header_logo) }}" alt="Header Logo" style="max-width: 200px;">
                            </div>
                        @endif
                        <div class="mb-3">
                            <label class="form-label">Upload New Header Logo</label>
                            <input type="file" name="header_logo" class="form-control" accept="image/*">
                            @error('header_logo') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                </div>

                {{-- Footer Logo --}}
                <div class="card mb-4 shadow-sm">
                    <div class="card-header"><h5 class="mb-0">Footer Logo</h5></div>
                    <div class="card-body">
                        @if($headerFooter->footer_logo)
                            <div class="mb-3">
                                <img src="{{ asset('storage/' . $headerFooter->footer_logo) }}" alt="Footer Logo" style="max-width: 200px;">
                            </div>
                        @endif
                        <div class="mb-3">
                            <label class="form-label">Upload New Footer Logo</label>
                            <input type="file" name="footer_logo" class="form-control" accept="image/*">
                            @error('footer_logo') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                </div>

                {{-- Footer Logo Content --}}
                <div class="card mb-4 shadow-sm">
                    <div class="card-header"><h5 class="mb-0">Footer Logo Content</h5></div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Content</label>
                            <textarea name="footer_logo_content" class="form-control" rows="3">{{ old('footer_logo_content', $headerFooter->footer_logo_content) }}</textarea>
                            @error('footer_logo_content') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                </div>

                {{-- Newsletter Content --}}
                <div class="card mb-4 shadow-sm">
                    <div class="card-header"><h5 class="mb-0">Newsletter Content</h5></div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Content</label>
                            <textarea name="newsletter_content" class="form-control" rows="3">{{ old('newsletter_content', $headerFooter->newsletter_content) }}</textarea>
                            @error('newsletter_content') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                </div>

                {{-- Instagram Images --}}
                <!-- <div class="card mb-4 shadow-sm">
                    <div class="card-header"><h5 class="mb-0">Instagram Images</h5></div>
                    <div class="card-body">
                        {{-- Current Images Display --}}
                        @if($headerFooter->instagram_images && count($headerFooter->instagram_images) > 0)
                            <div class="mb-4">
                                <h6>Current Images:</h6>
                                <div class="row">
                                    @foreach($headerFooter->instagram_images as $index => $image)
                                        <div class="col-md-3 mb-3">
                                            <div class="card">
                                                <img src="{{ asset('storage/' . $image) }}" alt="Instagram Image" class="card-img-top" style="height: 150px; object-fit: cover;">
                                                <div class="card-body p-2">
                                                    <button type="button" class="btn btn-danger btn-sm w-100 remove-existing-image" data-image-path="{{ $image }}">Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        {{-- Upload New Images --}}
                        <div class="mb-3">
                            <label class="form-label">Select Images (Multiple allowed)</label>
                            <input type="file" name="instagram_images[]" class="form-control" accept="image/*" multiple>
                            @error('instagram_images.*') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                </div>

                {{-- Hidden inputs for images to remove --}}
                <input type="hidden" name="remove_images" id="remove_images" value=""> -->

                {{-- Submit --}}
                <div class="text-end mb-5">
                    <button type="submit" class="btn btn-primary px-4" style="background-color: #2b2b5e;border-color: #2b2b5e;">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    let imagesToRemove = [];

    // Handle removal of existing images
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-existing-image')) {
            const imagePath = e.target.getAttribute('data-image-path');
            if (imagePath) {
                imagesToRemove.push(imagePath);
                document.getElementById('remove_images').value = JSON.stringify(imagesToRemove);
                e.target.closest('.col-md-3').remove();
            }
        }
    });
});
</script>

@endsection