<div class="modal fade" id="edit-modal{{ $items->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
        <div class="modal-content position-relative">
            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
                    <h4 class="mb-1" id="modalExampleDemoLabel">Edit Testimonial
                    </h4>
                </div>
                <div class="p-4 pb-0">
                    <form method="POST" action="{{ route('Testimonial.update', 'test') }}"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input class="form-control" type="hidden" id="id" name="id" value="{{ $items->id }}" />

                        <div class="mb-3">
                            <label class="col-form-label" for="review">Review:</label>
                            <textarea class="form-control" id="review" name="review">{{ old('review' , $items->review) }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" for="type">Name:</label>
                            <input class="form-control" type="text" id="name" name="name"
                                value="{{ old('name' , $items->name) }}" />
                        </div>


                        <div class="mb-3">
                            <label class="col-form-label" for="title_job">Title job:</label>
                            <input class="form-control" type="text" id="title_job" name="title_job"
                                value="{{ old('title_job' ,$items->title_job ) }}" />
                        </div>

                        {{-- Photo --}}
                        <div class="mb-3">
                            <label class="col-form-label"
                                for="duration">Photo:</label>
                                <input class="form-control" id="photo" name="photo" type="file" accept="image/*" value="{{ $items->photo }}" data-fouc />
                                <div class="mb-3">
                                    <img style="width: 100px" height="100px" src="{{ URL::asset('Attachments/Testimonial_Photo/' . $items->photo) }}" alt="Testimonial-Photo" />
                                </div>
                        </div>
                       
                   
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Updating</button>
            </div>
        </form>
        </div>
    </div>
</div>
