<x-admin-layout>

    <x-slot name="title">
        {{ __('Edit block after banner') }}
    </x-slot>

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <a href="{{ route('admin.block-text-one.index') }}">
                        <button class="btn btn-info"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Назад') }} </button>
                    </a>

                    <h4>{{ __("Изменить") }}</h4>
                </div>

                <form action="{{ route('admin.block-text-one.update', $blockTextOne->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        {{-- <div class="form-group">
                            <label for="title"> {{ __('Title') }} </label>
                            <input id="title" type="text" class="form-control" name="title" value="{{ $blockTextOne->title }}">
                            @error('title')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> --}}
                        <div class="form-group">
                            <label for="body"> {{ __('Текст') }} </label>
                            <textarea id="body" class="form-control" name="body"> {!! $blockTextOne->body !!} </textarea>
                            @error('body')
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
