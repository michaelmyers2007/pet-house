<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\type;
use App\accessory;
use Illuminate\Support\Facades\DB;

class AccessoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $type=Type::all();
         
        return view('backend/accessory',compact('type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $a=Accessory::all();
       return view('backend/dog_accessory',compact('a'));


    }

    public function cat()
    {
        $a=Accessory::all();
        return view('backend/cat_accessory',compact('a'));
    }

    public function reptitle()
    {
        $a=Accessory::all();
        return view('backend/reptitle_accessory',compact('a'));
    }
    public function bird()
    {
        $a=Accessory::all();
        return view('backend/bird_accessory',compact('a'));
    }

    public function fish()
    {
        $a=Accessory::all();
        return view('backend/fish_accessory',compact('a'));
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
        
        // if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $name = $photo->getClientOriginalName();
            $photo->move(public_path().'/storage/Accessoryimage/',$name);
            $photo = '/storage/Accessoryimage/'.$name;
            Accessory::create([
          'type_id'=>request('category_id'),
          'name'=>request('name'),
          'price'=>request('price'),
          'no_accessories'=>request('qty'),
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
        $accessory=Accessory::find($id);
        return view('backend/detail_accessory',compact('accessory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $accessory=Accessory::find($id);
        $type=Type::all();
        return view('backend/update_accessory',compact('accessory','type'));
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
            $photo->move(public_path().'/storage/Accessoryimage/',$name);
            $photo='/storage/Accessoryimage/'.$name;
           }else{
            $photo=request('oldimage');
           }
           //Update
       $accessory=Accessory::find($id);
       $accessory->type_id=request('category_id');
       $accessory->name=request('name');
       $accessory->photo=$photo;
       $accessory->price=request('price');
       $accessory->no_accessories=request('code');
       $accessory->save();
       

       
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
          $accessory=Accessory::find($id);
         
        
        
        $accessory->delete();
        return redirect('/back');
    }

    public function fa()
    {
        $fish=DB::table('accessories')
    
    ->join('types','accessories.type_id','=','types.id')
    ->join('animals','types.animal_id','=','animals.id')
    ->select('types.*','accessories.*')
    ->where('animals.name','=','fish')
    ->get();
    return view('frontend/fish_accessory',compact('fish'));   
    }
    public function da()
    {
       $dog=DB::table('accessories')
    
    ->join('types','accessories.type_id','=','types.id')
    ->join('animals','types.animal_id','=','animals.id')
    ->select('types.*','accessories.*')
    ->where('animals.name','=','dog')
    ->get();
    return view('frontend/dog_accessory',compact('dog'));       
 }
 public function ca()
 {
      $cat=DB::table('accessories')
    
    ->join('types','accessories.type_id','=','types.id')
    ->join('animals','types.animal_id','=','animals.id')
    ->select('types.*','accessories.*')
    ->where('animals.name','=','cat')
    ->get();
    return view('frontend/cat_accessory',compact('cat'));   
 }
 public function ba()
 {
      $bird=DB::table('accessories')
    
    ->join('types','accessories.type_id','=','types.id')
    ->join('animals','types.animal_id','=','animals.id')
    ->select('types.*','accessories.*')
    ->where('animals.name','=','bird')
    ->get();
    return view('frontend/bird_accessory',compact('bird'));   
 }
 public function creepera()
 {
      $creeper=DB::table('accessories')
    
    ->join('types','accessories.type_id','=','types.id')
    ->join('animals','types.animal_id','=','animals.id')
    ->select('types.*','accessories.*')
    ->where('animals.name','=','creeper')
    ->get();
    return view('frontend/creeper_accessory',compact('creeper'));   
 }
 public function detail($id)
 {
      $detail=Accessory::find($id);
      $type=Type::find($id);
    // dd($detail->photo);
        return view('frontend/accessory_detail',compact('detail','type'));
 }
}
