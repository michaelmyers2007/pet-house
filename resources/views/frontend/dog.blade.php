		@extends('frontend.master')
@section('content')

	<section>
		<div class="container">
			<div class="row">
        
		<div class="col-sm-12 padding-right">
			        @if(!$type->isNotEmpty())
			        	<section id="advertisement">
		                 <div class="container">
			                  <h1>There is no Data!</h1>
		                 </div>
	                    </section>
					
					@else
                     
					
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						@foreach($type as $types)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									
										<div class="productinfo text-center">
											<img src="{{asset($types->photo)}}" alt="" />
											<h2>{{$types->code_no}}</h2>
											<p>{{$types->name}}</p>
											<a href="/cart" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
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
					
                  
				
					   @endif
						</div>
			</div>
			
		</div>

	</section>
@endsection