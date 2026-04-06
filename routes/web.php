<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome', [
    'greeting' => 'Hello, World!',
    'name' => 'John Doe',
    'age' => 30,
    'tasks' => [
        'Learn Laravel',
        'Build a project',
        'Deploy to production',
    ],
]);

Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::view('/services', 'services');
Route::view('/showcases', 'showcases');
Route::view('/blog', 'blog');

Route::get('/formtest', function(){
    $emails = session()->get('$emails', []);

    return view('formtest',[
        'emails' => $emails,
    ]);
});

Route::post('/formtest', function(){
    $emails = session()->get('$emails', []);

    request()->validate([
        'email' => 'required|email',
    ]);

    $email = request('email');

    if (in_array($email, $emails)) {
        return redirect('/formtest')->withErrors(['email' => 'This email is already added.']);
    }

    if (count($emails) >= 5) {
        return redirect('/formtest')->withErrors(['email' => 'Maximum 5 emails allowed.']);
    }

    session()->push('$emails', $email);

    return redirect('/formtest')->with('success', 'Email added successfully!');
});

Route::post('/delete-email', function(){
    $emailToDelete = request('email');
    $emails = session()->get('$emails', []);

    $emails = array_filter($emails, function($email) use ($emailToDelete) {
        return $email !== $emailToDelete;
    });

    session()->put('$emails', array_values($emails)); // reindex

    return redirect('/formtest')->with('success', 'Email deleted successfully!');
});

Route::get('/delete-emails', function(){
    session()->forget('$emails');
    return redirect('/formtest');
});