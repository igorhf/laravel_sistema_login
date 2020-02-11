@isset($msg)
    @if (!empty($msg))
        <div class="alert alert-info">
            <p>{{ $msg }}</p>
        </div>
    @endif
@endisset

@isset($msg_erro)
    @if (!empty($msg_erro))
        <div class="alert alert-danger">
            <p>{{ $msg_erro }}</p>
        </div>
    @endif    
@endisset