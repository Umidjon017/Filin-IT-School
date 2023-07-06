<x-admin-layout>

    <x-slot name="title">
        {{ __('Add Telephone Address') }}
    </x-slot>

    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <a href="{{ route('admin.telephone-address.index') }}">
                        <button class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Back') }} </button>
                    </a>

                    <h4>{{ __("Add Telephone Address") }}</h4>
                </div>

                <form action="{{ route('admin.telephone-address.store') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label> {{ __('Telephone number') }} </label>
                            <input type="text" class="form-control" name="telephone" value="{{ old('telephone') }}" placeholder="Enter your telephone number">
                            @error('telephone')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label> {{ __('Address') }} </label>
                            <input type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="Enter your address">
                            @error('address')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="card-footer text-right">
                        <button class="btn btn-primary mr-1" type="submit"> {{ __('Submit') }} </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-admin-layout>
