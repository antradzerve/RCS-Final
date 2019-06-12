<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});


Route::get('/news', function () {
    return view('pages.news');
});

Route::get('/contacts', function () {
    return view('pages.contacts');
});

// lokāciju mapēs raksta caur punktu

Route::get('/blog', function () {

    $allPosts = App\BlogPost::all();

    $sortedPosts = $allPosts->sortBy('created_at');
    // $singlePosts = App\BlogPost::find(1);
    // dd($allPosts[0]->title, $allPosts[0]->body);

    return view('pages.blog', [
        'posts'=> $sortedPosts,
    ]);
});

Route::get('/blog/{id}', function ($id) {

    $singlePosts = App\BlogPost::find($id);

    return view('pages.singleblog', [
        'post'=> $singlePosts,
    ]);
});

Route::get('/contact', function () {

    $isSuccessfull = Request::get('success', '');

    return view('pages.contact', [
        'formSuccess' => $isSuccessfull,
    ]);
});

Route::any('/submitform', function () {
    $name= Request::get('yourname', null);
    $email= Request::get('email', '');
    $msg= Request::get('textarea', null);
    // return view('pages.contact');

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $message = new App\ieraksts;

        $message->vards = $name;
        $message->epasts = $email;
        $message->komentars = $msg;
    
        $message->save();

        return redirect('/contact?success=form-successfull');
    } else {
        return redirect('/contact?success=form-not-successfull');
    };

    //man nav uztaisīta datu bāze, bet šādi ierakstītu

});

