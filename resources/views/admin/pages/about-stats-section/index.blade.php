@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="mb-0">About Stats Section</h1>
        @if(!$aboutStatsSection)
            <a href="{{ route('admin.about-stats-section.create') }}" class="btn btn-primary" style="background-color: #2b2b5e;border-color: #2b2b5e;">Create Section</a>
        @else
            <a href="{{ route('admin.about-stats-section.edit', $aboutStatsSection->id) }}" class="btn btn-success" style="background-color: #2b2b5e;border-color: #2b2b5e;">Edit Section</a>
        @endif
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($aboutStatsSection)
        <div class="card">
            <div class="card-body">
                <h5>Main Title: {{ $aboutStatsSection->main_title ?? 'Not set' }}</h5>
                <p><strong>Title Highlight:</strong> {{ $aboutStatsSection->main_title_highlight ?? 'Not set' }}</p>

                <h6>Stats Items:</h6>
                @if($aboutStatsSection->stats_items && is_array($aboutStatsSection->stats_items))
                    <div class="row">
                        @foreach($aboutStatsSection->stats_items as $stat)
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>{{ $stat['value'] ?? '' }}</h6>
                                        <p><strong>{{ $stat['title'] ?? '' }}</strong></p>
                                        <p>{{ $stat['description'] ?? '' }}</p>
                                        @if(isset($stat['image']) && $stat['image'])
                                            <img src="{{ asset('storage/' . $stat['image']) }}" alt="" style="max-width: 50px;">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p>No stats items configured.</p>
                @endif

                <h6>Bottom Section:</h6>
                <p><strong>Title:</strong> {{ $aboutStatsSection->bottom_title ?? 'Not set' }}</p>
                <p><strong>Subtitle:</strong> {{ $aboutStatsSection->bottom_subtitle ?? 'Not set' }}</p>
                <p><strong>Description:</strong> {{ $aboutStatsSection->bottom_description ?? 'Not set' }}</p>

                @if($aboutStatsSection->bottom_images && is_array($aboutStatsSection->bottom_images))
                    <div class="mb-3">
                        <strong>Images:</strong>
                        @foreach($aboutStatsSection->bottom_images as $image)
                            <img src="{{ asset('storage/' . $image) }}" alt="" style="max-width: 50px; margin-right: 10px;">
                        @endforeach
                    </div>
                @endif

                <h6>Right Content:</h6>
                <p>{{ $aboutStatsSection->right_content ?? 'Not set' }}</p>

                <h6>Button:</h6>
                <p><strong>Text:</strong> {{ $aboutStatsSection->button_text ?? 'Not set' }}</p>
                <p><strong>URL:</strong> {{ $aboutStatsSection->button_url ?? 'Not set' }}</p>
            </div>
        </div>
    @else
        <div class="card">
            <div class="card-body text-center">
                <h5>No About Stats Section Created Yet</h5>
                <p>Create your first About Stats Section to customize the homepage statistics section.</p>
                <a href="{{ route('admin.about-stats-section.create') }}" class="btn btn-primary" style="background-color: #2b2b5e;border-color: #2b2b5e;">Create Now</a>
            </div>
        </div>
    @endif
</div>
@endsection