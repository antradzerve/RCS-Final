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

    $allPosts = App\Blogger::all();
    $sortedPosts = $allPosts->sortByDesc('created_at');
    $three_latest = $sortedPosts->take(3);

    return view('KOT_cafe.pages.index', [
        'activeMenu' => '/',
        'posts' => $three_latest,
    ]);
});


// Route::get('/about', function () {     

//     // $isSuccessfull = Request::get('success', '');

//     return view('KOT_cafe.pages.about', [
//         'activeMenu' => 'about',
//         // 'formSuccess' => $isSuccessfull,
//     ]);
// });


Route::get('/about', 'ContactController@show');

Route::post('/about',  'ContactController@mailToAdmin');


// Route::any('/submitform', function () {
        
//     $name= Request::post('yourname', null);
//     $email= Request::post('email', '');
//     $msg= Request::post('message',  null);
//     // return view('pages.contact');

//     if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         return redirect('/about?success=form-successfull');
//     } else {
//         return redirect('/about?success=form-not-successfull');
//     };

// });


Route::get('/dancers', function () {

    return view('KOT_cafe.pages.dancers', [
        'activeMenu' => 'dancers',
    ]);
});

Route::get('/instructors', function () {

    return view('KOT_cafe.pages.instructors', [
        'activeMenu' => 'instructors',
    ]);
});


Route::get('/blog', function () {

    $allPosts = App\Blogger::all();
    $sortedPosts = $allPosts->sortByDesc('created_at');
    $last_saved = $sortedPosts->first();

    $sortedPostsLast = $sortedPosts->slice(1);

    return view('KOT_cafe.pages.blog', [
        'activeMenu' => 'blog',
        'posts'=> $sortedPostsLast,
        'lastSaved'=> $last_saved,
    ]);
});

Route::get('/blog/{id}', function ($id) {

    $allPosts = App\Blogger::all();
    $singlePosts = App\Blogger::find($id);
    $editedList = $allPosts->forget($id-1);

    $sortedPosts = $editedList->sortByDesc('created_at');

    $three_latest = $sortedPosts->take(3);

    return view('KOT_cafe.pages.post', [
        'posts'=> $singlePosts,
        'activeMenu' => 'blog',
        'threeLatest'=> $three_latest,
    ]);
});