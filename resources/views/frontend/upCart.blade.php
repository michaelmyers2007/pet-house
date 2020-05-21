
{{$cartItems}}
  

			@if(session('status'))
}
}
        <div class="alert alert-success">

            {{session('status')}}
        </div>
        @endif
			<div class="table-responsive cart_info">
				
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image"> image</td>
							<td class="item">Item</td>
					        <td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
				            <td>Remove</td>
							
						</tr>
					</thead>
                    <?php $count=1;?>


					@foreach($cartItems as $item)
					<div class="cart-table-row">
                         
					<tbody>
						<tr>
							<td class="cart_description">
						    <img class="img-rounded" alt="Cinque Terre" width="300" height="200"src="{{ $item->options->photo}}">  

							</td>
							<td class="cart_description">
								<h4><a href="">{{$item->name}}</a></h4>
								<p></p>
							</td>

							<td class="cart_price">
								<p>{{$item->price}}</p>
							</td>
							
						    <td class="cart_quantity">
						      <div class="cart_quantity_button">
						      	<input type="hidden" id="rowId<?php echo $count;?>" value="{{$item->rowId}}"/>
                                    <input type="hidden" id="proId<?php echo $count;?>" value="{{$item->id}}"/>

								<input type="number" size="2" name="qty" value="{{$item->qty}}" id="upCart<?php echo $count;?>" autocomplete="off" style="text-align: center;max-width: 50px;" min="1" max="30">
							  </div>

							</td>
							
							<td class="cart_total">
								<p class="cart_total_price">{{$item->subtotal}}</p>
							</td>

						   
							<td>
							<form action="{{route('cart.destroy',$item->rowId)}}" method="post" class="d-inline-block">
                               
                                    @csrf
                                    {{method_field('DELETE')}}
                                <button type="submit" class="cart_quantity_delete" href=""><i class="fa fa-times"></i></button>
                            </form>
						    </td>
						    
						</tr>

			<?php $count++;?>
					</tbody>
				</div>
					@endforeach
				</table>
			
			</div>
	 <!--/#cart_items-->

	<section id="cart_items">
		<div class="container">

</div>
</section>

 
@endsection
@section('script')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- JavaScript and JQuery -->
  <script>
    $(document).ready(function(e){
    	<?php for($i=1;$i<20;$i++){ ?>
      $("#upCart<?php echo $i;?>").on('change keyup',function(){
        var newqty=$('#upCart<?php echo $i;?>').val();
        var rowId=$('#rowId<?php echo $i;?>').val();
        var proId=$('#proId<?php echo $i;?>').val();
        if (newqty <=0) {
        	alert('fucking qty');
        }else{
        $.ajax({
        type: 'get',
        dataType: 'html',
        url: '<?php echo url('/cart/update');?>/'+proId,
        data: "qty=" + newqty + "& rowId=" + rowId + "& proId=" + proId,
        success: function (response) {
            console.log(response);
            $('#updateDiv').html(response);
        }
    });
        };
        });
  <?php } ?>
    });
  </script>