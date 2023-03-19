@extends('layouts.backend.master')
@section('css')
@endsection

@section('title')
    Blog-Section
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
                    <h3>Blog-Section</h3>
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
                    <h5 class="mb-0" data-anchor="data-anchor">Insert</h5>
                </div>
            </div>
        </div>
        <div class="card-body bg-light">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel"
                    aria-labelledby="tab-dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324"
                    id="dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324">

                    <form method="POST" action="{{ route('Blog.store') }}" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label class="col-form-label" for="title">Title:</label>
                            <input class="form-control" type="text" id="title" name="title"
                                value="{{ old('title') }}" class="@error('title') is-invalid @enderror" />
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="col-form-label" for="descripsion">Descripsion:</label>
                            <textarea class="form-control" id="descripsion" name="descripsion" class="@error('descripsion') is-invalid @enderror">{{ old('descripsion') }}</textarea>
                            @error('descripsion')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>



                        <div class="mb-3">
                            <label class="col-form-label" for="organizerMultiple">categories</label>
                            <select class="form-control" id="organizerMultiple" name="category_id" 
                                class="@error('category_id') is-invalid @enderror">
                                @foreach ($Category as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="col-form-label" for="coade_use">Type of coade</label>
                            <input class="form-control" type="text" id="coade_use" name="coade_use"
                                value="{{ old('coade_use') }}"class="@error('coade_use') is-invalid @enderror" />
                            @error('coade_use')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Photo --}}
                        <div class="mb-3">
                            <label class="col-form-label" for="duration">Photo:</label>
                            <input class="form-control" id="photo" name="photo" type="file" accept="image/*"
                                data-fouc class="@error('photo') is-invalid @enderror" />
                            @error('photo')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Insert</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
