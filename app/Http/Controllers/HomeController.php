<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $featuredPackages = Package::active()->latest()->take(6)->get();
        return view('home', compact('featuredPackages'));
    }

    public function about(): View
    {
        return view('about');
    }

    public function services(): View
    {
        $packages = Package::active()->latest()->get();
        return view('services', compact('packages'));
    }

    public function packages(): View
    {
        $packages = Package::active()->latest()->paginate(12);
        return view('packages', compact('packages'));
    }

    public function packageShow(Package $package): View
    {
        return view('package-show', compact('package'));
    }

    public function contact(): View
    {
        return view('contact');
    }

    public function contactStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        Contact::create($validated);

        return redirect()->back()->with('success', 'Thank you for your message. We will get back to you soon!');
    }
}
