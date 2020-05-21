   <div class="se-pre-con"></div>
    <div class="wrapper">
   <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h1>
                    <a href="index.html">Modernize</a>
                </h1>
            
            </div>
            <div class="profile-bg"><img src=""></div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="index.html">
                        <i class="fas fa-th-large"></i>
                        Dashboard
                    </a>
                </li>
                @if(Auth::check())
                <li>
                    <a href="{{'/animal'}}">
                        <i class="fas fa-paw"></i>
                        Animal
                    </a>
                </li>
                <li>
                    <a href="{{'/type'}}">
                        <i class="fas fa-th"></i>
                        Type
                    </a>
                </li>
                <li>
                    <a href="{{'/item'}}">
                        <i class="far fa-file"></i>
                        Item
                    </a>
                </li>
                <li>
                    <a href="{{'/behavior'}}">
                        <i class="far fa-file"></i>
                        Behavior
                    </a>
                </li>
                <li>
                    <a href="{{'/accessory'}}">
                        <i class="far fa-file"></i>
                        Accessory
                    </a>
                </li>
                <li>
                    <a href="{{'/food'}}">
                        <i class="far fa-file"></i>
                        Food
                    </a>
                </li>
                @endif
                <li>
                    <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false">
                        <i class="far fa-file"></i>
                        Pages
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu1">
                        <li>
                            <a href="{{'/type'}}">Type</a>
                        </li>
                        <li>
                            <a href="500.html">500</a>
                        </li>
                        <li>
                            <a href="blank.html">Blank</a>
                        </li>
                    </ul>
                </li>
                
              
                <li>
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        User
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu3">
                        @guest
                        <li>
                             
                            <a href="{{route('login')}}">Login</a>
                               
                        </li>
                        <li>
                            <a href="{{route('register')}}">Register</a>
                        </li>
                        <li>
                            <a href="forgot.html">Forgot password</a>
                        </li>
                        @endguest
                    </ul>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="far fa-map"></i>
                        Maps
                    </a>
                </li>
            </ul>
        </nav>
        

  



         
        

            


    

