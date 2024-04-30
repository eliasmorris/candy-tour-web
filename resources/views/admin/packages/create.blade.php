<div class="modal fade package-page-modal-lg" id="packagemodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">{{ __('Package Input Form') }}</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form method="POST" id="addPackageForm" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="destionation" class="col-md-4 col-form-label text-md-end">{{ __('Destination') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="destionation" id="destination">
                                    <option value="" hidden>{{ __('Select Destionation')}}</option>
                                    
                                        @if(count([$destionationInfos]) > 0 )
                                        @foreach($destionationInfos as $destionationInfo)

                                            <option value="{{$destionationInfo->id}}">{{$destionationInfo->destination_name}}</option>

                                        @endforeach 
                                        @endif
                                </select>
                                @error('destination')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="package_name" class="col-md-4 col-form-label text-md-end">{{ __('Package Name') }}</label>

                            <div class="col-md-6">
                                <input id="package_name" type="text" class="form-control @error('package_name') is-invalid @enderror"
                                    name="package_name" value="" required autocomplete="package_name" autofocus>

                                @error('package_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="trip" class="col-md-4 col-form-label text-md-end">{{ __('Package Trip') }}</label>

                            <div class="col-md-6">
                                <input id="trip" type="text" class="form-control @error('trip') is-invalid @enderror"
                                    name="trip" value="" required autocomplete="trip" autofocus>

                                @error('trip')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="package_cost" class="col-md-4 col-form-label text-md-end">{{ __('Package Cost') }}</label>

                            <div class="col-md-6">
                                <input id="package_cost" type="number" class="form-control @error('package_cost') is-invalid @enderror"
                                    name="package_cost" value="" required autocomplete="package_cost" autofocus>

                                @error('package_cost')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="description" name="description" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="package_image" class="col-md-4 col-form-label text-md-end">{{ __('Package Image') }}</label>

                            <div class="col-md-6">
                                <input id="package_image" type="file" class="form-control @error('package_image') is-invalid @enderror"
                                    name="package_image" value="" maxlength="12" minlength="1" autocomplete="package_image" autofocus multiple >

                                @error('package_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="package_status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="package_status" id="package_status">
                                    <option value="" hidden>{{ __('Select Status')}}</option>
                                    <option value="1">{{ __('Active')}}</option>
                                    <option value="0">{{ __('In Active')}}</option>
                                    
                                </select>
                                @error('package_status')
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







