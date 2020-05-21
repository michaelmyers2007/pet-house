		@extends('frontend/master')
@section('content')
        @if(isset($query))
	<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						@foreach($query as $types)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									
										<div class="productinfo text-center">
											<img src="{{asset($types->photo)}}" alt="" />
											<h2>{{$types->codeno}}</h2>
											<p>{{$types->name}}</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
									
									    <a href="{{route('detail',$types->id)}}">
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>{{$types->item->price}}ks</h2>
												<p>{{$types->name}}</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
									</a>
								</div>
							
							</div>
						</div>

						@endforeach
						
					</div><!--features_items-->
     @elseif(isset($accessory))
     <div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						@foreach($accessory as $types)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									
										<div class="productinfo text-center">
											<img src="{{asset($types->photo)}}" alt="" />
											<h2>{{$types->codeno}}</h2>
											<p>{{$types->name}}</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
									
									    <a href="{{route('detail',$types->id)}}">
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>{{$types->price}}ks</h2>
												<p>{{$types->name}}</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
									</a>
								</div>
							
							</div>
						</div>

						@endforeach
						
					</div><!--features_items-->

	  @elseif(isset($food))

     <div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						@foreach($food as $types)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									
										<div class="productinfo text-center">
											<img src="{{asset($types->photo)}}" alt="" />
											<h2>{{$types->codeno}}</h2>
											<p>{{$types->name}}</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
									
									    <a href="{{route('food_detail',$types->id)}}">
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>{{$types->perprice}}ks</h2>
												<p>{{$types->name}}</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
									</a>
								</div>
							
							</div>
						</div>

						@endforeach
						
					</div><!--features_items-->
	 @else
      <h1>No Details found. Try to search again !</h1>
	@endif
@endsection