@extends('admin.layouts.app')

@section('title', 'Dashboard')

@push('css')
	<link href="/assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css" rel="stylesheet" />
	<link href="/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
@endpush

@push('scripts')
	<script src="/assets/plugins/gritter/js/jquery.gritter.js"></script>
	<script src="/assets/plugins/flot/source/jquery.canvaswrapper.js"></script>
	<script src="/assets/plugins/flot/source/jquery.colorhelpers.js"></script>
	<script src="/assets/plugins/flot/source/jquery.flot.js"></script>
	<script src="/assets/plugins/flot/source/jquery.flot.saturated.js"></script>
	<script src="/assets/plugins/flot/source/jquery.flot.browser.js"></script>
	<script src="/assets/plugins/flot/source/jquery.flot.drawSeries.js"></script>
	<script src="/assets/plugins/flot/source/jquery.flot.uiConstants.js"></script>
	<script src="/assets/plugins/flot/source/jquery.flot.time.js"></script>
	<script src="/assets/plugins/flot/source/jquery.flot.resize.js"></script>
	<script src="/assets/plugins/flot/source/jquery.flot.pie.js"></script>
	<script src="/assets/plugins/flot/source/jquery.flot.crosshair.js"></script>
	<script src="/assets/plugins/flot/source/jquery.flot.categories.js"></script>
	<script src="/assets/plugins/flot/source/jquery.flot.navigate.js"></script>
	<script src="/assets/plugins/flot/source/jquery.flot.touchNavigate.js"></script>
	<script src="/assets/plugins/flot/source/jquery.flot.hover.js"></script>
	<script src="/assets/plugins/flot/source/jquery.flot.touch.js"></script>
	<script src="/assets/plugins/flot/source/jquery.flot.selection.js"></script>
	<script src="/assets/plugins/flot/source/jquery.flot.symbol.js"></script>
	<script src="/assets/plugins/flot/source/jquery.flot.legend.js"></script>
	<script src="/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
	<script src="/assets/plugins/jvectormap-next/jquery-jvectormap.min.js"></script>
	<script src="/assets/plugins/jvectormap-content/world-mill.js"></script>
	<script src="/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
	<script src="/assets/js/demo/dashboard.js"></script>
@endpush

@section('content')
	<!-- BEGIN breadcrumb -->
	<ol class="breadcrumb float-xl-end">
		<li class="breadcrumb-item"><a href="{{('/')}}">Home</a></li>
		<li class="breadcrumb-item active">Dashboard</li>
	</ol>
	<!-- END breadcrumb -->
	<!-- BEGIN page-header -->
	<h1 class="page-header">Dashboard </h1>
	<!-- END page-header -->

	<!-- BEGIN row -->
	<div class="row">
		<!-- BEGIN col-3 -->
<style>
    .dashboard-card {
        min-height: 200px;
        transition: all 0.3s ease-in-out;
    }
    .dashboard-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }
    .stats-icon {
        font-size: 2.5rem;
        opacity: 0.8;
    }
    .stats-info h4 {
        font-size: 1rem;
        margin-top: 10px;
    }
    .stats-info p {
        margin: 0;
    }
    .stats-desc {
        font-size: 0.85rem;
        margin-top: 5px;
        opacity: 0.9;
    }

	.widget-stats .stats-info p, .widget.widget-stats .stats-info p {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 42px;
}

.widget-stats .stats-info .h4, .widget-stats .stats-info h4, .widget.widget-stats .stats-info h4 {
    font-size: 18px;

}
.fa-cogs:before, .fa-gears:before {
    
    color: #fff;
}

.fa-blog:before {
    content: "\f781";
    color: #fff;
}
.fa-envelope-open-text:before {
    content: "\f658";
    color: #fff;
}
.fa-users:before {
    content: "\f0c0";
    color: #fff;
}
p.fs-3.fw-bold {
    color: #fff;
}
</style>

<div class="row g-4">
    <!-- Total Services -->
    <div class="col-xl-3 col-md-6">
        <div class="widget widget-stats bg-primary text-white shadow-lg rounded-3 p-3 dashboard-card">
            <div class="stats-icon mb-2"><i class="fa fa-cogs"></i></div>
            <div class="stats-info">
                <h4 class="text-uppercase">Total Services</h4>
                <p class="fs-3 fw-bold">{{ $totalServices }}</p>
                <p class="stats-desc">Our range of services offered to clients.</p>
            </div>
        </div>
    </div>

    <!-- Total Blogs -->
    <div class="col-xl-3 col-md-6">
        <div class="widget widget-stats bg-info text-white shadow-lg rounded-3 p-3 dashboard-card">
            <div class="stats-icon mb-2"><i class="fa fa-blog"></i></div>
            <div class="stats-info">
                <h4 class="text-uppercase">Total Blogs</h4>
                <p class="fs-3 fw-bold">{{ $totalBlogs }}</p>
                <p class="stats-desc">Latest articles and updates we publish.</p>
            </div>
        </div>
    </div>

    <!-- Total Newsletters -->
    <div class="col-xl-3 col-md-6">
        <div class="widget widget-stats bg-warning text-dark shadow-lg rounded-3 p-3 dashboard-card">
            <div class="stats-icon mb-2"><i class="fa fa-envelope-open-text"></i></div>
            <div class="stats-info">
                <h4 class="text-uppercase">Newsletters</h4>
                <p class="fs-3 fw-bold">{{ $totalNewsletters }}</p>
                <p class="stats-desc">Monthly newsletters sent to subscribers.</p>
            </div>
        </div>
    </div>

    <!-- Total Contact Users -->
    <div class="col-xl-3 col-md-6">
        <div class="widget widget-stats bg-danger text-white shadow-lg rounded-3 p-3 dashboard-card">
            <div class="stats-icon mb-2"><i class="fa fa-users"></i></div>
            <div class="stats-info">
                <h4 class="text-uppercase">Contact Users</h4>
                <p class="fs-3 fw-bold">{{ $totalContacts }}</p>
                <p class="stats-desc">Users who reached us via contact form.</p>
            </div>
        </div>
    </div>
</div>
				<!-- <div class="stats-link">
					<a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
				</div> -->
			</div>
		</div>
	



	</div>
	<!-- END row -->


@endsection
