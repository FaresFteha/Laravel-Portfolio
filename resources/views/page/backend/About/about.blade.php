@extends('layouts.backend.master')
@section('css')
@endsection

@section('title')
    About-Section
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
                    <h3>About-Section</h3>
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

                    <form action="{{route('About-updating') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="job_title">Job title</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="job_title" name="job_title" type="text"
                                    value="{{ $About->job_title }}" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="descripsion">Descripsion</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="descripsion" name="descripsion" type="text">{{ $About->descripsion }}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="name">Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="name" name="name" type="text"
                                    value="{{ $About->name }}" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="age">Age</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="age" name="age" type="text"
                                    value="{{ $About->age }}" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="age">Email</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="email" name="email" type="text"
                                    value="{{ $About->email }}" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="age">Phone</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="phone_id" name="phone_id" type="text"
                                    value="{{ $About->phone->number }}" readonly/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="education">Education</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="education" name="education" type="text"
                                    value="{{ $About->education }}" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="freelance">Freelance</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="freelance" name="freelance">
                                    <option disabled value="{{ $About->freelance }}"
                                        {{ $About->freelance == $About->freelance ? 'selected' : '' }}>
                                        {{ $About->freelance }}</option>
                                    <option>Available</option>
                                    <option>Not-Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="cv">CV</label>

                            <div class="col-sm-10">
                                <input  class="form-control" type="file"  accept="application/pdf" id="cv" name="cv">
                            </div>
                            <br>
                            <br>
                            <div class="mb-3">
                                <embed src="{{ URL::asset('Attachments/CV/'.$About->cv) }}" type="application/pdf" height="150px" width="300px">
                            </div>
                        </div>


                        {{-- About Photo --}}
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="photo">About Photo</label>

                            <div class="col-sm-10">
                                <input class="form-control" id="photo" name="photo" type="file"
                                    accept="image/*" data-fouc />
                            </div>
                            <div class="mb-3">
                                <img style="width: 100px" height="100px" src="{{ URL::asset('Attachments/About_Photo/'. $About->photo)}}"
                                    alt="About-Photo" />
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
