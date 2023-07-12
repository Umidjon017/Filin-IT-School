<x-admin-layout>

    <x-slot name="title">
        {{ __('Footer Buttons') }}
    </x-slot>

    <div class="col-6">
        <div class="card">
            <div class="row mb-2 mt-2">
                <div class="card-header col-sm-6">
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('admin.footer-buttons.index') }}"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Назад') }} </button></a> &nbsp;
                        <a href="{{ route('admin.footer-buttons.edit', $footerButton->id) }}"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square" aria-hidden="true"></i> {{ __('Редактировать') }} </button></a> &nbsp;
                        <form action="{{route('admin.footer-buttons.destroy', $footerButton->id)}}" method="post">
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
                    <h5> {{ __('Название') }} </h5>
                    <h6 class="text-break"> {{ $footerButton->name }} </h6>
                </div> <hr>

                <div class="d-flex justify-content-between">
                    <h5> {{ __('Ссылка') }} </h5>
                    <h6 class="text-break"> {{ $footerButton->url }} </h6>
                </div> <hr>

                <div class="d-flex justify-content-between">
                    <h5> {{ __('Порядковый номер') }} </h5>
                    <h6> {{ $footerButton->order }} </h6>
                </div> <hr>

                <div class="d-flex justify-content-between">
                    <h5> {{ __('Статус') }} </h5>
                    <h5>
                        @if($footerButton->status == 1)
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
