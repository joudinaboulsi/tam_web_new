@extends('layouts.admin')

@section('page_name') Clients Page @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">

    <div class="card">
        <h5 class="card-header">Title Section</h5>
        <div class="card-body">
            <form action="{{ route('clientStoreTitle') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="pb-4">
                    <label for="title_client" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title_client" name="title_client" value="{{ $page->title_client }}" />
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

    <div class="divider divider-info">
        <div class="divider-text">clients List</div>
    </div>

    <div class="card">
        <div class="card-header">
            <a href="{{ route('clientCreate') }}" class="btn btn-primary">Add</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Client</th>
                            <th>Website</th>
                            <th>Image</th>
                            <th>Alt Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($clients as $client)
                            <tr>
                                <td>
                                  {{ $client->client }}
                                </td>
                                <td>
                                    {{ $client->website }}
                                  </td>
                                <td>
                                    @if ($client->image)
                                        <img src="{{ asset('assets/client/'.$client->image) }}" height="50" alt="Image">
                                    @endif
                                </td>
                                <td>{{ $client->alt_image }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('clientEdit', $client->id) }}" class="btn btn-outline-success me-2">Edit</a>
                                        <form action="{{ route('clientDelete', $client->id) }}" method="POST">
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
