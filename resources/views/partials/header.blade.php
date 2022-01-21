<header class="container">

    <div class="header__left">
        <a href="#"><img src="{{ asset('img/dc-logo.png') }}" alt="Logo Dc"></a>
    </div>

    <div class="header__right">

        <ul>
            @foreach (config('databaseMenu') as $link)
                <li>
                    <a class="{{ Route::currentRouteName() === $link['url'] ? 'active' : '' }}"
                        href="{{ $link['url'] }}">{{ $link['name'] }}</a>
                </li>
            @endforeach
        </ul>


    </div>

</header>
