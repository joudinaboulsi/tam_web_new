@extends('layouts.admin')

@section('page_name') Edit Product @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('productUpdate', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

              
                <div class="row">
                    <div class="pb-4 col-md-6">
                        @if ($product->image)
                            <img src="{{ asset('assets/product/' . $product->image) }}" height="100" class="d-block">
                        @endif
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="alt_image" class="form-label" style="margin-top:100px">Alt Image</label>
                        <input type="text" class="form-control" id="alt_image" name="alt_image" value="{{ $product->alt_image }}" />
                    </div>
                </div>
            
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>

@endsection
