<div class="modal fade service-modal-lg" id="servicemodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">{{ __('Service Update Form') }}</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form method="POST" id="updateservicesForm" enctype="multipart/form-data">
                        @csrf

                        <input id="serviceid" type="hidden" name="serviceid" value="" >
                        <div class="row mb-3">
                            <label for="service_name" class="col-md-4 col-form-label text-md-end">{{ __('Service Name') }}</label>

                            <div class="col-md-6">
                                <input id="service_namee" type="text" class="form-control @error('service_namee') is-invalid @enderror"
                                    name="service_namee" value="" required autocomplete="service_namee" autofocus>

                                @error('service_namee')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="service_description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="service_descriptionn" name="service_descriptionn" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                @error('service_descriptionn')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="service_image" class="col-md-4 col-form-label text-md-end">{{ __('Service Image') }}</label>

                            <div class="col-md-6">
                                <input id="service_imagee" type="file" class="form-control @error('service_imagee') is-invalid @enderror"
                                    name="service_imagee" value="" maxlength="12" minlength="1" autocomplete="service_imagee" autofocus multiple >

                                @error('service_imagee')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="service_status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="service_statuss" id="service_statuss">
                                    <option value="" hidden>{{ __('Select Status')}}</option>
                                    <option value="1">{{ __('Active')}}</option>
                                    <option value="0">{{ __('In Active')}}</option>
                                    
                                </select>
                                @error('service_statuss')
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







