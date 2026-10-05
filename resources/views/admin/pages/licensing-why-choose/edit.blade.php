@extends('admin.layouts.app')

@push('scripts')
    <script src="/assets/plugins/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>
    <script src="/assets/plugins/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.min.js"></script>
    <script src="/assets/js/demo/form-wysiwyg.demo.js"></script>
@endpush

@section('content')
<div class="row">
    <div class="col-12 d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Edit Why Choose Licensing</h4>
        <a href="{{ route('admin.licensing-why-choose.index') }}" class="btn btn-secondary"><i class='fas fa-arrow-left'></i> Back</a>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.licensing-why-choose.update', $licensingWhyChoose) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label class="form-label">Heading</label>
                            <textarea id="editor1" name="heading" class="form-control" rows="4" required>{{ old('heading', $licensingWhyChoose->heading) }}</textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="4" required>{{ old('description', $licensingWhyChoose->description) }}</textarea>
                        </div>

                        <div class="col-12">
                            <h5>Items</h5>
                            <div id="items-container">
                                @if($items)
                                    @foreach($items as $index => $item)
                                        <div class="item-row border p-3 mb-3" data-index="{{ $index }}">
                                            <input type="hidden" name="items[{{ $index }}][id]" value="{{ $item->id }}">
                                            <div class="row g-3">
                                                <div class="col-md-5">
                                                    <label class="form-label">Name</label>
                                                    <input type="text" name="items[{{ $index }}][name]" value="{{ old('items.' . $index . '.name', $item->name) }}" class="form-control" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Short Description</label>
                                                    <input type="text" name="items[{{ $index }}][short_description]" value="{{ old('items.' . $index . '.short_description', $item->short_description) }}" class="form-control" required>
                                                </div>
                                                <div class="col-md-1 d-flex align-items-end">
                                                    <button type="button" class="btn btn-danger remove-item">Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <button type="button" id="add-item" class="btn btn-primary" style="float: right;">Add Item</button>
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
    let itemIndex = {{ count($items) }};

    document.getElementById('add-item').addEventListener('click', function() {
        const container = document.getElementById('items-container');
        const itemRow = document.createElement('div');
        itemRow.className = 'item-row border p-3 mb-3';
        itemRow.setAttribute('data-index', itemIndex);
        itemRow.innerHTML = `
            <div class="row g-3">
                <div class="col-md-5">
                    <label class="form-label">Name</label>
                    <input type="text" name="items[${itemIndex}][name]" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Short Description</label>
                    <input type="text" name="items[${itemIndex}][short_description]" class="form-control" required>
                </div>
                <div class="col-md-1 d-flex align-items-end">
                    <button type="button" class="btn btn-danger remove-item">Remove</button>
                </div>
            </div>
        `;
        container.appendChild(itemRow);
        itemIndex++;
    });

    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-item')) {
            e.target.closest('.item-row').remove();
        }
    });
});
</script>

<script>
$(document).ready(function() {
    FormWysihtml.init();
});
</script>
@endsection