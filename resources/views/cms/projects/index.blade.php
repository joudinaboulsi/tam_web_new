@extends('layouts.admin')

@section('page_name') Projects Page @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">

    <div class="card">
        <h5 class="card-header">Title Section</h5>
        <div class="card-body">
            <form action="{{ route('projectStoreTitle') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="pb-4">
                    <label for="subtitle_project" class="form-label">SubTitle</label>
                    <input type="text" class="form-control" id="title_project" name="subtitle_project" value="{{ $page->subtitle_project }}" />
                </div>

                <div class="pb-4">
                    <label for="title_project" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title_project" name="title_project" value="{{ $page->title_project }}" />
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

    <div class="divider divider-info">
        <div class="divider-text">Projects List</div>
    </div>

    <div class="card">
        <div class="card-header">
            <a href="{{ route('projectCreate') }}" class="btn btn-primary">Add</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Video</th>
                            <th>Image</th>
                            <th>Alt Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($projects as $project)
                            <tr>
                                <td>
                                    @if ($project->video)
                                    <video width="220" height="240" controls>
                                        <source src="../assets/project/{{ $project->video}}" type="video/mp4"></video>
                                    @endif
                                </td>
                                <td>
                                    @if ($project->image)
                                        <img src="{{ asset('assets/project/'.$project->image) }}" height="100" alt="Image">
                                    @endif
                                </td>
                                <td>{{ $project->alt_image }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('projectEdit', $project->id) }}" class="btn btn-outline-success me-2">Edit</a>
                                        <form action="{{ route('projectDelete', $project->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this data?')">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


   
</div>

@endsection
