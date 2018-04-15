<br/>
@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        {!! implode('', $errors->all(':message<br/>')) !!}
    </div>
@endif

@if ( session()->has( 'status' ) )
    <div class="alert alert-info" role="alert">
        <div>{{ session( 'status' ) }}</div>
    </div>
@endif
<br/>
