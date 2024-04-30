<div class="modal fade destination-modal-lg" id="destinationmodal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">{{ __('Destination Update Form') }}</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form method="POST" id="updateDestinationForm" enctype="multipart/form-data">
                        @csrf
                        
                        <input type="hidden" name="destinationid" id="destinationid">
                        <div class="row mb-3">
                            <label for="destination_name" class="col-md-4 col-form-label text-md-end">{{ __('Destination Name') }}</label>

                            <div class="col-md-6">
                            <select class="form-control" name="destination_namee" id="destination_namee">
                                    <option value="" hidden>{{ __('Select Destination Name')}}</option>
                                    <option value="beach tour">{{ __('Beach Tour')}}</option>
                                    <option value="island tour">{{ __('Island Tour')}}</option>
                                    <option value="forest tour">{{ __('Forest Tour')}}</option>
                                    <option value="forest tour">{{ __('Culture Tour')}}</option>
                                    <option value="spice tour">{{ __('Spice Tour')}}</option>
                                    <option value="hotel tour">{{ __('Hotel Tour')}}</option>    
                                </select>
                                <!-- <input id="destination_namee" type="text" class="form-control @error('destination_namee') is-invalid @enderror"
                                    name="destination_namee" value="" required autocomplete="destination_namee" autofocus> -->

                                @error('destination_namee')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="tittle" class="col-md-4 col-form-label text-md-end">{{ __('Destination Tittle') }}</label>

                            <div class="col-md-6">
                                <input id="tittlee" type="text" class="form-control @error('tittlee') is-invalid @enderror"
                                    name="tittlee" value="" required autocomplete="tittlee" autofocus>

                                @error('tittlee')
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
                            <label for="destination_image" class="col-md-4 col-form-label text-md-end">{{ __('Destination Image') }}</label>

                            <div class="col-md-6">
                                <input id="destination_imagee" type="file" class="form-control @error('destination_imagee') is-invalid @enderror"
                                    name="destination_imagee" value="" maxlength="12" minlength="1" autocomplete="destination_imagee" autofocus multiple >

                                @error('destination_imagee')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="destination_status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="destination_statuss" id="destination_statuss">
                                    <option value="" hidden>{{ __('Select Status')}}</option>
                                    <option value="1">{{ __('Active')}}</option>
                                    <option value="0">{{ __('In Active')}}</option>
                                    
                                </select>
                                @error('destination_statuss')
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







