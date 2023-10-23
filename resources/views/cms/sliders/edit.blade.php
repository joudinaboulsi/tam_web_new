@extends('layouts.admin')
@section('page_name') Edit Slider @endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Edit</h5>
                <div class="card-body">
                  <form action="{{ route('sliderUpdate',$slider->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf


                    <div class="pt-4">
                        <label for="title_main" class="form-label pb-3">Title</label>
                        <input type="text" class="form-control" id="title_main" name="title_main"  value="{{ $slider->title_main }}"  />
                    
                    </div>
                    <div class="pt-4">
                        <label for="text_main" class="form-label pb-3">subTitle</label>
                        <input type="text" class="form-control" id="text_main" name="text_main"  value="{{ $slider->text_main }}"  />
                    
                    </div>

                    <div class="pt-4">
                        <label for="text_btn" class="form-label pb-3">Link Text</label>
                        <input type="text" class="form-control" id="text_btn" name="text_btn"  value="{{ $slider->text_btn }}"  />
                    
                    </div>

                    <div class="pt-4">
                        <label for="scrollTo" class="form-label pb-3">scroll To</label>
                        <input type="text" class="form-control" id="scrollTo" name="scrollTo"  value="{{ $slider->scrollTo }}"  />
                    
                    </div>
                    <div class="pt-4">
                        @if($slider->image_slider)
                        <img src="{{ asset('assets/slider/'.$slider->image_slider) }}" width="100">
                        @endif
                    </div>
                    <div class="pt-4">
                        <label for="image_slider" class="form-label pb-3">Image</label>
                        <input type="file" class="form-control" id="image_slider" name="image_slider"  />
                    
                    </div>
                    <div class="pt-4">
                        <label for="alt_image" class="form-label pb-3">Alt Image </label>
                        <input type="text" class="form-control" id="alt_image" name="alt_image"  value="{{ $slider->alt_image }}"  />
                    
                    </div>
              
                   


                <div class="demo-inline-spacing">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection



