<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\type;
use App\food;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $type=Type::all();
        return view('backend/food',compact('type'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $f=Food::all();
       return view('backend/dog_food',compact('f'));
    }

    public function cat()
    {
        
       $f=Food::all();
       return view('backend/cat_food',compact('f'));
    }

    public function reptitle()
    {
        
       $f=Food::all();
       return view('backend/reptitle_food',compact('f'));
    }
    public function bird()
    {

       $f=Food::all();
       return view('backend/bird_food',compact('f'));
    }
    public function fish()
    {
        $f=Food::all();
        return view('backend/fish_food',compact('f'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'photo' => 'required|',
                       
        ]);
        //
        //Upload files
        // if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $name = $photo->getClientOriginalName();
            $photo->move(public_path().'/storage/Foodimage/',$name);
            $photo = '/storage/Foodimage/'.$name;
        Food::create([
            'type_id'=>request('category_id'),
            'name'=>request('name'),
            'price'=>request('price'),
            'qty'=>request('qty'),
            'photo'=>$photo,
        ]);
       return redirect('/back');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $food=Food::find($id);
        return view('backend/detail_food',compact('food'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $food=Food::find($id);
        $type=Type::all();
        return view('backend/update_food',compact('food','type'));
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
        if($request->hasfile('photo')){
            $photo=$request->file('photo');
            $name=$photo->getClientOriginalName();
            $photo->move(public_path().'/storage/Foodimage/',$name);
            $photo='/storage/Foodimage/'.$name;
           }else{
            $photo=request('oldimage');
           }
           //Update
       $food=Food::find($id);
       $food->type_id=request('category_id');
       $food->name=request('name');
       $food->photo=$photo;
       $food->perprice=request('price');
       $food->qty=request('code');
       $food->save();
       

       
       return redirect('/back');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $food=Food::find($id);
         
        
        
        $food->delete();
        return redirect('/back');
    }
    public function ff()
    {
        $fish=DB::table('foods')
    
    ->join('types','foods.type_id','=','types.id')
    ->join('animals','types.animal_id','=','animals.id')
    ->select('types.*','foods.*')
    ->where('animals.name','=','fish')
    ->get();
    return view('frontend/fish_food',compact('fish'));   
    }
    public function cf()
    {
        $cat=DB::table('foods')
         ->join('types','foods.type_id','=','types.id')
    ->join('animals','types.animal_id','=','animals.id')
    ->select('types.*','foods.*')
    ->where('animals.name','=','cat')
    ->get();

        return view('frontend/cat_food',compact('cat'));
    }
    public function bf()
    {
       $bird=DB::table('foods')
         ->join('types','foods.type_id','=','types.id')
    ->join('animals','types.animal_id','=','animals.id')
    ->select('types.*','foods.*')
    ->where('animals.name','=','bird')
    ->get();
       return view('frontend/bird_food',compact('bird'));
    }
    public function df()
    {
        $dog=DB::table('foods')
    ->join('types','foods.type_id','=','types.id')
    ->join('animals','types.animal_id','=','animals.id')
    ->select('types.*','foods.*')
    ->where('animals.name','=','dog')
    ->get();
        return view('frontend/dog_food',compact('dog'));
    }
    public function creef()
    {
        $creeper=DB::table('foods')
         ->join('types','foods.type_id','=','types.id')
    ->join('animals','types.animal_id','=','animals.id')
    ->select('types.*','foods.*')
    ->where('animals.name','=','creeper')
    ->get();
        return view('frontend/creeper_food',compact('creeper'));
    }

    public function detail($id)
    {
        $detail=Food::find($id);
        $type=Type::find($id);
        return view('frontend/food_detail',compact('detail','type'));
    }
}
