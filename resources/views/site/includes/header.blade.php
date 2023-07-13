<header id="masthead" class="site-header">
    <div class="container">
        <div class="main-header">
            <div class="site-branding">
                @if(Route::has('site.index'))
                <a href="{{ route('site.index')}}" class="custom-logo-link" rel="home" aria-current="page">
                    <img width="266" height="114" src="{{ asset($all_view['setting']->logo) }}" @if(isset($all_view['setting']->site_name)) title="{{ $all_view['setting']->site_name }}" @endif class="custom-logo" alt="Softech" />
                </a>
                @endif
            </div>
            <div class="site-search">
                <form role="search" method="get" class="search-form" action="#">
                    <label>
                        <span class="screen-reader-text">Search for:</span>
                        <input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" />
                    </label>
                    <input type="submit" class="search-submit" value="Search" />
                </form>
            </div>
            
            <div class="login-tag">
                <button class="button-70 login-tag" role="button">
                    <a style="text-decoration:none;color:#fff;" href="{{route('login')}}">
                        Login
                    </a>
                </button>
            </div>
        </div>
        <div class="site-search-mobile">
            <form role="search" method="get" class="search-form" action="#">
                <label>
                    <span class="screen-reader-text">Search for:</span>
                    <input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" />
                </label>
                <input type="submit" class="search-submit" value="Search" />
            </form>
        </div>

    </div>
    <div class="navbar">
        <div class="container">
            <nav id="site-navigation" class="main-navigation scroll">
                <div class="menu-menu-1-container">
                    <ul id="primary-menu" class="menu">
                        <li id="menu-item-623 " class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-623 ">
                            <a class="hover1" href="{{route('site.index')}}" aria-current="page">Home</a>
                        </li>
                        <li id="menu-item-623" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-623 ">
                            <a class="hover1" href="{{route('site.company')}}" aria-current="page">Company</a>
                        </li>
                        <li id="menu-item-623" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-623 ">
                            <a class="hover1" href="{{route('site.services')}}" aria-current="page">Services</a>
                        </li>
                        
                        <li id="menu-item-623" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-623 ">
                            <a class="hover1" href="{{ route('site.product')}}" aria-current="page">Products</a>
                        </li>
                        <li id="menu-item-623" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-623">
                            <a class="hover1" href="{{ route('site.client')}}" aria-current="page">Clients</a>
                        </li>
                        <li id="menu-item-623" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-623">
                            <a class="hover1" href="{{ route('site.blog')}}" aria-current="page">Blog</a>
                        </li>                   
                        <li id="menu-item-623 " class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-623 ">
                            <a class="hover1" href="{{route('site.album')}}" aria-current="page">Gallery</a>
                        </li>
                        <li id="menu-item-623" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-623 ">
                            <a class="hover1" href="{{route('site.internship')}}" aria-current="page">Internship</a>
                        </li>
                        <li id="menu-item-623" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-623">
                            <a class="hover1" href="{{route('site.career')}}">Career</a>
                        </li>
                        <li id="menu-item-623" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-623 ">
                            <a class="hover1" href="{{route('site.event')}}" aria-current="page">Event</a>
                        </li>
                        <li id="menu-item-623" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-623 ">
                            <a class="hover1" href="{{route('site.contact')}}" aria-current="page">Contact Us</a>
                        </li>
                        
                    </ul>
                </div>
            </nav>

            <!-- <div class="product">
						<div class="effect-1"></div>
						<div class="effect-2"></div>
						<div class="content">
							<a target="_blank" href="#"><img
								src="./images/social logo/fb.png"></a>
						</div>  linkedin
					</div> -->
            <!-- <div class="social-icons">
                <a target="_blank" href="{{ asset($all_view['setting']->social_profile_fb) }}"><img class="icon-logo" src="{{ asset('assets/site/images/social logo/fb.png')}}"></a>
                <a target="_blank" href="{{ asset($all_view['setting']->social_profile_twitter) }}"><img class="icon-logo" src="{{ asset('assets/site/images/social logo/twitter.png')}}"></a>
                <a target="_blank" href="{{ asset($all_view['setting']->social_profile_youtube) }}"><img class="icon-logo" src="{{ asset('assets/site/images/social logo/youtube.png')}}"></a>
                <a target="_blank" href="{{ asset($all_view['setting']->social_profile_linkedin) }}"><img class="icon-logo" src="{{ asset('assets/site/images/social logo/linkedin.png')}}"></a>
            </div> -->
        </div>
    </div>
</header>