<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +959771340088</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> yehtet.me</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/login"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							
						</div>
						
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-user"></i> Account</a></li>
								<li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="{{'/cart'}}"><i class="fa fa-shopping-cart"></i> Cart</a><span class="cart-count">
								   @if(Cart::instance('default')->count()>0)
                                     <span>{{Cart::instance('default')->count()}}</span></span>
                                   @endif
								</li>

								<li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					
							<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{'/'}}" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Animal<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{'/dog'}}">Dog</a></li>
										<li><a href="{{'/cat'}}">Cat</a></li> 
										<li><a href="{{'/bird'}}">Bird</a></li> 
										<li><a href="{{'/creeper'}}">Creeper</a></li> 
										<li><a href="{{'/fish'}}">Fish</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Accessories<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{'/dog_acc'}}">Dog accessories</a></li>
										<li><a href="{{'/cat_acc'}}">Cat accessories</a></li>
										<li><a href="{{'/bird_acc'}}">Bird accessories</a></li>
										<li><a href="{{'/creeper_acc'}}">Creeper accessories</a></li>
										<li><a href="{{'/fish_acc'}}">Fish accessories</a></li>
                                    </ul>
                                </li> 
									<li class="dropdown"><a href="#">Food<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{'/dog_food'}}">Dog food</a></li>
										<li><a href="{{'/cat_food'}}">Cat food</a></li>
										<li><a href="{{'/bird_food'}}">Bird food</a></li>
										<li><a href="{{'/creeper_food'}}">Creeper food</a></li>
										<li><a href="{{'/fish_food'}}">Fish food</a></li>
                                    </ul>
                                </li> 
							</ul>
						</div>
					
					<div class="col-sm-6">
						<div class="search_box pull-right">
							<form action="/find" method="post" class="form-inline mx-auto search-form">
                            <input type="hidden" name="_method" value="GET">
							<input type="text" name="w" placeholder="Search"/>
							<button class="btn btn-style my-2 my-sm-0" type="submit">Search</button>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	
	


	

  
   
