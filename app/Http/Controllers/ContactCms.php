<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Helpers\FileUploadHelper;


class ContactCms extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $contact = Contact::find(1);
        return view('cms.contact', compact('contact'));
    }


    public function store(Request $request)
    {
        $contact = Contact::find(1);
        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/contact/');
        if($image!=null)
            $contact->update(['image' => $image]);

        $contact->update([
            'subtitle' => $request->subtitle,
            'title' => $request->title,
            'alt_image' => $request->alt_image,
            
        ]);
        
       
        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('contactCms');
    }
    
}
