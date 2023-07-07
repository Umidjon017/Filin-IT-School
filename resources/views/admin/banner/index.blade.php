<x-admin-layout>

    <x-slot name="title">
        {{ __('Banners') }}
    </x-slot>

    <div class="row">
        <div class="col-10">
            <div class="card">

                <div class="card-header d-flex justify-content-between mt-2">
                    <h5>{{ __('Баннеры') }}</h5>
                    @if(count($banners)<1)
                    <a class="btn btn-primary" href="{{ route('admin.banners.create')}}"> {{ __('Добавить') }} </a>
                    @endif
                </div>

                <div class="card-body">
                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible show fade">
                            <div class="alert-body">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> <span>&times;</span> </button>
                                <h5> <i class="icon fas fa-check"></i> {{session('success')}} </h5>
                            </div>
                        </div>
                    @endif
                    @if (Session::has('warning'))
                        <div class="alert alert-danger alert-dismissible show fade">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> <span>&times;</span> </button>
                            <h5> <i class="icon fas fa-ban"></i> {{session('warning')}} </h5>
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-md">
                            <thead>
                            <tr>
                                <th>{{ __('#') }}</th>
                                <th>{{ __('Фото') }}</th>
                                <th>{{ __('Заголовок') }}</th>
                                <th>{{ __('Описание') }}</th>
                                {{-- <th>{{ __('Order') }}</th> --}}
                                <th class="text-center">{{ __('Действия') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($banners as $program)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ asset('/admin/images/banners/'.$program->image) }}" width="100px"></td>
                                    <td class="text-break">{{ $program->title }}</td>
                                    <td class="text-break">{{ $program->description }}</td>
                                    {{-- <td>{{ $program->order }}</td> --}}
                                    <td class="d-flex justify-content-center">
                                        {{-- <a class="btn btn-primary" href="{{route('admin.banners.show', $program->id)}}">
                                            <i class="fas fa-eye"></i>
                                        </a> --}}
                                        <a class="btn btn-warning ml-1" href="{{route('admin.banners.edit', $program->id)}}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{route('admin.banners.destroy', $program->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger ml-1">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card-footer text-right">
                    <nav class="d-inline-block">
                        <ul class="pagination mb-0">
                            {!! $banners->links() !!}
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>

</x-admin-layout>
