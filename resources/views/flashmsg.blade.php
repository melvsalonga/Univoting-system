@if(session('flashMessage'))
        <div class="container mt-3 text-center alert alert-success">
        {{session('flashMessage')}}
        </div>
@endif

@if(session('flashMessageRed'))
        <div class="container mt-3 text-center alert alert-danger">
        {{session('flashMessageRed')}}
        </div>
@endif