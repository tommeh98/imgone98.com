<nav>
	<ul>
		<li id="left"> <a href="/ "> Tom Walker </a></li> 

		@if(Auth::check())
			 <li> <a href=""> Hi </a> </li> 
		@endif

		<li> <a href="/archive/date/oldest_newest/">Archive</a></li>
                	    
		<li> <a href="/contactMe"> Contact </a></li>
		<li> <a href="/aboutMe"> About </a></li>
	</ul>
</nav>