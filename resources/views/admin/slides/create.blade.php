<div class="modal fade slide-modal-lg" id="usermodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">{{ __('Slides Input Form') }}</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form method="POST" id="addslideForm" enctype="multipart/form-data">
                        @csrf
                        <!-- {{ method_field('PUT') }} -->
                        <div class="row mb-3">
                            <label for="slide_name" class="col-md-4 col-form-label text-md-end">{{ __('Slide_Name') }}</label>

                            <div class="col-md-6">
                                <input id="slide_name" type="text" class="form-control @error('slide_name') is-invalid @enderror"
                                    name="slide_name" value="" required autocomplete="slide_name" autofocus>

                                @error('slide_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="caption" class="col-md-4 col-form-label text-md-end">{{ __('Head Caption') }}</label>

                            <div class="col-md-6">
                                <input id="head_caption" type="text" class="form-control @error('head_caption') is-invalid @enderror"
                                    name="head_caption" value="{{ old('head_caption') }}" maxlength="199" minlength="1" required autocomplete="head_caption" autofocus>

                                @error('head_caption')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="caption" class="col-md-4 col-form-label text-md-end">{{ __('Slide Caption') }}</label>

                            <div class="col-md-6">
                                <input id="slide_caption" type="text" class="form-control @error('slide_caption') is-invalid @enderror"
                                    name="slide_caption" value="{{ old('slide_caption') }}" maxlength="199" minlength="1" required autocomplete="slide_caption" autofocus>

                                @error('slide_caption')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="slide_image" class="col-md-4 col-form-label text-md-end">{{ __('Slide_image') }}</label>

                            <div class="col-md-6">
                                <input id="slide_image" type="file" class="form-control @error('slide_image') is-invalid @enderror"
                                    name="slide_image" value="" maxlength="12" minlength="1" autocomplete="slide_image" autofocus>

                                @error('slide_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="slide_status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="slide_status" id="slide_status">
                                    <option value="" hidden>{{ __('Select Status')}}</option>
                                    <option value="1">{{ __('Active')}}</option>
                                    <option value="0">{{ __('In Active')}}</option>
                                    
                                </select>
                                @error('slide_status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" id="addslide">{{ __('Save') }}</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>  
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>







