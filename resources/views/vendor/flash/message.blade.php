 <div class="card bg-success">
        <div class="card-tools">

        <div class="card-tools">
@foreach (session('flash_notification', collect())->toArray() as $message)
    @if ($message['overlay'])
        @include('flash::modal', [
            'modalClass' => 'flash-modal',
            'title'      => $message['title'],
            'body'       => $message['message']
        ])
    @else
        <div class="alert
                    -{{ $message['level'] }}
                    {{ $message['important'] ? 'alert-important' : '' }}
                    alert-dismissible callout callout-success"
                    role="alert"

        >
            @if ($message['important'])
                <button type="button"
                        class="btn btn-tool"
                        data-dismiss="alert"

                        aria-hidden="true"
                >
               </button>
            @endif

            <button type="button"
            class="btn btn"
            data-card-widget="remove">
            {!! $message['message'] !!}
            {{-- <i class="fas fa-times"></i> --}}
        </button>

        </div>





    @endif
@endforeach
</div>
</div>
</div>


{{ session()->forget('flash_notification') }}





