<x-admin-layout>

    <x-slot name="title">
        {{ __('Edit Pages') }}
    </x-slot>

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <a href="{{ route('admin.pages.index') }}">
                        <button class="btn btn-info"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Назад') }} </button>
                    </a>

                    <h4>{{ __("Редактировать страницу") }}</h4>
                </div>

                <form action="{{ route('admin.pages.update', $page->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title"> {{ __('Заголовок') }} </label>
                            <input id="title" type="text" class="form-control" name="title" value="{{ $page->title }}">
                            @error('title')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- <div class="form-group">
                            <label for="description"> {{ __('Description') }} </label>
                            <input id="description" type="text" class="form-control" name="description" value="{{ $page->description }}">
                            @error('description')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> --}}
                        <div class="form-group">
                            <label for="body"> {{ __('Текст') }} </label>
                            <textarea id="body" class="summernote" name="body"> {{ $page->body }} </textarea>
                            @error('body')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="url"> {{ __('Ссылка') }} </label>
                            <input id="url" type="text" class="form-control" name="url" value="{{ $page->url }}">
                            @error('url')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="control-label"> {{ __('Статус') }} </div>
                            <label for="status" class="custom-switch mt-2">
                                <input id="status" type="checkbox" class="custom-switch-input" name="status" @if($page->status == 1) checked @endif>
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="images" class="form-label"> {{ __('Изображения') }} </label>
                                    <input id="images" type="file" name="images[]" multiple class="form-control" value="{{ $page->images }}">
                                    @error('images')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-6">
                                <div>
                                    @foreach($page->images as $image)
                                        <img src="{{ asset('/admin/images/pages/'.$image['image']) }}" width="33%" alt="Image">
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="meta_title"> {{ __('Мета-заголовок') }} </label>
                            <input id="meta_title" type="text" class="form-control" name="meta_title" value="{{ $page->meta_title }}">
                            @error('meta_title')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="meta_description"> {{ __('Мета-описание') }} </label>
                            <input id="meta_description" type="text" class="form-control" name="meta_description" value="{{ $page->meta_description }}">
                            @error('meta_description')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="meta_keywords"> {{ __('Мета-ключевые слова') }} </label>
                            <input id="meta_keywords" type="text" class="form-control" name="meta_keywords" value="{{ $page->meta_keywords }}">
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
