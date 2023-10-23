<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeSlider;
use App\Helpers\FileUploadHelper;

class HomeSliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
       
        $sliders = HomeSlider::all();
        return view('cms.sliders.index', compact('sliders'));
    }

    public function create()
    {
        return view('cms.sliders.create');
    }

    public function store(Request $request)
    {
        $image_slider = FileUploadHelper::uploadFile($request, 'image_slider', 'assets/slider/');
      
        HomeSlider::create([
            'title_main' => $request->title_main,
            'text_main' => $request->text_main,
            'text_btn' => $request->text_btn,
            'scrollTo' => $request->scrollTo,
            'alt_image' => $request->alt_image,
            'image_slider' => $image_slider,
           
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('sliderCms');
    }

    public function edit($id)
    {
        $slider = HomeSlider::find($id);
        return view('cms.sliders.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $slider = HomeSlider::find($id);

        $image_slider = FileUploadHelper::uploadFile($request, 'image_slider', 'assets/slider/');
        if($image_slider!=null)
            $slider->update(['image_slider' => $image_slider]);

        $slider->update([
            'title_main' => $request->title_main,
            'text_main' => $request->text_main,
            'text_btn' => $request->text_btn,
            'scrollTo' => $request->scrollTo,
            'alt_image' => $request->alt_image,
        ]);

        toastr()->success('Data has been saved successfully!');
       return redirect()->route('sliderCms');
    }

    public function delete($id)
    {
        HomeSlider::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
       return redirect()->route('sliderCms');
    }
}
