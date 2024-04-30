<div class="modal fade package-modal-lg" id="packagemodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">{{ __('Package Update Form') }}</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form method="POST" id="upadatePackageForm" enctype="multipart/form-data">
                        @csrf
                        
                        <input type="hidden" name="packageid" id="packageid">
                        <div class="row mb-3">
                            <label for="package_name" class="col-md-4 col-form-label text-md-end">{{ __('Package Name') }}</label>

                            <div class="col-md-6">
                                <input id="package_namee" type="text" class="form-control @error('package_namee') is-invalid @enderror"
                                    name="package_namee" value="" required autocomplete="package_name" autofocus>

                                @error('package_namee')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="trip" class="col-md-4 col-form-label text-md-end">{{ __('Package Trip') }}</label>

                            <div class="col-md-6">
                                <input id="tripp" type="text" class="form-control @error('tripp') is-invalid @enderror"
                                    name="tripp" value="" required autocomplete="tripp" autofocus>

                                @error('tripp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="package_cost" class="col-md-4 col-form-label text-md-end">{{ __('Package Cost') }}</label>

                            <div class="col-md-6">
                                <input id="package_costt" type="number" class="form-control @error('package_costt') is-invalid @enderror"
                                    name="package_costt" value="" required autocomplete="package_costt" autofocus>

                                @error('package_costt')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="descriptionn" name="descriptionn" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                @error('descriptionn')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="package_image" class="col-md-4 col-form-label text-md-end">{{ __('Package Image') }}</label>

                            <div class="col-md-6">
                                <input id="package_imagee" type="file" class="form-control @error('package_imagee') is-invalid @enderror"
                                    name="package_imagee" value="" maxlength="12" minlength="1" autocomplete="package_imagee" autofocus multiple >

                                @error('package_imagee')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="package_status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="package_statuss" id="package_statuss">
                                    <option value="" hidden>{{ __('Select Status')}}</option>
                                    <option value="1">{{ __('Active')}}</option>
                                    <option value="0">{{ __('In Active')}}</option>
                                    
                                </select>
                                @error('package_statuss')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" id="addpage">{{ __('Update') }}</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>  
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>







