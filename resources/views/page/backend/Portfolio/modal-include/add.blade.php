<div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
        <div class="modal-content position-relative">
            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
                    <h4 class="mb-1" id="modalExampleDemoLabel">Add a new Portfolio
                    </h4>
                </div>
                <div class="p-4 pb-0">
                    <form method="POST" action="{{ route('Portfolio.store') }}"  enctype="multipart/form-data" >
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label class="col-form-label" for="title">Title:</label>
                            <input class="form-control" "
                                type="text" id="title" name="title" value="{{ old('title') }}" />
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label"
                                for="type">Type:</label>
                            <input class="form-control" type="text" id="type" name="type" value="{{ old('type') }}"/>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" for="descripsion">Descripsion:</label>
                            <textarea class="form-control" id="descripsion" name="descripsion">{{ old('descripsion') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="col-form-label"
                                for="duration">Duration:</label>
                            <input class="form-control" type="text" id="duration" name="duration" value="{{ old('duration') }}"/>
                        </div>

                        {{-- Photo --}}
                        <div class="mb-3">
                            <label class="col-form-label"
                                for="duration">Photo:</label>
                                <input class="form-control" id="photo" name="photo" type="file" accept="image/*" data-fouc />
                        </div>
                   
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Insert</button>
            </div>
        </form>
        </div>
    </div>
</div>
