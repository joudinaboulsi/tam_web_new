<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\FileUploadHelper;
use App\Testimonial;

class TestimonialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $testimonials = Testimonial::all();
        return view('cms.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('cms.testimonials.create');
    }


    public function store(Request $request)
    {
        $image1 = FileUploadHelper::uploadFile($request, 'image1', 'assets/testimonial/');
    
        Testimonial::create([
            'name' => $request->name,
            'info' => $request->info,
            'text' => $request->text,
            'image1' => $image1,
            'alt_image1' => $request->alt_image1,
        ]);
        
       
        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('testimonialCms');
    }

    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        return view('cms.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::find($id);

        $image1 = FileUploadHelper::uploadFile($request, 'image1', 'assets/testimonial/');
        if($image1!=null)
            $testimonial->update(['image1' => $image1]);

        $testimonial->update([
            'name' => $request->name,
            'info' => $request->info,
            'text' => $request->text,
            'alt_image1' => $request->alt_image1,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('testimonialCms');
    }

    public function delete($id)
    {
        Testimonial::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('testimonialCms');
    }
}
