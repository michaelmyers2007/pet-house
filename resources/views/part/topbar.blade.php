 <div id="content">


 <nav class="navbar navbar-default mb-xl-5 mb-4">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    <!-- Search-from -->
                    <form action="/search" method="post" class="form-inline mx-auto search-form">
                            <input type="hidden" name="_method" value="GET">
                        {{ csrf_field() }}
                        <input class="form-control mr-sm-2" type="search" name="q"  placeholder="Search type" aria-label="Search" required="">
                        <button class="btn btn-style my-2 my-sm-0" type="submit">Search</button>
                    </form>
                   
                    <!--// Search-from -->
                    <ul class="top-icons-agileits-w3layouts float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-bell"></i>
                                
                            </a>
                            <div class="dropdown-menu top-grid-scroll drop-1">
                                <h3 class="sub-title-w3-agileits">Accessories</h3>
                                <a href="{{ route('accessory.create') }}" class="dropdown-item mt-3">
                                    <div class="notif-img-agileinfo">
                                      <h5>Dog Accessories</h5>
                                    </div>
                                </a>
                                <a href="{{('/cat_acc')}}" class="dropdown-item mt-3">
                                    <div class="notif-img-agileinfo">
                                        <h5>Cat Accessories</h5>
                                    </div>
                                   
                                </a>
                                <a href="{{'/reptitle'}}" class="dropdown-item mt-3">
                                    <div class="notif-img-agileinfo">
                                        <h5>Reptitle Accessories</h5>
                                    </div>
                                    
                                </a>
                                <a href="{{('/bird_acc')}}" class="dropdown-item mt-3">
                                    <div class="notif-img-agileinfo">
                                        <h5>Bird Accessories</h5>
                                    </div>
                                                                        
                                </a>

                                 <a href="{{('/fish_acc')}}" class="dropdown-item mt-3">
                                    <div class="notif-img-agileinfo">
                                        <h5>Fish Accessories</h5>
                                    </div>
                                                                        
                                </a>

                              
                            </div>
                        </li>
                        <li class="nav-item dropdown mx-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fas fa-spinner"></i>
                            </a>
                            <div class="dropdown-menu top-grid-scroll drop-2">
                                <h3 class="sub-title-w3-agileits">Food</h3>
                                <a href="{{ route('food.create') }}" class="dropdown-item mt-3">
                                    <h4>Dog food</h4>
                                </a>
                                <a href="{{('/catfood')}}" class="dropdown-item mt-3">
                                    <h4>Cat food</h4>
                                </a>
                                <a href="{{('/reptitlefood')}}" class="dropdown-item mt-3">
                                    <h4>Reptitle food</h4>
                                </a>
                                <a href="{{('/birdfood')}}" class="dropdown-item mt-3">
                                    <h4>Bird food</h4>
                                </a>
                                 <a href="{{('/fishfood')}}" class="dropdown-item mt-3">
                                    <h4>Fish food</h4>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-user"></i>
                            </a>
                            @if(Auth::check())
                            <div class="dropdown-menu drop-3">
                                <div class="profile d-flex mr-o">
                                    <div class="profile-l align-self-center">
                                        <img src="{{Auth::user()->photo}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="profile-r align-self-center">
                                        <h3 class="sub-title-w3-agileits">{{Auth::user()->name}}</h3>
                                        <a href="mailto:info@example.com">{{Auth::user()->email}}</a>
                                    </div>
                                </div>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="far fa-user mr-3"></i>My Profile</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fas fa-link mr-3"></i>Activity</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="far fa-envelope mr-3"></i>Messages</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="far fa-question-circle mr-3"></i>Faq</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="far fa-thumbs-up mr-3"></i>Support</h4>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                    </form>
                            </div>
                            @endif
                        </li>
                    </ul>
                    
                </div>
            </nav>
