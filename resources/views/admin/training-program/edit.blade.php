<x-admin-layout>

    <x-slot name="title">
        {{ __('Edit Training Program') }}
    </x-slot>

    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <a href="{{ route('admin.training-programs.index') }}">
                        <button class="btn btn-info"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Назад') }} </button>
                    </a>

                    <h4>{{ __("Изменить программу") }}</h4>
                </div>

                <form action="{{ route('admin.training-programs.update', $trainingProgram->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name"> {{ __('Название') }} </label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ $trainingProgram->name }}">
                            @error('name')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="url"> {{ __('Ссылка') }} </label>
                            <input id="url" type="text" class="form-control" name="url" value="{{ $trainingProgram->url }}">
                            @error('url')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="order"> {{ __('Порядковый номер') }} </label>
                            <input id="order" type="number" class="form-control" name="order" value="{{ $trainingProgram->order }}">
                            @error('order')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="control-label"> {{ __('Status') }} </div>
                            <label for="status" class="custom-switch mt-2">
                                <input id="status" type="checkbox" class="custom-switch-input" name="status" @if($trainingProgram->status == 1) checked @endif>
                                <span class="custom-switch-indicator"></span>
                                {{-- <span class="custom-switch-description"> {{ __('Press to activate/inactivate the status') }} </span> --}}
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="icon"> {{ __('Иконка') }} </label>
                                    <input id="icon" type="file" class="form-control" name="icon" value="{{ $trainingProgram->icon }}">
                                    @error('icon')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-6">
                                <div>
                                    <img src="{{ asset('/admin/images/training-programs/'.$trainingProgram->icon) }}" width="100%" alt="icon">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer text-right">
                        <button class="btn btn-primary mr-1" type="submit">{{ __('Сохранить') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-admin-layout>
