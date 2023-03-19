@extends('layouts.backend.master')
@section('css')
    
@endsection

@section('title')
    C-Panel - Home Page
@endsection


@section('contnet')
<div class="row g-3 mb-3">
    <div class="col-xxl-6 col-lg-12">
        <div class="card h-100">
            <div class="bg-holder bg-card"
                style="background-image:url({{ asset('asset/backend/src/img/icons/spot-illustrations/corner-3.png') }});">
            </div>
            <!--/.bg-holder-->

            <div class="card-header z-index-1">
                <h5 class="text-primary">Welcome to Portfolio! </h5>
                <h6 class="text-600">Let's go you start</h6>
            </div>
            {{-- <div class="card-body z-index-1">
                <div class="row g-2 h-100 align-items-end">
                    <div class="col-sm-6 col-md-5">
                        <div class="d-flex position-relative">
                            <div class="icon-item icon-item-sm border rounded-3 shadow-none me-2">
                                <span class="fas fa-chess-rook text-primary"></span>
                            </div>
                            <div class="flex-1"><a class="stretched-link" href="#!">
                                    <h6 class="text-800 mb-0">General</h6>
                                </a>
                                <p class="mb-0 fs--2 text-500">Customize with a few clicks</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-5">
                        <div class="d-flex position-relative">
                            <div class="icon-item icon-item-sm border rounded-3 shadow-none me-2">
                                <span class="fas fa-crown text-warning"></span>
                            </div>
                            <div class="flex-1"><a class="stretched-link" href="#!">
                                    <h6 class="text-800 mb-0">Upgrade to pro</h6>
                                </a>
                                <p class="mb-0 fs--2 text-500">Try Pro for 14 days free! </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-5">
                        <div class="d-flex position-relative">
                            <div class="icon-item icon-item-sm border rounded-3 shadow-none me-2">
                                <span class="fas fa-video text-success"></span>
                            </div>
                            <div class="flex-1"><a class="stretched-link" href="#!">
                                    <h6 class="text-800 mb-0">Create a meeting</h6>
                                </a>
                                <p class="mb-0 fs--2 text-500">Manage and update your meetings</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-5">
                        <div class="d-flex position-relative">
                            <div class="icon-item icon-item-sm border rounded-3 shadow-none me-2">
                                <span class="fas fa-user text-info"></span>
                            </div>
                            <div class="flex-1"><a class="stretched-link" href="#!">
                                    <h6 class="text-800 mb-0">Members activity</h6>
                                </a>
                                <p class="mb-0 fs--2 text-500">Monitor activity and supervise</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

</div>
@endsection

@section('js')
    
@endsection