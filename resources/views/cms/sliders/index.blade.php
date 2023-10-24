@extends('layouts/admin')
@section('page_name') Sliders @endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

  <div class="card">
      <div class="card-header">
          <a href="{{ route('sliderCreate') }}" class="btn btn-primary">Add</a>
      </div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-striped">
                  <thead>
                      <tr>
                          <th>Title</th>
                          <th>Text</th>
                          <th>text button</th>
                          <th>Scroll To</th>
                          <th>Image</th>
                          
                          <th>Actions</th>
                      </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                      @foreach ($sliders as $slider)
                          <tr>
                              <td>{{ $slider->title_main }}</td>
                              <td>{{ $slider->text_main }}</td>
                              <td>{{ $slider->text_btn }}</td>
                              <td>{{ $slider->scrollTo }}</td>
                              <td>
                                  @if ($slider->image_slider)
                                      <img src="{{ asset('assets/slider/'.$slider->image_slider) }}" height="100" alt="Image Thumbnail">
                                  @endif
                              </td>
                              <td>
                                  <div class="d-flex">
                                      <a href="{{ route('sliderEdit', $slider->id) }}" class="btn btn-outline-success me-2">Edit</a>
                                      <form action="{{ route('sliderDelete', $slider->id) }}" method="POST">
                                          @csrf
                                          @method('delete')
                                          <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this data?')">Delete</button>
                                      </form>
                                  </div>
                              </td>
                          </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>

@endsection