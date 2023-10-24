@extends('layouts.admin')
@section('page_name')  Contact @endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Contact Section</h5>
                    <div class="card-body">
                        <form action="{{ route('contactStore') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="pb-4">
                                <label for="subtitle" class="form-label">Subtitle</label>
                                <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ $contact->subtitle }}" />
                            </div>
                            <div class="pb-4">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $contact->title }}" />
                            </div>
                            <div class="row">
                                <div class="pb-4 col-6">
                                    @if ($contact->image)
                                        <img src="{{ asset('assets/contact/' . $contact->image) }}" height="100" class="d-block">
                                    @endif
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="file" name="image" />
                                </div>
                                <div class="pb-4 col-6">
                                    <label for="alt_image" class="form-label" style="margin-top:100px">Alt Image</label>
                                    <input type="text" class="form-control" id="file" name="alt_image" value="{{ $contact->alt_image }}" />
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
