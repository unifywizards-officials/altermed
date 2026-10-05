<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Mail\NewsletterSubscriptionMail;
use App\Models\Client;
use App\Models\ContactMessage;
use App\Models\ContactDetail;
use App\Models\AboutSection;
use App\Models\Testimonial;
use App\Models\ServicePage;
use App\Models\HomeManageContent;
use App\Models\Slider;
use App\Models\WhyChoose;
use App\Models\Service;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BusinessCounter;
use App\Models\AboutStatsSection;

use App\Models\NewsletterSubscriber;
use App\Models\TermsOfUse;
use App\Models\SecurityPolicy;
use App\Models\PrivacyPolicy;
use App\Models\LicensingIntro;
use App\Models\LicensingWhyChoose;
use App\Models\LicensingService;
use App\Models\LicensingQuote;
use App\Models\ScheduleDemo;
use App\Models\SchedulePageContent;
use App\Models\Team;
use App\Mail\ScheduleDemoMail;
use App\Mail\LicensingQuoteMail;



class HomeController extends Controller
{
   public function index(){
      $clients = Client::where('is_active', true)->orderBy('display_order')->get();
      $homeManageContent = HomeManageContent::first();
      //dd($homeManageContent);
      $homeCta = $homeManageContent ? (is_string($homeManageContent->home_cta) ? json_decode($homeManageContent->home_cta, true) : $homeManageContent->home_cta) : [];
      $slider = Slider::where('is_active', true)->get();
      $service = Service::where('is_active', true)->orderBy('display_order')->get();
    //  dd($service);
      $aboutsection = AboutSection::find(1);
      $about_section_commitment = AboutSection::find(3);
      //dd($about_section_commitment);
      $why_choose = WhyChoose::where('is_active', true)->orderBy('display_order')->get();

      $about_section_simplify= AboutSection::find(4);
      $businesscounter = BusinessCounter::all();
      //dd($businesscounter);

      // Get all active service pages for homepage filtering
        $servicePages = ServicePage::where('is_active', 1)
                                  ->where('show_on_home', 1)
                                  ->latest()
                                  ->get();

      // Get about stats section data
      $aboutStatsSection = AboutStatsSection::first();

      return view('welcome', compact('clients', 'homeManageContent','homeCta','slider','service','aboutsection','about_section_commitment','why_choose','about_section_simplify','businesscounter','servicePages','aboutStatsSection'));
   }

public function about()
{
     $client_logo  = Client::all();
  
    $about_page  = AboutSection::find(2);
    $testimonial = Testimonial::first();

if ($testimonial) {
    if (is_string($testimonial->testimonials_items)) {
        $decoded = json_decode($testimonial->testimonials_items, true) ?? [];
        $testimonial->items = array_values($decoded); // 👈 yeh important hai
    } elseif (is_array($testimonial->testimonials_items)) {
        $testimonial->items = array_values($testimonial->testimonials_items); // 👈
    } else {
        $testimonial->items = [];
    }
} else {
    $testimonial = (object) [
        'heading'     => null,
        'description' => null,
        'items'       => [],
    ];
}
//   dd($testimonial);

    return view('about', compact('about_page', 'testimonial','client_logo'));
}




    public function service(){
     $servicePage = ServicePage::where('is_active', true)->first();
     $servicePages = ServicePage::where('is_active', true)->get();

    $contact = ContactDetail::first();

    $contactDetails = is_string($contact->contact_details) 
                    ? json_decode($contact->contact_details, true) 
                    : $contact->contact_details;
     return view('service', compact('servicePage', 'servicePages','contactDetails'));
  }

  public function showService(ServicePage $servicePage){
     $servicePages = ServicePage::where('is_active', true)
                                ->where('service_type', $servicePage->service_type)
                                ->get();

         $contact = ContactDetail::first();

   $contactDetails = is_string($contact->contact_details)
                   ? json_decode($contact->contact_details, true)
                   : $contact->contact_details;
     
     $activeServiceType = $servicePage->service_type;               
     return view('service', compact('servicePage', 'servicePages','contactDetails','activeServiceType'));
  }

public function searchServices(Request $request)
{
    $query = $request->get('q');

    if (!$query) {
        return redirect()->route('service')->with('error', 'Please enter a search term.');
    }

    // 🔍 Multiple field search
    $servicePage = ServicePage::where('is_active', true)
        ->where(function ($q) use ($query) {
            $q->where('service_banner_title', 'LIKE', '%' . $query . '%')
              ->orWhere('service_title', 'LIKE', '%' . $query . '%')
              ->orWhere('service_description', 'LIKE', '%' . $query . '%')
              ->orWhere('service_banner_details', 'LIKE', '%' . $query . '%')
              ->orWhere('acquire_heading', 'LIKE', '%' . $query . '%');
        })
        ->first();

    if ($servicePage) {
        return redirect()->route('service.show', $servicePage->slug)
            ->with('success', 'Found service: ' . $servicePage->service_banner_title);
    }

    return redirect()->route('service')
        ->with('error', 'No service found matching: "' . $query . '"');
}

public function teams()
{
    $teams = Team::all();
   // dd($teams);
    return view('teams',compact('teams'));
}



public function contact()
{
    $contact = ContactDetail::first();

    $contactDetails = is_string($contact->contact_details) 
                    ? json_decode($contact->contact_details, true) 
                    : $contact->contact_details;

                

      $contactCta = is_string($contact->contact_cta) 
                    ? json_decode($contact->contact_cta, true) 
                    : $contact->contact_cta;
    return view('contact', compact('contact','contactCta','contactDetails'));
}




   public function store(Request $request)
{
   \Log::info('Contact form submission received', [
       'ajax' => $request->ajax(),
       'method' => $request->method(),
       'all_data' => $request->all()
   ]);

   try {
       $request->validate([
           'name'    => 'required|string|max:255',
           'email'   => 'required|email|max:255',
           'phone'   => 'nullable|string|max:20',
           'subject' => 'nullable|string|max:255',
           'message' => 'required|string',
       ]);

       \Log::info('Contact form validation passed');

       // Save to DB
       $contactMessage = ContactMessage::create($request->all());

       // Send email notifications
       try {
           // Send email to admin
           Mail::to('backenddeveloper310@gmail.com')->send(new ContactFormMail($request->all()));
           \Log::info('Contact form email sent successfully to admin: backenddeveloper310@gmail.com');

           // Send confirmation email to user
           Mail::to($request->email)->send(new ContactFormMail($request->all(), 'user'));
           \Log::info('Contact form email sent successfully to user: ' . $request->email);

       } catch (\Exception $e) {
           // Log the error but don't stop the process
           \Log::error('Contact form email failed: ' . $e->getMessage());
           \Log::error('Failed to send email to: ' . $request->email . ' or admin');
       }

       // Return JSON response for AJAX requests
       if ($request->ajax()) {
           \Log::info('Returning AJAX success response');
           return response()->json([
               'result' => 'success',
               'msg' => 'Thank you for contacting us. We will get back to you soon!'
           ]);
       }

       return back()->with('success', 'Thank you for contacting us. We will get back to you soon!');

   } catch (\Illuminate\Validation\ValidationException $e) {
       // Handle validation errors
       \Log::info('Contact form validation failed', ['errors' => $e->errors()]);

       if ($request->ajax()) {
           $errorMessages = [];
           foreach ($e->errors() as $field => $messages) {
               $errorMessages[] = ucfirst($field) . ': ' . implode(', ', $messages);
           }

           \Log::info('Returning AJAX validation error response');
           return response()->json([
               'result' => 'error',
               'msg' => implode(' | ', $errorMessages)
           ]);
       }

       return back()->withErrors($e->errors())->withInput();

   } catch (\Exception $e) {
       // Handle other errors
       if ($request->ajax()) {
           return response()->json([
               'result' => 'error',
               'msg' => 'An error occurred. Please try again.'
           ]);
       }

       return back()->with('error', 'An error occurred. Please try again.');
   }
}

public function subscribeNewsletter(Request $request)
{
    try {
        $request->validate([
            'EMAIL' => 'required|email',
        ]);

        NewsletterSubscriber::create([
            'email' => $request->EMAIL,
            'subscribed_at' => now(),
        ]);

        // Send welcome email to subscriber
        try {
            Mail::to($request->EMAIL)->send(new NewsletterSubscriptionMail($request->EMAIL, 'user'));
            \Log::info('Newsletter welcome email sent successfully to: ' . $request->EMAIL);
        } catch (\Exception $e) {
            \Log::error('Failed to send newsletter welcome email to user: ' . $request->EMAIL . ' - ' . $e->getMessage());
        }

        // Send notification email to admin
        try {
            Mail::to('info@altermedrcm.com')->send(new NewsletterSubscriptionMail($request->EMAIL, 'admin'));
            \Log::info('Newsletter notification email sent successfully to admin: info@altermedrcm.com');
        } catch (\Exception $e) {
            \Log::error('Failed to send newsletter notification email to admin: ' . $e->getMessage());
        }

        // Return JSON response for AJAX requests
        if ($request->ajax()) {
            return response()->json([
                'result' => 'success',
                'msg' => 'Thank you for subscribing to our newsletter! Please check your email for confirmation.'
            ]);
        }

        // Return redirect for regular form submission
        return back()->with('success', 'Thank you for subscribing to our newsletter! Please check your email for confirmation.');

    } catch (\Illuminate\Validation\ValidationException $e) {
        // Handle validation errors
        if ($request->ajax()) {
            return response()->json([
                'result' => 'error',
                'msg' => $e->errors()['EMAIL'][0] ?? 'Please enter a valid email address.'
            ]);
        }

        return back()->withErrors($e->errors())->withInput();
    } catch (\Exception $e) {
        // Handle other errors
        if ($request->ajax()) {
            return response()->json([
                'result' => 'error',
                'msg' => 'An error occurred. Please try again.'
            ]);
        }

        return back()->with('error', 'An error occurred. Please try again.');
    }
}


public function blogs(Request $request)
{
    $query = Blog::latest();

    // If category filter is applied
    if ($request->has('category') && !empty($request->category)) {
        $query->where('category_id', $request->category);
    }

    $blogs = $query->paginate(10);

    // Send categories also, for dropdown/filter UI
    $categories = BlogCategory::all();

    return view('blogs', compact('blogs', 'categories'));
}

public function blog_detail($slug)
{
     $blogs = Blog::where('slug',$slug)->first();
       $latestPosts = Blog::where('id', '!=', $blogs->id)
                        ->latest()
                        ->take(5)
                        ->get();
     $categories = BlogCategory::get();
    return view('blog_detail',compact('blogs','categories','latestPosts'));
}



public function privacy_policy()
{
    $privacyPolicy = PrivacyPolicy::first();
    return view('privacy_policy',compact('privacyPolicy'));
}


public function terms()
{
    $termsOfUse = TermsOfUse::first();
    return view('terms',compact('termsOfUse'));
}

public function security()
{
    $securityPolicy = SecurityPolicy::first();
    return view('security',compact('securityPolicy'));
}



public function otherservice()
{
    $licensingIntro = LicensingIntro::first();
    $licensingWhyChoose = LicensingWhyChoose::with('items')->first();
    $licensingService = LicensingService::with('categories.items')->first();

    return view('other_service', compact('licensingIntro', 'licensingWhyChoose', 'licensingService'));
}

public function storeLicensingQuote(Request $request)
{
    $request->validate([
        'Name' => 'required|string|max:255',
        'Mobile_Number' => 'required|string|max:20',
        'Email_ID' => 'required|email|max:255',
        'Requirement' => 'required|string',
    ]);

    $licensingQuote = LicensingQuote::create([
        'name' => $request->Name,
        'mobile' => $request->Mobile_Number,
        'email' => $request->Email_ID,
        'requirement' => $request->Requirement,
    ]);

    // Send email notifications
    try {
        // Send email to user with CC to admin
        Mail::to($request->Email_ID)->cc('info@altermedrcm.com')->send(new LicensingQuoteMail($licensingQuote->toArray(), 'user'));
        \Log::info('Licensing quote email sent successfully to user: ' . $request->Email_ID . ' with CC to admin: info@altermedrcm.com');

    } catch (\Exception $e) {
        // Log the error but don't stop the process
        \Log::error('Licensing quote email failed: ' . $e->getMessage());
    }

    return back()->with('success', 'Quote submitted successfully!');
}

public function schedule()
{
    $scheduleContent = SchedulePageContent::first();
    return view('schedule', compact('scheduleContent'));
}

public function storeScheduleDemo(Request $request)
{
    $request->validate([
        'Name' => 'required|string|max:255',
        'Mobile_Number' => 'required|string|max:20',
        'Email_ID' => 'required|email|max:255',
        'Company_Name' => 'required|string|max:255',
        'Number_of_Providers' => 'required|string|max:255',
        'Type_of_Practice' => 'required|string|max:255',
        'Requirement' => 'required|string',
    ]);

    $scheduleDemo = ScheduleDemo::create([
        'name' => $request->Name,
        'mobile_number' => $request->Mobile_Number,
        'email' => $request->Email_ID,
        'company_name' => $request->Company_Name,
        'number_of_providers' => $request->Number_of_Providers,
        'type_of_practice' => $request->Type_of_Practice,
        'requirement' => $request->Requirement,
    ]);

    // Send email notifications
    try {
        // Send email to admin
        Mail::to('backenddeveloper111@gmail.com')->send(new ScheduleDemoMail($scheduleDemo->toArray(), 'admin'));
        \Log::info('Schedule demo email sent successfully to admin: backenddeveloper111@gmail.com');

        // Send confirmation email to user
        Mail::to($request->Email_ID)->send(new ScheduleDemoMail($scheduleDemo->toArray(), 'user'));
        \Log::info('Schedule demo email sent successfully to user: ' . $request->Email_ID);

    } catch (\Exception $e) {
        // Log the error but don't stop the process
        \Log::error('Schedule demo email failed: ' . $e->getMessage());
    }

    return back()->with('success', 'Demo request submitted successfully! We will contact you soon.');
}





}
