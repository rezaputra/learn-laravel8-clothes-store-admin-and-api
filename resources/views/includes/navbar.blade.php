<!-- Right Panel -->
<div id="right-panel" class="right-panel">
    <!-- Header-->
    <header id="header" class="header">
        <div class="top-left">
            <div class="navbar-header">
                <a class="navbar-brand" href="./"><img src="{{ asset('images/logo.png') }}" alt="Logo"></a>
                <a class="navbar-brand hidden" href="/"><img src="{{ asset('images/logo2.png') }}" alt="Logo"></a>
                <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
            </div>
        </div>
        <div class="float-end">
            <div class="dropdown">
                <button class="btn dropdown" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="user-avatar rounded-circle w-50" src="{{ asset('images/admin.jpg') }}" alt="User Avatar">
                </button>
                <ul class="dropdown-menu mt-5" aria-labelledby="dropdownMenuButton1">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn" type="submit">Logout</button>
                    </form>
                </ul>
              </div>
        </div>
    </header>
    <!-- /#header -->
