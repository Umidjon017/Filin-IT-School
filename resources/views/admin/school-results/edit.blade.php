<x-admin-layout>

    <x-slot name="title">
        {{ __('Edit School Results') }}
    </x-slot>

    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <a href="{{ route('admin.school-results.index') }}">
                        <button class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Back') }} </button>
                    </a>

                    <h4>{{ __("Изменить") }}</h4>
                </div>

                <form action="{{ route('admin.school-results.update', $schoolResult->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label> {{ __('Заголовок') }} </label>
                            <input type="text" class="form-control" name="title" value="{{ $schoolResult->title }}">
                            @error('title')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label> {{ __('Текст') }} </label>
                            <textarea class="summernote" name="description"> {{ $schoolResult->description }} </textarea>
                            @error('description')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label> {{ __('Icon') }} </label>
                                    <input type="file" class="form-control" name="icon" value="{{ $schoolResult->icon }}">
                                    @error('icon')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-6">
                                <div>
                                    <img src="{{ asset('/admin/images/school-results/'.$schoolResult->icon) }}" width="100%">
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
