<div class="col-md-12">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div>
        @if(session('message'))


            <div class="m-alert m-alert--icon alert alert-{{ session('type')}}" role="alert">
                <div class="m-alert__icon">
                    <i class="flaticon-{{ session('type')}}"></i>
                </div>
                <div class="m-alert__text">
                    <strong>INFO:</strong> {{ session('message') }}
                </div>
                <div class="m-alert__actions" style="width: 220px;">
                    <button type="button" class="btn btn-outline-light btn-sm m-btn m-btn--hover-brand" data-dismiss="alert1" aria-label="Close">Dismiss
                    </button>
                </div>
            </div>

        @endif
    </div>
</div>