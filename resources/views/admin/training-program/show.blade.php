<x-admin-layout>

    <x-slot name="title">
        {{ __('Training Programs') }}
    </x-slot>

    <div class="col-8">
        <div class="card">
            <div class="row mb-2 mt-2">
                <div class="card-header col-sm-6">
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('admin.training-program.index') }}"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Back') }} </button></a> &nbsp;
                        <a href="{{ route('admin.training-program.edit', $trainingProgram->id) }}"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square" aria-hidden="true"></i> {{ __('Edit') }} </button></a> &nbsp;
                        <form action="{{route('admin.training-program.destroy', $trainingProgram->id)}}" method="post">
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
                    <div class="col-6">
                        <div class="d-flex justify-content-between">
                            <h5> {{ __('Name') }} </h5>
                            <h6> {{ $trainingProgram->name }} </h6>
                        </div> <hr>

                        <div class="d-flex justify-content-between">
                            <h5> {{ __('Order Number') }} </h5>
                            <h6> {{ $trainingProgram->order }} </h6>
                        </div> <hr>

                        <div class="d-flex justify-content-between">
                            <h5> {{ __('Status') }} </h5>
                            <h5>
                                @if($trainingProgram->status == 1)
                                    <span class="badge badge-success">{{ __('Active') }}</span>
                                @else
                                    <span class="badge badge-danger">{{ __('Inactive') }}</span>
                                @endif
                            </h5>
                        </div> <hr>
                    </div>

                    <div class="col-6">
                        <div class="d-flex justify-content-center">
                            <h2> {{ __('Icon') }} </h2>
                            <div>
                                <img src="/admin/images/training-program/{{ $trainingProgram->icon }}" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</x-admin-layout>
