<x-admin-layout>

    <x-slot name="title">
        {{ __('Block Text Two') }}
    </x-slot>

    <div class="col-8">
        <div class="card">
            <div class="row mb-2 mt-2">
                <div class="card-header col-md-6 col-sm-12">
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('admin.block-text-two.index') }}"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Назад') }} </button></a> &nbsp;
                        <a href="{{ route('admin.block-text-two.edit', $blockTextTwo->id) }}"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square" aria-hidden="true"></i> {{ __('Редактировать') }} </button></a> &nbsp;
                        <form action="{{route('admin.block-text-two.destroy', $blockTextTwo->id)}}" method="post">
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
                    <h5> {{ __('Заголовок') }} </h5>
                    <h6 class="text-break"> {{ $blockTextTwo->title }} </h6>
                </div> <hr>

                <div class="d-flex justify-content-between">
                    <h5> {{ __('Текст') }} </h5>
                    <h6 class="text-break"> {!! $blockTextTwo->body !!} </h6>
                </div> <hr>
            </div>

        </div>
    </div>

</x-admin-layout>
