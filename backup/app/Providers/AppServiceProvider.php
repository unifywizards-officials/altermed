<?php

namespace App\Providers;
use App\Models\ContactDetail;
use App\Models\HeaderFooter;
use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
public function boot()
{
    View::composer('*', function ($view) {
        $contact = ContactDetail::first();
	
        $contactDetails = is_string($contact->contact_details) 
                        ? json_decode($contact->contact_details, true) 
                        : $contact->contact_details;
		//dd($contactDetails);				

        $contactCta = is_string($contact->contact_cta) 
                        ? json_decode($contact->contact_cta, true) 
                        : $contact->contact_cta;
						
		 $extraIcons = is_string($contact->extra_icons) 
                        ? json_decode($contact->extra_icons, true) 
                        : $contact->extra_icons;				
		//dd($extraIcons);	

       // header_footer		
	 
       
        $view->with([
            'globalContact' => $contact,
            'globalContactDetails' => $contactDetails,
            'globalContactCta' => $contactCta,
			'globalExtraIcons'     => $extraIcons,
			
        ]);
    });
}
	
	
	
	
}
