<header>
	<nav class="navbar navbar-expand-sm navbar-light">
		<div class="container-fluid">
			<div class="nav-items-left">
				<a href="{{ url('/') }}">
					<i class="fa fa-map-marker">
						<p class="logo-text">triptip</p>
					</i>
				</a>
				<div class="dropdown">
				  <button class="dropbtn pages-text">Home<i class="fa fa-caret-down hover-border caret-drop"></i></button>
				  <div class="dropdown-content">
				    <a href="#place">Places</a>
				    <a href="#people">People</a>
				    <a href="#experiences">Experiences</a>
				    <a href="#events">Events</a>
				  </div>
				</div> 
				<div class="dropdown">
				  <button class="dropbtn pages-text">Pages<i class="fa fa-caret-down hover-border caret-drop"></i></button>
				  <div class="dropdown-content">
				    <a href="{{ route('eventF') }}">Events</a>
				    <a href="{{ route('placeF') }}">Places</a>
				    <a href="{{ route('experienceF') }}">Experiences</a>
				  </div>
				</div> 
				<a href="{{ route('contactF') }}">
					<i class="fa hover-border">
						<p class="contacts-text">Contacts</p>
					</i>
				</a>

			</div>
			<div class="nav-items-right">
				<!-- Authentication Links -->
                @guest
                    <a href="{{ route('login') }}">
						<i class="fa fa-sign-in header-top hover-border">
							<p class="logo-text">Sign in</p>
						</i>
					</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">
							<i class="fa fa-user header-top hover-border">
								<p class="logo-text">Register</p>
							</i>
						</a>
                    @endif
                @else
                	
					<i class="fa fa-sign-in header-top hover-border">
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Sign out') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    </i>
                @endguest
				<div class="bordered">
	    			<i class="fa fa-plus header-top">
	    				<p class="logo-text">Add Listing</p>
	    			</i>
				</div>
			</div>
		</div>
	</nav>
</header>