<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class EcController extends Controller
{
    public function index(){
        return view('index');
    }

    public function contact(){
        return view('contact');
    }

    public function confirm(Request $request){
        $contact = $request->only(['name','email','subject','message']);
        return view('confirm', compact('contact'));
    }

    public function store(Request $request){
        $contact = $request->only(['name','email','subject','message']);
        Contact::create($contact);
        return view('thanks');
    }


}
