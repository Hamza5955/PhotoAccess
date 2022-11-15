<div>
    {{-- The best athlete wants his opponent at his best. --}}

    <div class="card">
        @if(session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="card-header">
            <div class="d-flex justify-content-between text-small ml-1">
                <div class="mt-2">{{ __('Active Accident') }} {{ trans('global.list') }}</div>
                <div class="btn-toolbar">
                    <div class="row">
                        <div class="col">
                            <div class="form-inline">
                                <strong>Filter&nbsp;&nbsp;</strong>
                                <input type="text" class="form-control input-sm" wire:model="search">
                                <button type="button" class="btn btn-info my-1 btn-sm m-2" wire:click="resetSearch"><i
                                        class="cil-reload"></i> {{__('reset')}}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table-sm  table">
                </table>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row mt-4">
                @foreach($photos as $photo)

                    <div class="item col-sm-6 col-md-4 mb-3">
                        <a href="{{ $photo }}" class="fancybox" data-fancybox="gallery1">
                            <img src="{{ $photo }}" width="100%" height="100%">
                        </a>
                    </div>

                @endforeach

            </div>
        </div>
            {{ debug($photos) }}
    </div>
</div>
