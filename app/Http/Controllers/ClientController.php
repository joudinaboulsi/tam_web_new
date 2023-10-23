<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\FileUploadHelper;
use App\Client;
use App\HomeTitle;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $page = HomeTitle::find(3);
        $clients = Client::all();
        return view('cms.clients.index', compact('page', 'clients'));
    }

    public function storePage(Request $request)
    {
        HomeTitle::find(3)->update([
            'title_client' => $request->title_client,
        ]);

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('clientCms');
    }

  
    public function create()
    {
        return view('cms.clients.create');
    }

    public function store(Request $request)
    {
        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/client/');
        Client::create([
        
            'image' => $image,
            'alt_image' => $request->alt_image,
            'client' => $request->client,
            'website' => $request->website,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('clientCms');
    }

    public function edit($id)
    {
        $client = Client::find($id);
        return view('cms.clients.edit', compact('client'));
    }

    public function update(Request $request, $id)
    {
        $client = Client::find($id);

        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/client/');
        if($image!=null)
            $client->update(['image' => $image]);

        $client->update([
            'alt_image' => $request->alt_image,
            'client' => $request->client,
            'website' => $request->website,

        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('clientCms');
    }

    public function delete($id)
    {
        Client::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('clientCms');
    }
}
