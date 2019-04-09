<header class="header header-transparent" id="header-main">
    <nav class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light bg-light" id="navbar-main">
        <div class="container px-lg-0">
            <span class="navbar-brand mr-lg-5">
                {{ env('APP_NAME') }}
            </span>
            <button class="navbar-toggler pr-0" type="button" data-toggle="collapse"
                    data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-main-collapse">
                <ul class="navbar-nav align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('welcome') }}">
                            <i class="fas fa-angle-left mr-1"></i> 返回首页
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                    @if(Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">
                                <i class="fas fa-user-plus mr-1"></i> 注册
                            </a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            <i class="fas fa-sign-in-alt mr-1"></i> 登陆
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>