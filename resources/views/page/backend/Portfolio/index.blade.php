@extends('layouts.backend.master')
@section('css')
@endsection

@section('title')
    Portfolio-Section
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
                    <h3>Portfolio-Section</h3>
                    <a class="btn btn-link btn-sm ps-0 mt-2" href="{{ route('Wellcome') }}">Go to Home Page<span
                            class="fas fa-chevron-right ms-1 fs--2"></span></a>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('contnet')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h5 class="mb-0">Show Data</h5>
                </div>
            </div>
        </div>
        <div class="card-body py-0 border-top">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel"
                    aria-labelledby="tab-dom-4493da1e-1e0b-4482-89ff-6cbf5297dee1"
                    id="dom-4493da1e-1e0b-4482-89ff-6cbf5297dee1">
                    <div class="card shadow-none">
                        <div class="card-body p-0 pb-3">
                            <div class="d-flex align-items-center justify-content-end my-3">
                                <div id="bulk-select-replace-element">
                                    <button class="btn btn-falcon-success btn-sm" type="button" type="button"
                                        data-bs-toggle="modal" data-bs-target="#error-modal">
                                        <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span><span
                                            class="ms-1">New</span></button>
                                </div>
                            </div>
                            <div class="table-responsive scrollbar">
                                <table class="table mb-0">
                                    <thead class="text-black bg-200">
                                        <tr>
                                            <th class="align-middle">#</th>
                                            <th class="align-middle">Photo</th>
                                            <th class="align-middle">type</th>
                                            <th class="align-middle">title </th>
                                            <th class="align-middle">descripsion</th>
                                            <th class="align-middle">duration</th>
                                            <th class="align-middle white-space-nowrap pe-3">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="bulk-select-body">
                                        @forelse ($portfolio as $items)
                                            <tr>
                                                <th class="align-middle">{{ $loop->index + 1 }}</th>
                                                <th class="align-middle">
                                                    @if ($items->photo)
                                                        <img src="{{ asset('Attachments/Portfolio_Photo/' . $items->photo) }}"
                                                            width="60" height="60" alt="{{ $items->name }}">
                                                    @else
                                                        {{ $items->photo }}
                                                    @endif
                                                </th>
                                                <th class="align-middle">{{ $items->type }}</th>
                                                <td class="align-middle">{{ $items->title }}</td>
                                                <td class="align-middle">{{ $items->descripsion }}</td>
                                                <td class="align-middle">{{ $items->duration }}</td>
                                                <td class="align-middle">
                                                    <div>
                                                        <button class="btn p-0" type="button" data-bs-placement="top"
                                                            title="Edit" type="button" data-bs-toggle="modal"
                                                            data-bs-target="#edit-modal{{ $items->id }}">
                                                            <span class="text-500 fas fa-edit"></span></button>

                                                        <button class="btn p-0" type="button" data-bs-toggle="modal"
                                                            data-bs-target="#delete-modal{{ $items->id }}"
                                                            data-bs-placement="top" title="Delete"><span
                                                                class="text-500 fas fa-trash-alt"></span></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            {{-- Intro Edit Modal --}}
                                            @include('page.backend.Portfolio.modal-include.edit')
                                            @include('page.backend.Portfolio.modal-include.delete')
                                        @empty
                                            <tr>
                                                <td class="alert-danger text-center" colspan="7">No Data in this Table
                                                </td>
                                            </tr>
                                        @endforelse

                                    </tbody>
                                </table>
                               

                                {{-- Insert New Modal --}}
                                @include('page.backend.Portfolio.modal-include.add')

                            </div>
                            {{ $portfolio->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('js')
@endsection
