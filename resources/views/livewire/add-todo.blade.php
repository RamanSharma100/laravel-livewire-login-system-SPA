<div class="container">
    <h1 class="text-center display-3 py-5">Add Todo</h1>
    <div class="row">
        <div class="col-md-6 mx-auto p-5 shadow">
            <form wire:submit.prevent="handleTodo">
                <div class="form-group">
                    <input type="text" wire:model="todo" class="form-control" placeholder="Add Todo" />
                    @error("todo")  <p class="pt-2 px-1 text-danger">{{$message }}</p>  @enderror
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-block btn-dark" value="Add Todo" />
                </div>
            </form>
        </div>
    </div>
</div>
