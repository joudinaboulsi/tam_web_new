<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\FileUploadHelper;
use App\Settings;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $settings = Settings::findOrFail(1);
        return view('cms.settings', compact('settings'));
    }

    public function store(Request $request)
    {
        $settings = Settings::find(1);

        $logo = FileUploadHelper::uploadFile($request, 'logo', 'assets/logo/');
        if($logo!=null)
            $settings->update(['logo' => $logo]);


        $settings->update([
            'email1' => $request->email1,
            'email2' => $request->email2,
            'email' => $request->email,
            'phone1' => $request->phone1,
            'phone2' => $request->phone2,
            'tel_href' => $request->tel_href,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'whatsaplink' => $request->whatsaplink,
            'address' => $request->address,
            'map' => $request->map,
            'contact_header' => $request->contact_header,
            'scrollTo' => $request->scrollTo,
            'title_header' => $request->title_header,
            'alt_logo' => $request->alt_logo,
            'tel' => $request->tel,
        ]);

        // toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('settingsCms');
    }
}
