<div class="modal fade slide-image-modal-lg" id="slideimagemodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">{{ __('Slides Image Update Form') }}</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form method="POST" id="updateslideImageForm" enctype="multipart/form-data">
                        @csrf
                        <!-- {{ method_field('PUT') }} -->

                        <input type="hidden" id="slideImageId"  name="slideImageId">
                        
                        <div class="row mb-3">
                            <label for="slide_namee" class="col-md-4 col-form-label text-md-end">{{ __('Slide_Name') }}</label>

                            <div class="col-md-6">
                                <input id="slide_namee" type="text" class="form-control @error('slide_namee') is-invalid @enderror"
                                    name="slide_name" value="{{ old('slide_namee') }}" autocomplete="slide_namee" autofocus>

                                @error('slide_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="captionn" class="col-md-4 col-form-label text-md-end">{{ __('Head Caption') }}</label>

                            <div class="col-md-6">
                                <input id="head_captionn" type="text" class="form-control @error('head_captionn') is-invalid @enderror"
                                    name="head_caption" value="{{ old('head_captionn') }}" maxlength="199" minlength="1" autocomplete="caption" autofocus>

                                @error('caption')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="slide_captionn" class="col-md-4 col-form-label text-md-end">{{ __('Slide Caption') }}</label>

                            <div class="col-md-6">
                                <input id="slide_captionn" type="text" class="form-control @error('slide_captionn') is-invalid @enderror"
                                    name="slide_caption" value="{{ old('slide_captionn') }}" maxlength="199" minlength="1" autocomplete="caption" autofocus>

                                @error('caption')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="slide_image" class="col-md-4 col-form-label text-md-end">{{ __('Slide_image') }}</label>

                            <div class="col-md-6">
                                <input id="slide_imagee" type="file" class="form-control @error('slide_imagee') is-invalid @enderror"
                                    name="slide_image" value="" maxlength="12" minlength="1" autocomplete="slide_imagee" autofocus>

                                @error('slide_imagee')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="slide_statuss" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="slide_status" id="slide_statuss">
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
                                <button type="submit" class="btn btn-primary" id="updateslide">{{ __('Update') }}</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>  
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>







