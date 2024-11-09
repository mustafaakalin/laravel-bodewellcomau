<?php

use App\Models\Page;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});
Route::get('/index.html', function () {
    return view('index');
});

Route::get('/about-bodewell.html', function () {
    // get abouts table infos
    $aboutTitle = About::value('title');
    $our_people = About::value('our_people');
    $standards_of_care = About::value('standards_of_care');
    $small_text = About::value('small_text');
    $our_mission = About::value('our_mission');
    $our_values = About::value('our_values');
    $our_services = About::value('our_services');
    $our_relationship_first_approach = About::value('our_relationship_first_approach');
    $contact_us = About::value('contact_us');


    return view('about-bodewell',[
        'aboutTitle' => $aboutTitle,
        'our_people' => $our_people,
        'standards_of_care' => $standards_of_care,
       'small_text' => $small_text,
       'our_mission' => $our_mission,
       'our_values' => $our_values,
       'our_services' => $our_services,
       'our_relationship_first_approach' => $our_relationship_first_approach,
       'contact_us' => $contact_us,
    ]);
});

Route::get('/contact.html', function () {
    return view('contact');
})->name('contact');
// contact post
Route::post('/contact.html', function (Request $request) {
    // iletişim formu verilerini doğrula
    $request->validate([
        'first_name' => 'required|string',
        'last_name' => 'required|string',
        'contact_number' => 'required|string',
        'location' => 'required|string',
        'service' => 'required|string',
        'what_can_we_help_you_with' => 'required|string',
        'message' => 'required|string',
    ]);

    // iletişim verilerini veritabanına kaydet
    DB::table('contacts')->insert([
        'first_name' => $request->input('first_name'),
        'last_name' => $request->input('last_name'),
        'contact_number' => $request->input('contact_number'),
        'location' => $request->input('location'),
        'service' => $request->input('service'),
        'What_can_we_help_you_with' => $request->input('what_can_we_help_you_with'),
        'message' => $request->input('message'),
    ]);
        // redirect to contact page with success message
    return redirect()->route('contact')->with('success', 'Thank you for your message!');
    
});

Route::get('/careers.html', function () {
    return view('careers');
});


Route::get('/feedback-compliments-complaints.html', function () {
    return view('feedback-compliments-complaints');
});

Route::get('/privacy-policy.html', function () {
    return view('privacy-policy');
});


Route::get('/aged-care.html', function () {
    return view('aged-care');
});


Route::get('/ndis.html', function () {
    return view('ndis');
});



Route::get('/tac.html', function () {
    return view('tac');
});



Route::get('/aged-care/commonwealth-home-support-programme.html', function () {
    return view('/aged-care/commonwealth-home-support-programme');
});

Route::get('/aged-care/home-care-packages.html', function () {
    return view('/aged-care/home-care-packages');
});

Route::get('/aged-care/personalised-worker-matching.html', function () {
    return view('/aged-care/personalised-worker-matching');
});

Route::get('/aged-care/privately-funded-home-care.html', function () {
    return view('/aged-care/privately-funded-home-care');
});

Route::get('/aged-care/talk-to-us-about-aged-care-services.html', function () {
    return view('/aged-care/talk-to-us-about-aged-care-services');
});

Route::get('/aged-care/understanding-eligibility-home-support.html', function () {
    return view('/aged-care/understanding-eligibility-home-support');
});


Route::get('/ndis/personalised-worker-matching.html', function () {
    return view('/ndis/personalised-worker-matching');
});

Route::get('/ndis/service-delivery.html', function () {
    return view('/ndis/service-delivery');
});

Route::get('/ndis/support-coordination.html', function () {
    return view('/ndis/support-coordination');
});

Route::get('/ndis/talk-to-us-about-ndis-services.html', function () {
    return view('/ndis/talk-to-us-about-ndis-services');
});

Route::get('/tac/personalised-worker-matching.html', function () {
    return view('/tac/personalised-worker-matching');
});

Route::get('/tac/talk-to-us-about-tac-services.html', function () {
    return view('/tac/talk-to-us-about-tac-services');
});


// pages > page slug get page
Route::get('/{pageSlug}.bodewellcommunitycare', function ($pageSlug) {
    $page = \App\Models\Page::where('slug', $pageSlug)->first();
    if ($page) {
        return view('page', ['page' => $page]);
    } else {
        abort(404);
    }
})->name('page');


// search post 
Route::post('/search', function (Request $request) {
    // Gelen veriyi sanitize et
    $search = htmlspecialchars($request->input('search'), ENT_QUOTES, 'UTF-8');

    // Arama işlemi
    $results = Page::where('title', 'LIKE', '%' . $search . '%')
                   ->orWhere('content', 'LIKE', '%' . $search . '%')
                   ->paginate(10);

    // Sonuçları view dosyasına gönder
    return view('search', ['results' => $results]);
})->name('search');

Route::get('/search', function (){
    return view('search');
});