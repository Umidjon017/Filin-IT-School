<x-admin-layout>

    <x-slot name="title">
        {{ __('Add Banners') }}
    </x-slot>

    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <a href="{{ route('admin.banners.index') }}">
                        <button class="btn btn-info"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Назад') }} </button>
                    </a>

                    <h4>{{ __("Добавить баннер") }}</h4>
                </div>

                <form action="{{ route('admin.banners.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="image"> {{ __('Фон') }} </label>
                            <input id="image" type="file" class="form-control" name="image">
                            @error('image')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title"> {{ __('Заголовок') }} </label>
                            <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Введите название баннера">
                            @error('title')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description"> {{ __('Описание') }} </label>
                            <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" placeholder="Введите описание баннера">
                            @error('description')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- <div class="form-group">
                            <label for=order_number> {{ __('Порядковый номер') }} </label>
                            <input id=order_number type="number" class="form-control" name="order" value="{{ old('order') }}" placeholder="Введите серийный номер баннера">
                            @error('order')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> --}}
                    </div>

                    <div class="card-footer text-right">
                        <button class="btn btn-primary mr-1" type="submit"> {{ __('Сохранить') }} </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-admin-layout>
