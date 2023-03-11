<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap5.min.css">
    <title>Form</title>
    <nav id="navbar" class="d-flex">
        <div class="menu-toggle">
            <div class="hamburger">
                <span></span>
            </div>
        </div>
        <div id="img">
            <img class="img-fluid m-3" src="../../img/ico.png" alt="" style="width: 50px; height: 40px;">
        </div>
        <div id="w" style="margin: auto">
            <h5 id="w" class="fw-bold">WELCOME TO</h5>
            <span class="fw-bold">(TheFuture Ltd4)</span>
        </div>
        <div id="w">
            <ul class="d-flex" style="list-style:none">
                @guest
                    @if (Route::has('login'))
                        <li class="">
                            <a class="btn btn-primary m-1" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                    @if (Route::has('register'))
                        <li class="">
                            <a class="btn btn-primary m-1" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li>
                        <div class="m-1">
                            <a class="btn btn-danger" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
</head>

<body>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <div class="app">
        <aside class="sidebar">
            <nav class="menu">
                <a href="/home" class="menu-item d-flex">
                    <span class="material-symbols-outlined">home</span>
                    <p class="item">Home</p>
                </a>
                @can('form-create')
                <a href="/form/create" class="menu-item d-flex">
                    <span class="material-symbols-outlined">post_add</span>
                    <p class="item">Form</p>
                </a>
                @endcan
                @can('form-list')
                <a href="/form/show" class="menu-item d-flex">
                    <span class="material-symbols-outlined">description</span>
                    <p class="item">Description</p>
                </a>
                @endcan
                @can('role-list')
                <a href="/roles" class="menu-item d-flex">
                    <span class="material-symbols-outlined">groups_2</span>
                    <p class="item">Roles</p>
                </a>
                @endcan
                @can('user-list')
                <a href="/users" class="menu-item d-flex">
                    <span class="material-symbols-outlined">supervisor_account</span>
                    <p class="item">Users</p>
                </a>
                @endcan
            </nav>
        </aside>
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap5.min.js"></script>
    <script>
        $('#clients').DataTable({
            responsive: true,
            autoWidth: false
        });
    </script>
</body>

</html>
