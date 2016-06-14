

<nav>
	<ul>
		<li id="left"> <a href="/ "> Tom Walker </a></li> <!-- Maybe just logo? -->

		<!-- <li> <a href=" "> Login/Register</a></li> -->
		@if (Auth::guest())
            <li><a href="{{ url('/login') }}">Login/Register</a></li>
        @else
            <li>
                    <li><a href="{{ url('/logout') }}"><i></i>Logout</a></li>
            </li>
        @endif
                    
		<li> <a href=" "> Contact </a></li>
		<li> <a href="/aboutMe"> About </a></li>
	</ul>
</nav>