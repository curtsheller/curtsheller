<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller {

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('pages/contact')
            ->with('title', 'Contact Curt')
            ->with('blurb', 'Fire away and let me know what is on you mind. I\'ll get back ASAP.');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ContactFormRequest $request) {
		
		$name =  $request->get('name');
        
        //dd('MAIL_FROM: ' . env('MAIL_FROM'), 'MAIL_TO: ' . env('MAIL_TO'), 'MAIL_NAME: ' . env('MAIL_NAME'));

        \Mail::send('emails.html.contact',
            [
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
            ], function($message) use ($name)
        {
        	$message->from(env('MAIL_FROM'));
            $message->to(env('MAIL_TO'), env('MAIL_NAME'));
            $message->subject('Funky Frets Inquiry from ' . $name);
        });

      return view('pages.thanks.contact')
		        ->with('title', "Thanks for the Message")
		        ->with('blurb', "Thanks for contacting us " .$name. ". We'll get back to you as soon as possible.");
	}
}
