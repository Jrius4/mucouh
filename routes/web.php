<?php

use App\Blog;
use App\Member;
use App\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;



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
    $active = 'index';
    $doctors = Staff::where('group','doctor')->paginate(4);
    return view('mucouh.index',compact('active','doctors'));
})->name('index');

Route::get('/about', function () {
    $active = 'about';
    return view('mucouh.about',compact('active'));
})->name('about');

Route::get('/services', function () {
    $active = 'services';
    return view('mucouh.services',compact('active'));
})->name('services');

Route::prefix('/services')->group(function () {
    Route::get('/', function () {
        $active = 'services';
    return view('mucouh.services',compact('active'));
    })->name('services');

    Route::get('/admission', function () {
        $active = 'services';
    return view('mucouh.services.admissions',compact('active'));
    })->name('services.admission');

});

Route::get('/our-team', function () {
    $members = Member::all();
    $active = 'our-team';
    return view('mucouh.our-team',compact('active','members'));
})->name('our-team');

Route::get('/our-team/{name}', function ($name) {

    $active = 'our-team';
    $member = Member::where('name',$name)->first();

    if($member == null){
        return redirect()->back()->with(['message'=>'Member Not Found']);
    }

    return view('mucouh.member',compact('active','member'));
})->name('member');

Route::get('/contacts', function () {
    $active = 'contacts';
    return view('mucouh.contacts',compact('active'));
})->name('contacts');

Route::get('/events', function (Request $request) {
    $active = 'events';
    $keywords = $request->keywords;
    if($keywords == null){
        $events = Blog::where('published',1)->paginate(6);
    }
    else{
        $events = Blog::where('title','like',"%".$keywords."%")->orWhere('body','like',"%".$keywords."%")->paginate(6);
    }


    return view('mucouh.blogs.index',compact('active','events'));
})->name('events');
Route::get('/event/{uuid}', function ($uuid) {
    $active = 'events';
    $event = Blog::where('uuid',$uuid)->first();

    if($event == null){
        return redirect()->back()->with(['message'=>'Event Not Found']);
    }
    else{
        $event->view_count +=1;
        $event->save();
    }
    return view('mucouh.blogs.single',compact('active','event'));
})->name('event');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
