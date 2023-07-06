<x-admin-layout>

    <x-slot name="title">
        {{ __('Block Text Two') }}
    </x-slot>

    <div class="row">
        <div class="col-10">
            <div class="card">

                <div class="card-header d-flex justify-content-between mt-2">
                    <h5>{{ __('Block Text Two') }}</h5>
                    <a class="btn btn-primary" href="{{ route('admin.block-text-two.create')}}"> {{ __('Add') }} </a>
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
                                <th>{{ __('Title') }}</th>
                                <th class="text-break">{{ __('Body') }}</th>
                                <th class="text-center">{{ __('Action') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($blockTextTwo as $block)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $block->title }}</td>
                                    <td>{!! $block->body !!}</td>
                                    <td class="d-flex justify-content-center">
                                        <a class="btn btn-primary" href="{{route('admin.block-text-two.show', $block->id)}}">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a class="btn btn-warning ml-1" href="{{route('admin.block-text-two.edit', $block->id)}}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{route('admin.block-text-two.destroy', $block->id)}}" method="post">
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
                            {!! $blockTextTwo->links() !!}
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>

</x-admin-layout>