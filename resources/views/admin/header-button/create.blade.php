<x-admin-layout>

    <x-slot name="title">
        {{ __('Add Header Button') }}
    </x-slot>

    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <a href="{{ route('admin.header-button.index') }}">
                        <button class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Back') }} </button>
                    </a>

                    <h4>{{ __("Add Header Button") }}</h4>
                </div>

                <form action="{{ route('admin.header-button.store') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter header button name">
                            @error('name')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Url</label>
                            <input type="url" class="form-control" name="url" value="{{ old('url') }}" placeholder="Enter header button url">
                            @error('url')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Order Number</label>
                            <input type="number" class="form-control" name="order" value="{{ old('order') }}" placeholder="Enter header button order number">
                            @error('order')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="control-label">Status</div>
                            <label class="custom-switch mt-2">
                                <input type="checkbox" class="custom-switch-input" name="status" value="{{ old('status') }}">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">Press to activate/inactivate the status</span>
                            </label>
                        </div>
                    </div>

                    <div class="card-footer text-right">
                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-admin-layout>
