<div class="container">
    @if(Session::has('success'))
        <div class="alert alert-success w-75 mx-auto my-3 alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="row">
        <div class="col-md-12 mt-4 mb-5 text-right">
            <a href="/addTodo" class="btn btn-outline-dark">Add Todo</a>
        </div>
        <div class="col-md-10 mx-auto">

        </div>
    </div>

    <table class="table table-hover">
        <thead class="bg-dark text-white">
            <tr>
                <td scope="col">#</td>
                <td scope="col">Todo</td>
                <td scope="col">Created At</td>
                <td scope="col">Action</td>
            </tr>
        </thead>
        <tbody>

            @if (count($todos->get()) == 0)
                <tr>
                    <td colspan="4" class="text-center">No todos found</td>
                </tr>
                @else
                @foreach ($todos->get() as $key => $todo)
                
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$todo->todo}}</td>
                        <td>{{date('d-m-Y h:i:s a', strtotime($todo->created_at))}}</td>
                        <td>
                            <a href="/todo/edit/{{$todo->id}}" class="btn btn-primary btn-sm mr-2">Edit</a>
                            <button type="button" wire:click="deleteTodo({{intval($todo->id)}})" class="btn btn-danger btn-sm mr-2">Delete</button>
                        </td>
                    </tr>

                @endforeach
        
            @endif
        </tbody>
    </table>


</div>