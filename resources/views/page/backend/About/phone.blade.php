@extends('layouts.backend.master')
@section('css')
@endsection

@section('title')
Phone-Section
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
                    <h3>Phone-Section</h3>
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

                    <form action="{{route('Phone-updating')}}"  method="POST">
                        @csrf
                        {{-- Number --}}
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="number">Number</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="number" name="number" type="text"
                                    value="{{ $phone->number }}" />
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
