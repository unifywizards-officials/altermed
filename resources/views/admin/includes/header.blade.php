@php
	$appHeaderAttr = (!empty($appHeaderInverse)) ? ' data-bs-theme=dark' : '';
	$appHeaderMenu = (!empty($appHeaderMenu)) ? $appHeaderMenu : '';
	$appHeaderMegaMenu = (!empty($appHeaderMegaMenu)) ? $appHeaderMegaMenu : '';
	$appHeaderTopMenu = (!empty($appHeaderTopMenu)) ? $appHeaderTopMenu : '';
@endphp
<style>
	.w-125px {
			width: 125px!important;
		}
idth: auto !important;
}
</style>

<!-- BEGIN #header -->
<div id="header" class="app-header" {{ $appHeaderAttr }}>
	<!-- BEGIN navbar-header -->
	<div class="navbar-header">
		@if ($appSidebarTwo)
		<button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-end-mobile">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		@endif
		<a href="/" class="navbar-brand">
		<img src="{{ asset('images/logo-altermed.png') }}" 
         alt="Altermed Admin" 
         height="100" 
         width="200" 
         class="me-2" style="max-width: 53%;
    max-height: 160%;">
		</a>
		@if ($appHeaderMegaMenu && !$appSidebarTwo)
		<button type="button" class="navbar-mobile-toggler" data-bs-toggle="collapse" data-bs-target="#top-navbar">
			<span class="fa-stack fa-lg">
				<i class="far fa-square fa-stack-2x"></i>
				<i class="fa fa-cog fa-stack-1x mt-1px"></i>
			</span>
		</button>
		@endif
		@if($appTopMenu && !$appSidebarHide && !$appSidebarTwo)
		<button type="button" class="navbar-mobile-toggler" data-toggle="app-top-menu-mobile">
			<span class="fa-stack fa-lg">
				<i class="far fa-square fa-stack-2x"></i>
				<i class="fa fa-cog fa-stack-1x mt-1px"></i>
			</span>
		</button>
		@endif
		@if($appTopMenu && $appSidebarHide && !$appSidebarTwo)
		<button type="button" class="navbar-mobile-toggler" data-toggle="app-top-menu-mobile">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		@endif
		@if (!$appSidebarHide)
		<button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		@endif
	</div>

	@includeWhen($appHeaderMegaMenu, 'includes.component.header-mega-menu')

	<!-- BEGIN header-nav -->
	<div class="navbar-nav">
		<div class="navbar-item navbar-form">
			<!-- <form action="" method="POST" name="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Enter keyword" />
					<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
				</div>
			</form> -->
		</div>
		<div class="navbar-item dropdown">
		
		</div>
		
		<button id="copyStorage" class="btn btn-success">Update Storage Files</button>

		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script>
		$('#copyStorage').click(function(){
			$.get('/create-storage-link', function(response){
				alert(response); // optional: success message
			});
		});
		</script>

	

		@isset($appHeaderLanguageBar)
			@include('admin.includes.component.header-language-bar')
		@endisset

		<div class="navbar-item navbar-user dropdown">
			<a href="#" class="navbar-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">

			@if(isset(Auth::user()->profile_image))
			<img src="{{ asset('storage/' . Auth::user()->profile_image) }}" alt="" />
			@else
				<img src="/assets/img/user/user-13.jpg" alt="" />
			@endif
				<span>
					<span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
					<b class="caret"></b>
				</span>
			</a>
			<div class="dropdown-menu dropdown-menu-end me-1">
				<a href="{{route('admin.profile.edit')}}" class="dropdown-item">Edit Profile</a>


			<div class="dropdown-divider"></div>
			<a href="{{ route('admin.logout') }}"
			onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
			class="dropdown-item">Log Out</a>

			<form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
				@csrf
			</form>
			</div>
		</div>

		@if($appSidebarTwo)
		<div class="navbar-divider d-none d-md-block"></div>
		<div class="navbar-item d-none d-md-block">
			<a href="javascript:;" data-toggle="app-sidebar-end" class="navbar-link icon">
				<i class="fa fa-th"></i>
			</a>
		</div>
		@endif
	</div>
	<!-- END header-nav -->
</div>
<!-- END #header -->
