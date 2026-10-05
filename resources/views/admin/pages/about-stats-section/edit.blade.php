@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="mb-0">Edit About Stats Section</h1>
        <a href="{{ route('admin.about-stats-section.index') }}" class="btn btn-secondary"><i class='fas fa-arrow-left'></i> Back</a>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.about-stats-section.update', $aboutStatsSection->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label>Main Title</label>
                            <input type="text" name="main_title" value="{{ old('main_title', $aboutStatsSection->main_title) }}" class="form-control" placeholder="e.g., Smarter Medical Billing to">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label>Main Title Highlight</label>
                            <input type="text" name="main_title_highlight" value="{{ old('main_title_highlight', $aboutStatsSection->main_title_highlight) }}" class="form-control" placeholder="e.g., Get Paid Faster">
                        </div>
                    </div>
                </div>

                <hr>
                <h5 class="mb-3">Statistics Cards (6 items)</h5>
                <div id="stats-container">
                    @for($i = 0; $i < 6; $i++)
                        <div class="stats-item mb-4 p-3 border rounded">
                            <h6>Stat Card {{ $i + 1 }}</h6>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="text" name="stats_items[{{ $i }}][value]" value="{{ old('stats_items.' . $i . '.value', $aboutStatsSection->stats_items[$i]['value'] ?? '') }}" class="form-control" placeholder="e.g., 98%">
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="stats_items[{{ $i }}][title]" value="{{ old('stats_items.' . $i . '.title', $aboutStatsSection->stats_items[$i]['title'] ?? '') }}" class="form-control" placeholder="e.g., Clean Claim Rate">
                                </div>
                                <div class="col-md-4">
                                    <textarea name="stats_items[{{ $i }}][description]" class="form-control" rows="2" placeholder="Description">{{ old('stats_items.' . $i . '.description', $aboutStatsSection->stats_items[$i]['description'] ?? '') }}</textarea>
                                </div>
                                <div class="col-md-2">
                                    <input type="file" name="stats_items[{{ $i }}][image]" class="form-control" accept="image/*">
                                    @if(isset($aboutStatsSection->stats_items[$i]['image']) && $aboutStatsSection->stats_items[$i]['image'])
                                        <img src="{{ asset('storage/' . $aboutStatsSection->stats_items[$i]['image']) }}" alt="" style="max-width: 50px; margin-top: 5px;">
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>

                <hr>
                <h5 class="mb-3">Bottom Section</h5>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label>Bottom Title</label>
                            <input type="text" name="bottom_title" value="{{ old('bottom_title', $aboutStatsSection->bottom_title) }}" class="form-control" placeholder="e.g., 500+">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label>Bottom Subtitle</label>
                            <input type="text" name="bottom_subtitle" value="{{ old('bottom_subtitle', $aboutStatsSection->bottom_subtitle) }}" class="form-control" placeholder="e.g., Dedicated Employees">
                        </div>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label>Bottom Description</label>
                    <textarea name="bottom_description" class="form-control" rows="3" placeholder="Description for bottom section">{{ old('bottom_description', $aboutStatsSection->bottom_description) }}</textarea>
                </div>

                <div class="form-group mb-3">
                    <label>Bottom Images (Multiple)</label>
                    <input type="file" name="bottom_images[]" class="form-control" multiple accept="image/*">
                    <small class="text-muted">Select multiple employee images (leave empty to keep existing)</small>
                    @if($aboutStatsSection->bottom_images && is_array($aboutStatsSection->bottom_images))
                        <div class="mt-2">
                            <strong>Current Images:</strong>
                            @foreach($aboutStatsSection->bottom_images as $image)
                                <img src="{{ asset('storage/' . $image) }}" alt="" style="max-width: 50px; margin-right: 10px;">
                            @endforeach
                        </div>
                    @endif
                </div>

                <hr>
                <h5 class="mb-3">Right Content Section</h5>
                <div class="form-group mb-3">
                    <label>Right Content</label>
                    <textarea name="right_content" class="form-control" rows="4" placeholder="Content for the right side">{{ old('right_content', $aboutStatsSection->right_content) }}</textarea>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label>Button Text</label>
                            <input type="text" name="button_text" value="{{ old('button_text', $aboutStatsSection->button_text) }}" class="form-control" placeholder="e.g., about us">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label>Button URL</label>
                            <input type="text" name="button_url" value="{{ old('button_url', $aboutStatsSection->button_url) }}" class="form-control" placeholder="e.g., /about">
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-success" style="background-color: #2b2b5e;border-color: #2b2b5e;">Update Section</button>
                    <a href="{{ route('admin.about-stats-section.index') }}" class="btn btn-light">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection