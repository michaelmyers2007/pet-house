@extends('frontend/master')
@section('content')
    <section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>WELCome To</span> My Pet</h1>
									
								</div>
								<div class="col-sm-6">
									<img src="usertemplate/images/home/cover.jpg" class="girl img-responsive" alt="" />
									
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>WELCome To</span> My Pet</h1>
									
								</div>
								<div class="col-sm-6">
									<img src="usertemplate/images/home/pet shop.jpg" class="girl img-responsive" alt="" />
								
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>WELCome To</span> My Pet</h1>
							
								</div>
								<div class="col-sm-6">
									<img src="usertemplate/images/home/petshop.jpg" class="girl img-responsive" alt="" />
									
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	<section>
		<div class="container">
			<div class="row">
			
				
				<div class="col-sm-12 padding-right">
					
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						@foreach($type as $types)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="{{asset($types->photo)}}" alt="" />
											<h2>{{$types->item->codeno}}</h2>
											<p>{{$types->name}}</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>{{$types->item->price}}ks</h2>
												<p>{{$types->name}}</p>
												<p>{{$types->item->no_animal}}</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
								</div>
							
							</div>
						</div>
                        @endforeach
					   
						
					</div><!--features_items-->
		
			
					<div class="category-tab"><!--category-tab-->
						<h2 class="title text-center">Food</h2>
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tshirt" data-toggle="tab">Fish</a></li>
								<li><a href="#blazers" data-toggle="tab">Dog</a></li>
								<li><a href="#sunglass" data-toggle="tab">Cat</a></li>
								<li><a href="#kids" data-toggle="tab">Bird</a></li>
								<li><a href="#poloshirt" data-toggle="tab">Other</a></li>
							</ul>
						</div>
							@foreach($food as $foods)
							@if($foods->type->animal->name=='fish')
						<div class="tab-content">
							<div class="tab-pane fade active in" id="tshirt" >
							
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="{{asset($foods->photo)}}" alt="" />
												<h2>{{$foods->perprice}}ks</h2>
												<p>{{$foods->name}}</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								
							</div>
							  @endif
							@endforeach
								
							<div class="tab-pane fade" id="blazers" >
								@foreach($food as $foods)
							@if($foods->type->animal->name=='dog')
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="{{asset($foods->photo)}}" alt="" />
												<h2>{{$foods->perprice}}ks</h2>
												<p>{{$foods->name}}</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								@endif
							@endforeach
							</div>
							
							@foreach($food as $foods)
							@if($foods->type->animal->name=='cat')
							<div class="tab-pane fade" id="sunglass" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="{{asset($foods->photo)}}" alt="" />
												<h2>{{$foods->perprice}}ks</h2>
												<p>{{$foods->name}}</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								
							</div>
							@endif
							@endforeach


							@foreach($food as $foods)
							@if($foods->type->animal->name=='bird')
							<div class="tab-pane fade" id="kids" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="{{asset($foods->photo)}}" alt="" />
												<h2>{{$foods->perprice}}ks</h2>
												<p>{{$foods->name}}</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								
							</div>
							@endif
							@endforeach

							@foreach($food as $foods)
							<div class="tab-pane fade" id="poloshirt" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="{{asset($foods->photo)}}" alt="" />
												<h2>{{$foods->perprice}}ks</h2>
												<p>{{$foods->name}}</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								
							</div>
							@endforeach

						</div>
					</div><!--/category-tab-->
                     
				


					
				</div>
			</div>
			
		</div>

	</section>
	@endsection