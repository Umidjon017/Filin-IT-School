<x-admin-layout>

    <x-slot name="title">
        {{ __('Edit Question') }}
    </x-slot>

    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <a href="{{ route('admin.questions.index') }}">
                        <button class="btn btn-info"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Назад') }} </button>
                    </a>

                    <h4>{{ __("Изменения Вопрос") }}</h4>
                </div>

                <form action="{{ route('admin.questions.update', $question->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name"> {{ __('Имя') }} </label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ $question->name }}">
                            @error('name')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email"> {{ __('Электронная почта') }} </label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ $question->email }}">
                            @error('email')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="question"> {{ __('Вопрос') }} </label>
                            <input id="question" type="text" class="form-control" name="question" value="{{ $question->question }}">
                            @error('question')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="answer"> {{ __('Ответ') }} </label>
                            <input id="answer" type="text" class="form-control" name="answer" value="{{ $question->answer }}">
                            @error('answer')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="control-label"> {{ __('Статус') }} </div>
                            <label for="status" class="custom-switch mt-2">
                                <input id="status" type="checkbox" class="custom-switch-input" name="status" @if($question->status == 1) checked @endif>
                                <span class="custom-switch-indicator"></span>
                                {{-- <span class="custom-switch-description"> {{ __('Press to activate/inactivate the status') }} </span> --}}
                            </label>
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
