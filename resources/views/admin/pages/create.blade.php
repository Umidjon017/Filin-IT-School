<x-admin-layout>

    <x-slot name="title">
        {{ __('Add Pages') }}
    </x-slot>

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <a href="{{ route('admin.pages.index') }}">
                        <button class="btn btn-info"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Назад') }} </button>
                    </a>

                    <h4>{{ __("Добавить страницу") }}</h4>
                </div>

                <form action="{{ route('admin.pages.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title"> {{ __('Заголовок') }} </label>
                            <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Введите название страницы">
                            @error('title')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- <div class="form-group">
                            <label for="description"> {{ __('Описание') }} </label>
                            <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" placeholder="Enter page description">
                            @error('description')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> --}}
                        <div class="form-group">
                            <label for="body"> {{ __('Текст') }} </label>
                            <textarea id="body" class="summernote" name="body"> {{ old('body') }} </textarea>
                            @error('body')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="url"> {{ __('Ссылка') }} </label>
                            <input id="url" type="text" class="form-control" name="url" value="{{ old('url') }}" placeholder="Введите адрес страницы">
                            @error('url')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label for="images" class="form-label"> {{ __('Изображения') }} </label>--}}
{{--                            <input id="images" type="file" name="images[]" multiple class="form-control" placeholder="Выберите изображения">--}}
{{--                            @error('images')--}}
{{--                            <div class="alert alert-danger">--}}
{{--                                {{ $message }}--}}
{{--                            </div>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
                        <div class="form-group">
                            <div class="control-label"> {{ __('Статус') }} </div>
                            <label class="custom-switch mt-2">
                                <input type="checkbox" class="custom-switch-input" name="status">
                                <span class="custom-switch-indicator"></span>
                                {{-- <span class="custom-switch-description"> {{ __('Press to activate/inactivate the status') }} </span> --}}
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="meta_title"> {{ __('Мета-заголовок') }} </label>
                            <input id="meta_title" type="text" class="form-control" name="meta_title" value="{{ old('meta_title') }}" placeholder="Введите метазаголовок страницы">
                            @error('meta_title')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="meta_description"> {{ __('Мета-описание') }} </label>
                            <input id="meta_description" type="text" class="form-control" name="meta_description" value="{{ old('meta_description') }}" placeholder="Введите метаописание страницы">
                            @error('meta_description')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="meta_keywords"> {{ __('Мета ключевые слова') }} </label>
                            <input id="meta_keywords" type="text" class="form-control" name="meta_keywords" value="{{ old('meta_keywords') }}" placeholder="Введите мета-ключевые слова страницы">
                            @error('meta_keywords')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
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
