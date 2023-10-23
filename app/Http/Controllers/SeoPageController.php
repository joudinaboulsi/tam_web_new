<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\FileUploadHelper;
use App\SeoPage;
class SeoPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $page = SeoPage::findOrFail(1);
        return view('cms.seopage', compact('page'));
    }

 

    public function update(Request $request)
    {
        $page = SeoPage::findOrFail(1);

        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/seo/');
        if($image!=null)
            $page->update(['image' => $image]);

        $page->update([
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
        ]);

        toastr()->success('Data has been saved successfully!');

        return redirect()->route('seoCms');
    }
}
