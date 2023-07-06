<x-admin-layout>

    <x-slot name="title">
        {{ __('Banners') }}
    </x-slot>

    <div class="col-8">
        <div class="card">
            <div class="row mb-2 mt-2">
                <div class="card-header col-md-6 col-sm-12">
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('admin.banners.index') }}"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Back') }} </button></a> &nbsp;
                        <a href="{{ route('admin.banners.edit', $banner->id) }}"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square" aria-hidden="true"></i> {{ __('Edit') }} </button></a> &nbsp;
                        <form action="{{route('admin.banners.destroy', $banner->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button  style="display: inline" type="submit" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash"  aria-hidden="true"></i> {{ __('Delete') }}
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
                            <h5> {{ __('Title') }} </h5>
                            <h6> {{ $banner->title }} </h6>
                        </div> <hr>

                        <div class="d-flex justify-content-between">
                            <h5> {{ __('Description') }} </h5>
                            <h6 class="w-75"> {{ $banner->description }} </h6>
                        </div> <hr>

                        <div class="d-flex justify-content-between">
                            <h5> {{ __('Order Number') }} </h5>
                            <h6> {{ $banner->order }} </h6>
                        </div> <hr>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <h2 class="text-center"> {{ __('Image') }} </h2>
                        <div>
                            <img src="/admin/images/banners/{{ $banner->image }}" width="100%">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</x-admin-layout>
