<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mission;
use App\Helpers\FileUploadHelper;

class MissionController extends Controller
{
    //

    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $mission = Mission::find(1);
        return view('cms.mission', compact('mission'));
    }


    public function store(Request $request)
    {
        $mission = Mission::find(1);
        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/about/');
        if($image!=null)
            $mission->update(['image' => $image]);

        $mission->update([
            'title_mission' => $request->title_mission,
            'title_vision' => $request->title_vision,
            'btn_text' => $request->btn_text,
            'scrollTo' => $request->scrollTo,
            'text' => $request->text,
            'title1' => $request->title1,
            'p1' => $request->p1,
            'title2' => $request->title2,
            'p2' => $request->p2,
            'title3' => $request->title3,
            'p3' => $request->p3,
            'title4' => $request->title4,
            'p4' => $request->p4,
        ]);
        
       
        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('missionCms');
    }
}
