@extends('frontend.master')
@section('content')
   <section id="cart_items">
   <div class="container">
     <div class="shopper-informations">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="shopper-info">
                            <p>Shopper Information</p>
                            <form>
                                <input type="text" placeholder="Email">
                                <input type="text" placeholder="Full Name">
                                
                            </form>
                                            </div>
                    </div>
                    <div class="col-sm-5 clearfix">
                        <div class="bill-to">
                            <p>Bill To</p>
                            <div class="form-one">
                                <form>
                                    <input type="text" placeholder="Address 1 *">
                                    <input type="text" placeholder="Delievery place">
                                    <input type="text" name="" placeholder="Phone">
                                </form>
                            </div>
                            <div class="form-two">
                                <form>
                                    <input type="text" placeholder="Zip / Postal Code *">
                                    <select>
                                        <option>-- Country --</option>
                                        <option>United States</option>
                                        <option>Bangladesh</option>
                                        <option>UK</option>
                                        <option>India</option>
                                        <option>Pakistan</option>
                                        <option>Ucrane</option>
                                        <option>Canada</option>
                                        <option>Dubai</option>
                                    </select>
                                    <select>
                                        <option>-- State / Province / Region --</option>
                                        <option>United States</option>
                                        <option>Bangladesh</option>
                                        <option>UK</option>
                                        <option>India</option>
                                        <option>Pakistan</option>
                                        <option>Ucrane</option>
                                        <option>Canada</option>
                                        <option>Dubai</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                        <div class="col-sm-4 clearfix">
                            <div class="order-message">
                            <p>Shipping Order</p>
                             
                        
                        <form style="background-color:#F0F0E9">
                        @foreach(Cart::content() as $item)
                       <p><b>Item:</b>     {{$item->name}}</p>
                       <p><b>Price:</b>    {{$item->price}}</p>
                       <p><b>Quantity:</b> {{$item->qty}}</p>
                       <p><b>Subtotal:</b>{{$item->subtotal}}</p>
                       <p><b>Tax:</b>      {{$item->tax}}</p>
                       <p><b>Total:</b>     {{$item->total}}</p>
                        
                        <a class="btn btn-primary" href="">Continue</a>
                        @endforeach
           </form>
        </div>
            </div>
                </div>
            </div>

   </div>
    
 
</section>

@endsection

