<x-admin-layout>

    <x-slot name="title">
        {{ __('Header Buttons') }}
    </x-slot>

    <div class="row">
        <div class="col-10">
            <div class="card">

                <div class="card-header d-flex justify-content-between mt-2">
                    <h5>{{ __('Header Buttons') }}</h5>
                    <a class="btn btn-primary" href="{{ route('admin.header-button.create')}}"> {{ __('Add') }} </a>
                </div>

                <div class="card-body">
                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible show fade">
                            <div class="alert-body">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                    <span>&times;</span>
                                </button>
                                <h5>
                                    <i class="icon fas fa-check"></i>
                                    {{session('success')}}
                                </h5>
                            </div>
                        </div>
                    @endif
                    @if (Session::has('warning'))
                        <div class="alert alert-danger alert-dismissible show fade">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> <span>&times;</span> </button>
                            <h5>
                                <i class="icon fas fa-ban"></i>
                                {{session('warning')}}
                            </h5>
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-md">
                            <thead>
                                <tr>
                                    <th>{{ __('#') }}</th>
                                    <th>{{ __('Name') }}</th>
                                    <th>{{ __('Url') }}</th>
                                    <th>{{ __('Order') }}</th>
                                    <th>{{ __('Status') }}</th>
                                    <th>{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($headerButtons as $button)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $button->name }}</td>
                                    <td class="text-break">{{ $button->url }}</td>
                                    <td>{{ $button->order }}</td>
                                    <td>
                                        @if($button->status == 1)
                                            <div class="badge badge-success">Active</div>
                                        @else
                                            <div class="badge badge-danger">Inactive</div>
                                        @endif
                                    </td>
                                    <td class="d-flex justify-content-center">
                                        <a class="btn btn-primary" href="{{route('admin.header-button.show', $button->id)}}">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a class="btn btn-warning" href="{{route('admin.header-button.edit', $button->id)}}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{route('admin.header-button.destroy', $button->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
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
                            {!! $headerButtons->onEachSide(5)->links() !!}
                        </ul>
                    </nav>
                </div>

{{--                <div class="card-footer text-right">--}}
{{--                    <nav class="d-inline-block">--}}
{{--                        <ul class="pagination mb-0">--}}
{{--                            <li class="page-item disabled">--}}
{{--                                <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>--}}
{{--                            </li>--}}
{{--                            <li class="page-item active"><a class="page-link" href="#">1 <span--}}
{{--                                        class="sr-only">(current)</span></a></li>--}}
{{--                            <li class="page-item">--}}
{{--                                <a class="page-link" href="#">2</a>--}}
{{--                            </li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                            <li class="page-item">--}}
{{--                                <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </nav>--}}
{{--                </div>--}}

            </div>
        </div>
    </div>

</x-admin-layout>
