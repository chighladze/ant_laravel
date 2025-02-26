<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    public function home()
    {
        Log::info("🚀 Web Route: App::getLocale(): " . App::getLocale() . " | Session: " . Session::get('locale'));
        return view('home');
    }

    public function contact()
    {
        return view('contact');
    }

    public function sendContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'required|string',
        ]);
    
        Mail::to('admin@example.com')->send(new ContactMail($validated));
    
        return redirect()->route('contact')->with('success', 'Message sent successfully!');
    }

    public function installation()
    {
        return 'Installation page (пока пустая)';
    }

    public function projects()
    {
        return 'Projects page (пока пустая)';
    }

    public function services()
    {
        return 'Services page (пока пустая)';
    }

    public function brands()
    {
        return 'Brands page (пока пустая)';
    }

    public function blog()
    {
        return 'Blog page (пока пустая)';
    }

    public function blog2()
    {
        return 'Blog Style 2 (пока пустая)';
    }

    public function blogSingle()
    {
        return 'Blog Single (пока пустая)';
    }

    public function homepage2()
    {
        return 'Homepage 2 (пока пустая)';
    }

    public function homepage3()
    {
        return 'Homepage 3 (пока пустая)';
    }

    public function homepage4()
    {
        return 'Homepage 4 (пока пустая)';
    }

    public function changeLanguage($locale, Request $request)
    {
        // Check if the locale is allowed
        if (in_array($locale, ['ka', 'en', 'ru'])) {
            Session::put('locale', $locale);
            Session::save();
            App::setLocale($locale);
        }
    
        // Redirect back to the previous page or home if referer is missing
        return redirect($request->headers->get('referer', route('home')));
    }    

    public function testLanguage()
    {
        Log::info('Session locale: ' . session('locale'));
        return 'Current Language: ' . App::getLocale() . ' | Session: ' . session('locale');
    }

    public function testSession()
    {
        Session::put('test', 'Session is working!');
        Session::save();
        return 'Session test: ' . Session::get('test');
    }
}
