<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\FileUploadHelper;
use App\About;
class AboutController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $about = About::find(1);
        return view('cms.about', compact('about'));
    }

    public function store(Request $request)
    {
        $about = About::find(1);

        $pdf = FileUploadHelper::uploadFile($request, 'pdf', 'assets/about/');
        if($pdf!=null)
            $about->update(['pdf' => $pdf]);

        $image1 = FileUploadHelper::uploadFile($request, 'image1', 'assets/about/');
        if($image1!=null)
            $about->update(['image1' => $image1]);

        $image2 = FileUploadHelper::uploadFile($request, 'image2', 'assets/about/');
        if($image2!=null)
            $about->update(['image2' => $image2]);

        $about->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'text' => $request->text,
            'btn_text' => $request->btn_text,
            'alt_image1' => $request->alt_image1,
            'alt_image2' => $request->alt_image2,
        ]);


        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('aboutCms');
    }
}
