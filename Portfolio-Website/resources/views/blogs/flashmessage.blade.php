@if ($message= Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert"></button>
    <strong>{{ $message }}</strong>
</div>
@endif

{{-- Error messages --}}
{{-- @if($errors->any())
    <div class="alert alert-danger" role="alert">
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">x</span>
        </button>

        @foreach ($errors->all() as $error)
            {{$error}}<br>
        @endforeach
    </div> --}}

@if ($message = Session::get('error'))
    <div class="alert alert-danger role=:alert">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{$message}}</strong>
    </div>
    
@endif    
    