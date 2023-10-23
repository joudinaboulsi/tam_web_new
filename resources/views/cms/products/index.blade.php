@extends('layouts.admin')

@section('page_name') Products Page @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">

    <div class="card">
        <h5 class="card-header">Title Section</h5>
        <div class="card-body">
            <form action="{{ route('productStoreTitle') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="pb-4">
                    <label for="title_product" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title_product" name="title_product" value="{{ $page->title_product }}" />
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

    <div class="divider divider-info">
        <div class="divider-text">Products List</div>
    </div>

    <div class="card">
        <div class="card-header">
            <a href="{{ route('productCreate') }}" class="btn btn-primary">Add</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Alt Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($products as $product)
                            <tr>
                              
                                <td>
                                    @if ($product->image)
                                        <img src="{{ asset('assets/product/'.$product->image) }}" height="50" alt="Image">
                                    @endif
                                </td>
                                <td>{{ $product->alt_image }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('productEdit', $product->id) }}" class="btn btn-outline-success me-2">Edit</a>
                                        <form action="{{ route('productDelete', $product->id) }}" method="POST">
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
