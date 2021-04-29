<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
    <a class="navbar-brand ml-5" href="/">Laravel Livewire SPA Login System</a>
    <ul class="navbar-nav ml-auto mr-5">
        @guest
            <li class="nav-item">
                <a href="/login" class="nav-link rounded-0 btn {{request()->is('login')?'btn-light text-dark':''}}">Login</a>
            </li>
            <li class="nav-item">
                <a href="/register" class="nav-link  rounded-0 btn {{request()->is('register')?'btn-light text-dark':''}}">Register</a>
            </li>
        @else
            
            <li class="nav-item ml-5 ">
                <p class="text-white font-weight-bold mt-2">Welcome, <span class="text-warning">{{auth()->user()->name}}</span> </p>
            </li>   
            <li class="nav-item ml-5">
                <livewire:logout />
            </li>   
        @endguest
    </ul>
</nav>
