<x-admin-layout>

    <x-slot name="title">
        {{ __('Edit Training Program') }}
    </x-slot>

    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <a href="{{ route('admin.training-program.index') }}">
                        <button class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Back') }} </button>
                    </a>

                    <h4>{{ __("Edit Training Program") }}</h4>
                </div>

                <form action="{{ route('admin.training-program.update', $trainingProgram->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label> {{ __('Name') }} </label>
                            <input type="text" class="form-control" name="name" value="{{ $trainingProgram->name }}" placeholder="Enter header button name">
                            @error('name')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label> {{ __('Order Number') }} </label>
                            <input type="number" class="form-control" name="order" value="{{ $trainingProgram->order }}" placeholder="Enter header button order number">
                            @error('order')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="control-label"> {{ __('Status') }} </div>
                            <label class="custom-switch mt-2">
                                <input type="checkbox" class="custom-switch-input" name="status" @if($trainingProgram->status == 1) checked @endif>
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description"> {{ __('Press to activate/inactivate the status') }} </span>
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label> {{ __('Icon') }} </label>
                                    <input type="file" class="form-control" name="icon" value="{{ $trainingProgram->icon }}">
                                    @error('icon')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-6">
                                <div>
                                    <img src="/admin/images/training-program/{{ $trainingProgram->icon }}" width="100%">
                                </div>
                            </div>
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
