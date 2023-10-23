<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vision;
use App\Helpers\FileUploadHelper;

class VisionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $vision = Vision::find(1);
        return view('cms.vision', compact('vision'));
    }


    public function store(Request $request)
    {
        $vision = Vision::find(1);
        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/about/');
        if($image!=null)
            $vision->update(['image' => $image]);

        $vision->update([
            'subtitle' => $request->subtitle,
            'title' => $request->title,
            'text' => $request->text,
            'alt_image' => $request->alt_image,
            'counter1' => $request->counter1,
            'p1' => $request->p1,
            'counter2' => $request->counter2,
            'p2' => $request->p2,
            'counter3' => $request->counter3,
            'p3' => $request->p3,
            'counter4' => $request->counter4,
            'p4' => $request->p4,
            'counter5' => $request->counter5,
            'p5' => $request->p5,
        ]);
        
       
        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('visionCms');
    }
}
