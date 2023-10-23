<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Helpers\FileUploadHelper;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $service = Service::find(1);
        return view('cms.service', compact('service'));
    }

    public function store(Request $request)
    {
        $service = Service::find(1);

        $image1 = FileUploadHelper::uploadFile($request, 'image1', 'assets/service/');
        if($image1!=null)
            $service->update(['image1' => $image1]);

        $image2 = FileUploadHelper::uploadFile($request, 'image2', 'assets/service/');
        if($image2!=null)
            $service->update(['image2' => $image2]);

        $image3 = FileUploadHelper::uploadFile($request, 'image3', 'assets/service/');
        if($image3!=null)
            $service->update(['image3' => $image3]);

        $image4 = FileUploadHelper::uploadFile($request, 'image4', 'assets/service/');
        if($image4!=null)
            $service->update(['image4' => $image4]);
  
        $icon1 = FileUploadHelper::uploadFile($request, 'icon1', 'assets/service/');
        if($icon1!=null)
            $service->update(['icon1' => $icon1]);

        $icon2 = FileUploadHelper::uploadFile($request, 'icon2', 'assets/service/');
        if($icon2!=null)
            $service->update(['icon2' => $icon2]);

        $icon3 = FileUploadHelper::uploadFile($request, 'icon3', 'assets/service/');
        if($icon3!=null)
            $service->update(['icon3' => $icon3]);

        $icon4 = FileUploadHelper::uploadFile($request, 'icon4', 'assets/service/');
        if($icon4!=null)
            $service->update(['icon4' => $icon4]);

        $service->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'text' => $request->text,
            'p1' => $request->p1,
            'p2' => $request->p2,
            'p3' => $request->p3,
            'p4' => $request->p4,
            'alt_image1' => $request->alt_image1,
            'alt_image2' => $request->alt_image2,
            'alt_image3' => $request->alt_image3,
            'alt_image4' => $request->alt_image4,
            'alt_icon1' => $request->alt_icon1,
            'alt_icon2' => $request->alt_icon2,
            'alt_icon3' => $request->alt_icon3,
            'alt_icon4' => $request->alt_icon4,
          
        ]);

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('serviceCms');
    }
}
