@extends('layouts.admin')

@section('page_name') Create Project @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('projectStore') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="pb-4 col-md-6">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="alt_image" class="form-label">Alt Image</label>
                        <input type="text" class="form-control" id="alt_image" name="alt_image" />
                    </div>
                </div>
                <div class="pb-4">
                    <label for="video" class="form-label">Video</label>
                    <input type="file" class="form-control" id="video" name="video" />
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>

@endsection
