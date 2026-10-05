<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Models\Service;
use App\Models\ServicePage;
use App\Models\Blog;
use App\Models\NewsletterSubscriber;

class DashboardController extends Controller
{
    public function index()
    {
        $totalServices = ServicePage::count();
        $totalBlogs = Blog::count();
        $totalNewsletters = NewsletterSubscriber::count();
        $totalContacts = ContactMessage::count();

        return view('admin.dashboard', compact('totalServices', 'totalBlogs', 'totalNewsletters', 'totalContacts'));
    }


     public function contact()
   {
    $contacts = ContactMessage::orderBy('id', 'Asc')->paginate(10);
     //  dd('vsbdnzvfbszd');
       return view('admin.pages.contact',compact('contacts'));
   }

     public function destroy($id)
    {
        $contact = ContactMessage::findOrFail($id);
        $contact->delete();

        return redirect()->back()->with('success', 'Contact deleted successfully!');
    }



}
