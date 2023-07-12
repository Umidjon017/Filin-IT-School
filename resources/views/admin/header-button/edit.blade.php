<x-admin-layout>

    <x-slot name="title">
        {{ __('Edit Header Button') }}
    </x-slot>

    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <a href="{{ route('admin.header-buttons.index') }}">
                        <button class="btn btn-info"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Назад') }} </button>
                    </a>

                    <h4>{{ __("Изменения кнопки") }}</h4>
                </div>

                <form action="{{ route('admin.header-buttons.update', $headerButton->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name"> {{ __('Текст') }} </label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ $headerButton->name }}">
                            @error('name')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="url"> {{ __('Ссылка') }} </label>
                            <input id="url" type="url" class="form-control" name="url" value="{{ $headerButton->url }}">
                            @error('url')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="order_number"> {{ __('Порядковый номер') }} </label>
                            <input id="order_number" type="number" class="form-control" name="order" value="{{ $headerButton->order }}">
                            @error('order')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="control-label"> {{ __('Статус') }} </div>
                            <label for="status" class="custom-switch mt-2">
                                <input id="status" type="checkbox" class="custom-switch-input" name="status" @if($headerButton->status == 1) checked @endif>
                                <span class="custom-switch-indicator"></span>

                            </label>
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
