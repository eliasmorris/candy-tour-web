<div class="modal fade about-modal-lg" id="usermodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">{{ __('About Page Input Form') }}</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form method="POST" id="adddaboutForm" enctype="multipart/form-data">
                        @csrf
                        <!-- {{ method_field('PUT') }} -->
                        <div class="row mb-3">
                            <label for="page_tittle" class="col-md-4 col-form-label text-md-end">{{ __('Page_Tittle') }}</label>

                            <div class="col-md-6">
                                <input id="page_tittle" type="text" class="form-control @error('page_tittle') is-invalid @enderror"
                                    name="page_tittle" value="" required autocomplete="page_tittle" autofocus>

                                @error('page_tittle')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="about_description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="about_description" name="about_description" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                @error('about_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="about_image" class="col-md-4 col-form-label text-md-end">{{ __('Pages_Images') }}</label>

                            <div class="col-md-6">
                                <input id="about_image" type="file" class="form-control @error('about_image') is-invalid @enderror"
                                    name="about_image[]" value="" maxlength="12" minlength="1" autocomplete="about_image" autofocus multiple >

                                @error('about_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="about_status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="about_status" id="about_status">
                                    <option value="" hidden>{{ __('Select Status')}}</option>
                                    <option value="1">{{ __('Active')}}</option>
                                    <option value="0">{{ __('In Active')}}</option>
                                    
                                </select>
                                @error('about_status')
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







