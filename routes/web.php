<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
Route::view('aa7', 'pages/aa7', ['title' => 'American Archtop Collector Custom 7 String Guitar - FOR SALE', 'blurb' => 'I\'m selling my 7 string guitar. Since going full time ukulele it is not getting time it deserves.'])->name('aa7');

// A
Route::view('about', 'pages/about', ['title' => 'About Curt Sheller', 'blurb' => 'Curt is professional musician, graphic artist, author, private ukulele and guitar teacher etc... As a musician Curt has over 40 years experience and over 20 years as a private teacher.'])->name('about');

// B
Route::view('bios', 'pages/bios', ['title' => 'Bios - Curt Sheller | The Curt Sheller Trio', 'blurb' => 'Musician, Graphic Artist, Author, Private Ukulele and Guitar Teacher, etc...'])->name('bios');
Route::view('booking', 'pages/booking', ['title' => 'Booking Info', 'blurb' => 'Contact Kelly, Bern or Curt directly for booking a concert, workshop or an event for your club.'])->name('booking');
Route::view('books', 'pages/books', ['title' => 'Books By Curt Sheller', 'blurb' => 'A listings of ALL the books written by Curt.'])->name('books');

// C
Route::view('calendar', 'pages/calendar', ['title' => 'Calendar - Performances and Workshops', 'blurb' => 'Current and previous performance, workshop, vendor, and appearance dates.'])->name('calendar');
Route::view('cds', 'pages/cds', ['title' => 'Curt\'s CDs', 'blurb' => 'How About More Uke? (2015) and Midnight at the Jazz Cafe (2002)'])->name('cds');
Route::view('comments', 'pages/comments', ['title' => 'Comments', 'blurb' => 'Here are just a few of the comments that have come my way.'])->name('comments');

// E
Route::view('elements', 'pages/elements', ['title' => 'The Elements Of A Successful Music Program', 'blurb' => 'Here are a few of the elements of a successful music program that would be typically covered in a well rounded musical education. These apply to whether you\'re taking private lessons or embarking on a self-study program.'])->name('elements');
Route::view('epk', 'pages/epk', ['title' => 'Electronic Press Kit', 'blurb' => 'All the low-down you every wanted on Curt and the Trio.'])->name('epk');

// F
Route::view('free', 'pages/free', ['title' => 'FREE On-line Lessons', 'blurb' => 'Free lessons, charts for ukulele, music and guitar.'])->name('free');

// G
Route::view('gear', 'pages/gear', ['title' => 'Curt\'s Gear', 'blurb' => 'Here is all the gear and music products that I use on a dad-to-day basis for practice, teaching and performance.'])->name('gear');

// I
Route::view('interviews', 'pages/interviews', ['title' => 'Interviews &bull; Reviews', 'blurb' => ''])->name('interviews');

// L
Route::view('lessons', 'pages/lessons', ['title' => '3 Ways to Study with Curt', 'blurb' => 'In-Person, On-line, LearningUkulele.com Membership, Skype, Apple Facetime, Email Correspondence. There are a lot of ways to study with Curt.'])->name('lessons');

// M
Route::view('main', 'pages/main', ['title' => 'Curt Sheller • Curt Sheller Trio • Curt Sheller Publications', 'blurb' => 'Musician, Graphic Artist, Author, Private Ukulele and Guitar Teacher, etc...'])->name('main');
Route::view('marvian', 'pages/marvian', ['title' => 'J Marvian Paintings For Sale', 'blurb' => 'J Marvian was a local Chester County, Pennsylvania artist. Paintings range from 1976 to 1982 dates. All oil paintings.'])->name('marvian');
Route::view('music', 'pages/music', ['title' => 'The Music of Curt Sheller', 'blurb' => ''])->name('music');

// N
Route::view('news', 'pages/news', ['title' => 'News and Announcements', 'blurb' => 'All The Latest NewsWith so many media outlets available today. I\'m trending to use facebook, twitter, etc.. for posting news.'])->name('news');

// M
// Modular Phonetic Rhythm
    Route::view('mpr', 'mpr/about', ['title' => 'Modular Phonetic Rhythm', 'blurb' => 'Modular Phonetic Rhythm represents a fresh and innovative approach that helps bring the abstract into focus, examining the core of the real, linguistically aligned processes actually involved in reading, understanding, interpreting, and executing rhythm'])->name('mpr');
// P
Route::view('philosophy', 'pages/philosophy', ['title' => 'Curt\'s Personal Teaching Philosophy', 'blurb' => 'After many, many years of serious study with world renowned musician, education, and jazz guitarist Chuck Anderson I\'ve adopted his teaching philosophy and methods.'])->name('philosophy');
Route::view('posters', 'pages/posters', ['title' => 'Performance Posters', 'blurb' => 'Solo and Trio performance posters for promotion. Both US and International paper sizes.'])->name('posters');
Route::view('press', 'pages/press', ['title' => 'In the Press &bull; Interviews, Articles, Reviews', 'blurb' => 'Here are some links to CD reviews and interviews.'])->name('press');

// R
Route::view('reviews', 'pages/reviews', ['title' => 'CD Reviews', 'blurb' => ''])->name('reviews');

//  r a c e w a l k i n g

Route::view('racewalking', 'pages/racewalking/main', ['title' => 'Racewalking', 'blurb' => config('csp.racewalking.blurb')])->name('racewalking');
    Route::view('racewalking/main', 'pages/racewalking/main', ['title' => 'Racewalking', 'blurb' => config('csp.racewalking.blurb')])->name('racewalking.main');
    Route::view('racewalking/articles', 'pages/racewalking/articles', ['title' => 'Racewalking Articles', 'blurb' => config('csp.racewalking.articles')])->name('racewalking.articles');
    Route::view('racewalking/equipment', 'pages/racewalking/equipment', ['title' => 'Racewalking Equipment', 'blurb' => config('csp.racewalking.equipment')])->name('racewalking.equipment');
    Route::view('racewalking/photos', 'pages/racewalking/photos', ['title' => 'Racewalking Photos', 'blurb' => config('csp.racewalking.photos')])->name('racewalking.photos');
    Route::view('racewalking/prs', 'pages/racewalking/prs', ['title' => 'Racewalking Equipment', 'blurb' => config('csp.racewalking.pr')])->name('racewalking.prs');
    Route::view('racewalking/results', 'pages/racewalking/results', ['title' => 'Racewalking Equipment', 'blurb' => config('csp.racewalking.pr')])->name('racewalking.results');
    Route::view('racewalking/graphics', 'pages/racewalking/graphics', ['title' => 'Racewalking Graphics', 'blurb' => config('csp.racewalking.graphics')])->name('racewalking.graphics');
    Route::view('racewalking/training', 'pages/racewalking/training', ['title' => 'Racewalking Training', 'blurb' => config('csp.racewalking.training')])->name('racewalking.training');
    Route::view('racewalking/walkers', 'pages/racewalking/walkers', ['title' => 'Racewalking: Walkers', 'blurb' => config('csp.racewalking.walkers')])->name('racewalking.walkers');

    Route::view('racewalking/olympics', 'pages/racewalking/olympics', ['title' => 'Racewalking: Olympics', 'blurb' => config('csp.racewalking.olympics')])->name('racewalking.olympics');
    Route::view('racewalking/world_cup', 'pages/racewalking/world_cup', ['title' => 'Racewalking: Olympics', 'blurb' => config('csp.racewalking.world_cup')])->name('racewalking.world_cup');
    Route::view('racewalking/world_championships', 'pages/racewalking/world_championships', ['title' => 'Racewalking In The World Championships', 'blurb' => config('csp.racewalking.world_championships')])->name('racewalking.world_championships');
    Route::view('racewalking/challenge', 'pages/racewalking/challenge', ['title' => 'Racewalking: Olympics', 'blurb' => config('csp.racewalking.challenge')])->name('racewalking.challenge');
    Route::view('racewalking/indoor', 'pages/racewalking/indoor', ['title' => 'Racewalking: Olympics', 'blurb' => config('csp.racewalking.indoor')])->name('racewalking.indoor');

// Route::get('racewalking/{page}', 'App\Http\Controllers\PagesController@racewalking')
//     ->where('page', 'main/articles|equipment|graphics|photos|prs|results|training|walkers|olympics|world_cup|world_cup|team_championships|challenge|indoor|training')->name('racewalking');

// S
Route::view('secret', 'pages/secret', ['title' => 'Secret Location of ALL Tracks', 'blurb' => ''])->name('secret');
Route::view('study', 'pages/study')->name('study');
Route::view('skype', 'pages/skype', ['title' => 'Skype and FaceTime Lessons with Curt', 'blurb' => ''])->name('skype');

// W
Route::view('workshops', 'pages/workshops/main')->name('workshops');

//  Musicians
Route::view('solo', 'pages/solo')->name('solo');
Route::view('trio', 'pages/trio', ['title' => 'The Curt Sheller Trio', 'blurb' => "The trio is Curt Sheller - `Ukulele, Eric Schreiber - Bass, Ed Rick - Drums. Inspired by their affection for jazz improvisation, the Curt Sheller Jazz Trio rework timeless classics on How About More Uke?, replacing the standard guitar backing with a ukulele, played with skill and creativity by Sheller himself. Alongside drummer Ed Rick on drums and Eric Schreiber on electric bass, Sheller reveals that the ukulele can be utilized as a serious and vibrant instrument."])->name('trio');
// Route::get('musicians/{musician}', ['as' => 'musicians', 'uses' => 'PagesController@musicians'])->where('musician', "|eric|ed|");

Route::view('musicians/curt', 'pages/musicians/curt')->name('musicians.curt');
Route::view('musicians/ed', 'pages/musicians/ed')->name('musicians.ed');
Route::view('musicians/eric', 'pages/musicians/eric')->name('musicians.eric');


//  - - - - - - - - - - - - - - - - - - - - - - - - - -
//  Test
Route::view('colors', 'pages/colors', ['title' => 'Curt Sheller Publications', 'blurb' => 'Layout Testing Page: Colors'])->name('colors');
Route::view('test', 'pages/test', ['title' => 'Curt Sheller Publications', 'blurb' => 'Layout Testing Page: Minimum Content'])->name('test');

//  - - - - - - - - - - - - - - - - - - - - - - - - - -
//  Contact
Route::get('contact', ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::group(['prefix' => 'contact' ], function() {
    Route::post('store', ['as' => 'contact.store', 'uses' => 'ContactController@store']);
});

Route::get('/ukulele', function () {
    return redirect()->away('https://www.learningukulele.com');
});

Route::get('/', function () {
    return view('welcome');
});
