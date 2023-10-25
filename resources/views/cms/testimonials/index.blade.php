@extends('layouts.admin')

@section('page_name') Testimonials Page @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">

    <div class="card">
        <div class="card-header">
            <a href="{{ route('testimonialCreate') }}" class="btn btn-primary">Add</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Info</th>
                            <th>Text</th>
                            <th>Portfolio</th>
                            <th>Alt Portfolio</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($testimonials as $testimonial)
                            <tr>
                                <td>
                                  {{ $testimonial->name }}
                                </td>
                                <td>
                                    {{ $testimonial->info }}
                                </td>
                                <td>
                                   {!! $testimonial->text !!}
                                </td>
                                <td>
                                    @if ($testimonial->image1)
                                        <img src="{{ asset('assets/testimonial/'.$testimonial->image1) }}" height="50" alt="Image">
                                    @endif
                                </td>
                                <td>{{ $testimonial->alt_image1 }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('testimonialEdit', $testimonial->id) }}" class="btn btn-outline-success me-2">Edit</a>
                                        <form action="{{ route('testimonialDelete', $testimonial->id) }}" method="POST">
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
</div>

@endsection
