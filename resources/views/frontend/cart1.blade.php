@extends('frontend.master')
@section('content')


  
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active"></li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image"> imade</td>
							<td class="item">Item</td>
					
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						
							<td>Remove</td>
							<td>Checkout</td>
						</tr>
					</thead>
                    
					@foreach($product as $item)
					<div class="cart-table-row">
                         
					<tbody>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/one.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$item->name}}</a></h4>
								<p></p>
							</td>
							<td class="cart_price">
								<p>{{$item->price}}</p>
							</td>
						    <td class="cart_total">
								<p class="cart_total_price">{{$item->qty}}</p>
							</td>
							
						

						   
							<td>
						    </td>
						    <td>
						    	<a class="btn btn-default check_out" href="{{route('checkout.index')}}">Check Out</a>
						    </td>
						</tr>

						
					</tbody>
				</div>
					@endforeach
				</table>
			
			</div>
	
		</div>
	</section> <!--/#cart_items-->


@endsection