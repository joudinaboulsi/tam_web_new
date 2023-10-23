@extends('layouts.admin')
@section('page_name') About Page @endsection
@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">About Section</h5>
                    <div class="card-body">
                        <form action="{{ route('aboutStore') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="pt-3 pb-3 col-6">
                                    <label for="image1" class="form-label">Image1</label>
                                    <input type="file" class="form-control" id="image1" name="image1" />

                                </div>
                                <div class="pt-3 pb-3 col-6">
                                    <label for="alt_image1" class="form-label">Alt Image1</label>
                                    <input type="text" class="form-control" id="alt_image1" name="alt_image1"
                                        value="{{ $about->alt_image1 }}" />
                                </div>

                                <div class="pt-3 pb-3">
                                    @if ($about->image1)
                                        <img src="{{ asset('assets/about/' . $about->image1) }}" width="100">
                                    @endif
                                </div>
                            </div>
                            <div class="row">

                                <div class="pt-3 pb-3 col-6">
                                    <label for="image2" class="form-label">Image 2</label>
                                    <input type="file" class="form-control" id="image2" name="image2" />

                                </div>
                                <div class="pt-3 pb-3 col-6">
                                    <label for="alt_image1" class="form-label">Alt Image 2</label>
                                    <input type="text" class="form-control" id="alt_image2" name="alt_image2"
                                        value="{{ $about->alt_image2 }}" />

                                </div>

                                <div class="pt-3 pb-3">
                                    @if ($about->image2)
                                        <img src="{{ asset('assets/about/' . $about->image2) }}" width="100">
                                    @endif

                                </div>
                            </div>

                            <div class="pt-3 pb-3">
                                <label for="subtitle" class="form-label">Subtitle</label>
                                <input type="text" class="form-control" id="subtitle" name="subtitle"
                                    value="{{ $about->subtitle }}" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ $about->title }}" />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="text" class="form-label">Content</label>
                                <textarea class="form-control" id="text" name="text">{!! $about->text !!}</textarea>

                            </div>
                            <div class="row">

                                <div class="pt-3 pb-3 col-6">
                                    <label for="pdf" class="form-label">Pdf</label>
                                    <input type="file" class="form-control" id="pdf" name="pdf" />
                                </div>

                                <div class="pt-3 pb-3">
                                    @if ($about->pdf)
                                        <p><a href="{{ asset('assets/about/' . $about->pdf) }}">Open a PDF file </a>.</p>
                                    @endif
                                </div>
                            </div>
                            <div class="pt-3 pb-3">
                                <label for="btn_text" class="form-label">Text Button</label>
                                <input type="text" class="form-control" id="btn_text" name="btn_text"
                                    value="{{ $about->btn_text }}" />
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
