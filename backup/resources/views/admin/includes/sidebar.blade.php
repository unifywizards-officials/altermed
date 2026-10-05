@php
function isActiveRoute($routeName) {
    return request()->routeIs($routeName) ? 'active' : '';
}
$isBuildingMenuActive = (
        request()->routeIs('buildings.index') ||
        request()->routeIs('unit-types.index') ||
        request()->routeIs('units.index') ||
        request()->routeIs('assets-locations.index') ||

        request()->routeIs('building-assets.index')
    );
@endphp
@php
	$appSidebarClass = (!empty($appSidebarTransparent)) ? 'app-sidebar-transparent' : '';
	$appSidebarAttr  = (!empty($appSidebarLight)) ? '' : ' data-bs-theme=dark';
@endphp
<!-- BEGIN #sidebar -->
<div id="sidebar" class="app-sidebar {{ $appSidebarClass }}" {{ $appSidebarAttr }}>
	<!-- BEGIN scrollbar -->
	<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
		<div class="menu mt-3">
			@if (!$appSidebarSearch)
			
			@endif

			@if ($appSidebarSearch)
			<div class="menu-search mb-n3">
        		<input type="text" class="form-control" placeholder="Sidebar menu filter..." data-sidebar-search="true" />
			</div>
			@endif

			<!-- <div class="menu-header">Navigation</div> -->
			<div class="menu-item {{ isActiveRoute('admin.dashboard') }}">
				<a href="{{route('admin.dashboard')}}" class="menu-link">
					<div class="menu-icon">
						<i class="fa fa-sitemap"></i>							</div>
					<div class="menu-text">Dashboard</div>
				</a>
			</div>

			<div class="menu-item {{ isActiveRoute('admin.sliders.*') }}">
				<a href="{{ route('admin.sliders.index') }}" class="menu-link">
					<div class="menu-icon">
						<i class="fa fa-images"></i>
					</div>
					<div class="menu-text">Home Slider</div>
				</a>
			</div>


				<div class="menu-item {{ isActiveRoute('admin.about_altermed_rcm.*') }}">
				<a href="{{ route('admin.about_altermed_rcm.edit', 4) }}" class="menu-link">
					<div class="menu-icon">
						<i class="fa fa-cogs"></i>
					</div>
					<div class="menu-text">About Altermed RCM </div>
				</a>
			</div>

	      <div class="menu-item {{ isActiveRoute('admin.services.*') }}">
				<a href="{{ route('admin.services.index') }}" class="menu-link">
					<div class="menu-icon">
						<i class="fa fa-briefcase"></i>
					</div>
					<div class="menu-text">Home Services</div>
				</a>
			</div>
			
			<div class="menu-item {{ isActiveRoute('admin.about_section.*') }}">
		<a href="{{ route('admin.about_section.edit', 1) }}" class="menu-link">
			<div class="menu-icon">
				<i class="fa fa-cogs"></i>
			</div>
			<div class="menu-text">Home About Section</div>
		</a>
	</div>
	
	
		<div class="menu-item {{ isActiveRoute('admin.whychoose.*') }}">
				<a href="{{ route('admin.whychoose.index') }}" class="menu-link">
					<div class="menu-icon">
						<i class="fa fa-check-circle"></i>
					</div>
					<div class="menu-text">Why Choose</div>
				</a>
			</div>
			
			
				<div class="menu-item {{ isActiveRoute('admin.clients.*') }}">
				<a href="{{ route('admin.clients.index') }}" class="menu-link">
					<div class="menu-icon">
						<i class="fa fa-users"></i>
					</div>
					<div class="menu-text">Home Clients Logo</div>
				</a>
			</div>
			
					<div class="menu-item {{ isActiveRoute('admin.about_section_commitment.*') }}">
            		<a href="{{ route('admin.about_section_commitment.edit', 3) }}" class="menu-link">
            			<div class="menu-icon">
            			<i class="fa fa-info-circle"></i>
            			</div>
            			<div class="menu-text">Home Commitment Section </div>
            		</a>
            	</div>
			
			<div class="menu-item {{ isActiveRoute('admin.home-manage-content.*') }}">
				<a href="{{ route('admin.home-manage-content.index') }}" class="menu-link">
					<div class="menu-icon">
						<i class="fa fa-home"></i>
					</div>
					<div class="menu-text">Home Content</div>
				</a>
			</div>
			
			

			<div class="menu-item {{ isActiveRoute('admin.header-footer.*') }}">
				<a href="{{ route('admin.header-footer.index') }}" class="menu-link">
					<div class="menu-icon">
						<i class="fa fa-edit"></i>
					</div>
					<div class="menu-text">Header & Footer</div>
				</a>
			</div>

		

		

		
	<div class="menu-item {{ isActiveRoute('admin.about_page.*') }}">
		<a href="{{ route('admin.about_page.index', 2) }}" class="menu-link">
			<div class="menu-icon">
				<i class="fa fa-cogs"></i>
			</div>
			<div class="menu-text">About Page</div>
		</a>
	</div>

	<div class="menu-item {{ isActiveRoute('admin.business-counters.*') }}">
		<a href="{{ route('admin.business-counters.index') }}" class="menu-link">
			<div class="menu-icon">
				<i class="fa fa-tachometer-alt"></i>
			</div>
			<div class="menu-text">Business Counters</div>
		</a>
	</div>

			<div class="menu-item {{ isActiveRoute('admin.service-pages.*') }}">
			<a href="{{ route('admin.service-pages.index') }}" class="menu-link">
				<div class="menu-icon">
					<i class="fa fa-wrench" aria-hidden="true"></i>
				</div>
				<div class="menu-text">Service Page</div>
			</a>
			  </div>
		   
		




<div class="menu-item {{ isActiveRoute('admin.blog-categories.*') }}">
    <a href="{{ route('admin.blog-categories.index') }}" class="menu-link">
        <div class="menu-icon"><i class="fa fa-list-alt"></i></div>
        <div class="menu-text">Blog Categories</div>
    </a>
</div>

	<div class="menu-item {{ isActiveRoute('admin.blogs.*') }}">
	<a href="{{ route('admin.blogs.index') }}" class="menu-link">
		<div class="menu-icon"><i class="fa fa-blog"></i></div>
		<div class="menu-text">Blogs</div>
	</a>
	</div>

	<div class="menu-item {{ isActiveRoute('admin.testimonials.*') }}">
    <a href="{{ route('admin.testimonials.index') }}" class="menu-link">
        <div class="menu-icon"><i class="fa fa-comments"></i></div>
        <div class="menu-text">About Testimonials</div>
    </a>
</div>

<div class="menu-item {{ isActiveRoute('admin.contact.*') }}">
    <a href="{{ route('admin.contact') }}" class="menu-link">
        <div class="menu-icon"><i class="fa fa-envelope"></i></div>
        <div class="menu-text">Contact</div>
    </a>
</div>

<div class="menu-item {{ isActiveRoute('admin.contact_details.*') }}">
    <a href="{{ route('admin.contact_details.index') }}" class="menu-link">
        <div class="menu-icon"><i class="fa fa-address-book" aria-hidden="true"></i></div>
        <div class="menu-text">Contact Details</div>
    </a>
</div>

<div class="menu-item {{ isActiveRoute('admin.newsletter-subscribers.*') }}">
    <a href="{{ route('admin.newsletter-subscribers.index') }}" class="menu-link">
        <div class="menu-icon"><i class="fa fa-envelope"></i></div>
        <div class="menu-text">Newsletter Subscribers</div>
    </a>
</div>




     






 
 

			<!-- BEGIN minify-button -->
			<div class="menu-item d-flex">
				<a href="javascript:;" class="app-sidebar-minify-btn ms-auto" data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
			</div>
			<!-- END minify-button -->

		</div>
		<!-- END menu -->
	</div>
	<!-- END scrollbar -->
</div>
<div class="app-sidebar-bg" {{ $appSidebarAttr }}></div>
<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>
<!-- END #sidebar -->
