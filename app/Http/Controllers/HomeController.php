<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        session()->put('test', 'First Laravel session');
        return view('home');
    }

    public function sendEmail(Request $request)
    {
        // Validate form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Collect form data
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ];

        // Send email
        Mail::send([], [], function ($message) use ($data) {
            $message->to('test5@example.com') // Replace with the recipient's email address
                    ->subject($data['subject'])
                    ->from($data['email'], $data['name'])
                    ->text("Name: {$data['name']}\nEmail: {$data['email']}\n\nMessage:\n{$data['message']}");

        return back()->with('success', 'Your message has been sent successfully!');
    });
}
}
