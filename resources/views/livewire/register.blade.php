<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto p-4 px-5 mt-5">
            <form wire:submit.prevent="handleRegister">
                <p class="display-3 text-center">Register</p>
                <hr class="bg-white"/>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name" wire:model="form.name" />
                    @error("form.name")  <p class="pt-2 px-1 text-danger">{{ 
                    str_replace('form.name', 'name', $message) }}</p>  @enderror
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" wire:model="email"  />
                    @error("email")  <p class="pt-2 px-1 text-danger">{{$message }}</p>  @enderror
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" wire:model="form.password"  />
                    @error("form.password")  <p class="pt-2 px-1 text-danger">{{ 
                    str_replace('form.password', 'password', $message) }}</p>  @enderror
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Confirm Password" wire:model="form.password_confirmation" />
                    @error("form.password_confirmation")  <p class="pt-2 px-1 text-danger">{{ 
                    str_replace('form.password_confirmation', 'passwords', $message) }}</p>  @enderror
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-dark btn-block" value="Register" />
                </div>
            </form>
        </div>
    </div>
</div>