@extends('admin.layouts.app')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="row">
    <div class="col-12 d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Edit Licensing Services</h4>
        <a href="{{ route('admin.licensing-service.index') }}" class="btn btn-secondary"><i class='fas fa-arrow-left'></i> Back</a>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.licensing-service.update', $licensingService) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label class="form-label">Heading</label>
                            <input type="text" name="heading" value="{{ old('heading', $licensingService->heading) }}" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="4" required>{{ old('description', $licensingService->description) }}</textarea>
                        </div>

                        <div class="col-12">
                            <h5>Categories</h5>
                            <div id="categories-container">
                                @if($categories)
                                    @foreach($categories as $categoryIndex => $category)
                                        <div class="category-row border p-4 mb-4" data-category-index="{{ $categoryIndex }}">
                                            <input type="hidden" name="categories[{{ $categoryIndex }}][id]" value="{{ $category->id }}">
                                            <div class="row g-3 mb-3">
                                                <div class="col-md-5">
                                                    <label class="form-label">Name</label>
                                                    <input type="text" name="categories[{{ $categoryIndex }}][name]" value="{{ old('categories.' . $categoryIndex . '.name', $category->name) }}" class="form-control" >
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Short Description</label>
                                                    <input type="text" name="categories[{{ $categoryIndex }}][short_description]" value="{{ old('categories.' . $categoryIndex . '.short_description', $category->short_description) }}" class="form-control" >
                                                </div>
                                                <div class="col-md-1 d-flex align-items-end">
                                                    <button type="button" class="btn btn-danger remove-category">Remove Category</button>
                                                </div>
                                            </div>

                                            <div class="items-container" data-category-id="{{ $categoryIndex }}">
                                                @if($category->items)
                                                    @foreach($category->items as $itemIndex => $item)
                                                        <div class="item-row mb-2" data-item-index="{{ $itemIndex }}">
                                                            <input type="hidden" name="categories[{{ $categoryIndex }}][items][{{ $itemIndex }}][id]" value="{{ $item->id }}">
                                                            <div class="row g-3">
                                                                <div class="col-md-3">
                                                                    <label class="form-label">Image</label>
                                                                    <input type="file" name="categories[{{ $categoryIndex }}][items][{{ $itemIndex }}][image]" class="form-control" accept="image/*">
                                                                    @if($item->image)
                                                                        <div class="mt-2">
                                                                            <img src="{{ asset('storage/' . $item->image) }}" alt="" style="height: 50px; width: auto;">
                                                                            <small class="text-muted d-block">Current image</small>
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label class="form-label">Heading</label>
                                                                    <input type="text" name="categories[{{ $categoryIndex }}][items][{{ $itemIndex }}][heading]" value="{{ old('categories.' . $categoryIndex . '.items.' . $itemIndex . '.heading', $item->heading) }}" class="form-control" >
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <label class="form-label">Short Description</label>
                                                                    <input type="text" name="categories[{{ $categoryIndex }}][items][{{ $itemIndex }}][short_description]" value="{{ old('categories.' . $categoryIndex . '.items.' . $itemIndex . '.short_description', $item->short_description) }}" class="form-control" >
                                                                </div>
                                                                <div class="col-md-1 d-flex align-items-end">
                                                                    <button type="button" class="btn btn-danger remove-item">Remove</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <button type="button" class="btn btn-sm btn-outline-primary add-item mb-3" data-category="{{ $categoryIndex }}">Add Item</button>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <button type="button" id="add-category" class="btn btn-primary">Add Category</button>
                        </div>

                        <div class="col-12">
                            <h5>SEO Meta Information</h5>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Meta Title</label>
                            <input type="text" name="meta_title" value="{{ old('meta_title', $licensingService->meta_title) }}" class="form-control" maxlength="255">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Meta Keywords</label>
                            <textarea name="meta_keywords" class="form-control" rows="3">{{ old('meta_keywords', $licensingService->meta_keywords) }}</textarea>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Meta Description</label>
                            <textarea name="meta_description" class="form-control" rows="3" maxlength="500">{{ old('meta_description', $licensingService->meta_description) }}</textarea>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary" style="background-color: #2b2b5e;border-color: #2b2b5e;">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    let categoryIndex = {{ count($categories) }};

    document.getElementById('add-category').addEventListener('click', function() {
        const container = document.getElementById('categories-container');
        const categoryRow = document.createElement('div');
        categoryRow.className = 'category-row border p-4 mb-4';
        categoryRow.setAttribute('data-category-index', categoryIndex);
        categoryRow.innerHTML = `
            <div class="row g-3 mb-3">
                <div class="col-md-5">
                    <label class="form-label">Name</label>
                    <input type="text" name="categories[${categoryIndex}][name]" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Short Description</label>
                    <input type="text" name="categories[${categoryIndex}][short_description]" class="form-control">
                </div>
                <div class="col-md-1 d-flex align-items-end">
                    <button type="button" class="btn btn-danger remove-category">Remove Category</button>
                </div>
            </div>

            <div class="items-container" data-category-id="${categoryIndex}">
                <div class="item-row mb-2">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label">Image</label>
                            <input type="file" name="categories[${categoryIndex}][items][0][image]" class="form-control" accept="image/*">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Heading</label>
                            <input type="text" name="categories[${categoryIndex}][items][0][heading]" class="form-control" required>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label">Short Description</label>
                            <input type="text" name="categories[${categoryIndex}][items][0][short_description]" class="form-control" required>
                        </div>
                        <div class="col-md-1 d-flex align-items-end">
                            <button type="button" class="btn btn-danger remove-item">Remove</button>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-sm btn-outline-primary add-item mb-3" data-category="${categoryIndex}">Add Item</button>
        `;
        container.appendChild(categoryRow);
        categoryIndex++;
    });

    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-category')) {
            const categoryRow = e.target.closest('.category-row');
            const categoryIdInput = categoryRow.querySelector('input[type="hidden"]');
            const categoryId = categoryIdInput ? categoryIdInput.value : null;
            if (categoryId) {
                fetch(`/admin/licensing-service-categories/${categoryId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Content-Type': 'application/json',
                    }
                }).then(response => response.json()).then(data => {
                    if (data.success) {
                        categoryRow.remove();
                    }
                });
            } else {
                categoryRow.remove();
            }
        }

        if (e.target.classList.contains('add-item')) {
            const categoryId = e.target.getAttribute('data-category');
            const itemsContainer = document.querySelector(`.items-container[data-category-id="${categoryId}"]`);
            const existingItems = itemsContainer.querySelectorAll('.item-row');
            const itemIndex = existingItems.length;

            const itemRow = document.createElement('div');
            itemRow.className = 'item-row border p-3 mb-3';
            itemRow.setAttribute('data-item-index', itemIndex);
            itemRow.innerHTML = `
                <div class="row g-3">
                    <div class="col-md-3">
                        <label class="form-label">Image</label>
                        <input type="file" name="categories[${categoryId}][items][${itemIndex}][image]" class="form-control" accept="image/*">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Heading</label>
                        <input type="text" name="categories[${categoryId}][items][${itemIndex}][heading]" class="form-control">
                    </div>
                    <div class="col-md-5">
                        <label class="form-label">Short Description</label>
                        <input type="text" name="categories[${categoryId}][items][${itemIndex}][short_description]" class="form-control">
                    </div>
                    <div class="col-md-1 d-flex align-items-end">
                        <button type="button" class="btn btn-danger remove-item">Remove</button>
                    </div>
                </div>
            `;
            itemsContainer.appendChild(itemRow);
        }

        if (e.target.classList.contains('remove-item')) {
            const itemRow = e.target.closest('.item-row');
            const itemIdInput = itemRow.querySelector('input[type="hidden"]');
            const itemId = itemIdInput ? itemIdInput.value : null;
            if (itemId) {
                fetch(`/admin/licensing-service-items/${itemId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Content-Type': 'application/json',
                    }
                }).then(response => response.json()).then(data => {
                    if (data.success) {
                        itemRow.remove();
                    }
                });
            } else {
                itemRow.remove();
            }
        }
    });

    // Renumber form inputs before submission to ensure consecutive indices
    document.querySelector('form').addEventListener('submit', function(e) {
        const categories = document.querySelectorAll('.category-row');
        categories.forEach((category, categoryIndex) => {
            // Update category input names
            const categoryInputs = category.querySelectorAll('input[name*="categories["][name*="][name]"], input[name*="categories["][name*="][short_description]"]');
            categoryInputs.forEach(input => {
                if (input.name.includes('[name]')) {
                    input.name = `categories[${categoryIndex}][name]`;
                } else if (input.name.includes('[short_description]')) {
                    input.name = `categories[${categoryIndex}][short_description]`;
                }
            });

            // Update item input names
            const items = category.querySelectorAll('.item-row');
            items.forEach((item, itemIndex) => {
                const itemInputs = item.querySelectorAll('input, textarea');
                itemInputs.forEach(input => {
                    if (input.name) {
                        input.name = input.name.replace(/categories\[\d+\]\[items\]\[\d+\]/, `categories[${categoryIndex}][items][${itemIndex}]`);
                    }
                });
            });
        });
    });
});
</script>
@endsection