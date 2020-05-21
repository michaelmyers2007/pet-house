<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\accessory;
use App\type;
use App\product;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
      /*  $product=Product::all();*/

        return view('frontend/cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
          // dd($accessory->photo);
        Cart::add([
          'id'=>$request->id,
          'name'=>$request->name,
          'qty'=>$request->qty,
          'price'=>$request->price,
           'options' => [
            'type' => $request->type,
          
            'photo'=>$request->image,
            ]

        ]);
      
     
   // Cart::insert($product);
   // $items = Cart::contents();
        return redirect()->route('cart.index')->with('success_message','Add in cart');
   // return View::make('cart.bag', compact('items'));

     // dd($request->type);
       // $result=$request->qty * $request->price;
            /*Cart::add($request->id,$request->name,$request->qty,$request->price);
       dd(Cart->name);*/
     // dd($request);
    /*   $pen=Type::find($request->id);
       $book =Accessory::find($request->id);
      $qty=$request->quantity;
      
     //  dd($book);
       if ($book) {
    
       
          Cart::add($book,$qty);*/




          /*[
   
    'id'       => $book->id,
    'name'     => $request->name,
    'qty' =>$qty,
    'price'    => $request->price,
    'type'=>$request->type,*/
/*]);*/

     
/* }
else{

      Cart::add( $pen,$qty);[
   
    'id'       => $request->id,
    'name'     => $request->name,
    'qty' =>$qty ,
    'price'    => $request->price,
    'type'=>$request->type,
]);*/

    /* $cartItem=Cart::content();
     dd($cartItem);*/

/*}
$cartItem=Cart::content();
     dd($cartItem);
        return redirect()->route('cart.index')->with('success_message','Add in cart');
    }
     public function accessory($request,$id)
     {  
        dd($id);
         $products = MarketProduct::find($id);

    $cartItem = Cart::content();*/
/*
         Cart::add($request->id,$request->name,$request->qty,$request->price);
    
          
        return redirect()->route('cart.index')->with('success_message','Add in cart');*/
     }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function test()
    {
        return view('frontend/test');
    }
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $qty=$request->qty;
        $id=$request->proId;
        $rowId=$request->rowId;
        Cart::update($rowId,$qty);
        return back();
        /*echo Cart::content();*/
            /*$cartItems = Cart::content(); // display all new data of cart
            return view('cart.upCart', compact('cartItems'))->with('status', 'cart updated');*/

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return back()->with('success_message','Item has been delete');
    }
    public function ff()
    {
        $input=Input::all();
        dd($input);
    }
}
