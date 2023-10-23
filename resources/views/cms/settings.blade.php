@extends('layouts.admin')

@section('page_name') Settings Page @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('settingsStore') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="pb-4 col-md-6">
                        @if ($settings->logo)
                            <img src="{{ asset('assets/logo/'.$settings->logo) }}" alt="" height="100" class="d-block">
                        @endif
                        <label for="logo" class="form-label">Logo </label>
                        <input type="file" class="form-control" id="logo" name="logo">
                    </div>

                    
                </div>

                <div class="row">

                    <div class="pb-4 col-md-6">
                        <label for="alt_logo" class="form-label">Alt Logo Header</label>
                        <input type="text" class="form-control" id="alt_logo" name="alt_logo" value="{{ $settings->alt_logo }}">
                    </div>
                    <div class="pb-4 col-md-6">
                        <label for="title_header" class="form-label">logo Tam</label>
                        <input type="text" class="form-control" id="title_header" name="title_header" value="{{ $settings->title_header }}">
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{ $settings->address }}">
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="email1" class="form-label">Email 1</label>
                        <input type="email" class="form-control" id="email1" name="email1" value="{{ $settings->email1 }}">
                    </div>
                    <div class="pb-4 col-md-6">
                        <label for="email2" class="form-label">Email 2</label>
                        <input type="email" class="form-control" id="email2" name="email2" value="{{ $settings->email2 }}">
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="phone1" class="form-label">Phone 1</label>
                        <input type="text" class="form-control" id="phone1" name="phone1" value="{{ $settings->phone1 }}">
                    </div>
                    <div class="pb-4 col-md-6">
                        <label for="tel" class="form-label">Tel 1</label>
                        <input type="text" class="form-control" id="tel" name="tel" value="{{ $settings->tel }}">
                    </div>
                    <div class="pb-4 col-md-6">
                        <label for="phone2" class="form-label">Phone 2</label>
                        <input type="text" class="form-control" id="phone2" name="phone2" value="{{ $settings->phone2 }}">
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="tel_href" class="form-label">Tel 2</label>
                        <input type="text" class="form-control" id="tel_href" name="tel_href" value="{{ $settings->tel_href }}">
                    </div>
                    <div class="pb-4 col-md-6">
                        <label for="whatsaplink" class="form-label">Whatsapp Link</label>
                        <input type="text" class="form-control" id="whatsaplink" name="whatsaplink" value="{{ $settings->whatsaplink }}">
                    </div>
                
                    <div class="pb-4 col-md-6">
                        <label for="instagram" class="form-label">Instagram</label>
                        <input type="text" class="form-control" id="instagram" name="instagram" value="{{ $settings->instagram }}">
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="linkedin" class="form-label">LinkedIn</label>
                        <input type="text" class="form-control" id="linkedin" name="linkedin" value="{{ $settings->linkedin }}">
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="contact_header" class="form-label">contact us </label>
                        <input type="text" class="form-control" id="contact_header" name="contact_header" value="{{ $settings->contact_header }}">
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="scrollTo" class="form-label">Text Link contact</label>
                        <input type="text" class="form-control" id="scrollTo" name="scrollTo" value="{{ $settings->scrollTo }}">
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="map" class="form-label">Map</label>
                        <input type="text" class="form-control" id="map" name="map" value="{{ $settings->map }}">
                    </div>
                </div>

                <div class="demo-inline-spacing">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
