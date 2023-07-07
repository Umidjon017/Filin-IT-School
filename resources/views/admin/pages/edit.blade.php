<x-admin-layout>

    <x-slot name="title">
        {{ __('Edit Pages') }}
    </x-slot>

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <a href="{{ route('admin.pages.index') }}">
                        <button class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Назад') }} </button>
                    </a>

                    <h4>{{ __("Изменить") }}</h4>
                </div>

                <form action="{{ route('admin.pages.update', $page->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label> {{ __('Заголовок') }} </label>
                            <input type="text" class="form-control" name="title" value="{{ $page->title }}">
                            @error('title')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- <div class="form-group">
                            <label> {{ __('Description') }} </label>
                            <input type="text" class="form-control" name="description" value="{{ $page->description }}">
                            @error('description')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> --}}
                        <div class="form-group">
                            <label> {{ __('Текст') }} </label>
                            <textarea class="summernote" name="body"> {{ $page->body }} </textarea>
                            @error('body')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label> {{ __('Ссылка') }} </label>
                            <input type="text" class="form-control" name="url" value="{{ $page->url }}">
                            @error('url')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label> {{ __('Meta title') }} </label>
                            <input type="text" class="form-control" name="meta_title" value="{{ $page->meta_title }}">
                            @error('meta_title')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label> {{ __('Meta description') }} </label>
                            <input type="text" class="form-control" name="meta_description" value="{{ $page->meta_description }}">
                            @error('meta_description')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label> {{ __('Meta keywords') }} </label>
                            <input type="text" class="form-control" name="meta_keywords" value="{{ $page->meta_keywords }}">
                            @error('meta_keywords')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
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
