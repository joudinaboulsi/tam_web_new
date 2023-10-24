@extends('layouts.admin')
@section('page_name') Vision @endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Vision Section</h5>
                    <div class="card-body">
                        <form action="{{ route('visionStore') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="pb-4">
                                <label for="subtitle" class="form-label">Subtitle</label>
                                <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ $vision->subtitle }}" />
                            </div>

                            <div class="pb-4">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $vision->title }}" />
                            </div>

                            <div class="pb-4">
                                <label for="text" class="form-label">Content</label>
                                <textarea class="form-control" id="text" name="text">{!! $vision->text !!}</textarea>
                            </div>

                            <div class="row">
                                <div class="pb-4 col-6">
                                    @if ($vision->image)
                                        <img src="{{ asset('assets/about/' . $vision->image) }}" height="100" class="d-block">
                                    @endif
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="file" name="image" />
                                </div>
                                <div class="pb-4 col-6">
                                    <label for="alt_image" class="form-label" style="margin-top:100px">Alt Image</label>
                                    <input type="text" class="form-control" id="file" name="alt_image" value="{{ $vision->alt_image }}" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="pb-4 col-6">
                                    <label for="counter1" class="form-label">Counter 1</label>
                                    <input type="text" class="form-control" id="counter1" name="counter1" value="{{ $vision->counter1 }}" />
                                </div>
                                <div class="pb-4 col-6">
                                    <label for="p1" class="form-label">Subtitle 1</label>
                                    <input type="text" class="form-control" id="p1" name="p1" value="{{ $vision->p1 }}" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="pb-4 col-6">
                                    <label for="counter2" class="form-label">Counter 2</label>
                                    <input type="text" class="form-control" id="counter2" name="counter2" value="{{ $vision->counter2 }}" />
                                </div>
                                <div class="pb-4 col-6">
                                    <label for="p2" class="form-label">Subtitle 2</label>
                                    <input type="text" class="form-control" id="p2" name="p2" value="{{ $vision->p2 }}" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="pb-4 col-6">
                                    <label for="counter3" class="form-label">Counter 3</label>
                                    <input type="text" class="form-control" id="counter3" name="counter3" value="{{ $vision->counter3 }}" />
                                </div>
                                <div class="pb-4 col-6">
                                    <label for="p3" class="form-label">Subtitle 3</label>
                                    <input type="text" class="form-control" id="p3" name="p3" value="{{ $vision->p3 }}" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="pb-4 col-6">
                                    <label for="counter4" class="form-label">Counter 4</label>
                                    <input type="text" class="form-control" id="counter4" name="counter4" value="{{ $vision->counter4 }}" />
                                </div>

                                <div class="pb-4 col-6">
                                    <label for="p4" class="form-label">Subtitle 4</label>
                                    <input type="text" class="form-control" id="p4" name="p4" value="{{ $vision->p4 }}" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="pb-4 col-6">
                                    <label for="counter5" class="form-label">Counter 5</label>
                                    <input type="text" class="form-control" id="counter5" name="counter5" value="{{ $vision->counter5 }}" />
                                </div>

                                <div class="pb-4 col-6">
                                    <label for="p5" class="form-label">Subtitle 5</label>
                                    <input type="text" class="form-control" id="p5" name="p5" value="{{ $vision->p5 }}" />
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
