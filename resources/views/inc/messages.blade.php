@if(session('success'))
    <div class="alert alert-succes">
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-dang">
        {{session('error')}}
    </div>
@endif


{{-- @if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif --}}