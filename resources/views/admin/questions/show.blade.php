<x-admin-layout>

    <x-slot name="title">
        {{ __('Questions') }}
    </x-slot>

    <div class="col-6">
        <div class="card">
            <div class="row mb-2 mt-2">
                <div class="card-header col-sm-6">
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('admin.questions.index') }}"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Назад') }} </button></a> &nbsp;
                        <a href="{{ route('admin.questions.edit', $question->id) }}"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square" aria-hidden="true"></i> {{ __('Редактировать') }} </button></a> &nbsp;
                        <form action="{{route('admin.questions.destroy', $question->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button  style="display: inline" type="submit" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash"  aria-hidden="true"></i> {{ __('Удалить') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <hr>
                <div class="d-flex justify-content-between">
                    <h5> {{ __('Имя') }} </h5>
                    <h6 class="text-break"> {{ $question->name }} </h6>
                </div> <hr>

                <div class="d-flex justify-content-between">
                    <h5> {{ __('Электронная почта') }} </h5>
                    <h6 class="text-break"> {{ $question->email }} </h6>
                </div> <hr>

                <div class="d-flex justify-content-between">
                    <h5> {{ __('Вопрос') }} </h5>
                    <h6 class="text-break"> {{ $question->question }} </h6>
                </div> <hr>

                <div class="d-flex justify-content-between">
                    <h5> {{ __('Ответ') }} </h5>
                    <h6 class="text-break"> {{ $question->answer }} </h6>
                </div> <hr>

                <div class="d-flex justify-content-between">
                    <h5> {{ __('Статус') }} </h5>
                    <h5>
                        @if($question->status == 1)
                            <span class="badge badge-success">{{ __('Активный') }}</span>
                        @else
                            <span class="badge badge-danger">{{ __('Неактивный') }}</span>
                        @endif
                    </h5>
                </div> <hr>
            </div>

        </div>
    </div>

</x-admin-layout>
