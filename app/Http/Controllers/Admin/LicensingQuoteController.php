<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LicensingQuote;
use Illuminate\Http\Request;

class LicensingQuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quotes = LicensingQuote::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.pages.licensing-quotes.index', compact('quotes'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LicensingQuote $licensingQuote)
    {
        $licensingQuote->delete();
        return redirect()->route('admin.licensing-quotes.index')->with('success', 'Quote deleted successfully.');
    }
}
