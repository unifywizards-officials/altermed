@extends('admin.layouts.app')

@section('content')
<style>
.upload-area {
    border: 2px dashed #dee2e6;
    border-radius: 10px;
    padding: 40px 20px;
    text-align: center;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    transition: all 0.3s ease;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}

.upload-area:hover,
.upload-area.dragover {
    border-color: #2b2b5e;
    background: linear-gradient(135deg, #f0f2ff 0%, #e8ecff 100%);
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(43, 43, 94, 0.1);
}

.upload-area.dragover {
    border-color: #28a745;
    background: linear-gradient(135deg, #f0fff4 0%, #e8fcef 100%);
}


.upload-area::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Cdefs%3E%3Cpattern id='grid' width='10' height='10' patternUnits='userSpaceOnUse'%3E%3Cpath d='M 10 0 L 0 0 0 10' fill='none' stroke='%23e9ecef' stroke-width='0.5'/%3E%3C/pattern%3E%3C/defs%3E%3Crect width='100' height='100' fill='url(%23grid)'/%3E%3C/svg%3E") repeat;
    opacity: 0.3;
    pointer-events: none;
}

.file-info {
    background: white;
    border: 1px solid #dee2e6;
    border-radius: 5px;
    padding: 10px;
    margin-top: 15px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

@media (max-width: 768px) {
    .upload-area {
        padding: 30px 15px;
    }
}
</style>
<div class="row">
    <div class="col-12">
        <h4 class="mb-3">Media Upload</h4>

        <!-- Upload Form -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0">Upload File</h5>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('admin.media-upload.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <div class="upload-area" id="uploadArea">
                            <div class="upload-content">
                                <i class="fas fa-cloud-upload-alt fa-3x text-primary mb-3"></i>
                                <h5 class="mb-2">Drag & Drop Files Here</h5>
                                <p class="text-muted mb-3">or click to browse files</p>
                                <input type="file" id="file" name="file" accept="image/*,.pdf,.doc,.docx,.txt" required style="display: none;">
                                <button type="button" class="btn btn-primary btn-lg" onclick="document.getElementById('file').click()" style="background-color: #2b2b5e;border-color: #2b2b5e;">
                                    <i class="fas fa-folder-open"></i> Choose File
                                </button>
                                <div class="file-info mt-3" id="fileInfo" style="display: none;">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-file text-secondary me-2"></i>
                                        <span id="fileName"></span>
                                        <button type="button" class="btn btn-sm btn-outline-danger ms-2" onclick="clearFile()">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-text text-center mt-2">
                            <small class="text-muted">Allowed formats: JPG, PNG, GIF, WEBP, SVG, PDF, DOC, DOCX, TXT. Max size: 10MB per file.</small>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success btn-lg px-5" id="uploadBtn" style="background-color: #28a745;border-color: #28a745;">
                            <i class="fas fa-upload me-2"></i> Upload File
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Uploaded Media -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Uploaded Media</h5>
            </div>
            <div class="card-body">
                <div class="row" id="mediaGrid">
                    @forelse ($media as $item)
                        <div class="col-md-3 col-sm-6 mb-3" data-id="{{ $item->id }}">
                            <div class="card h-100">
                                <div class="card-body text-center">
                                    <a href="{{ asset($item->path) }}" target="_blank" style="text-decoration: none; color: inherit;">
                                        @if(strpos($item->mime_type, 'image/') === 0)
                                            <img src="{{ asset($item->path) }}" alt="{{ $item->name }}" class="img-fluid mb-2" style="max-height: 150px; cursor: pointer;">
                                        @else
                                            <i class="fas fa-file fa-3x text-secondary mb-2" style="cursor: pointer;"></i>
                                        @endif
                                    </a>
                                    <p class="mb-1 small">{{ $item->name }}</p>
                                    <p class="mb-2 small text-muted">{{ number_format($item->file_size / 1024, 2) }} KB</p>
                                    <form action="{{ route('admin.media-upload.destroy', $item->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center py-5">
                            <i class="fas fa-images fa-3x text-muted mb-3"></i>
                            <p class="text-muted">No media uploaded yet.</p>
                        </div>
                    @endforelse
                </div>

                {{ $media->links() }}
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const uploadArea = document.getElementById('uploadArea');
    const fileInput = document.getElementById('file');
    const fileInfo = document.getElementById('fileInfo');
    const fileName = document.getElementById('fileName');

    // Drag and drop functionality
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        uploadArea.addEventListener(eventName, preventDefaults, false);
    });

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    ['dragenter', 'dragover'].forEach(eventName => {
        uploadArea.addEventListener(eventName, highlight, false);
    });

    ['dragleave', 'drop'].forEach(eventName => {
        uploadArea.addEventListener(eventName, unhighlight, false);
    });

    function highlight(e) {
        uploadArea.classList.add('dragover');
    }

    function unhighlight(e) {
        uploadArea.classList.remove('dragover');
    }

    uploadArea.addEventListener('drop', handleDrop, false);

    function handleDrop(e) {
        const dt = e.dataTransfer;
        const files = dt.files;

        if (files.length > 0) {
            handleFileSelect(files[0]);
        }
    }

    // Click to select file
    uploadArea.addEventListener('click', function(e) {
        console.log('Upload area clicked', e.target);
        // Prevent triggering if clicking on buttons or file info
        if (!e.target.closest('button') && !e.target.closest('.file-info')) {
            console.log('Triggering file input click');
            fileInput.click();
        }
    });

    // File input change
    fileInput.addEventListener('change', function(e) {
        console.log('File input changed', this.files);
        if (this.files && this.files.length > 0) {
            handleFileSelect(this.files[0]);
        }
    });

    function handleFileSelect(file) {
        console.log('File selected:', file.name, file.type, file.size);
        fileName.textContent = file.name;
        fileInfo.style.display = 'block';

        // Add visual feedback
        uploadArea.style.borderColor = '#28a745';
        uploadArea.style.background = 'linear-gradient(135deg, #f0fff4 0%, #e8fcef 100%)';
    }

    // Clear file function
    window.clearFile = function() {
        fileInput.value = '';
        fileInfo.style.display = 'none';
        uploadArea.style.borderColor = '#dee2e6';
        uploadArea.style.background = 'linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%)';
    };

    // Delete media with confirmation
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('delete-media')) {
            const mediaId = e.target.getAttribute('data-id');
            if (confirm('Are you sure you want to delete this file?')) {
                // Create a form to submit DELETE request
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = '{{ url("admin/media-upload") }}/' + mediaId;

                // Add CSRF token
                const csrfToken = document.createElement('input');
                csrfToken.type = 'hidden';
                csrfToken.name = '_token';
                csrfToken.value = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                form.appendChild(csrfToken);

                // Add method spoofing for DELETE
                const methodField = document.createElement('input');
                methodField.type = 'hidden';
                methodField.name = '_method';
                methodField.value = 'DELETE';
                form.appendChild(methodField);

                document.body.appendChild(form);
                form.submit();
            }
        }
    });
});
</script>
@endsection