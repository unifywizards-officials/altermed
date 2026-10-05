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
$isSettingsMenuActive = (
        request()->routeIs('admin.privacy-policy.*') ||
        request()->routeIs('admin.terms-of-use.*') ||
        request()->routeIs('admin.security-policy.*') ||
        request()->routeIs('admin.contact_details.*') ||
        request()->routeIs('admin.newsletter-subscribers.*') ||
        request()->routeIs('admin.footer-top-section.*') ||
        request()->routeIs('admin.about-stats-section.*') ||
        request()->routeIs('admin.header-footer.*') ||
        request()->routeIs('admin.schedule-page-content.*')
    );
$isLicensingMenuActive = (
        request()->routeIs('admin.licensing-intro.*') ||
        request()->routeIs('admin.licensing-why-choose.*') ||
        request()->routeIs('admin.licensing-service.*') ||
        request()->routeIs('admin.licensing-service-categories.*') ||
        request()->routeIs('admin.licensing-quotes.*') ||
        request()->routeIs('admin.schedule-demos.*')
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

			<div class="menu-item {{ isActiveRoute('admin.media-upload.*') }}">
				<a href="{{ route('admin.media-upload.index') }}" class="menu-link">
					<div class="menu-icon">
						<i class="fa fa-upload"></i>
					</div>
					<div class="menu-text">Media Uploader</div>
				</a>
			</div>

		<div class="menu-item {{ isActiveRoute('admin.sliders.*') }}">
				<a href="{{ route('admin.sliders.edit', 1) }}" class="menu-link">
					<div class="menu-icon">
						<i class="fa fa-images"></i>
					</div>
					<div class="menu-text">Home Top Section</div>
				</a>
			</div>



	      <!-- <div class="menu-item {{ isActiveRoute('admin.services.*') }}">
				<a href="{{ route('admin.services.index') }}" class="menu-link">
					<div class="menu-icon">
						<i class="fa fa-briefcase"></i>
					</div>
					<div class="menu-text">Home Services</div>
				</a>
			</div> -->

			
				<div class="menu-item {{ isActiveRoute('admin.clients.*') }}">
				<a href="{{ route('admin.clients.index') }}" class="menu-link">
					<div class="menu-icon">
						<i class="fa fa-users"></i>
					</div>
					<div class="menu-text">Home Clients Logo</div>
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


	
				<div class="menu-item {{ isActiveRoute('admin.about-stats-section.*') }}">
			<a href="{{ route('admin.about-stats-section.index') }}" class="menu-link">
				<div class="menu-icon">
					<i class="fa fa-chart-bar" aria-hidden="true"></i>
				</div>
				<div class="menu-text">About Stats Section</div>
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
			
			
			
					<div class="menu-item {{ isActiveRoute('admin.about_section_commitment.*') }}">
            		<a href="{{ route('admin.about_section_commitment.edit', 3) }}" class="menu-link">
            			<div class="menu-icon">
            			<i class="fa fa-info-circle"></i>
            			</div>
            			<div class="menu-text">Home Commitment Section </div>
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
			
			<div class="menu-item {{ isActiveRoute('admin.home-manage-content.*') }}">
				<a href="{{ route('admin.home-manage-content.index') }}" class="menu-link">
					<div class="menu-icon">
						<i class="fa fa-home"></i>
					</div>
					<div class="menu-text">Home Content</div>
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

	<!-- <div class="menu-item {{ isActiveRoute('admin.business-counters.*') }}">
		<a href="{{ route('admin.business-counters.index') }}" class="menu-link">
			<div class="menu-icon">
				<i class="fa fa-tachometer-alt"></i>
			</div>
			<div class="menu-text">Business Counters</div>
		</a>
	</div> -->

			<div class="menu-item {{ isActiveRoute('admin.service-pages.*') }}">
			<a href="{{ route('admin.service-pages.index') }}" class="menu-link">
				<div class="menu-icon">
					<i class="fa fa-wrench" aria-hidden="true"></i>
				</div>
				<div class="menu-text">Service Page</div>
			</a>
			  </div>

<div class="menu-item has-sub {{ $isLicensingMenuActive }}">
			 <a href="javascript:;" class="menu-link" onclick="toggleLicensingMenu()">
			     <div class="menu-icon"><i class="fa fa-file-alt"></i></div>
			     <div class="menu-text">Licensing Management</div>
			     <div class="menu-caret"></div>
			 </a>
			 <div class="menu-submenu" id="licensing-submenu">

			     <div class="menu-item {{ isActiveRoute('admin.licensing-intro.*') }}">
			         <a href="{{ route('admin.licensing-intro.index') }}" class="menu-link">
			             <div class="menu-icon"><i class="fa fa-home"></i></div>
			             <div class="menu-text">Licensing Intro</div>
			         </a>
			     </div>

			     <div class="menu-item {{ isActiveRoute('admin.licensing-why-choose.*') }}">
			         <a href="{{ route('admin.licensing-why-choose.index') }}" class="menu-link">
			             <div class="menu-icon"><i class="fa fa-check"></i></div>
			             <div class="menu-text">Why Choose</div>
			         </a>
			     </div>

			     <div class="menu-item {{ isActiveRoute('admin.licensing-service.*') }}">
			         <a href="{{ route('admin.licensing-service.index') }}" class="menu-link">
			             <div class="menu-icon"><i class="fa fa-cogs"></i></div>
			             <div class="menu-text">Licensing Services</div>
			         </a>
			     </div>

			     <!-- <div class="menu-item {{ isActiveRoute('admin.licensing-service-categories.*') }}">
			         <a href="{{ route('admin.licensing-service-categories.index') }}" class="menu-link">
			             <div class="menu-icon"><i class="fa fa-list"></i></div>
			             <div class="menu-text">Service Categories</div>
			         </a>
			     </div> -->

			     <div class="menu-item {{ isActiveRoute('admin.licensing-quotes.*') }}">
			         <a href="{{ route('admin.licensing-quotes.index') }}" class="menu-link">
			             <div class="menu-icon"><i class="fa fa-envelope"></i></div>
			             <div class="menu-text">Quote Submissions</div>
			         </a>
			     </div>

			     <div class="menu-item {{ isActiveRoute('admin.schedule-demos.*') }}">
			         <a href="{{ route('admin.schedule-demos.index') }}" class="menu-link">
			             <div class="menu-icon"><i class="fa fa-calendar"></i></div>
			             <div class="menu-text">Schedule Requests</div>
			         </a>
			     </div>

			 </div>
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

<div class="menu-item {{ isActiveRoute('admin.teams.*') }}">
	   <a href="{{ route('admin.teams.index') }}" class="menu-link">
	       <div class="menu-icon"><i class="fa fa-users"></i></div>
	       <div class="menu-text">Teams</div>
	   </a>
</div>

<div class="menu-item {{ isActiveRoute('admin.contact.*') }}">
    <a href="{{ route('admin.contact') }}" class="menu-link">
        <div class="menu-icon"><i class="fa fa-envelope"></i></div>
        <div class="menu-text">Contact</div>
    </a>
</div>




<div class="menu-item has-sub {{ $isSettingsMenuActive }}">
    <a href="javascript:;" class="menu-link" onclick="toggleSettingsMenu()">
        <div class="menu-icon"><i class="fa fa-cog"></i></div>
        <div class="menu-text">Settings</div>
        <div class="menu-caret"></div>
    </a>
    <div class="menu-submenu" id="settings-submenu">


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

	<div class="menu-item {{ isActiveRoute('admin.footer-top-section.*') }}">
			<a href="{{ route('admin.footer-top-section.index') }}" class="menu-link">
				<div class="menu-icon">
					<i class="fa fa-file-text" aria-hidden="true"></i>
				</div>
				<div class="menu-text">Footer Top Section</div>
			</a>
			  </div>

        <div class="menu-item {{ isActiveRoute('admin.privacy-policy.*') }}">
            <a href="{{ route('admin.privacy-policy.index') }}" class="menu-link">
                <div class="menu-icon">
                    <i class="fa fa-shield-alt" aria-hidden="true"></i>
                </div>
                <div class="menu-text">Privacy Policy</div>
            </a>
        </div>

        <div class="menu-item {{ isActiveRoute('admin.terms-of-use.*') }}">
            <a href="{{ route('admin.terms-of-use.index') }}" class="menu-link">
                <div class="menu-icon">
                    <i class="fa fa-file-contract" aria-hidden="true"></i>
                </div>
                <div class="menu-text">Terms of Use</div>
            </a>
        </div>

        <div class="menu-item {{ isActiveRoute('admin.security-policy.*') }}">
            <a href="{{ route('admin.security-policy.index') }}" class="menu-link">
                <div class="menu-icon">
                    <i class="fa fa-shield-alt" aria-hidden="true"></i>
                </div>
                <div class="menu-text">Security Policy</div>
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

			<div class="menu-item {{ isActiveRoute('admin.schedule-page-content.*') }}">
			    <a href="{{ route('admin.schedule-page-content.index') }}" class="menu-link">
			        <div class="menu-icon">
			            <i class="fa fa-calendar-alt"></i>
			        </div>
			        <div class="menu-text">Schedule Page Content</div>
			    </a>
			</div>
    </div>
</div>
 

			<!-- BEGIN minify-button -->
			<div class="menu-item d-flex mt-auto">
				<a href="javascript:;" class="app-sidebar-minify-btn ms-auto" data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
			</div>
			<!-- END minify-button -->

			<script>
				function toggleSettingsMenu() {
					const submenu = document.getElementById('settings-submenu');
					if (submenu.style.display === 'none' || submenu.style.display === '') {
						submenu.style.display = 'block';
					} else {
						submenu.style.display = 'none';
					}
				}

				function toggleLicensingMenu() {
					const submenu = document.getElementById('licensing-submenu');
					if (submenu.style.display === 'none' || submenu.style.display === '') {
						submenu.style.display = 'block';
					} else {
						submenu.style.display = 'none';
					}
				}

				// Close menus when clicking on other menu items
				document.addEventListener('DOMContentLoaded', function() {
					const menuItems = document.querySelectorAll('.menu-item:not(.has-sub)');
					menuItems.forEach(item => {
						item.addEventListener('click', function() {
							const settingsSubmenu = document.getElementById('settings-submenu');
							if (settingsSubmenu) {
								settingsSubmenu.style.display = 'none';
							}
							// Don't close licensing submenu for licensing menu items
						});
					});

					// Keep licensing submenu open for licensing menu items
					const licensingMenuItems = document.querySelectorAll('#licensing-submenu .menu-item a');
					licensingMenuItems.forEach(item => {
						item.addEventListener('click', function(e) {
							// Prevent default closing behavior
							e.stopPropagation();
							// Keep the submenu open
							const licensingSubmenu = document.getElementById('licensing-submenu');
							if (licensingSubmenu) {
								licensingSubmenu.style.display = 'block';
							}
						});
					});

					// Auto-open licensing submenu if on licensing page
					if ({{ $isLicensingMenuActive ? 'true' : 'false' }}) {
						const licensingSubmenu = document.getElementById('licensing-submenu');
						if (licensingSubmenu) {
							licensingSubmenu.style.display = 'block';
						}
					}

					// Auto-open settings submenu if on settings page
					if ({{ $isSettingsMenuActive ? 'true' : 'false' }}) {
						const settingsSubmenu = document.getElementById('settings-submenu');
						if (settingsSubmenu) {
							settingsSubmenu.style.display = 'block';
						}
					}
				});
			</script>

		</div>
		<!-- END menu -->
	</div>
	<!-- END scrollbar -->
</div>
<div class="app-sidebar-bg" {{ $appSidebarAttr }}></div>
<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>
<!-- END #sidebar -->
