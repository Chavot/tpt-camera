{{--<div class="col-2">
    <ul class="nav justify">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('products.index')}}">products</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('users.index')}}">users</a>
        </li>
    </ul>
</div>--}}

<div class="d-flex flex-column flex-shrink-0 p-4 bg-light" id="sidenav" style="">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">

        <span class="fs-4">Sidebar</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="/"
               class="nav-link {{request()->route()->getName() === '/' ? 'active' : ''}}">
                <span class="mdi mdi-home">Home</span>
            </a>
        </li>
        <li>
            <a href="{{route('products.index')}}"
               class="nav-link {{request()->route()->getName() === 'products.index' ? 'active' : ''}}">
                <span class="mdi mdi-view-list">Products</span>
            </a>
        </li>
        <li>
            <a href="{{route('users.index')}}"
               class="nav-link {{request()->route()->getName() === 'users.index' ? 'active' : ''}}">
                <span class="mdi mdi-account-group">Users</span>
            </a>
        </li>
        <li>

        </li>

    </ul>

  <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>mdo</strong>
        </a>
        <ul class="dropdown-menu text-small shadow">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
    </div>
</div>
