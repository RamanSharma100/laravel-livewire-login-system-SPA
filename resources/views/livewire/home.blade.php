<div>
    @if(Session::has('success'))
        <div class="alert alert-success py-5 alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <h1>I am home</h1>
    Welcome, {{auth()->user()->name}}
</div>