<x-admin-layout>

    <x-slot name="title">
        {{ __('Add Pages') }}
    </x-slot>

    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <a href="{{ route('admin.pages.index') }}">
                        <button class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Back') }} </button>
                    </a>

                    <h4>{{ __("Add Pages") }}</h4>
                </div>

                <form action="{{ route('admin.pages.store') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label> {{ __('Title') }} </label>
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Enter page title">
                            @error('title')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label> {{ __('Description') }} </label>
                            <input type="text" class="form-control" name="description" value="{{ old('description') }}" placeholder="Enter page description">
                            @error('description')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label> {{ __('Body') }} </label>
                            <textarea class="summernote" name="body"> {{ old('body') }} </textarea>
                            @error('body')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label> {{ __('Url') }} </label>
                            <input type="text" class="form-control" name="url" value="{{ old('url') }}" placeholder="Enter page url">
                            @error('url')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label> {{ __('Meta title') }} </label>
                            <input type="text" class="form-control" name="meta_title" value="{{ old('meta_title') }}" placeholder="Enter page meta title">
                            @error('meta_title')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label> {{ __('Meta description') }} </label>
                            <input type="text" class="form-control" name="meta_description" value="{{ old('meta_description') }}" placeholder="Enter page meta description">
                            @error('meta_description')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label> {{ __('Meta keywords') }} </label>
                            <input type="text" class="form-control" name="meta_keywords" value="{{ old('meta_keywords') }}" placeholder="Enter page meta keywords">
                            @error('meta_keywords')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="card-footer text-right">
                        <button class="btn btn-primary mr-1" type="submit"> {{ __('Submit') }} </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-admin-layout>
