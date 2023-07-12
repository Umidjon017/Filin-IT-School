<x-admin-layout>

    <x-slot name="title">
        {{ __('Banners') }}
    </x-slot>

    <div class="col-8">
        <div class="card">
            <div class="row mb-2 mt-2">
                <div class="card-header col-md-6 col-sm-12">
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('admin.banners.index') }}"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Назад') }} </button></a> &nbsp;
                        <a href="{{ route('admin.banners.edit', $banner->id) }}"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square" aria-hidden="true"></i> {{ __('Редактировать') }} </button></a> &nbsp;
                        <form action="{{route('admin.banners.destroy', $banner->id)}}" method="post">
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
                <div class="row d-flex justify-content-between">
                    <div class="col-md-6 col-sm-12">
                        <div class="d-flex justify-content-between">
                            <h5> {{ __('Заголовок') }} </h5>
                            <h6 class="text-break"> {{ $banner->title }} </h6>
                        </div> <hr>

                        <div class="d-flex justify-content-between">
                            <h5> {{ __('Описание') }} </h5>
                            <h6 class="text-break"> {{ $banner->description }} </h6>
                        </div> <hr>

                        <div class="d-flex justify-content-between">
                            <h5> {{ __('Серийный номер') }} </h5>
                            <h6> {{ $banner->order }} </h6>
                        </div> <hr>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <h2 class="text-center"> {{ __('Image') }} </h2>
                        <div>
                            <img src="{{ asset('/admin/images/banners/'.$banner->image) }}" width="100%" alt="Image">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</x-admin-layout>
