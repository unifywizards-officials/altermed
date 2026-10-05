@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title mb-0">Add New Client</h4>
            <a href="{{ route('admin.clients.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to List
            </a>
        </div>
            <div class="card-body">
                <form action="{{ route('admin.clients.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="row">
                        <!-- <div class="col-md-6">
                           <div class="mb-3">
                                <label for="name" class="form-label">Client Name *</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                       id="name" name="name" value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div> 
                        </div> -->

                          <div class="col-md-6">
                            <div class="mb-3">
                                <label for="image" class="form-label">Client Logo/Image</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" 
                                       id="image" name="image" accept="image/*">
                                <small class="form-text text-muted">
                                    Upload JPG, PNG, WebP, or SVG file (max 4MB)
                                </small>
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="url" class="form-label">Website URL</label>
                                <input type="url" class="form-control @error('url') is-invalid @enderror" 
                                       id="url" name="url" value="{{ old('url') }}" placeholder="https://example.com">
                                @error('url')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- <div class="col-md-6">
                            <div class="mb-3">
                                <label for="icon" class="form-label">Icon Class (FontAwesome/Bootstrap Icons)</label>
                                <input type="text" class="form-control @error('icon') is-invalid @enderror" 
                                       id="icon" name="icon" value="{{ old('icon') }}" 
                                       placeholder="fas fa-building or bi bi-building">
                                <small class="form-text text-muted">
                                    Use FontAwesome (fas fa-*) or Bootstrap Icons (bi bi-*) class names
                                </small>
                                @error('icon')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div> -->
                        
                      
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" 
                                  id="description" name="description" rows="3" 
                                  placeholder="Brief description about the client">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="display_order" class="form-label">Display Order</label>
                                <input type="number" class="form-control @error('display_order') is-invalid @enderror" 
                                       id="display_order" name="display_order" value="{{ old('display_order', 0) }}" min="0">
                                @error('display_order')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="is_active" name="is_active" 
                                           value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="is_active">
                                        Active
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary" style="background-color: #2b2b5e;border-color: #2b2b5e;">
                            <i class="fas fa-save"></i> Save Client
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Icon Preview -->
<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Icon Preview</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="text-center p-3 border rounded">
                            <i class="fas fa-building" style="font-size: 32px; color: #007bff;"></i>
                            <p class="mt-2 mb-0">fas fa-building</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center p-3 border rounded">
                            <i class="fas fa-hospital" style="font-size: 32px; color: #28a745;"></i>
                            <p class="mt-2 mb-0">fas fa-hospital</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center p-3 border rounded">
                            <i class="fas fa-user-md" style="font-size: 32px; color: #dc3545;"></i>
                            <p class="mt-2 mb-0">fas fa-user-md</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center p-3 border rounded">
                            <i class="fas fa-heartbeat" style="font-size: 32px; color: #e83e8c;"></i>
                            <p class="mt-2 mb-0">fas fa-heartbeat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Live icon preview
    const iconInput = document.getElementById('icon');
    const previewContainer = document.querySelector('.card-body .row');
    
    iconInput.addEventListener('input', function() {
        const iconClass = this.value.trim();
        if (iconClass) {
            // Create preview element
            const previewDiv = document.createElement('div');
            previewDiv.className = 'col-md-3';
            previewDiv.innerHTML = `
                <div class="text-center p-3 border rounded bg-light">
                    <i class="${iconClass}" style="font-size: 32px; color: #007bff;"></i>
                    <p class="mt-2 mb-0">${iconClass}</p>
                </div>
            `;
            
            // Clear existing previews and add new one
            const existingPreview = document.querySelector('.icon-preview');
            if (existingPreview) {
                existingPreview.remove();
            }
            
            previewDiv.classList.add('icon-preview');
            previewContainer.appendChild(previewDiv);
        }
    });
});
</script>
@endpush
