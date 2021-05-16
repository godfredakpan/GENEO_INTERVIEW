<?php

namespace App\Http\Controllers;

use Mail;
use Auth;
use App\Rules\Throttle;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Repositories\ContactRepository;

class ContactController extends Controller
{
    protected $contact;

    public function __construct(ContactRepository $contact)
    {
        $this->contact = $contact;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'email' => [
                'required',
                'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
                'email',
                new Throttle('email', $maxAttempts = 10, $minutes = 5)]
            ,
            'document'  => 'mimes:pdf,xlsx,csv',
            'message'   => 'required',
            'name'      => 'required',
        ]);

        $content = $this->contact->store($request);


        if ($content) {

            Mail::to('godfredakpan@gmail.com')->send(new ContactMail($content));

            session()->flash('success',"Your information have been successfully sent !");

            return redirect()->route('create.contact')->with('alert', 'Investor created successfully !');

        } else {

            return redirect()->route('create.contact')->with('error', 'An Error occurred please try again');

        }
    }
}

?>
