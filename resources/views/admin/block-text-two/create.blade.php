<x-admin-layout>

    <x-slot name="title">
        {{ __('Add Block Text Two') }}
    </x-slot>

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <a href="{{ route('admin.block-text-two.index') }}">
                        <button class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Back') }} </button>
                    </a>

                    <h4>{{ __("Добавить") }}</h4>
                </div>

                <form action="{{ route('admin.block-text-two.store') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label> {{ __('Заголовок') }} </label>
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Enter block title">
                            @error('title')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label> {{ __('Текст') }} </label>
                            <textarea class="summernote" name="body"> {{ old('body') }} </textarea>
                            @error('body')
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
