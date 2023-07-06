<x-admin-layout>

    <x-slot name="title">
        {{ __('Pages') }}
    </x-slot>

    <div class="col-8">
        <div class="card">
            <div class="row mb-2 mt-2">
                <div class="card-header col-md-6 col-sm-12">
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('admin.pages.index') }}"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Back') }} </button></a> &nbsp;
                        <a href="{{ route('admin.pages.edit', $page->id) }}"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square" aria-hidden="true"></i> {{ __('Edit') }} </button></a> &nbsp;
                        <form action="{{route('admin.pages.destroy', $page->id)}}" method="post">
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
                <div class="d-flex justify-content-between">
                    <h5> {{ __('Title') }} </h5>
                    <h6 class="text-break"> {{ $page->title }} </h6>
                </div> <hr>

                <div class="d-flex justify-content-between">
                    <h5> {{ __('Description') }} </h5>
                    <h6 class="text-break"> {{ $page->description }} </h6>
                </div> <hr>

                <div class="d-flex justify-content-between">
                    <h5> {{ __('Body') }} </h5>
                    <h6 class="text-break"> {!! $page->body !!} </h6>
                </div> <hr>

                <div class="d-flex justify-content-between">
                    <h5> {{ __('Url') }} </h5>
                    <h6 class="text-break"> {{ $page->url }} </h6>
                </div> <hr>

                <div class="d-flex justify-content-between">
                    <h5> {{ __('Meta title') }} </h5>
                    <h6 class="text-break"> {{ $page->meta_title }} </h6>
                </div> <hr>

                <div class="d-flex justify-content-between">
                    <h5> {{ __('Meta description') }} </h5>
                    <h6 class="text-break"> {{ $page->meta_description }} </h6>
                </div> <hr>

                <div class="d-flex justify-content-between">
                    <h5> {{ __('Meta keywords') }} </h5>
                    <h6 class="text-break"> {{ $page->meta_keywords }} </h6>
                </div> <hr>
            </div>

        </div>
    </div>

</x-admin-layout>
