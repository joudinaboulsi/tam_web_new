@extends('layouts.admin')
@section('page_name') Services @endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Services Section</h5>
                    <div class="card-body">
                        <form action="{{ route('serviceStore') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="pb-4">
                                <label for="subtitle" class="form-label">Subtitle</label>
                                <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ $service->subtitle }}" />
                            </div>
                            
                            <div class="pb-4">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $service->title }}" />
                            </div>

                            <div class="pb-4">
                                <label for="text" class="form-label">Content</label>
                                <textarea class="form-control" id="text" name="text">{!! $service->text !!}</textarea>
                            </div>

                            <div class="divider divider-info">
                                <div class="divider-text">Service 1</div>
                            </div>

                            <div class="row">

                                <div class="pb-4 col-6">
                                    @if ($service->icon1)
                                        <img src="{{ asset('assets/service/'.$service->icon1) }}" height="100" class="d-block">
                                    @endif
                                    <label for="icon1" class="form-label">Icon 1</label>
                                    <input type="file" class="form-control" id="icon1" name="icon1"/>
                                </div>
                                <div class="pb-4 col-6">
                                    <label for="alt_icon1" class="form-label" style="margin-top:100px">Alt Icon 1</label>
                                    <input type="text" class="form-control" name="alt_icon1" value="{{ $service->alt_icon1 }}"  />
                                </div>

                                <div class="pb-4 col-6">
                                    @if ($service->image1)
                                        <img src="{{ asset('assets/service/'.$service->image1) }}" height="100" class="d-block">
                                    @endif
                                    <label for="image1" class="form-label">Image 1</label>
                                    <input type="file" class="form-control" id="image1" name="image1" />
                                </div>
                                <div class="pb-4 col-6">
                                    <label for="alt_image1" class="form-label" style="margin-top:100px">Alt Image 1</label>
                                    <input type="text" class="form-control" name="alt_image1" value="{{ $service->alt_image1 }}"  />
                                </div>

                                <div class="pb-4">
                                    <label for="p1" class="form-label">Text 1</label>
                                    <input type="text" class="form-control" id="p1" name="p1" value="{{ $service->p1 }}"/>
                                </div>
                            </div>

                            <div class="divider divider-info">
                                <div class="divider-text">Service 2</div>
                            </div>

                            <div class="row">

                                <div class="pb-4 col-6">
                                    @if ($service->icon2)
                                        <img src="{{ asset('assets/service/'.$service->icon2) }}" height="100" class="d-block">
                                    @endif
                                    <label for="icon2" class="form-label">Icon2</label>
                                    <input type="file" class="form-control" id="icon2" name="icon2"/>
                                </div>
                                <div class="pb-4 col-6">
                                    <label for="alt_icon2" class="form-label" style="margin-top:100px">Alt Icon 2</label>
                                    <input type="text" class="form-control" id="alt_icon2" name="alt_icon2" value="{{ $service->alt_icon2 }}" />
                                </div>

                                <div class="pb-4 col-6">
                                    @if ($service->image2)
                                        <img src="{{ asset('assets/service/'.$service->image2) }}" height="100" class="d-block">
                                    @endif
                                    <label for="image2" class="form-label">Image 2</label>
                                    <input type="file" class="form-control" id="image2" name="image2" />
                                </div>
                                <div class="pb-4 col-6">
                                    <label for="alt_image2" class="form-label" style="margin-top:100px">Alt Image 2</label>
                                    <input type="text" class="form-control" id="alt_image2" name="alt_image2" value="{{ $service->alt_image2 }}" />
                                </div>

                                <div class="pb-4">
                                    <label for="p2" class="form-label">Text 2</label>
                                    <input type="text" class="form-control" id="p2" name="p2" value="{{ $service->p2 }}"/>
                                </div>
                            </div>

                            <div class="divider divider-info">
                                <div class="divider-text">Service 3</div>
                            </div>

                            <div class="row">
                                <div class="pb-4 col-6">
                                    @if ($service->icon3)
                                        <img src="{{ asset('assets/service/'.$service->icon3) }}" height="100" class="d-block">
                                    @endif
                                    <label for="icon3" class="form-label">Icon3</label>
                                    <input type="file" class="form-control" id="icon3" name="icon3"/>
                                </div>
                                <div class="pb-4 col-6">
                                    <label for="alt_icon3" class="form-label" style="margin-top:100px">Alt Icon 3</label>
                                    <input type="text" class="form-control" id="alt_icon3" name="alt_icon3" value="{{ $service->alt_icon3 }}"  />
                                </div>

                                <div class="pb-4 col-6">
                                    @if ($service->image3)
                                        <img src="{{ asset('assets/service/'.$service->image3) }}" height="100" class="d-block">
                                    @endif
                                    <label for="image3" class="form-label">Image 3</label>
                                    <input type="file" class="form-control" id="image3" name="image3" />
                                </div>

                                <div class="pb-4 col-6">
                                    <label for="alt_image3" class="form-label" style="margin-top:100px">Alt Image 3</label>
                                    <input type="text" class="form-control" id="alt_image3" name="alt_image3" value="{{ $service->alt_image3 }}"  />
                                </div>

                                <div class="pb-4">
                                    <label for="p3" class="form-label">Text 3</label>
                                    <input type="text" class="form-control" id="p3" name="p3" value="{{ $service->p3 }}" />
                                </div>
                            </div>

                            <div class="divider divider-info">
                                <div class="divider-text">Service 4</div>
                            </div>

                            <div class="row">
                                <div class="pb-4 col-6">
                                    @if ($service->icon4)
                                        <img src="{{ asset('assets/service/'.$service->icon4) }}" height="100" class="d-block">
                                    @endif
                                    <label for="icon4" class="form-label">Icon4</label>
                                    <input type="file" class="form-control" id="icon4" name="icon4" />
                                </div>
                                <div class="pb-4 col-6">
                                    <label for="alt_icon4" class="form-label" style="margin-top:100px">Alt Icon 4</label>
                                    <input type="text" class="form-control" id="alt_icon4" name="alt_icon4" value="{{ $service->alt_icon4 }}"  />
                                </div>

                                <div class="pb-4 col-6">
                                    @if ($service->image4)
                                        <img src="{{ asset('assets/service/'.$service->image4) }}" height="100" class="d-block">
                                    @endif
                                    <label for="image4" class="form-label">Image 4</label>
                                    <input type="file" class="form-control" id="image4" name="image4" />
                                </div>
                                <div class="pb-4 col-6">
                                    <label for="alt_image4" class="form-label" style="margin-top:100px">Alt Image 4</label>
                                    <input type="text" class="form-control" id="alt_image4" name="alt_image4" value="{{ $service->alt_image4 }}"  />
                                </div>

                                <div class="pb-4">
                                    <label for="p4" class="form-label">Text 4</label>
                                    <input type="text" class="form-control" id="p4" name="p4" value="{{ $service->p4 }}"/>
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
