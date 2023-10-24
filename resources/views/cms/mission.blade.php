@extends('layouts.admin')
@section('page_name') Mission @endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Mission Section</h5>
                    <div class="card-body">
                        <form action="{{ route('missionStore') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="pb-4">
                                @if ($mission->image)
                                    <img src="{{ asset('assets/about/' . $mission->image) }}" height="100" class="d-block">
                                @endif
                                <label for="image" class="form-label">Background</label>
                                <input type="file" class="form-control" id="image" name="image" />
                            </div>
                          
                            <div class="pb-4">
                                <label for="title_mission" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title_mission" name="title_mission" value="{{ $mission->title_mission }}" />
                            </div>

                            <div class="pb-4">
                                <label for="text" class="form-label">Content</label>
                                <textarea class="form-control" id="text" name="text">{!! $mission->text !!}</textarea>
                            </div>

                            <div class="pb-4">
                                <label for="title_vision" class="form-label">Text ScrollTo</label>
                                <input type="text" class="form-control" id="title_vision" name="title_vision" value="{{ $mission->title_vision }}" />
                            </div>

                            <div class="pb-4">
                                <label for="scrollTo" class="form-label">ScrollToLink</label>
                                <input type="text" class="form-control" id="scrollTo" name="scrollTo" value="{{ $mission->scrollTo }}" />
                            </div>

                            <div class="pb-4">
                                <label for="title1" class="form-label">Title 1</label>
                                <input type="text" class="form-control" id="title1" name="title1" value="{{ $mission->title1 }}" />
                            </div>

                            <div class="pb-4">
                                <label for="p1" class="form-label">Content 1</label>
                                <textarea class="form-control" id="p1" name="p1">{!! $mission->p1 !!}</textarea>
                            </div>

                            <div class="pb-4">
                                <label for="title2" class="form-label">Title 2</label>
                                <input type="text" class="form-control" id="title2" name="title2" value="{{ $mission->title2 }}" />
                            </div>

                            <div class="pb-4">
                                <label for="p2" class="form-label">Content 2</label>
                                <textarea class="form-control" id="p2" name="p2">{!! $mission->p2 !!}</textarea>
                            </div>

                            <div class="pb-4">
                                <label for="title3" class="form-label">Title 3</label>
                                <input type="text" class="form-control" id="title3" name="title3" value="{{ $mission->title3 }}" />
                            </div>

                            <div class="pb-4">
                                <label for="p3" class="form-label">Content 3</label>
                                <textarea class="form-control" id="p3" name="p3">{!! $mission->p3 !!}</textarea>
                            </div>

                            <div class="pb-4">
                                <label for="title4" class="form-label">Title 4</label>
                                <input type="text" class="form-control" id="title4" name="title4" value="{{ $mission->title4 }}" />
                            </div>

                            <div class="pb-4">
                                <label for="p4" class="form-label">Content 4</label>
                                <textarea class="form-control" id="p4" name="p4">{!! $mission->p4 !!}</textarea>
                            </div>
                        
                            <div class="pb-4">
                                <label for="btn_text" class="form-label">Text Button</label>
                                <input type="text" class="form-control" id="btn_text" name="btn_text" value="{{ $mission->btn_text }}" />
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
