		@extends('frontend/master')
@section('content')

	<section>
		<div class="container">
			<div class="row">
        
		<div class="col-sm-12 padding-right">
			        @if(!$cat->isNotEmpty())
			        	<section id="advertisement">
		                 <div class="container">
			                  <h1>There is no Data!</h1>
		                 </div>
	                    </section>
					
					@else
                     
					
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						@foreach($cat as $detail)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									
										<div class="productinfo text-center">
											<img src="{{asset($detail->photo)}}" alt="" />
											<h2></h2>
											<p>{{$detail->name}}</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
									
									    <a href="{{route('food_detail',$detail->id)}}">
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>{{$detail->perprice}}ks</h2>
												<p>{{$detail->name}}</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
									</a>
								</div>
							
							</div>
						</div>

						@endforeach
						
					</div><!--features_items-->
					
                  
				
					   @endif
						</div>
			</div>
			
		</div>

	</section>
@endsection