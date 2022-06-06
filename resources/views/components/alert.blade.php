<div class="alert alert-danger alert-dismissible" role="alert">
        @if(is_object($mensaje))
            <ul>
                @foreach ($mensaje->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @else
            {{ $mensaje }}
        @endif
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>