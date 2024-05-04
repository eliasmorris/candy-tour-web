<div class="modal fade logo-page-modal-lg" id="logomodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">{{ __('Logo Input Form') }}</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form method="POST" id="addlogoForm" enctype="multipart/form-data">
                        @csrf
                        <!-- {{ method_field('PUT') }} -->
                        <div class="row mb-3">
                            <label for="logo_name" class="col-md-4 col-form-label text-md-end">{{ __('Logo Name') }}</label>

                            <div class="col-md-6">
                                <input id="logo_name" type="text" class="form-control @error('logo_name') is-invalid @enderror"
                                    name="logo_name" value="" required autocomplete="logo_name" autofocus>

                                @error('logo_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="logo_image" class="col-md-4 col-form-label text-md-end">{{ __('Logo Image') }}</label>

                            <div class="col-md-6">
                                <input id="logo_image" type="file" class="form-control @error('logo_image') is-invalid @enderror"
                                    name="logo_image" value="" maxlength="12" minlength="1" autocomplete="logo_image" autofocus multiple >

                                @error('logo_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="logo_status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="logo_status" id="logo_status">
                                    <option value="" hidden>{{ __('Select Status')}}</option>
                                    <option value="1">{{ __('Active')}}</option>
                                    <option value="0">{{ __('In Active')}}</option>
                                    
                                </select>
                                @error('logo_status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" id="addpage">{{ __('Save') }}</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>  
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>







