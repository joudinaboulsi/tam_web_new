@extends('layouts.admin')

@section('page_name') Create Slider @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Create</h5>
                <div class="card-body">
                    <form action="{{ route('sliderStore') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                        <div class="pb-4">
                            <label for="title_main" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title_main" name="title_main" />
                        </div>

                        <div class="pb-4">
                            <label for="text_main" class="form-label">SubTitle</label>
                            <input type="text" class="form-control" id="text_main" name="text_main" />
                        </div>

                        <div class="pb-4">
                            <label for="text_btn" class="form-label">Link Text</label>
                            <input type="text" class="form-control" id="text_btn" name="text_btn" />
                        </div>

                        <div class="pb-4">
                            <label for="scrollTo" class="form-label">ScrollTo</label>
                            <input type="text" class="form-control" id="scrollTo" name="scrollTo" />
                        </div>
                   
                        <div class="pb-4">
                            <label for="image_slider" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image_slider" name="image_slider" />
                        </div>

                        <div class="pb-4">
                            <label for="alt_image" class="form-label">Alt Image </label>
                            <input type="text" class="form-control" id="alt_image" name="alt_image" />
                        </div>
                  
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection




