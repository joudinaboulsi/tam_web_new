@extends('layouts.admin')

@section('page_name') Testimonials Page @endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Add Testimonial</h5>
                    <div class="card-body">
                        <form action="{{ route('testimonialStore') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="pb-4">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" />
                            </div>

                            <div class="pb-4">
                                <label for="info" class="form-label">Info</label>
                                <input type="text" class="form-control" id="info" name="info" />
                            </div>

                            <div class="pb-4">
                                <label for="text" class="form-label">Description</label>
                                <textarea class="form-control" id="text" name="text"></textarea>
                            </div>

                            <div class="pb-4 col-6">
                             
                                <label for="image1" class="form-label">Portfolio</label>
                                <input type="file" class="form-control" id="image1" name="image1" />
                            </div>
                            <div class="pb-4 col-6">
                                <label for="alt_image1" class="form-label" style="margin-top:100px">Alt Portfolio</label>
                                <input type="text" class="form-control" name="alt_image1" />
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
