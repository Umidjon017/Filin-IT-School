<x-admin-layout>

    <x-slot name="title">
        {{ __('Pages') }}
    </x-slot>

    <div class="col-10">
        <div class="card">
            <div class="row mb-2 mt-2">
                <div class="card-header col-md-6 col-sm-12">
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('admin.pages.index') }}"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Назад') }} </button></a> &nbsp;
                        <a href="{{ route('admin.pages.edit', $page->id) }}"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square" aria-hidden="true"></i> {{ __('Редактировать') }} </button></a> &nbsp;
                        <form action="{{route('admin.pages.destroy', $page->id)}}" method="post">
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
                            <h6 class="text-break"> {{ $page->title }} </h6>
                        </div> <hr>

{{--                        <div class="d-flex justify-content-between">--}}
{{--                            <h5> {{ __('Описание') }} </h5>--}}
{{--                            <h6 class="text-break"> {{ $page->description }} </h6>--}}
{{--                        </div> <hr>--}}

                        <div class="d-flex justify-content-between">
                            <h5> {{ __('Текст') }} </h5>
                            <h6 class="text-break"> {!! $page->body !!} </h6>
                        </div> <hr>

                        <div class="d-flex justify-content-between">
                            <h5> {{ __('Ссылка') }} </h5>
                            <h6 class="text-break"> {{ $page->url }} </h6>
                        </div> <hr>

                        <div class="d-flex justify-content-between">
                            <h5> {{ __('Статус') }} </h5>
                            <h5>
                                @if($page->status == 1)
                                    <span class="badge badge-success">{{ __('Активный') }}</span>
                                @else
                                    <span class="badge badge-danger">{{ __('Неактивный') }}</span>
                                @endif
                            </h5>
                        </div> <hr>

                        <div class="d-flex justify-content-between">
                            <h5> {{ __('Мета-заголовок') }} </h5>
                            <h6 class="text-break"> {{ $page->meta_title }} </h6>
                        </div> <hr>

                        <div class="d-flex justify-content-between">
                            <h5> {{ __('Мета-описание') }} </h5>
                            <h6 class="text-break"> {{ $page->meta_description }} </h6>
                        </div> <hr>

                        <div class="d-flex justify-content-between">
                            <h5> {{ __('Мета-ключевые слова') }} </h5>
                            <h6 class="text-break"> {{ $page->meta_keywords }} </h6>
                        </div> <hr>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <h2 class="text-center"> {{ __('Изображения') }} </h2>
                        <div class="d-flex flex-wrap">
                            @foreach($page->images as $image)
                            <img src="{{ asset('/admin/images/pages/'.$image['image']) }}" width="33%" alt="Изображения">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</x-admin-layout>
