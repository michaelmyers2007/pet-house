@extends('frontend.master')
@section('content')
<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{$type->photo}}" alt="" />
								<h3>ZOOM</h3>
							</div>
						

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="" class="newarrival" alt="" />
								<h2>{{$type->name}}</h2>
								<p>Code no: {{$type->item->codeno}}</p>
								<form action="{{route('cart.store')}}" method="POST">
								    	{{csrf_field()}}
								  <span>
									<span>{{$type->item->price}} Ks</span>
									
								
								    
								    	<label>Quantity:</label>
                                        <input type="text" placeholder="0"  name="qty"/>
								    	<input type="hidden" name="id" value="{{$type->id}}">
								    	<input type="hidden" name="name" value="{{$type->name}}">
								    	<input type="hidden" name="price" value="{{$type->item->price}}">
								    	<input type="hidden" name="image" value="{{$type->photo}}">
								    	
								
								    	<button type="submit" class="btn btn-fefault cart"><i class="fa fa-shopping-cart"></i>
										Add to cart</button>
								  </span>
								</form>	
								
								
								<p><b>Availability:</b> In Stock</p>
								<p><b>Behavior: </b>{{$type->behavior->description}}</p>
								<p><b>Brand:</b> E-SHOPPER</p>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					
					
					
					
				</div>
@endsection