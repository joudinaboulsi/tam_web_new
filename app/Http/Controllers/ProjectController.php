<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\FileUploadHelper;
use App\Project;
use App\HomeTitle;
class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $page = HomeTitle::find(2);
        $projects = Project::all();
        return view('cms.projects.index', compact('page', 'projects'));
    }

    public function storePage(Request $request)
    {
        HomeTitle::find(2)->update([
            'title_project' => $request->title_project,
            'subtitle_project' => $request->subtitle_project,
        ]);

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('projectCms');
    }

  
    public function create()
    {
        return view('cms.projects.create');
    }

    public function store(Request $request)
    {
        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/project/');
        $video = FileUploadHelper::uploadFile($request, 'video', 'assets/project/');
        Project::create([
            'image' => $image,
            'alt_image' => $request->alt_image,
            'video' => $video,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('projectCms');
    }

    public function edit($id)
    {
        $project = Project::find($id);
        return view('cms.projects.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $project = Project::find($id);

        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/project/');
        $video = FileUploadHelper::uploadFile($request, 'video', 'assets/project/');
        if($image!=null)
            $project->update(['image' => $image]);

        if($video!=null)
        $project->update(['video' => $video]);

        $project->update([
            'alt_image' => $request->alt_image,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('projectCms');
    }

    public function delete($id)
    {
        Project::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('projectCms');
    }
}
