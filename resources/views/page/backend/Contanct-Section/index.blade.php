@extends('layouts.backend.master')
@section('css')
@endsection

@section('title')
    Contact-Section
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
                    <h3>Contact-Section</h3>
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
                                </div>
                            </div>
                            <div class="table-responsive scrollbar">
                                <table class="table mb-0">
                                    <thead class="text-black bg-200">
                                        <tr>
                                            <th class="align-middle">#</th>
                                            <th class="align-middle">Name</th>
                                            <th class="align-middle">Email</th>
                                            <th class="align-middle">Message</th>
                                            <th class="align-middle">Ttme Send</th>
                                            <th class="align-middle white-space-nowrap pe-3">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="bulk-select-body">
                                        @forelse ($Contact as $items)
                                            <tr>
                                                <th class="align-middle">{{ $loop->index + 1 }}</th>
                                                <th class="align-middle">{{ $items->name }}</th>
                                                <td class="align-middle">{{ $items->email }}</td>
                                                <td class="align-middle">
                                                    {{ $items->message }}

                                                </td>
                                                <td class="align-middle">{{ $items->created_at }}</td>

                                                <td class="align-middle">
                                                    {{-- <div>
                                                        <a href="{{ route('Blog.edit', $items->id) }}">
                                                            <button class="btn p-0" type="button" data-bs-placement="top"
                                                                title="Edit" type="button">
                                                                <span class="text-500 fas fa-edit"></span></button>
                                                        </a>


                                                        <button class="btn p-0" type="button" data-bs-toggle="modal"
                                                            data-bs-target="#delete-modal{{ $items->id }}"
                                                            data-bs-placement="top" title="Delete"><span
                                                                class="text-500 fas fa-trash-alt"></span></button>
                                                    </div> --}}
                                                </td>
                                            </tr>
                                            {{-- delete Modal --}}
                                            {{-- @include('page.backend.Blog-section.modal-include.Blog-modal.delete') --}}
                                        @empty
                                            <tr>
                                                <td class="alert-danger text-center" colspan="5">No Data in this Table
                                                </td>
                                            </tr>
                                        @endforelse

                                    </tbody>
                                </table>


                            </div>
                            {{-- $Blog->links() --}}
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
