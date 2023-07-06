<x-admin-layout>

    <x-slot name="title">
        {{ __('Edit Telephone Addresses') }}
    </x-slot>

    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <a href="{{ route('admin.telephone-address.index') }}">
                        <button class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Back') }} </button>
                    </a>

                    <h4>{{ __("Edit Telephone Addresses") }}</h4>
                </div>

                <form action="{{ route('admin.telephone-address.update', $telephoneAddress->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label> {{ __('Telephone number') }} </label>
                            <input type="text" class="form-control" name="telephone" value="{{ $telephoneAddress->telephone }}">
                            @error('telephone')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label> {{ __('Address') }} </label>
                            <input type="text" class="form-control" name="address" value="{{ $telephoneAddress->address }}">
                            @error('address')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="card-footer text-right">
                        <button class="btn btn-primary mr-1" type="submit">{{ __('Save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-admin-layout>
