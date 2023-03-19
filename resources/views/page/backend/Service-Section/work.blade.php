@extends('layouts.backend.master')
@section('css')
@endsection

@section('title')
    Work-Section
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
                    <h3>Work-Section</h3>
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

                    <form action="{{ route('Work.update' , 'test') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h5 style="color: red">Information public</h5>
                        {{-- Title --}}
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="title">Title</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="title" name="title" type="text"
                                    value="{{ old('title', $WorkSection['title']) }}" />
                            </div>
                        </div>

                        {{-- descripsion name --}}
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="descripsion">descripsion</label>
                            <div class="col-sm-10">
                                    <textarea class="form-control" id="descripsion" name="descripsion" placeholder="Descripsion">{{ old('descripsion' , $WorkSection['descripsion']) }}</textarea>
                            </div>
                        </div>
                        <hr>
                        <h5 style="color: red">Icone</h5>
                        @php
                            $Work_Icon = ['icone-1', 'icone-2', 'icone-3'];
                        @endphp
                        {{-- Hero_Icon --}}
                        @foreach ($Work_Icon as $items)
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="{{ $items }}">{{ $items }}</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="{{ $items }}" name="{{ $items }}"
                                        type="text" value="{{ old($items, $WorkSection[$items]) }}" />
                                </div>
                            </div>
                        @endforeach
                        <hr>
                        <h5 style="color: red">Title icon</h5>
                        @php
                            $Work_title_icone = ['title-icone-1', 'title-icone-2', 'title-icone-3'];
                        @endphp
                        {{-- title-icon --}}
                        @foreach ($Work_title_icone as $items)
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"
                                    for="{{ $items }}">{{ $items }}</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="{{ $items }}" name="{{ $items }}"
                                        type="text" value="{{ old($items, $WorkSection[$items]) }}" />
                                </div>
                            </div>
                        @endforeach

                        <hr>
                        <h5 style="color: red">Descripsion title</h5>
                        @php
                            $Work_descripsion_title = ['descripsion-title-1', 'descripsion-title-2', 'descripsion-title-3'];
                        @endphp
                        {{-- title-icon --}}
                        @foreach ($Work_descripsion_title as $items)
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"
                                    for="{{ $items }}">{{ $items }}</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="{{ $items }}" name="{{ $items }}"
                                        type="text" value="{{ old($items, $WorkSection[$items]) }}" />
                                </div>
                            </div>
                        @endforeach

                        <hr>
                        <h5 style="color: red">Photo</h5>
                        {{-- Photo --}}
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="photo">Personal Photo</label>

                            <div class="col-sm-10">
                                <input class="form-control" id="photo" name="photo" type="file" accept="image/*"
                                    data-fouc />
                            </div>
                            <div class="mb-3">
                                <img style="width: 100px" height="100px" src="{{ URL::asset('Attachments/Work/'.$WorkSection['photo']) }}" alt="Work-Photo" />
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
