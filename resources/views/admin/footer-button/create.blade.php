<x-admin-layout>

    <x-slot name="title">
        {{ __('Add Footer Button') }}
    </x-slot>

    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <a href="{{ route('admin.footer-buttons.index') }}">
                        <button class="btn btn-info"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Назад') }} </button>
                    </a>

                    <h4>{{ __("Добавить кнопку") }}</h4>
                </div>

                <form action="{{ route('admin.footer-buttons.store') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label> {{ __('Текст') }} </label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter footer button name">
                            @error('name')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label> {{ __('Ссылка') }} </label>
                            <input type="url" class="form-control" name="url" value="{{ old('url') }}" placeholder="Enter footer button url">
                            @error('url')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label> {{ __('Порядковый номер') }} </label>
                            <input type="number" class="form-control" name="order" value="{{ old('order') }}" placeholder="Enter footer button order number">
                            @error('order')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="control-label"> {{ __('Status') }} </div>
                            <label class="custom-switch mt-2">
                                <input type="checkbox" class="custom-switch-input" name="status" checked>
                                <span class="custom-switch-indicator"></span>
                                {{-- <span class="custom-switch-description"> {{ __('Press to activate/inactivate the status') }} </span> --}}
                            </label>
                        </div>
                    </div>

                    <div class="card-footer text-right">
                        <button class="btn btn-primary mr-1" type="submit"> {{ __('Сохранить') }} </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-admin-layout>
