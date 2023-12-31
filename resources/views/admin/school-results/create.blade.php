<x-admin-layout>

    <x-slot name="title">
        {{ __('Add School Results') }}
    </x-slot>

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <a href="{{ route('admin.school-results.index') }}">
                        <button class="btn btn-info"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Назад') }} </button>
                    </a>

                    <h4>{{ __("Добавить Результаты университета") }}</h4>
                </div>

                <form action="{{ route('admin.school-results.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="icon"> {{ __('Icon') }} </label>
                            <input id="icon" type="file" class="form-control" name="icon">
                            @error('icon')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title"> {{ __('Заголовок') }} </label>
                            <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Введите название результата университета">
                            @error('title')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description"> {{ __('Текст') }} </label>
                            <textarea id="description" class="summernote" name="description"> {{ old('description') }} </textarea>
                            @error('description')
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
