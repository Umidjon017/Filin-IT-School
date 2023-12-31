<x-admin-layout>

    <x-slot name="title">
        {{ __('Edit Banner') }}
    </x-slot>

    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <a href="{{ route('admin.banners.index') }}">
                        <button class="btn btn-info"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Назад') }} </button>
                    </a>

                    <h4>{{ __("Изменить баннер") }}</h4>
                </div>

                <form action="{{ route('admin.banners.update', $banner->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title"> {{ __('Заголовок') }} </label>
                            <input id="title" type="text" class="form-control" name="title" value="{{ $banner->title }}">
                            @error('title')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description"> {{ __('Описание') }} </label>
                            <input id="description" type="text" class="form-control" name="description" value="{{ $banner->description }}">
                            @error('description')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- <div class="form-group">
                            <label> {{ __('Порядковый номер') }} </label>
                            <input type="number" class="form-control" name="order" value="{{ $banner->order }}">
                            @error('order')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> --}}

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="image"> {{ __('Image') }} </label>
                                    <input id="image" type="file" class="form-control" name="image" value="{{ $banner->image }}">
                                    @error('image')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-6">
                                <div>
                                    <img src="{{ asset('/admin/images/banners/'.$banner->image) }}" width="100%" alt="Фото">
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
