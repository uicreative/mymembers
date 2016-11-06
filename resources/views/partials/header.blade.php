<div class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a href="{{ url('welcome') }}" class="navbar-brand">MyMembers</a>
        </div>

        <ul class="nav navbar-nav navbar-right">

            @if ( ! (Auth::user() and Auth::user()->subscribed('main')))
            <li><a href="{{ url('subscribe') }}">Start Membership</a></li>
            @endif

            @if (Auth::user())
                <li><a href="{{ url('account') }}">{{ Auth::user()->name }}</a></li>
                <li><a href="{{ url('logout') }}">Logout</a></li>
            @else
                <li><a href="{{ url('login') }}">Login</a></li>
                <li><a href="{{ url('register') }}">Register</a></li>
            @endif
        </ul>
    </div>
</div>