@extends('layouts.admin')

@section('page_name') Edit Product @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('projectUpdate', $project->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

              
                <div class="row">
                    <div class="pb-4 col-md-6">
                        @if ($project->image)
                            <img src="{{ asset('assets/project/' . $project->image) }}" height="100" class="d-block">
                        @endif
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="alt_image" class="form-label" style="margin-top:103px">Alt Image</label>
                        <input type="text" class="form-control" id="alt_image" name="alt_image" value="{{ $project->alt_image }}" />
                    </div>
                </div>

                <div class="pb-4">
                    @if ($project->video)
                    <video width="320" height="240" controls>
                        <source src="../assets/project/{{ $project->video}}" type="video/mp4"></video>
                  @endif
                    <label for="video" class="form-label">Video</label>
                    <input type="file" class="form-control" id="video" name="video" />
                </div>
            
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>

@endsection
