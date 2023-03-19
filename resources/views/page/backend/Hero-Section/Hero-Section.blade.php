@extends('layouts.backend.master')
@section('css')
@endsection

@section('title')
    Hero-Section
@endsection

@section('header-title')
    <div class="card mb-3">
        <div class="bg-holder d-none d-lg-block bg-card"
            style="background-image:url({{ asset('asset/backend/src/img/icons/spot-illustrations/corner-4.png') }});">
        </div>
        <!--/.bg-holder-->

        <div class="card-body position-relative">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Hero-Section</h3>
                    <a class="btn btn-link btn-sm ps-0 mt-2" href="{{ route('Wellcome') }}">Go to Home Page<span
                            class="fas fa-chevron-right ms-1 fs--2"></span></a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('contnet')
    <div class="card mb-3">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h5 class="mb-0" data-anchor="data-anchor">Updating</h5>
                </div>
            </div>
        </div>
        <div class="card-body bg-light">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel"
                    aria-labelledby="tab-dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324"
                    id="dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324">

                    <form action="{{ route('Hero-Section-updating') }}"  method="POST"  enctype="multipart/form-data" >
                        @csrf
                        {{-- First name --}}
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="First_Name">First name</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="First_Name" name="First_Name" type="text"
                                    value="{{ old('First_Name', $HeroSection['First_Name']) }}" />
                            </div>
                        </div>

                        {{-- Last name --}}
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="Last_Name">Last name</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="Last_Name" name="Last_Name" type="text"
                                    value="{{ old('Last_Name', $HeroSection['Last_Name']) }}" />
                            </div>
                        </div>

                        {{-- Personal Photo --}}
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="photo">Personal Photo</label>

                            <div class="col-sm-10">
                                <input class="form-control" id="photo" name="photo" type="file" accept="image/*" data-fouc />
                            </div>
                            <div class="mb-3">
                                <img style="width: 100px" height="100px" src="{{ URL::asset('Attachments/Personal_Photo/'.$HeroSection['photo']) }}" alt="Personal-Photo" />
                            </div>
                        </div>

                        <button class="btn btn-primary" type="submit">Updating</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
